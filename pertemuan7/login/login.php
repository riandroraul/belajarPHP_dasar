<?php 

// cek apakah tombol sublit sudah ditekan atau belum
// cek username dan password benar atau salah
if (isset($_POST['submit'])) {
	if ($_POST['username'] == "admin" && $_POST['password'] == "123") {
		header("Location: admin.php");
		exit;
// jika benar, redirect/ masuk ke halaman admin
	}else{
		$error = true;
// jika salah, tampilkan pesan kesalahan
	}
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<h1>Login Admin</h1>
	<?php if (isset($error)) : ?>
		<p style="font-style: italic; color: red;">Username/Password Salah!</p>
	<?php endif; ?>
<ul>
	<form action="" method="post">
		<li>
			<label for="username">Username : </label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="password">Password : </label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<button type="submit" name="submit">Login</button>
		</li>
	</form>
</ul>

</body>
</html>