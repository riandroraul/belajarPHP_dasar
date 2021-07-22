<?php

require 'functions.php';

// ambil data dari url
$id = $_GET['id'];

// query data smartphone berdasarkan id
$smartphone = query("SELECT * FROM smartphones WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['submit'])) {

	// cek apakah data berhasil diubah atau tidak
	
    if (ubah($_POST) > 0 ) {
        echo "
            <script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo "
            <script>
            alert('Data Gagal Diubah!');
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
    <title>Ubah Data Smarthpone</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap-5.0.2/css/bootstrap.css">
</head>

<body>
    <h1>Ubah Data Smarthpone</h1>
    <form action="" method="post" enctype="multipart/form-data">
    	<input type="hidden" name="id" value="<?= $smartphone['id']; ?>">
        <input type="hidden" name="gambarLama" value="<?= $smartphone['Gambar']; ?>">
        <ul>
            <li>
                <label for="Type">Type : </label>
                <input type="text" name="Type" id="Type" required value="<?= $smartphone['Type']; ?>">
            </li>
            <li>
                <label for="Harga">Harga : </label>
                <input type="text" name="Harga" id="Harga" required value="<?= $smartphone['Harga']; ?>">
            </li>
            <li>
                <label for="Processor">Processor : </label>
                <input type="text" name="Processor" id="Processor" required value="<?= $smartphone['Processor']; ?>">
            </li>
            <li>
                <label for="Baterai">Baterai : </label>
                <input type="text" name="Baterai" id="Baterai" required value="<?= $smartphone['Baterai']; ?>">
            </li>
            <li>
                <label for="Gambar">Gambar : </label><br>
                <img src="../img/<?= $smartphone['Gambar']; ?>"><br>
                <input type="file" name="Gambar" id="Gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
    </form>
</body>

</html>