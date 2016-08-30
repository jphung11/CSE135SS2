<?php
	
	require_once 'config.inc';
	

	$action = $_REQUEST['action'];

	

    $title = strip_tags($_REQUEST['title']);
  	$studio = strip_tags($_REQUEST['studio']);
   	$year = strip_tags($_REQUEST['year']);
   	$box_office_money = strip_tags($_REQUEST['box_office_money']);
   	$picture = strip_tags($_REQUEST['picture']);
   	$movie_id = $_REQUEST['movie_id'];
   	$valid = 1;
	

	try {

		$dbhost = '127.0.0.1';
		$dbname = 'movies';
		$dbusers = 'cowsarebae';
		$dbpass = 'cowsarecool';
		$pdo = new PDO("mysql:host=$dbhost;port=3306;dbname=$dbname",$dbusers,$dbpass);
		$pdo ->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

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

		   	if (!is_int($year) || !is_int($box_office_money)) {
		   		header('Location: index.php');
		   		$valid = 0;
		   	}

		   	if ($valid) {
				$stmt->execute();
			}
		   
		   /*
		   $sql = "INSERT INTO movies (title,studio,year,box_office_money,picture) VALUES ('$title' , '$studio' , '$year' , '$box_office_money', '$picture')";
		   $result = mysqli_query($conn, $sql);
		   */
		
		} else if ($action == "Update") {
			
		 	$stmt = $pdo->prepare($updatestr);

		 	$stmt->bindParam(':title', $title);
			$stmt->bindParam(':studio', $studio);
			$stmt->bindParam(':year', $year);
			$stmt->bindParam(':box_office_money', $box_office_money);
			$stmt->bindParam(':picture', $picture);
			if (!is_numeric($movie_id)) {
		   		header('Location: index.php');
		   		$valid = 0;
		   	}
			$stmt->bindParam(':movie_id', $movie_id);
       

		   	// SHOULD HAVE VALIDATION HERE!?

		   	if (!is_int($year) || !is_int($box_office_money)) {
		   		header('Location: index.php');
		   		$valid = 0;
		   	}

		   	
		   	if ($valid) {
				$stmt->execute();
		   	}
			/*
		   $sql = "UPDATE movies SET title='" .$title."' ,studio='".$studio."' ,year='".$year."' ,box_office_money='".$box_office_money."' ,picture='".$picture."' WHERE movie_id='".$movie_id."'";
	       $result = mysqli_query($conn, $sql);
			*/
		}  

		else if ($action == "Delete") {

		   $stmt = $pdo->prepare($deletestr);
		   if (!is_numeric($movie_id)) {
		   		header('Location: index.php');
		   		$valid = 0;
		   }
		   $stmt -> bindParam(':movie_id',$movie_id);

		   if ($valid) {
				$stmt->execute();
		   	}
	       
	       /*$sql = "DELETE FROM movies WHERE movie_id='".$_POST['movie_id']."'"; 
	       $result = mysqli_query($conn, $sql);
	       */	
	       header('Location: index.php');
		}

		header('Location: index.php');

	}

	
	catch(PDOException $e) {
    	echo "Error: " . $e->getMessage();
    }
	
	
	
?>