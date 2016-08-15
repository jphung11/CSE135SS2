<?php
	session_start();
	$cookie_name = "DA_BEST_COOKIE_EVA";
	$users_name = $_SESSION['username']; 
	unset($_COOKIE[$cookie_name]);
	setcookie($cookie_name,$users_name, time()-3600);
	session_unset();
	session_destroy();

	header('Location: sessionpage2_PHP.php');
?>