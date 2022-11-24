<?php  
	session_start();
	session_destroy();
	setcookie('login', '',time()-3600);
	setcookie('id', '',time()-3600);
	setcookie('key', '', time()-3600);
?>
<script type="text/javascript">
	window.location.href="login.php"
</script>