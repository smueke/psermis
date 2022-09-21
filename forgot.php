<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>
<body>
<form name="forgot.php" method="post" action="<?php $SERVER['PHP_SELF'];?>"> 
<p><label for="phone">Phone Number:</label> 
<input type="text" name="phone" value="Phone" /> 
</p> 
<input type="submit" name="submit" value="submit"/> 
<input type="reset" name="reset" value="reset"/> 
</form> 
<?php 
if(isset($POST["submit"])) {
    include('includes/config.php')
    
    $email=$_POST['email'];
$sql = "SELECT `email`, `password` FROM `users` WHERE email='$email'"; 
$query = mysql_query($sql);
	if(!$query) 

{ 
die(mysql_error()); 
}
	if(mysql_affected_rows() != 0) 
{ 
$row=mysql_fetch_array($query); 
$password=$row["password"]; 
$email=$row["email"]; 
$subject="your company - your password"; 
$header="From: emailadddress"; 
$content="Your password is: ".$password; 
mail($email, $subject, $content, $header);
print "We sent you an email with your password."; 
} 
else 

{ 
echo("no such login in the system. please try again."); 
} 
} 
?>
</body>
</html>
