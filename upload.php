<?php
mysql_connect("localhost","root","");
mysql_select_db("dynamicsliders");
if(isset($_REQUEST["submit"]));
{
$file=$_FILES["file"]["name"];
$temp_name=$_FILES["file"]["tmp_name"];
$path="images/".$file;
move_uploaded_file($temp_name,$path);	
mysql_query("insert into slider(image)values('$file')");
}
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <div class="carousel-inner">

<form method="post" enctype="multipart/form-data">
Image Upload:<input type="file" name="file"><br>
<input type="submit" name="submit" value="Upload Image">
</form>