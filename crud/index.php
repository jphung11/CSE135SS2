<?php
	
	// CONNECT TO DB
    require_once 'config.inc';
       
    // FORM AND EXECUTE SOME QUERY
    $sql = "SELECT * FROM movies ORDER BY title";
    $result = mysqli_query($conn, $sql);
    
    $movies = $result->fetch_all(MYSQLI_ASSOC);
   
	// RENDER THE VIEW
    include('./views/list.tpl');
?>

