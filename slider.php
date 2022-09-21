<?php
mysql_connect("localhost","root","");
mysql_select_db("dynamicsliders");
$query=mysql_query("SELECT* FROM slider");
$rowcount=mysql_num_rows($query);
	
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <div class="carousel-inner">
  <?php
  for($i=1;$i<=$rowcount;$i++)
  {
	 $row=mysql_fetch_array($query); 
  }
  ?>
  <?php
  if($i==1)
  {
  ?>
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/<?php echo $row["image"]?>" alt="First slide" width="100%" class ="img-responsive"> 
    </div>
    <?php
  }
  else
  {
	  ?>
	  <div class="carousel-item">
      <img class="d-block w-100" src="images/<?php echo $row["image"]?>" alt="Second slide" width="100%" class="img-responsive"> 
    </div>
	<?php
  }
  ?>
 
      