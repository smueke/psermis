<?ph<?php include('includes/functions.php') ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>PSERMIS</title>
<link rel="shortcut icon" href="images/logo-3.png">
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">


</head>
<!-- NAVBAR
================================================== -->
 <?php include('includes/topbar1.php');?>
<body style="background:#ffffff">

<div class="container">
  <div class="row" style="margin-top:10px">
    <div class="col-xs-12 col-sm-6 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form name="form_login" method="post" action="create_user.php" role="form">
        <fieldset>
	<div class="header">
		<h3>Add user</h3>
	<?php echo display_error(); ?>
         <hr style="height:2px; border:none; color:#000; background-color:#4d9900;"> 
         <div class="form-group">
            <input type="text" name="username"class="form-control input-lg" placeholder="Enter username" value="<?php echo $username; ?>">
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control input-lg" placeholder="Enter Email Address" value="<?php echo $email; ?>">
          </div>
		<div class="form-group">
			<label>Usertype</label>
			<select name="user_type" id="user_type" class="form-control input-lg">
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
		  <input type="password" name="password_1" class="form-control input-lg" placeholder="Enter password">
          </div>
          <div class="form-group">
            <input type="password" name="password_2" class="form-control input-lg" placeholder="Confirm password">
          </div>
          <div class="form-group">
            <input type="text" name="Phone_No" class="form-control input-lg" placeholder="Enter Phone Number"  value="<?php echo $Phone_No; ?>">
          </div>
		<div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
			<button type="submit" class="btn btn-sm btn-success btn-block" name="register_btn"> + Create user</button>
       </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="dashboard.php"><font color="blue">Back</font></a>
        </fieldset>
      </form>
    </div>
  </div>
</div>
</body>
</html>