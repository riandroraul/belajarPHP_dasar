<?php 
	function sapa($salam, $nama){
		ini_set('date.timezone', 'Asia/Jakarta');
		$jam = date("H:i");
		if ($jam > '04:00' && $jam < '10:00') {
			$salam = "Pagi";
		}else if ($jam >= '10:00' && $jam < '15:00') {
			$salam = "Siang";
		}else if($jam > '15:00' && $jam <= '19:00'){
			$salam = "Sore";
		}else if ($jam > '19:00'){
			$salam = "Malam";
		}
		return "Selamat  $salam, $nama!";
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1><?= sapa("", "ignasius");echo "<br>"; echo date('l, d-M-Y H:i:s'); ?></h1>
</body>
</html>