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
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Clean Modal Login Modal Form</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body {
		font-family: 'Varela Round', sans-serif;
	}
	.modal-login {
		width: 350px;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 1px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;
        position: relative;
		justify-content: center;
	}
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
	}
    .modal-login .form-group {
        margin-bottom: 20px;
    }
	.modal-login .form-control, .modal-login .btn {
		min-height: 40px;
		border-radius: 30px; 
        font-size: 15px;
        transition: all 0.5s;
	}
    .modal-login .form-control {
        font-size: 13px;
    }
    .modal-login .form-control:focus {
        border-color: #a177ff;
    }
	.modal-login .hint-text {
		text-align: center;
		padding-top: 10px;
	}
	.modal-login .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}
	.modal-login .btn {
		background: #a177ff;
		border: none;
		line-height: normal;
	}
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #8753ff;
	}
	.modal-login .hint-text a {
		color: #999;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
</style>
</head>
<body style="background-image: url(../assets/img/post-slide-3.jpg);" >
<div class="text-center">
	<!-- Button HTML (to Trigger Modal) -->
	<a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Login Modal</a>
</div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content" style="border-radius: 15px;" >
			<div class="modal-header">				
				<h4 class="modal-title">Sign in</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<form action="/examples/actions/confirmation.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Username" required="required">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" required="required">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-block btn-lg" value="Sign in">
					</div>
				</form>				
				<p class="hint-text small"><a href="#">Forgot Your Password?</a></p>
			</div>
		</div>
	</div>
</div>     
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
