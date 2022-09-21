<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: home.html"); 
    }
    else{
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$Password=$_POST['Password'];
$email=$_POST['email'];
$sql="INSERT INTO  login (username,Password,email) VALUES('$username','$Password','$email')";
$query = $dbh->prepare($sql);
$query->bindParam(':username',$username,PDO::PARAM_STR);
$query->bindParam(':Password',$Password,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['username']=$username;
	$_SESSION['success']="Account created successfully";
	header('location: login.php'); 
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>   
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Account Register</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
 <body class="">
        <div class="main-wrapper">

            <div class="">
                <div class="row">
 
                    
                    <div class="col-lg-6">
                        <section class="section">
                            <div class="row mt-40">
                                 <div class="col-md-4 col-md-offset-4">

                                    <div class="row mt-30 ">
                                        <div class="col-md-10">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                        <h4>Create An Account</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-12">
<form method="post" action="register.php">
	
	<!-- display validation errors here-->
	<div class="input.group"> 
		<label>Username</label>
		<input type="text" name="username"placeholder="enter username" value="<?php echo $username;?>" required>
	</div>
    <div class="input.group">
        <label>Password</label>
        <input type="password" name="password_1"placeholder="enter password" required>
    </div>
	<div class="input.group">
		<label>Email</label>
		<input type="text" name="email"placeholder="enter email address"value="<?php echo $email;?>" required>
	</div>
	
	<br>
	<div class="input.group">
		<input type="submit" name="submit" value="Register" class="btn btn-info" />      
	</div>
	<p>
		Already a member?<a href="login.php">Sign In</a>
	</p>
	<div align="center"><fontsize=2><a href="home.html">Home</a>&nbsp;&nbsp;
</div>
</form>
                                            </div>
                                            </div>
                                            <!-- /.panel -->
                                           
                                        </div>
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>
                    <p class="text-muted text-center"><small>Copyright © kibu 2019</small></p>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->
        </div>
 <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
 

</body>
</html>
<?PHP } ?>