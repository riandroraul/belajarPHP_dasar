<?php
require 'functions.php';

if (isset($_POST['register'])) {
	if (registrasi($_POST) > 0) {
		echo " <script>
					alert('Registrasi Berhasil');
				</script>";
	} else {
		echo mysqli_error($conn);
	}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Halaman Registrasi</title>
	<style>
		label {
			display: block;
			margin: 5px;
		}

		button {
			margin-top: 10px;
			padding: 4px;
		}
	</style>

</head>
<h1>Halaman Registrasi</h1>
<form action="" method="post">
	<ul>
		<li>
			<label for="username">Username : </label>
			<input type="input" name="username" id="username">
		</li>
		<li>
			<label for="password">Password : </label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<label for="password2">Konfirmasi Password : </label>
			<input type="password" name="password2" id="password2">
		</li>
		<button type="submit" name="register" onclick="show, 1000">Register</button>
	</ul>
</form>

</body>

</html>