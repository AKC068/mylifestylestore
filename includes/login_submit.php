<?php

require 'common.php';

if(isset($_POST['Login']))
{
    $email=$_POST['email'];
    $email = mysqli_real_escape_string($con , $email);
    $regex_email=" /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/ ";
    
    $user_password=$_POST['user_password'];
    $password = mysqli_real_escape_string($con , $password);
    $user_password = md5($_POST['user_password']);
     if(empty($_POST['email'])){
            header("location: ../login.php?message=<div class='alert alert-danger' style='margin: 15px 0px 15px 0px;'>Field is Required!</div>");
        }elseif (!preg_match($regex_email, $email)) {
            $error = "<div class='alert alert-danger' style='margin: 15px 0px 15px 0px;'>Incorrect Email ID!</div>";
            header('location: ../login.php?message='. $error);
        }elseif( strlen($_POST['user_password']) < 6) {
            $error = "<div class='alert alert-danger' style='margin: 15px 0px 15px 0px;'>Password should have at-least 6 Characters!</div>";
            header('location: ../login.php?message='. $error);
    } 
    else {
    $query="SELECT * FROM users WHERE email='".$_POST['email']."' and user_password='".$_POST['user_password']."' ";
    $query_result= mysqli_query($con, $query);
    
    if (mysqli_fetch_assoc($query_result)) 
    {
        $row = mysqli_fetch_array($query_result);
        $_SESSION['user_id']=$row['uid'];
        $_SESSION['email']=$_POST['email'];
        header('location: ../products.php');
    }
    else
    {
        $error = "<div class='alert alert-danger' style='margin: 15px 0px 15px 0px;'>Invalid Credentials!!!</div>";
        header('location: ../login.php?message='. $error);
    }
}
}
?>