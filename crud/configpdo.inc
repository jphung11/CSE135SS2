<?php
        $dbhost = '127.0.0.1';
		$dbname = 'movies';
		$dbusers = 'cowsarebae';
		$dbpass = 'cowsarecool';
		$pdo = new PDO("mysql:host=$dbhost;port=3306;dbname=$dbname",$dbusers,$dbpass);
		$pdo ->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

        if (!$pdo) {
            die("Connection failed");
        }

?>
