<!DOCTYPE html>
<?php include('includes/functions.php') ?>
<html>
<head>
	<title>PSERMIS</title>
        <link rel="shortcut icon" href="images/logo-3.png">
	    <link rel="stylesheet" href="styl.css">
	    <style>
	     *{
	margin: 0px;
	padding: 0px;
}
body{

	font-size: 120%;
	background: #5F9EA0;
}

.header{
	width: 180px;
	margin: 50px auto 0px;
	color: white;
	background: #0000cc;
	text-align: center;
	border: 1px solid #0000cc;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
form, .content{
	width: 180px;
	margin: 0px auto;
	padding: 20px;
	border:1px solid #0000cc;
	background: white;
	border-radius: 0px 0px 10px 10px;
}

.input-group {
	margin: 10px 1px 10px 1px;

}
.input-group label {
display: block;
text-align: left;
margin: 5px;

}
.input-group input{
	height: 20px;
	width: 150px;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 2px solid gray;

}
.btn {
	padding:  10px;
	font-size: 15px;
	color: white;
	background:#0000cc;
	border: none;
	border-radius: 5px;
}
.error {
	width: 90%;
	margin: 0px auto;
	padding: 10px;
	border:1px solid #80C4DE;
	color: #80C4DE;
	background:white;
	border-radius: 5px;
	text-align: left;

}
.success {
	width: 90%;
	color: #3c763d;
	background:#dff0d8;
	border:1px solid #3c763d;
	margin-bottom: 20px;
}
body {
   background-image:url("images/3.jpg");
   background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.box{
	border:1px solid blue;
}
</style>
</head>
<body>
<div class="header">
	<h3>Register</h3>
</div>
<form method="post" action="reg.php">
	<?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<label>Phone No</label>
		<input type="text" name="Phone_No" value="<?php echo $Phone_No; ?>">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="log.php"><font color="#0000cc">Sign in</a>
	</p>
</form>
</body>
</html>