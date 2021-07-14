<?php 

$smartphone = [
	["Realme 3 Pro", "Rp.3.699.000", "Snapdragon 710 Aie", "4045 mAh"],
	["Xiaomi Redmi Note 9", "Rp.2.909.500", "Mediatek Helio G85", "5020 mAh"],
	["Huawei P30 Pro", "Rp.9.175.000", "HiSilicon Kirin 980 Octa-core", "4200 mAh"]
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


 	<!-- <ul>
 		<?php for ($i=0;  $i<count($smartphone); $i++) :?>
	 		<li><?= $smartphone[$i];  ?></li>
 		<?php endfor; ?>
 	</ul> -->

 	<?php foreach ($smartphone as $hp) : ?>
	 	<ul>
 			<li><?= $hp[0]; ?></li>
 			<li><?= $hp[1]; ?></li>
 			<li><?= $hp[2]; ?></li>
 			<li><?= $hp[3]; ?></li>
	 	</ul>
	<?php endforeach; ?>

 </body>
 </html>