<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?= $action ?> Record</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>

<div class="container">
	
<h1><?= $action ?> Record</h1>

<form action="action" method="POST" class="form">
	<div class="form-group">
	 <label for="title">Title</label>
	 <input type="text" name="title" value="<?= $title ?>"  class="form-control">
	</div>

	<div class="form-group">
	<label for="studio">Studio</label>
	<input type="text" name="studio" value="<?= $studio ?>"  class="form-control">
	</div>

	<div class="form-group">
	<label for="year">Year</label>
	<input type="number" name="year" value="<?= $year ?>"  class="form-control">
	</div>

	<div class="form-group">
	<label for="box_office_money">Box Office $ (Enter number only)</label>
	<input type="number" name="box_office_money" value="<?= $box_office_money ?>"  class="form-control">
	</div>

	<div class="form-group">
	<label for="picture">Picture URL</label>
	<input type="text" name="picture" value="<?= $picture ?>"  class="form-control">
	</div>

	<input type="hidden" name="movie_id" value="<?= $movie_id ?>">
	
	<div class="form-group">
	<input type="submit" value="<?= $action ?>" name="action" class="btn btn-primary">
	<input type="submit" value="Cancel" name="action"  class="btn btn-default">	
	</div>
	
</form>

</div>

</body>
</html>