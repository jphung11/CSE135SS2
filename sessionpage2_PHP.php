<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	    <title>Session Page 2</title>
	    <link rel="stylesheet" href="http://138.68.48.65/style.css" type="text/css">

	     <link rel="icon" type="image/png" href="http://138.68.48.65/favicon.png"> 

	     <link rel="icon" href="http://138.68.48.65/icons/favicon.ico" type="image/x-icon">
	     <link rel="icon" type="image/png" href="http://138.68.48.65/icons/favicon-32x32.png" sizes="32x32" />
	    <link rel="icon" type="image/png" href="http://138.68.48.65/icons/favicon-16x16.png" sizes="16x16" /> 
</head>
<body>
<?php

$cookie_name = "DA_BEST_COOKIE_EVA";
session_start();
if ($_COOKIE[$cookie_name]) {
	echo "<h1>Hi " . $_COOKIE[$cookie_name] . " nice to meet you</h1>";
}
else {
	if (isset($_SESSION['username'])) {
		session_unset();
		session_destroy();
	}
	echo "<h1>Howdy stranger...tell me your name on page1!</h1>";
} 

?>
<a href="sessionpage1_PHP.html">Back to page one</a><br>
<a href="delete_session_php.php">Clear Session</a>
</body>
</html>