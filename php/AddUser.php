<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
<form method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>First Name</label>
      <input type="text" class="form-control" id="fname" name="fname">
    </div>
    <div class="form-group col-md-4">
      <label>Last Name</label>
      <input type="text" class="form-control" id="lname" name="lname">
    </div>
    <div class="form-group col-md-2">
      <label>User Name</label>
      <input type="text" class="form-control" id="uname" name="uname">
    </div>
  </div>
   <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label>Contact</label>
      <input type="number" class="form-control" id="contact" name="contact" placeholder="Contact">
    </div>
    <div class="form-group col-md-6">
      <label>Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <div class="form-group col-md-6">
      <label>Confirm Password</label>
      <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Password">
    </div>
  </div>
  
  
  <button type="submit" class="btn btn-primary" name="Add">Sign in</button>
</form>
</div>
</body>
</html>