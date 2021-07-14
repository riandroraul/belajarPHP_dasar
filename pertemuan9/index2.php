<?php 
// keoneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel smartphone / query data smartphone

$result = mysqli_query($conn, "SELECT * FROM smartphones");

// ambil data (fetch) smartphone dari object result

// mysqli_fetch_row() mengembalikan array numerik
// mysqli_fetch_assoc() mengembalikan array associative
// mysqli_fetch_array() mengembalikan keduanya array associative dan numerik
// mysqli_fetch_object() 


// $hp = mysqli_fetch_assoc($result);

// var_dump($hp);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Koneksi ke Database</title>
</head>
<body>
	<h1>Daftar Smartphone</h1>

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
		<?php while ($row = mysqli_fetch_assoc($result)) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href="">ubah</a> | 
					<a href="">hapus</a> 
				</td>
				<td><img src="../img/<?=$row["Gambar"]; ?>"></td>
				<td><?= $row["Type"]; ?></td>
				<td><?= $row["Harga"]; ?></td>
				<td><?= $row["Processor"]; ?></td>
				<td><?= $row["Baterai"]; ?></td>
			</tr>
			<?php
		<?php endwhile; ?>
	</table>

</body>
</html>