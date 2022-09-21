<?php
if (isset($_POST["forgotPass"])){
    $connection=mysqli_connect("localhost","root","","srms");
    $email=$_POST['email'];
    
    $query="SELECT `id` FROM `users` WHERE email='$email'";
    $results =mysqli_query($connection,$query);
    if (mysqli_num_rows($results) > 0)
    {
        $str="0123456789qwertyuiopasdfghjklzxcvbnm";
        $str=str_shuffle($str);
        $str=substr($str, 0, 10);
        $url="http://domain.com/srms/resetPassword.php?token=$str & email=$email";
        echo "$url";
        $query="UPDATE `users` SET token='$str' WHERE email=`$email`";
        echo "<font color='green'><center><b>Please check your email address..!</b></center></font>";
        }
        else
        {
            echo "<font color='red'><center><b>Please check your inputs..!</b></center></font>";
        }
}
?>
<style>
    .container {
    width: 60%;
    margin: 0 auto;
    background-color: gray;
    color: #757575;
    font-family: 'Raleway', sans-serif;
    text-align: left;
    padding: 30px;
}
h2 {
    font-size: 30px;
    font-weight: 600;
    margin-bottom: 10px;
}
.container p {
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 20px;
}
.regisFrm input[type="text"], .regisFrm input[type="email"], .regisFrm input[type="password"] {
    width: 94.5%;
    padding: 10px;
    margin: 10px 0;
    outline: none;
    color: #000;
    font-weight: 500;
    font-family: 'Roboto', sans-serif;
}
.send-button {
    text-align: center;
    margin-top: 20px;
}
.send-button input[type="submit"] {
    padding: 10px 0;
    width: 80%;
    font-family: 'Roboto', sans-serif;
    font-size: 18px;
    font-weight: 500;
    border: none;
    outline: none;
    color: #FFF;
    background-color: #2196F3;
    cursor: pointer;
}
.send-button input[type="submit"]:hover {
    background-color: #055d54;
}
a.logout{float: right;}
p.success{color:#34A853;}
p.error{color:#EA4335;}
</style>
<h2><center>Reset password</center></h2>
<div class="container">
    <div class="regisFrm">
        <form action="forgotPassword.php" method="post">
            <input type="email" name="email" placeholder="Enter Email eg. johnndoe.com" required>
            <div class="send-button">
                <input type="submit" name="forgotPass" value="Submit">
            </div>
        </form>
    </div>
</div>