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
session_start();
if (isset($_SESSION['username'])) {
	echo "<h1>Hi " . $_SESSION['username'] . " nice to meet you</h1>";
}
else {
	echo "<h1>Howdy stranger...tell me your name on page1!</h1>";
} 
echo "<h1>Please for the love of god work</h1>";
?>
<a href="sessionpage1_PHP.php">Back to page one</a>
<a href="delete_session_php.php">Clear Session</a>
</body>
</html>