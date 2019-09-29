<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php 
include('include/connection.php');

if (isset($_POST['edit'])) {
	$id = $_POST['editing'];
	$query = "SELECT * FROM user WHERE id = '$id'";
	$result = mysqli_query($con,$query);
	while($row = mysqli_fetch_array($result)){
	echo "

	<div class=\"container\" style=\"margin-top: 100px;\">
		<form method=\"post\">
 			 <div class=\"form-row\">
   				 <div class=\"form-group col-md-6\">
     				<label>First Name</label>
     				<input type=\"text\" class=\"form-control\" name=\"Editfname\" value=".$row['fname']." required> 
    			</div>

   				<div class=\"form-group col-md-4\">
     				<label>Last Name</label>
      				<input type=\"text\" class=\"form-control\" name=\"Editlname\" value=".$row['lname']." required>
    			</div>

    			<div class=\"form-group col-md-2\">
      				<label>User Name</label>
     				<input type=\"text\" class=\"form-control\" name=\"Edituname\" value=".$row['uname']." required>
    			</div>
  			</div>
   			<div class=\"form-group\">
    			<label>Address</label>
    			<input type=\"text\" class=\"form-control\" name=\"Editaddress\" value=".$row['address']." placeholder=\"1234 Main St\" required>
  			</div>
  			<div class=\"form-row\">
    			<div class=\"form-group col-md-6\">
      				<label>Email</label>
      				<input type=\"email\" class=\"form-control\" name=\"Editemail\" value=".$row['email']." placeholder=\"Email\" required>
    			</div>
    			<div class=\"form-group col-md-6\">
      				<label>Contact</label>
      				<input type=\"number\" class=\"form-control\" name=\"Editcontact\" value=".$row['contact']." placeholder=\"Contact\" required>
    			</div>
    			<div class=\"form-group col-md-6\">
      				<label>Password</label>
      				<input type=\"password\" class=\"form-control\" name=\"Editpassword\" value=".$row['password']." placeholder=\"Password\" required>
    			</div>
    			<div class=\"form-group col-md-6\">
      				<label>Confirm Password</label>
      				<input type=\"password\" class=\"form-control\"  name=\"Editcpassword\" value=".$row['password']." placeholder=\"Password\" required>
    			</div>
  			</div>
  			<div class=\"form-group\">
  			<input type=\"hidden\" value=" .$row['id']. " name=\"EditId\">
  			<button type=\"submit\" class=\"btn btn-dark btn-lg btn-block\" name=\"submit\">Update</button>
  			</div>
	</form>
</div>
";
}
}

if (isset($_POST['submit'])) {
  $EditId = $_POST['EditId'];
  $Editfname = $_POST['Editfname'];
  $Editlname = $_POST['Editlname'];
  $Edituname = $_POST['Edituname'];
  $Editaddress = $_POST['Editaddress'];
  $Editemail = $_POST['Editemail'];
  $Editcontact =  $_POST['Editcontact'];
  $Editpassword =  $_POST['Editpassword'];
  $Editcpassword = $_POST['Editcpassword'];

  if ($Editpassword == $Editcpassword) {
  	$query2 = "UPDATE  user SET fname = '$Editfname',lname ='$Editlname',uname ='$Edituname',address = '$Editaddress',email = '$Editemail',contact = '$Editcontact',password = '$Editpassword' WHERE id= '$EditId'";
  	$result2 = mysqli_query($con,$query2);
  	if ($result2) {
  		echo "
  		<script>alert('Succesfully Updated..')</script>
          <script>window.open('viewFriend.php')</script>
  		";
  	}
  }
}

?>
</body>
</html>
