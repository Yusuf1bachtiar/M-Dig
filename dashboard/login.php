<?php 
include '../assets/php/db.php';
include '../assets/php/function.php';
session_start();
if (isset($_COOKIE['login'])) {
	$_SESSION['id'] = $_COOKIE['id'];
	$_SESSION['username'] = $_COOKIE['key'];
	$_SESSION['login'] = true
	?>
	<script type="text/javascript">
		window.location.href = "index.php";
	</script>
	<?php
} ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
<form method="post">
	<label for="username">Username</label>
	<input type="username" name="username">
	<label for="password">Password</label>	
	<input type="password" name="password">
	<input type="checkbox" name="remember" value="remember">
	<label for="remember">Remember Me</label>
	<button type="submit" name="submit">Login</button>
</form>
</body>
</html>

<?php if (isset($_POST['submit'])): 

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$login = query("SELECT * FROM `user` WHERE username='$username'");
if (count($login) == 1) {
if (password_verify($login[0]['password'], $password)) {
	if ($_POST['remember']=="remember") {
		setcookie('login', 'true',time()+259200);
		setcookie('id', ''.$login[0]['id'].'',time()+259200);
		setcookie('key', hash('sha256', $username), time()+259200);
		$_SESSION['id'] = $login[0]['id'];
		$_SESSION['username'] = hash('sha256', $username);
		$_SESSION['login'] = true;
	}else{
	$_SESSION['id'] = $login[0]['id'];
	$_SESSION['username'] = hash('sha256', $username);
	$_SESSION['login'] = true;
	}
	?>
	<script type="text/javascript">
		window.location.href = "index.php"
	</script>
	<?php
}else{
	echo 'salah';
}}else{
echo 'login gagal';
}
 endif ?>
