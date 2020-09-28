
<?php 
require 'common.php';
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con , $email);

    $password = $_POST['user_password'];
    $password = mysqli_real_escape_string($con , $password);
    $password = md5($password);
    
    $name = $_POST['first_name'];
    $name = mysqli_real_escape_string($con , $name);

    $contact = $_POST['contact'];
    $contact = mysqli_real_escape_string($con , $contact);

    $city = $_POST['city'];
    $city = mysqli_real_escape_string($con , $city);

    $address = $_POST['address'];
    $address = mysqli_real_escape_string($con , $address);

    $email_regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    $contact_regex = "/^[789][0-9]{9}$/";

    //check whether email already exists
    $select_query = " SELECT * from users WHERE email = '".$_POST['email']."' ";
    $select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
    $select_rows = mysqli_num_rows($select_query_result);
    if($select_rows > 0){
        $error = "<div class='alert alert-danger' style='margin: 15px 0px 15px 0px;'>Email ID already exists!</div>";
        header('location: ../signup.php?m1='.$error);
    }elseif(!preg_match($email_regex , $_POST['email'])){
        $error = "<div class='alert alert-danger' style='margin: 15px 0px 15px 0px;'>Incorrect Email ID!</div>";
        header('location: ../signup.php?m1='.$error);
    }elseif(strlen($_POST['user_password']) < 6) {
        $error = "<div class='alert alert-danger' style='margin: 15px 0px 15px 0px;'>Password should have at-least 6 Characters!</div>"; //"<span class='red'>Password should be atlest of Six Characters!</span>
        header('location: ../signup.php?m3='.$error);
    } elseif (empty ($_POST['first_name'])) {
        $error = "<div class='alert alert-danger' style='margin: 15px 0px 15px 0px;'>Field is Required!</div>";
        header('location: ../signup.php?m4='.$error);    
    }elseif(!preg_match($contact_regex , $_POST['contact'] )){
        $error = "<div class='alert alert-danger' style='margin: 15px 0px 15px 0px;'>Incorrect Contact Number!</div>";
        header('location: ../signup.php?m2='.$error);
    }elseif(empty ($_POST['city']) || empty ($_POST['address'])){
        $error = "<div class='alert alert-danger' style='margin: 15px 0px 15px 0px;'>Field is Required!</div>";
        header('location: ../signup.php?m4='.$error);
    }
    else{
    
    $signup_query="INSERT INTO users(email, user_password, first_name, contact, city, address)VALUES('$email','$user_password','$firstname','$contact','$city','$address')";
    $signup_query_submit= mysqli_query($con, $signup_query);
    $user_id = mysqli_insert_id($con);
    $_SESSION['user_id'] = $user_id;
    $_SESSION['email']=$_POST['email'];
    header("location: ../products.php?message=<script>alert('You are Signed In successfull!!!');</script>");
    
       //header("location: ../signup.php?message=<div class='alert alert-danger' style='margin: 15px 0px 15px 0px;'>Connection Error. Please try again later.</div>");
        
    }

?>


