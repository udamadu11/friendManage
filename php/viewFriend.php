<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container" style="margin-top: 100px;">
		<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">User Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col"></th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   
      <?php 
      	include ('include/connection.php');
      	$sql = "SELECT * FROM user";
      	$result = mysqli_query($con,$sql);

      	while ($row = mysqli_fetch_array($result)) {
      		echo "
      		 <tr>
            <td>".$row['id']."</td>
      		 	<td>".$row['fname']."</td>
      		 	<td>".$row['lname']."</td>
      		 	<td>".$row['uname']."</td>
      		 	<td>".$row['address']."</td>
      		 	<td>".$row['email']."</td>
      		 	<td>".$row['contact']."</td>
            <td>
            <form method=\"post\" action=\"editFriend.php\">
              <input type=\"hidden\" name=\"editing\" value=".$row['id'].">
              <input type=\"submit\" name =\"edit\" value=\"Edit\" class=\"btn btn-success\">
              </form>
            </td>
            <td>
            <form method=\"post\">
              <input type=\"hidden\" name=\"deleting\" value=".$row['id'].">
              <input type=\"submit\" name =\"delete\" value=\"Delete\" class=\"btn btn-danger\">
              </form>
            </td>

      		</tr>
      ";
      	}
      


       ?>
    
    
  </tbody>
</table>
	</div>

</body>
</html>
<?php 
  if (isset($_POST['delete'])) {
    $deleteId = $_POST['deleting'];
    $query = "DELETE FROM user WHERE id = '$deleteId'";
    $queryResult = mysqli_query($con,$query);
    if ($queryResult) {
       echo "
          <script>alert('Succesfully Deleted..')</script>
          <script>window.open('viewFriend.php','_self')</script>
       ";
     } 
  }

?>