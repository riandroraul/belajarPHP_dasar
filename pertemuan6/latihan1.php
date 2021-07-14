<?php 

// $numbers = array(1,2,3,4,5,6,7,8,9,10);

$numbers = [
	[2,3,4,],
	[5,6,7],
	[8,9,10]
]
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
		.kotak{
			width: 50px;
			height: 50px;
			background-color: salmon;
			margin: 4px;
			line-height: 50px;
			text-align: center;
			float: left;
			transition: 1.5s;
		}
		.kotak:hover{
			transform: rotate(360deg);
			border-radius: 25px;
		}
		.clear{
			clear: both;
		}
	</style>
</head>
<body>

	<?php foreach ($numbers as $number) : ?>
		<?php foreach ($number as $childOfNum) : ?>
			<div class="kotak"><?= $childOfNum; ?></div>
		<?php endforeach; ?>
		<div class="clear"></div>
	<?php endforeach; ?>

</body>

</html>