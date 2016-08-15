<!DOCTYPE html>
<html>
<head>
<title>Hello World!</title>
<style>

body { background-color: <?php
$rand = rand(0,2);
if ($rand % 3 == 0) { 
echo "red;";
}
elseif ($rand % 3 == 1) {
echo "white;";
}
else { 
echo "blue;";
}
?>
}
</style>
</head>
<body>
<?php
echo "<p>Hello Web World from Language PHP on ";
echo date(DATE_RFC822);
echo "</p>"
?>
</body>
</html>
