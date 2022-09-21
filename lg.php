<?php include('includes/functions.php') ?>
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
  <div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form name="form_login" method="post" action="lg.php" role="form">
        <fieldset>
          <h2>Please Sign In</h2>
          <?php echo display_error(); ?>
          <hr style="height:2px; border:none; color:#000; background-color:#4d9900;"> 
          <div class="form-group">
            <input name="username" type="text" id="username" class="form-control input-lg" placeholder="Enter username">
          </div>
          <div class="form-group">
            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Enter Password">
          </div>
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <input type="submit" name="login_btn" value="Login" class="btn btn-lg btn-success btn-block">
            </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
      Not yet a member? <a href="rg.php"><font color="blue">Register</font></a>
    </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>
</body>
</html>
