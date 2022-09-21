<?php
session_start();
$name=$_SESSION['name'];
if(isset($name))
{
echo "<div class='container'>";
echo "<h3><br>Welcome to admin Panel</h3>";
}
else
{
	header("location:admin.php");


}
?>