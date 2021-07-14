<?php 
// array
$smartphone = ["Realme", "Rp. 3.699.000", "Snapdragon 710 Aie", "4045 mAh"];

// var_dump($smartphone);
// echo "<br>";
// print_r($smartphone);

$arrayKotak = [1,2,3,4,5,6,7,8,9];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.kotak{
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			float: left;
			margin: 3px;
		}
		.clear{
			clear: both;
		}
	</style>
</head>
<body>
	<?php for ($i=0; $i < count($arrayKotak); $i++): ?>
		<div class="kotak"> <?php echo $arrayKotak[$i] ?></div>	
	<?php endfor; ?>

	<div class="clear"></div>
	<!-- menggunakan foreach -->

	<?php foreach ($arrayKotak as $arr) : ?>
		<div class="kotak"><?= $arr ?></div>
	<?php endforeach; ?>

</body>
</html>