<?php
	session_start();
	$_SESSION['username'] = $_POST['name']; 
	$users_name = $_SESSION['username'];
	$cookie_name = "DA_BEST_COOKIE_EVA";
	setcookie($cookie_name,$users_name,time()+86400); 

	header('Location: sessionpage1_PHP.html');
?>