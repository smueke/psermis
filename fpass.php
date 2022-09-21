<?php
session_start();
include "conn.php";
if(isset($_POST['email']))
{
    $pass = "123456";
    $email = stripslashes($_REQUEST['email']);
    $query = "SELECT `phone_No` FROM `userlogin` WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    if($row['phone_No'] > 0)
    {
        $phone = $row['phone_No'];
    $query1 = "UPDATE `userlogin` SET `password`='$pass' WHERE `email`='$email'";
    $result1 = mysqli_query($conn, $query1);
    if($result1){
        echo '<div align="center" style="margin-left:25%;margin:auto;text-align:center;width:50%;border-radius:4px;position:relative;background-color:#ffbc67;color:#FFFFFF;padding:10px 15px">
                                   
                                    <span><b> Success - </b> Your Password has been reset successfully.</span></br><a href="log.php" aria-hidden="true" class="close" style="text-decoration:none; font-weight:bold">Go back to Login</a>
                                </div>';
                            }else{
                                echo '<div align="center" style="margin-left:25%;margin:auto;text-align:center;width:50%;border-radius:4px;position:relative;background-color:#ffbc67;color:#FFFFFF;padding:10px 15px">
                                   
                                    <span><b> Warning - </b> Invalid Reset Attempt</span></br><a href="fpass.php" aria-hidden="true" class="close" style="text-decoration:none; font-weight:bold">Try Again?</a>
                                </div>';
                            }
}
else
{
    echo '<div align="center" style="margin-left:25%;margin:auto;text-align:center;width:50%;border-radius:4px;position:relative;background-color:#ffbc67;color:#FFFFFF;padding:10px 15px">
                                   
                                    <span><b> Warning - </b> User with that email does not exist!</span></br><a href="fpass.php" aria-hidden="true" class="close" style="text-decoration:none; font-weight:bold">Try Again?</a>
                                </div>';
}
}
else
{
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Insurance</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>
<center>
<style>
    body{
        background: #999;
    }
.card{
width:25%;
height:auto;
margin-top:165px;

}
@media (min-width: 992px) {
    .card{
width:25%;
height:auto;
margin-top:165px;

}
}

@media (max-width: 991px) {
    .card{
width:80%;
height:auto;
margin-top:65px;

}
}
</style>
<div class="content">
             <div class="container-fluid">
<div class="card card-user" align="center">
                            <div class="content">
							<l><strong style="font-size:18px">Password Reset</strong></l><br>
							 <img class="avatar border-gray" src="assets/img/faces/face-0.jpg" alt="Inu ww"/>
							  <form action="" name="f1" method="post">
							 <div class="form-group">
                                               
                                                <input type="text" name="email" class="form-control" placeholder="Email" required="required">
                                            </div>
								 
                                            <a href="log.php" class="pull-left"><button type="button" class="btn btn-info btn-fill"><i class="pe-7s-angle-left-circle"></i> Go Back</button></a>
									<button type="submit" name="submit" class="btn btn-info btn-fill pull-right"> Request Reset</button>
                                    <div class="clearfix"></div>
                                </form>
								<br />
                                
                            </div>
                        </div>
					</div>
                    <?php } ?>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();
/*
        	$.notify({
            	//icon: 'pe-7s-gift',
            	//message: "Welcome to <b>Insurance</b> ."

            },{
                type: 'info',
                timer: 4000
            });*/

    	});
	</script>

</html>
