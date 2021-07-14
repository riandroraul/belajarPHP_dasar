<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<table cellpadding = "3" cellspacing="0", border="1">
		<?php for ($i=1; $i <=5; $i++) : ?> 
			<?php if ($i % 2 == 0) : ?>
			<tr style="background-color: blue;">
			<?php else : ?>
				<tr style="background-color: red;">
			<?php endif; ?>
				<?php for ($j=1; $j <=5; $j++) : ?>
					<td><?= "$i, $j"; ?></td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</table>
</body>
</html>