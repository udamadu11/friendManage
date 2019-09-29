<!DOCTYPE html>
<html>
<head>
	<title>Dashbord</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
 	<h4 style="text-align: center;margin-top: 20px;" class="display-4">Welcome to Dashbord</h4>
	<div class="row" style="margin-top: 30px;margin-left: 150px;">
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
    <h4 class="card-title">Secondary card</h4>
    
  </div>
</div>
<div class="card text-white bg-danger mb-3" style="max-width: 20rem;margin-right: 8px;">
  <div class="card-header">Drug</div>
  <div class="card-body">
    <h4 class="card-title">Success card</h4>
    
  </div>
</div>
<div class="card text-white bg-dark mb-3" style="max-width: 20rem;margin-right: 8px;">
  <div class="card-header">Drug</div>
  <div class="card-body">
    <h4 class="card-title">Success card</h4>
    
  </div>
</div>
<div class="card text-white bg-info mb-3" style="max-width: 20rem;margin-right: 8px;">
  <div class="card-header">Drug</div>
  <div class="card-body">
    <h4 class="card-title">Success card</h4>
    
  </div>
</div>

</div>
<div class="row">
	
	<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Profit'],
          ['2014', 1000, 400, 600],
          ['2015', 1170, 460, 250],
          ['2016', 660, 1120, 300],
          ['2017', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
<div id="columnchart_material" style="width: 800px; height: 500px;margin-left: 200px; margin-top: 100px;"></div>
</div>
</body>
</html>