<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Movie DB</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.js">
	</script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js">
	</script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js">
	</script>
<script type="text/javascript" class="init"> 
	$(document).ready(function() {
    	$('#movies_table').DataTable({
    		"aLengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]],
        	"pageLength": 25,
        	"bSort": true,
            "bFilter": false
            
    	});

	} );
</script>

</head>
<body>

<div class="container">
	
<h1>Movies</h1>
	
<table id="movies_table" class="table table-striped">
<thead><tr><th>Title</th><th>Studio</th><th>Year</th><th>Box Office $</th><th>Picture</th><th>Edit/Delete</th></tr></thead>
<?php
   if (count($movies) == 0) {
?>
  <tr><td colspan='6'>No Movies</td></tr>

<?php
  } else {
	 print "<tbody>";
     for ($i = 0; $i < count($movies); $i++) {
	   
	    print "<tr>";
	    print "<td>". strip_tags($movies[$i]['title'])   . "</td>" ;
	    print "<td>". strip_tags($movies[$i]['studio'])    . "</td>" ;
	    print "<td>". strip_tags($movies[$i]['year'])        . "</td>" ;
        setlocale(LC_MONETARY, 'en_US.UTF-8');
	    print "<td>". money_format('$%!i', strip_tags($movies[$i]['box_office_money']))     . "</td>" ;
	    
	    print "<td><img src='". strip_tags($movies[$i]['picture'])     . "''></td>" ;

	    print "<td><div class='row'>";
	    	    
	    print "<div class='col-sm-6'><form action='edit' method='POST' class='form-horizontal'><input type='hidden' name='movie_id' value='".$movies[$i]['movie_id']."'>
	    <div class='form-group'><button type='submit' name='action' value='Update' class='btn btn-default'>
  <span class='glyphicon glyphicon-pencil'></span></button></div></form></div>";
	    
	    print "<div class='col-sm-6'><form action='delete' method='POST' class='form-horizontal'><input type='hidden' name='movie_id' value='".$movies[$i]['movie_id']."'><div class='form-group'><button type='submit' class='btn btn-default' name='action' value='Delete'>
  <span class='glyphicon glyphicon-trash'></span></button></div></form></div>";

  	    print "</div></td></tr>\n";

	 }
	 print "</tbody>";
  } 	  
		  
?>


</table>

<form action="edit" method="POST">
	<input type="submit" name="action" value="Add" class="btn btn-lg btn-primary">
</form>	

<br><br>
<hr>
<br><br>


</div>

</body>
</html>
