<?php
include 'config.php'

if($_POST['submit']){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password == $cpassword){
       $sql = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
       $result = mysql_query($conn, $sql);
       if(!result){
        echo "<script> alert('Ooops! Something went wrong.')</script>";
       }
    }else{
        echo "<script> alert('Password not matched.')</script>";
    }
}
?>