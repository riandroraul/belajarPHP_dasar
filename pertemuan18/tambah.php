<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['submit'])) {
    if (tambah($_POST) > 0) {
        echo "
            <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'index.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Smarthpone</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap-5.0.2/css/bootstrap.css">
    <style>
        label {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <h1>Tambah Data Smarthpone</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="Type">Type : </label>
                <input type="text" name="Type" id="Type" required>
            </li>
            <li>
                <label for="Harga">Harga : </label>
                <input type="text" name="Harga" id="Harga" required>
            </li>
            <li>
                <label for="Processor">Processor : </label>
                <input type="text" name="Processor" id="Processor" required>
            </li>
            <li>
                <label for="Baterai">Baterai : </label>
                <input type="text" name="Baterai" id="Baterai" required>
            </li>
            <li>
                <label for="Gambar">Gambar : </label>
                <input type="file" name="Gambar" id="Gambar" style="width:300px">
            </li>
            <li>
                <button type="submit" name="submit" class="btn btn-primary">Tambah Data!</button>
            </li>
        </ul>
    </form>
</body>

</html>