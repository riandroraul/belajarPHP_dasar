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

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
    	return false;
    }

	$query = "INSERT INTO smartphones VALUES 
	('', '$type', '$harga', '$processor', '$baterai', '$gambar')";
	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);
}


function upload(){
	$namaFile = $_FILES['Gambar']['name'];
	$fileSize = $_FILES['Gambar']['size'];
	$error = $_FILES['Gambar']['error'];
	$tmpFile = $_FILES['Gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if ($error === 4) {
		echo "<script>
				alert('pilih Gambar!');
			 </script>";
		return false;
	}

	// pastikan yang boleh diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'png', 'jpeg'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('Bukan Gambar!');
			 </script>";
		return false;	
	}
	// cek ukurannya jika terlalu besar
	if ($fileSize > 1500000) {
		echo "<script>
				alert('Ukuran File Terlalu Besar!');
			 </script>";
		return false;
	}
	// lolos pengecekan gambar
	// generate nama file gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.' . $ekstensiGambar;
	move_uploaded_file($tmpFile, '../img/' . $namaFileBaru);

	return $namaFileBaru;
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
    $gambarLama = htmlspecialchars($data['gambarLama']);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['Gambar']['error'] === 4) {
    	$gambar = $gambarLama;
    }else{
		$gambar = upload();
    }


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