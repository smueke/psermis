<?php
session_start();
















































$connection=mysqli_connect("localhost","root","","srms");
// if($_SESSION['alogin']!=''){
// $_SESSION['alogin']='';
// }
if(isset($_POST['register']))
{
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email =$_POST["email"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
}
$phone=$_POST['phone'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];

if($password==$confirm_password)
{
    $query="SELECT * FROM `users` WHERE email='$email'";
    $results =mysqli_query($connection,$query);
    if(mysqli_num_rows($results ) > 0) 
    {
        echo '<script type="text/javascript"> alert("Email Already Exists...Please use another email!")</script';
    }
    else
    {
      $query ="INSERT INTO `users`(`first_name`, `last_name`, `email`, `phone`, `password`, `confirm_password`) VALUES('$first_name','$last_name','$email','$phone','$password','$confirm_password')";
       $results =mysqli_query($connection,$query);
if($results )
{
    echo '<script type="text/javascript"> alert("Successfully Registered!")</script';
    header("Location: login.php");
    exit();
}
else{
    echo '<script type="text/javascript"> alert("Registration failed!")</script';
}
}
}
else{
    echo '<script type="text/javascript"> alert("Passwords do not match...Please Try again!")</script';
}
}
?>















    

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PERMIS</title>
         <link rel="shortcut icon" href="images/logo-3.png">
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
         <script>
        function validate(){

            var a = document.getElementById("password").value;
            var b = document.getElementById("confirm_password").value;
            if (a!=b) {
               alert("Passwords do not match");
               return false;
            }
        }
     </script>

        <style>

    .container {
    width: 40%;
    margin: 0 auto;
    background-color: #f7f7f7;
    color: #757575;
    font-family: 'Raleway', sans-serif;
    text-align: left;
    padding: 30px;
}
h2 {
    font-size: 15px;
    font-weight: 600;
    margin-bottom: 10px;
    background: gray;
    width: 80%;
    padding: 10px 0;
    text-align: center;

}
.container p {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 20px;
}
.regisFrm input[type="text"], .regisFrm input[type="email"], .regisFrm input[type="password"] {
    width: 80%;
    padding: 5px;
    margin: 10px 0;
    outline: none;
    color: #000;
    font-weight: 600;
    font-family: 'Roboto', sans-serif;
}
.send-button {
    text-align: left;
    margin-top: 20px;
}
.send-button input[type="submit"] {
    padding: 10px 0;
    width: 80%;
    font-family: 'Roboto', sans-serif;
    font-size: 18px;
    font-weight: 600;
    border: none;
    outline: none;
    color: #FFF;
    background-color: #2196F3;
    cursor: pointer;
}
.send-button input[type="submit"]:hover {
    background-color: #055d54;
}
.reset-button {
    text-align: left;
    margin-top: 20px;
}
.reset-button input[type="reset"] {
    padding: 10px 0;
    width: 80%;
    font-family: 'Roboto', sans-serif;
    font-size: 18px;
    font-weight: 600;
    border: none;
    outline: none;
    color: #FFF;
    background-color:#055d54 ;
    cursor: pointer;
}
.reset-button input[type="reset"]:hover {
    background-color: gray;
}
a.logout{float: right;}
p.success{color:#34A853;}
p.error{color:#EA4335;}
</style>
    </head>
 <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
   <?php include('includes/topbar2.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<?php include('includes/leftbar2.php');?>  

                    <div class="main-page">
                        <div class="container-fluid">
                            
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="home.php"><i class="fa fa-home"></i><strong> Home</strong></a></li>
                                        <li><strong>Register</strong></li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">

                             

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="panel">
                                            
                                          <div class="panel-body p-20">
                                            <fieldset>
<h2><font color="white">Registration Form</font></h2>
    
    <div class="regisFrm">
        <form action="" method="POST">
            
            <input type="text" name="first_name" placeholder="First name" required pattern="^[A-Za-z]+">
            <input type="text" name="last_name" placeholder="Last name" required pattern="^[A-Za-z]+">
            <input type="email" name="email" placeholder="Email Address " required="">
            <input type="text" name="phone" maxlength="15" minlength="10" placeholder="Phone number" required>
            <input type="password" name="password" placeholder="Password" required pattern="^[A-Za-z0-9]+">
            <input type="password" name="confirm_password" placeholder="Confirm Password" required pattern="^[A-Za-z0-9]+">
            <div class="send-button">
                <input type="submit" name="register" value="Enroll">
                </div>
                
            <p><br>
        Already got an account?<a href="login.php"><font color="#33cc33"> Login</font></a>
    </p>
    <p><center>
    <font color="blue">Connect With Us</font></a>
    </p></center>
</p>
</fieldset>
        </form>
        <script type="text/javascript">  
function validate()
{
      if(form2.account_no.length<10) {
          alert("Error: Input is empty!");
          form2.account_no.focus();
          return false;
        }
}
</script>
<script type="text/javascript">

  function checkForm(form)
  {
    if(sign.first_name.value == "") {
      alert("Error: First_Name cannot be blank!");
      sign.first_name.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(sign.first_name.value)) {
      alert("Error: First_Name must contain only letters, numbers and underscores!");
      sign.first_name.focus();
      return false;
    }
    
    if(sign.last_name.value == "") {
      alert("Error: last_name cannot be blank!");
      sign.last_name.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(sign.last_name.value)) {
      alert("Error: last_name must contain only letters, numbers and underscores!");
      sign.last_name.focus();
      return false;
    }
     if(sign.phone.value.length < 10) {
        alert("Error: phone Number  must contain at least 10 Digits!");
        sign.phone.focus();
        return false;
      }
      if(sign.phone.value.length > 10) {
        alert("Error: phone Number  must contain at least 10 Digits!");
        sign.phone.focus();
        return false;
      }

    if(sign.password.value != "" && sign.password.value == sign.confirm_pass.value) {
      if(sign.password.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        sign.password.focus();
        return false;
      }
      if(sign.password.value == sign.f_name.value) {
        alert("Error: Password must be different from Username!");
        sign.password.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(sign.password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        sign.password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(sign.password.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        sign.password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(sign.password.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        sign.password.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      sign.password.focus();
      return false;
    }

    alert("You entered a valid password: " + sign.password.value);
    return true;
  }

</script>

                            </div>
                        </div>
                        <!-- /.panel -->
                        <p class="text-muted text-center"><small>Copyright © kibu 2019.All Rights Reserved.</small></p>
                    </div>
                    <!-- /.col-md-6 col-md-offset-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->
</div>
</div>
</div>
</div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){
                $('input.flat-blue-style').iCheck({
                    checkboxClass: 'icheckbox_flat-blue'
                });
            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>