 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<table cellpadding="3" cellspacing="0" border="1">
	<?php for ($i=1; $i <= 3 ; $i++) : ?>
		<tr>
			<?php for ($j=1; $j <=5; $j++) : ?>
				<td> <?php echo "$i, $j";?></td>
			<?php endfor; ?>
		</tr>
	<?php endfor; ?>
	
	</table>
	 
</body>
</html>
