<?php

session_start();

if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

$smartphone = query("SELECT * FROM smartphones");

if (isset($_POST['cari'])) {
	$smartphone = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Koneksi ke Database</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-5.0.2/css/bootstrap.css">
	<style>
		.header {
			justify-content: center;
			text-align: center;
		}

		.loader {
			width: 33px;
			z-index: -1;
			padding-bottom: 2px;
			display: none;
		}

		#tombol-cari {
			display: none;
		}
	</style>
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/script.js"></script>
</head>

<body>
	<div class="header">
		<a href="logout.php">Logout</a>

		<h1>Daftar Smartphone</h1>
		<a href="tambah.php" class="tambah">Tambah Data Smartphones</a>
		<br><br>
		<form action="" method="post">
			<input type="text" name="keyword" size="50" autofocus="" placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">
			<button type="submit" name="cari" id="tombol-cari">Cari!</button>
			<img src="img/loader.gif" class="loader">
		</form>
	</div>

	<br>

	<div class="container">
		<table border="1" cellpadding="10" cellspacing="0" class="table table-hover table-info" id="container">
			<tr>
				<th>No</th>
				<th>Aksi</th>
				<th>Gambar</th>
				<th>Type</th>
				<th>Harga</th>
				<th>Processor</th>
				<th>Baterai</th>
			</tr>
			<?php $i = 1; ?>
			<?php foreach ($smartphone as $row) : ?>
				<tr>
					<td><?= $i; ?></td>
					<td>
						<a href="ubah.php?id=<?= $row['id']; ?>">ubah</a> |
						<a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('<?= $row['Type']; ?> Akan Dihapus ?');">hapus</a>
					</td>
					<td><img src="../img/<?= $row["Gambar"]; ?>"></td>
					<td><?= $row["Type"]; ?></td>
					<td><?= $row["Harga"]; ?></td>
					<td><?= $row["Processor"]; ?></td>
					<td><?= $row["Baterai"]; ?></td>
				</tr>
				<?php $i++; ?>
			<?php endforeach; ?>
		</table>
	</div>

</body>

</html>