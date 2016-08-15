<?php
	session_start();
	$users_name = $_SESSION['username']; 
	unset($_COOKIE[$users_name]);
	setcookie($users_name,' ', time()-3600);
	session_unset();
	session_destroy();

	header('Location: sessionpage2_PHP.php');
?>