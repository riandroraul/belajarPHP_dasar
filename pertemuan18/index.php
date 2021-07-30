<?php

session_start();

if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

// pagination
// konfigurasi


$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM smartphones "));

$halamanAktif = isset($_GET['halaman']) ? $_GET['halaman'] : 1;
$jumlahHal = ceil($jumlahData / $jumlahDataPerHalaman);
$awalData = $jumlahDataPerHalaman * $halamanAktif - $jumlahDataPerHalaman;

$smartphone = query("SELECT * FROM smartphones LIMIT $awalData, $jumlahDataPerHalaman");

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
</head>

<body>
	<a href="logout.php">Logout</a>

	<h1>Daftar Smartphone</h1>
	<a href="tambah.php" class="tambah">Tambah Data Smartphones</a>
	<br><br>
	<form action="" method="post">
		<input type="text" name="keyword" size="50" autofocus="" placeholder="masukkan keyword pencarian.." autocomplete="off">
		<button type="submit" name="cari">Cari!</button>
	</form>
	<br>

	<!-- navigasi pagination -->


	<?php if ($halamanAktif > 1) : ?>
		<a href="?halaman= <?= $halamanAktif - 1; ?>"> &laquo </a>
	<?php endif; ?>

	<?php for ($i = 1; $i <= $jumlahHal; $i++) : ?>
		<?php if ($i == $halamanAktif) : ?>
			<a href="?halaman=<?= $i; ?>" style="color: red; font-weight:bold;"><?= $i; ?></a>
		<?php else : ?>
			<a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
		<?php endif; ?>
	<?php endfor; ?>

	<?php if ($halamanAktif < $jumlahHal) : ?>
		<a href="?halaman= <?= $halamanAktif + 1; ?>">&raquo</a>
	<?php endif; ?>

	<table border="1" cellpadding="10" cellspacing="0" class="table table-hover table-info">
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

</body>

</html>