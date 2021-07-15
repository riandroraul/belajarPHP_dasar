<?php 
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
	    $rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $conn;
	    // ambil data dari tiap elemen di dalam form
    $type = htmlspecialchars($data['Type']);
    $harga = htmlspecialchars($data['Harga']);
    $processor = htmlspecialchars($data['Processor']);
    $baterai = htmlspecialchars($data['Baterai']);
    $gambar = htmlspecialchars($data['Gambar']);

	$query = "INSERT INTO smartphones VALUES 
	('', '$type', '$harga', '$processor', '$baterai', '$gambar')";
	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);
}

function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM smartphones WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;

	$id = $data['id'];
 	$type = htmlspecialchars($data['Type']);
    $harga = htmlspecialchars($data['Harga']);
    $processor = htmlspecialchars($data['Processor']);
    $baterai = htmlspecialchars($data['Baterai']);
    $gambar = htmlspecialchars($data['Gambar']);

    $query = "UPDATE smartphones SET 
    			Type = '$type',
    			Harga = '$harga',
    			Processor = '$processor',
    			Baterai = '$baterai',
    			Gambar = '$gambar'
    			WHERE id = $id
    			";
    		mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);	
}

function cari($keyword){
	$query = "SELECT * FROM smartphones WHERE
				Type LIKE '%$keyword%' OR
				Harga LIKE '%$keyword%' OR
				Processor LIKE '%$keyword%' OR 
				Baterai LIKE '%$keyword%'
				";
	return query($query);
}

 ?>