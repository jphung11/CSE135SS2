<?php
	
	require_once 'config.inc';
	require_once 'configpdo.inc';
	

	$action = $_REQUEST['action'];

	

    $title = strip_tags($_REQUEST['title']);
  	$studio = strip_tags($_REQUEST['studio']);
   	$year = strip_tags($_REQUEST['year']);
   	$box_office_money = strip_tags($_REQUEST['box_office_money']);
   	$picture = strip_tags($_REQUEST['picture']);
   	$movie_id = $_REQUEST['movie_id'];
	

	try {

		$addstr = "insert into movies (title,studio,year,box_office_money,picture) values (:title, :studio, :year, :box_office_money, :picture)";
		$updatestr = "update movies set title=:title, studio=:studio, year=:year, box_office_money=:box_office_money, picture=:picture where movie_id=:movie_id";
		$deletestr = "delete from movies where movie_id=:movie_id";

		if ($action == 'Add') {
		
			$stmt = $pdo->prepare($addstr);
			
			$stmt->bindParam(':title', $title);
			$stmt->bindParam(':studio', $studio);
			$stmt->bindParam(':year', $year);
			$stmt->bindParam(':box_office_money', $box_office_money);
			$stmt->bindParam(':picture', $picture);
       

	   	// SHOULD HAVE VALIDATION HERE!?

		   	if (!is_numeric($year) || !is_numeric($box_office_money)) {
		   		print "<script type='text/javascript'>alert('Invalid request. Returned to list.');document.location='index.php';</script>";
		   		exit();
		   	}


			$stmt->execute();
		
		} else if ($action == "Update") {
			
		 	$stmt = $pdo->prepare($updatestr);

		 	$stmt->bindParam(':title', $title);
			$stmt->bindParam(':studio', $studio);
			$stmt->bindParam(':year', $year);
			$stmt->bindParam(':box_office_money', $box_office_money);
			$stmt->bindParam(':picture', $picture);
			$stmt->bindParam(':movie_id', $movie_id);
       

		   	// SHOULD HAVE VALIDATION HERE!?

		   	if (!is_numeric($year) || !is_numeric($box_office_money) || !is_numeric($movie_id)) {
		   		print "<script type='text/javascript'>alert('Invalid request. Returned to list.');document.location='index.php';</script>";
		   		exit();
		   	}

			$stmt->execute();
		   	
		}  

		else if ($action == "Delete") {

		   $stmt = $pdo->prepare($deletestr);
		   if (!is_numeric($movie_id)) {
			if (!is_numeric($movie_id)) {
		   		print "<script type='text/javascript'>alert('Invalid request. Returned to list.');document.location='index.php';</script>";
		   		exit();
		   	}
		   }
		   $stmt -> bindParam(':movie_id',$movie_id);

			$stmt->execute();
		   	
		}

		header('Location: index.php');

	}

	catch(PDOException $e) {
    	echo "Error: " . $e->getMessage();
    }
	
	
	
?>