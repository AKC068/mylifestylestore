<?php
    require 'common.php';
    
    $product_id = $_GET['pid'];
    $email=$_SESSION['email'];
    $query= " SELECT `uid`, `email` FROM `users` WHERE email = '$email' ";
    $result = mysqli_query($con, $query);
    $row =  mysqli_num_rows($result);
   
    if($row > 0 ){
        while($item = mysqli_fetch_array($result)){
        $product_id = $_GET['pid'];
        $query = " INSERT INTO users_products (user_id,product_id,confirmation) VALUES (".$item['uid'].",$product_id,'Added to cart') ";
        $run = mysqli_query($con, $query);
        if($run){
            header("location: ../products.php?message=<script>alert('Added to Cart Successfully');</script>");
        }
        else {
            header("location: ../products.php?message=<script>alert('Not added to cart. Please try again.');</script>");
        }
        }
    }
    
?>
