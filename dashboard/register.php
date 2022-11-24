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
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
 <body>
    <section class="form-02-main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="_lk_de">
              <div class="form-03-main">
                <div class="logo">
                  <img src="../assets/images/user.png">
                </div>
                <div class="form-group">
                  <input type="username" name="username" class="form-control _ge_de_ol" type="text" placeholder="Enter username" required="" aria-required="true">
                </div>

                <div class="form-group">
                  <input type="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
                </div>
                <div class="form-group">
                  <p><font size="2" style="padding-left: 2px;color: red;">**Konfirmasi Ulang Password</font></p>
                  <input type="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
                </div>

                <div class="form-group">
                  <div class="_btn_04">
                    <button type="submit" name="submit" style="background-color: transparent;border:none;color: white;">Register</button>
                  </div>
                </div>

                <div class="form-group nm_lk"><p>Or Register With</p></div>

                <div class="form-group pt-0">
                  <div class="_social_04">
                    <ol>
                      <li><i class="fa fa-facebook"></i></li>
                      <li><i class="fa fa-twitter"></i></li>
                      <li><i class="fa fa-google-plus"></i></li>
                      <li><i class="fa fa-instagram"></i></li>
                      <li><i class="fa fa-linkedin"></i></li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
