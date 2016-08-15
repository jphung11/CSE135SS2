<?php
	session_start();
	$_SESSION['username'] = $_POST['name']; 
	$users_name = $_SESSION['username'];
	setcookie($users_name,' ',time()+86400); 

	header('Location: sessionpage1_PHP.html');
?>