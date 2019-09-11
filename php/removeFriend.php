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
            <td>".$row['id']."</td>
            <td>".$row['fname']."</td>
            <td>".$row['lname']."</td>
            <td>".$row['uname']."</td>
            <td>".$row['address']."</td>
            <td>".$row['email']."</td>
            <td>".$row['contact']."</td>
            <td>
            <form method=\"post\">
            <input type=\"hidden\" name=\"delete\" value=".$row['id'].">
            <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" value=\"Delete\">
            </form>
            </td>

          </tr>
      ";
        }
       if (isset($_POST['submit'])) {
       $d_id = $_POST['delete'];
       $delete_query ="DELETE FROM user WHERE id = '$d_id' ";
       $delete_result = mysqli_query($con,$delete_query);

       if($delete_result){
        echo "<script>alert('Successfuly Deleted')</script>";
        echo "<script>window.open('removeFriend.php', '_self')</script>";
    }
     }



       ?>
    
    
  </tbody>
</table>
  </div>

</body>
</html>