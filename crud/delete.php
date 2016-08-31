<?php

 $movie_id = $_POST['movie_id'];

    if(!is_numeric($movie_id)) {
    	print "<script type='text/javascript'>alert('Invalid request. Returned to list.');document.location='index.php';</script>";
    	exit();
    }

 // RENDER THE VIEW
 include('./views/delete.tpl');
 
?>
