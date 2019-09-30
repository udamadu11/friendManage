<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
	<script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top: 100px;">
    <button class="btn btn-dark btn-lg btn-block" name="submit" style="margin-bottom: 30px;">Post</button>
<form method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Title</label>
      <input type="text" class="form-control" name="title" required> 
    </div>
    <div class="form-group col-md-4">
      <label>Email</label>
      <input type="text" class="form-control" name="email" required>
    </div>
    <div class="form-group col-md-2">
      <label>Contact</label>
      <input type="number" class="form-control" name="contact" required>
    </div>
  </div>
   <div class="form-group">
    <label>Post Image</label>
    	<div class="custom-file">
  			<input type="file" class="custom-file-input">
  			<label class="custom-file-label" for="customFile">Choose file</label>
		</div>
 	 </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <lable>Content</lable>
    	<textarea name="content" id="editor" class="form-control">
        &lt;p&gt;This is some sample content.&lt;/p&gt;
    	</textarea>
	   	 <script>
	        ClassicEditor
	            .create( document.querySelector( '#editor' ) )
	            .catch( error => {
	                console.error( error );
	            } );
	    </script>
    </div>
  </div>
  
  
  <button type="submit" class="btn btn-dark btn-lg btn-block" name="submit">Add User</button>
</form>
</div>
</body>
</html>