<?php
if (isset($_GET["email"]) && isset($_GET["token"])){
    $connection=mysqli_connect("localhost","root","","srms");
    $email = $_GET['email'];
    $token = $_GET['token'];
   $result = $connection->query("SELECT `id` FROM `users` WHERE email=`$email` AND token=`$token`");
//$result=mysqli_query($connection,$data);
    if (!$result)
    {
        $str ="0123456789qwertyuiopasdfghjklzxcvbnm";
        $str =str_shuffle($str);
        $str =substr($str, 0, 15);

        $password= sha1($str);

        $result =$connection->query("update users set password='$password',token='$str' where email='$email'");
        echo "Your new password is: $str";
    }
    else{
        echo "please check your link!";
    }
}else{
    header("Location: login.php");
    exit();
}
?>