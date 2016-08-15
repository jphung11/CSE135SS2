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
if (session_status() == PHP_SESSION_NONE) {
	if (empty($_POST["name"])) { 
		echo <<< EOT
			<h1>Howdy stranger...tell me your name on page1!</h1>
EOT;
	}
	else {
		session_start();
		$_SESSION["name"] = $_POST["name"];
		$username = $_SESSION["name"];
		setcookie($name, "poop",time()+86400);
		echo <<< EOT
			<h1>Hi $username nice to meet you</h1>
EOT;	
	}
} 
echo "Please for the love of god work"
?>
<a href="sessionpage1_PHP.php">Back to page one</button>
</body>
</html>