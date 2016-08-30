<?php
	
	require_once 'config.inc';
	

	$action = $_REQUEST['action'];
	
	if ($action == 'Add') {
		
       $title = strip_tags($_REQUEST['title']);
	   $studio = strip_tags($_REQUEST['studio']);
	   $year = $_REQUEST['year'];
	   $box_office_money = $_REQUEST['box_office_money'];
	   $picture = strip_tags($_REQUEST['picture']);
	   // SHOULD HAVE VALIDATION HERE!?

	   if (!is_int($year) || !is_int($box_office_money)) {
	   		header('Location: index.php');
	   }


		
	
	   $sql = "INSERT INTO movies (title,studio,year,box_office_money,picture) VALUES ('$title' , '$studio' , '$year' , '$box_office_money', '$picture')";
	   $result = mysqli_query($conn, $sql);
		
		
	} else if ($action == "Update") {
		
	   $title = $_REQUEST['title'];
	   $studio = $_REQUEST['studio'];
	   $year = $_REQUEST['year'];
	   $box_office_money = $_REQUEST['box_office_money'];
	   $picture = $_REQUEST['picture'];
	   $movie_id = $_REQUEST['movie_id'];
	
	   $sql = "UPDATE movies SET title='" .$title."' ,studio='".$studio."' ,year='".$year."' ,box_office_money='".$box_office_money."' ,picture='".$picture."' WHERE movie_id='".$movie_id."'";
       $result = mysqli_query($conn, $sql);
		
	}  else if ($action == "Delete") {
		
  		
       $sql = "DELETE FROM movies WHERE movie_id='".$_POST['movie_id']."'"; 
       $result = mysqli_query($conn, $sql);

		
	}

	header('Location: index.php');
	
?>