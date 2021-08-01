<?php 

require '../functions.php';

$keyword = $_GET['keyword'];
$query = "SELECT * FROM smartphones WHERE
				Type LIKE '%$keyword%' OR
				Harga LIKE '%$keyword%' OR
				Processor LIKE '%$keyword%' OR 
				Baterai LIKE '%$keyword%'
				";
$smartphone = query($query);


 ?>

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