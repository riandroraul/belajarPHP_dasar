<?php 

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
	<ul>
	 	<?php foreach ($smartphones as $smartphone) : ?>
	 		<li>
	 			<a href="latihan2.php?Type=<?= $smartphone['Type']; ?>&Harga=<?= $smartphone['Harga']; ?>&Processor=<?= $smartphone['Processor']; ?>&Baterai=<?= $smartphone['Baterai']; ?>&Gambar=<?= $smartphone['Gambar']; ?>">
	 				<?= $smartphone["Type"]; ?>
	 				</a>
	 		</li>
	 	<?php endforeach; ?>
	</ul>

 </body>
 </html>