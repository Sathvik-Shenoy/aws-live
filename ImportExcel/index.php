<?php
include 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Import from excel</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="C:\xampp\htdocs\Library-Management-System\choice_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<div class="container" style="padding-top:50px">
  <div class="row">
    <div class="col-md-12">
      <h4>Import Data from Excel</h4>
      <hr>
      <form method="post" action="file-upload.php" enctype="multipart/form-data">
        <div class="form-group row">
          <div class="col-md-8">
        <input type="file" name="uploadfile" class="form-control"/>
        </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3"></label>
          <div class="col-md-8">
        <input type="submit" name="submit" class="btn btn-primary">
      </div>
    </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>















