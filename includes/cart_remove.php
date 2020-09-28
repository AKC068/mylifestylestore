<?php
    require "common.php";
    if (isset($_GET['pid']) && is_numeric($_GET['pid'])) {
        $product_id = $_GET["pid"]; 
        $email = $_SESSION['email'];
        $user_query = " SELECT `uid`, `email` FROM `users` WHERE email = '$email' ";
        $user_result = mysqli_query($con, $user_query);
        
        while($user = mysqli_fetch_array($user_result)){
        $query = "DELETE FROM users_products WHERE product_id='$product_id' AND user_id='".$user['uid']."' ";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        header("location: ../cart2.php?message=<script>alert('Item has been removed from your wishlist!');</script>");
        }
    }
?>

