<?php 

// cek apakah tidak ada data di $_GET
if ( !isset($_GET['Type']) ||
	 !isset($_GET['Harga']) ||
	 !isset($_GET['Processor']) ||
	 !isset($_GET['Baterai'])  || 
	 !isset($_GET['Gambar'])
	) {
	// redirect
	header("Location: latihan1.php");
	exit;
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<ul>
		<li><?= $_GET['Type']; ?></li>
		<li><?= $_GET['Harga']; ?></li>
		<li><?= $_GET['Processor']; ?></li>
		<li><?= $_GET['Baterai']; ?></li>
		<li>
			<img src="../img/<?= $_GET['Gambar']; ?>">
		</li>
	</ul>

	<a href="latihan1.php">Kembali ke daftar smartphone</a>
</body>
</html>