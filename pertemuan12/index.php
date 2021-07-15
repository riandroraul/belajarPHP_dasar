<?php 
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
</head>
<body>
	<h1>Daftar Smartphone</h1>
	<a href="tambah.php" class="tambah">Tambah Data Smartphones</a>
	<br><br>
	<form action="" method="post">
		<input type="text" name="keyword" size="50" autofocus="" placeholder="masukkan keyword pencarian.." autocomplete="off">	
		<button type="submit" name="cari">Cari!</button>
	</form>
		<br>
	<table border="1" cellpadding="10" cellspacing="0">
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
		<?php foreach($smartphone as $row) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href="ubah.php?id=<?= $row['id']; ?>">ubah</a> | 
					<a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('<?= $row['Type']; ?> Akan Dihapus ?');">hapus</a> 
				</td>
				<td><img src="../img/<?=$row["Gambar"]; ?>"></td>
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