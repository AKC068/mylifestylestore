<?php
require('includes/common.php');
$con = mysqli_connect("localhost","root","","ecommerce");
        $email=$_SESSION['email'];
        $user_query= " SELECT `uid`, `email` FROM `users` WHERE email = '$email' ";
        $user_result = mysqli_query($con, $user_query);
        $user_row =  mysqli_num_rows($user_result);
        while($user_id = mysqli_fetch_array($user_result)){
$product_id = $_GET['pid'];
$query = " SELECT confirmation FROM users_products WHERE product_id='$product_id' and user_id = '".$user_id['uid']."' ";
$result = mysqli_query($con, $query);
$row = mysqli_num_rows($result);
while($status = mysqli_fetch_array($result)){
    $add = $status['confirmation'];
    if($add=='Added to cart'){
        header("location: products.php?message=<script>alert('Already in Cart');</script>");
    }
}
}
?> 