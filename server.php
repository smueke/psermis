<?php
session_start();
$username="";
$email="";
$errors=array();
// connect to database
$db=mysql_connect('localhost','root','','srms');
// if the register button is clicked
if(isset($_POST['register'])){
    $username=mysql_real_escape_string($_POST['username']);
    $email=mysql_real_escape_string($_POST['email']);
    $password_1=mysql_real_escape_string($_POST['password_1']);
    $password_2=mysql_real_escape_string($_POST['password_2']);
// ensure fields are filled correctly
if(empty($username)){
	array_push($errors, "username is required");
}
if(empty($email)){
	array_push($errors, "email is required");
}
if(empty($password_1)){
	array_push($errors, "password is required");
}
if($password_1 != $password_2){
	array_push($errors, "The two passwords do not match");
}
if (count($errors) == 0){
	$password=md5($password_1);//encrpt password before storing in database(security)

	$sql="INSERT INTO login (username,email,password)
	VALUES('$username','$email','$password')";
	mysql_query($db,$sql);
	$_SESSION['username']=$username;
	$_SESSION['success']="You are successfully registered";
	header('location: login.php'); 
  }
}
if (isset($_POST['login'])) {
	$username=mysql_real_escape_string($_POST['username']);
    $password=mysql_real_escape_string($_POST['password']);
// ensure fields are filled correctly 
if(empty($username)){
	array_push($errors, "username is required");
}
if(empty($password)){
	array_push($errors, "password is required");
}
if (count($errors)==0) {
	$password=md5($password);
	$query="SELECT* FROM login WHERE username='$username' AND password='$password'";
	$result=mysqli_query($db,$query);
	if(mysqli_num_rows($result)==0){
		$_SESSION['username']=$username;
	    $_SESSION['success']="You are now logged in";
	header('location: find-result.php');
	}
}
	else{
		array_push($errors, "Username/Password Mismatch!");
		header('location:login.php');
   }
}
if (isset($_GET['Logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header('location:login.php');
}
?>