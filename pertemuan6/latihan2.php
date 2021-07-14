<?php 


// menggunakan array numerik

// $smartphone = [
// 	["Realme 3 Pro", "Rp.3.699.000", "Snapdragon 710 Aie", "4045 mAh"],
// 	["Xiaomi Redmi Note 9", "Rp.2.909.500", "Mediatek Helio G85", "5020 mAh"],
// 	["Huawei P30 Pro", "Rp.9.175.000", "HiSilicon Kirin 980 Octa-core", "4200 mAh"]
// ];

// menggunakan array associative
$smartphones = [
	["Type" => "Realme 3 Pro", 
	"Harga" => "Rp.3.699.000", 
	"Processor" => "Snapdragon 710 Aie", 
	"Baterai" => "4045 mAh",
	"Gambar" => "realme3p.jpg"],

	["Type" => "Xiaomi Redmi Note 9", 
	"Harga" => "Rp.2.909.500", 
	"Processor" => "Mediatek Helio G85", 
	"Baterai" => "5020 mAh",
	"Gambar" => "redmiNote9.jpg"],

	["Type" => "Huawei P30 Pro", 
	"Harga" => "Rp.9.175.000", 
	"Processor" => "HiSilicon Kirin 980 Octa-core", 
	"Baterai" => "4200 mAh",
	"Gambar" => "huaweiP30.jpg"],
];


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 </head>
 <body>
 	<h1>Daftar Smartphone</h1>
 		<?php foreach ($smartphones as $smartphone) : ?>
		 	<ul>
		 		<li>
		 			<img src="../img/<?= $smartphone['Gambar']; ?>">
		 		</li>
		 		<li>Type : <?= $smartphone['Type']; ?></li>
		 		<li>Harga : <?= $smartphone['Harga']; ?></li>
		 		<li>Processor : <?= $smartphone['Processor']; ?></li>
		 		<li>Baterai : <?= $smartphone['Baterai']; ?></li>
		 	</ul>
 		<?php endforeach; ?>
 
 </body>
 </html>