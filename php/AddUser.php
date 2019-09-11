<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container" style="margin-top: 100px;">
<form method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>First Name</label>
      <input type="text" class="form-control" id="fname" name="fname" required> 
    </div>
    <div class="form-group col-md-4">
      <label>Last Name</label>
      <input type="text" class="form-control" id="lname" name="lname" required>
    </div>
    <div class="form-group col-md-2">
      <label>User Name</label>
      <input type="text" class="form-control" id="uname" name="uname" required>
    </div>
  </div>
   <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>
    <div class="form-group col-md-6">
      <label>Contact</label>
      <input type="number" class="form-control" id="contact" name="contact" placeholder="Contact" required>
    </div>
    <div class="form-group col-md-6">
      <label>Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
    <div class="form-group col-md-6">
      <label>Confirm Password</label>
      <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Password" required>
    </div>
  </div>
  
  
  <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Add User</button>
</form>
</div>
</body>
</html>
<?php
include('include/connection.php');

if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $uname = $_POST['uname'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $contact =  $_POST['contact'];
  $password =  $_POST['password'];
  $cpassword = $_POST['cpassword'];

  if ($password == $cpassword) {
    $sql = "INSERT INTO user(fname,lname,uname,address,email,contact,password)VALUES('$fname','$lname','$uname','$address','$email','$contact','$password')";
    $result = mysqli_query($con,$sql);
    if ($result) {
      echo "<script>alert('Successfuly Added')</script>";
    }
  }else{
    echo "<script>alert('Password not matched')</script>";
  }
}


 ?>