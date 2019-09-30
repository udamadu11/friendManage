<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
	<script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container" style="margin-top: 100px;">
    <form method="post" enctype="multipart/form-data"> 

          <div class="row">
              <div class="form-group col-md-6">
                   <label>Title</label>
                   <input type="text" class="form-control"  name="title" required> 
             </div>
             <div class="form-group col-md-4">
                   <label>Email</label>
                   <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group col-md-2">
                   <label>Contact</label>
                   <input type="number" class="form-control" name="contact" required>
            </div>
        </div>

          <div>
            <div class="form-group">

              <div class="custom-file">
                   <input type="file" class="custom-file-input" id="customFile" name="image">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>
          </div>


          <div class="col-md-14">
            <label>Content</label>
              <textarea  id="editor" name="editor">&lt;p&gt;This is some sample content.&lt;/p&gt;</textarea>
              <script>
            ClassicEditor
              .create( document.querySelector( '#editor' ) )
              .catch( error => {
                  console.error( error );
              } );
             </script>
          </div>
          <div class="form-group col-md-14">
            <input type="submit" name="submit" value="Post" class="btn btn-primary btn-lg btn-block" style="margin-top: 40px;">
          </div>
      
    </form>
</div>
</body>
</html>
<?php
include('include/connection.php');
if (isset($_POST['submit'])) {

  $title = $_POST['title'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];

  $image = $_FILES['image']['name'];
  $imagetmp = $_FILES['image']['tmp_name'];
  $dir = '../image/';
  move_uploaded_file($imagetmp, $dir.$image);
  

  $editer = $_POST['editor'];

  $sql = "INSERT INTO post(title,email,contact,image,content)VALUES('$title','$email','$contact','$image','$editer')";
  $result = mysqli_query($con,$sql);
}

?>
