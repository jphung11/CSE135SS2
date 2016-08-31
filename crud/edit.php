<?php

 require_once 'config.inc';

 $action = $_POST['action'];

 
 $title = '';
 $studio = '';
 $year = '';
 $box_office_money = '';
 $picture = '';
 
 
 if ($action == "Update") {
   
    $movie_id = $_POST['movie_id'];

    if(!is_numeric($movie_id)) {
    	header('Location: index.php');
    	exit();
    }
         
    $sql = "SELECT * FROM movies where movie_id = ".$movie_id;
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)) {
    
	 $title = $row['title'];
	 $studio = $row['studio'];
	 $year = $row['year'];
	 $box_office_money = $row['box_office_money'];
	 $picture = $row['picture'];
	}
	 
 }
 
 // RENDER THE VIEW
 include('./views/edit.tpl');

?>