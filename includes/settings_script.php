<?php
require 'common.php';

    $oldPassword = $_POST['oldPassword'];
    $oldPassword = mysqli_real_escape_string ($con , $oldPassword);
    $oldPassword = md5($oldPassword);

    $email = $_SESSION['email'];
    $select_query = "SELECT * FROM users WHERE email = '$email' AND user_password = '".$_POST['oldPassword']."'";
    $select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
    $rows = mysqli_num_rows($select_query_result);
    
    $newPassword = $_POST['newPassword'];
    $newPassword = mysqli_real_escape_string ($con , $newPassword);
    $newPassword= md5($newPassword);
    
    $newPasswordRe = $_POST['newPasswordRe'];
    $newPasswordRe = mysqli_real_escape_string ($con , $newPasswordRe);
    $newPasswordRe = md5($newPasswordRe);

    if ($rows > 0 && $newPassword==$newPasswordRe){
        
        $email = $_SESSION['email'];
        $update_query = "UPDATE users SET user_password = '".$_POST['newPasswordRe']."' WHERE email = '$email'";
        $update_query_result = mysqli_query($con , $update_query) or die(mysqli_error($con));
        $success = "<div class='alert alert-success' style='margin: 15px 0px 15px 0px;'>Password Changed Successfully!</div>";
        header("location: ../settings.php?message=".$success);
    }else{
        $error = "<div class='alert alert-danger' style='margin: 15px 0px 15px 0px;'>Invalid Credentials!!!</div>";
        header("location: ../settings.php?message=".$error);
    }
?>

