<!DOCTYPE html>
<html>
<head>
	<title>Dashbord</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>

	<div class="row" style="margin-top: 50px;margin-left: 150px;">
<div class="card text-white bg-primary mb-3" style="max-width: 20rem;margin-right: 8px; width: 200px;">
  <div class="card-header">Users</div>
  <div class="card-body">
    <i class="material-icons" style="font-size:40px;">people</i>
    	<?php
    		include('include/connection.php');
    		$usrsql = "SELECT * FROM user";
    		$usrresul = mysqli_query($con,$usrsql);
    		$userCount = mysqli_num_rows($usrresul);
    		echo "<div class='huge'>Count  {$userCount}</div>";

    	?>
  </div>
</div>
<div class="card text-white bg-secondary mb-3" style="max-width: 20rem;margin-right: 8px;">
  <div class="card-header">Users</div>
  <div class="card-body">
    <h4 class="card-title">Secondary card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-success mb-3" style="max-width: 20rem;margin-right: 8px;">
  <div class="card-header">Drug</div>
  <div class="card-body">
    <h4 class="card-title">Success card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
</body>
</html>