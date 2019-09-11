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
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">User Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Remove</th>
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
            <td>".$row['fname']."</td>
            <td>".$row['lname']."</td>
            <td>".$row['uname']."</td>
            <td>".$row['address']."</td>
            <td>".$row['email']."</td>
            <td>".$row['contact']."</td>
            <td>
              <form>
                
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