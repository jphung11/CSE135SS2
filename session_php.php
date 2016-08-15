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
		if (empty($_SESSION("name"))) {
			if(empty($_POST["name"])) { 
				echo << EOT; 
				<h1>"Howdy stranger...tell me your name on page1!"</h1>
				EOT
			}
			else {
				session_start();
				$_SESSION["name"] = $_POST["name"];
				setcookie($_SESSION["name"], "poop",time()+86400);
			}
		}
		echo << EOT;
		<h1>Hi $_SESSION["name"] nice to meet you</h1>
		EOT	
	?>
	<button type="button" href="sessionpage1_PHP.php">Back to page one</button>
	<button type="button" onclick=<?php unset($_COOKIE[$_SESSION["name"]); setcookie($_SESSION["name"],"poop",time()-3600); session_unset(); session_destroy(); ?>>Clear Session</button>
</body>
</html>