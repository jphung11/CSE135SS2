<!DOCTYPE html>
<html>
<head>
<title>Environment Vars</title>
<style>
</style>
</head>
<body>
<?php
foreach($_SERVER as $key_name => $key_value) {
print $key_name . "=" . $key_value . "<br>";
}
?>
</body>
</html>
