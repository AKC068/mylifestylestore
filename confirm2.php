<?php
require('includes/common.php');
$email = $_SESSION['email'];
$query= " SELECT `uid`, `email` FROM `users` WHERE email = '$email' ";
    $result = mysqli_query($con, $query);
    $row =  mysqli_num_rows($result);
    if($row > 0 ){
        while($item = mysqli_fetch_array($result)){
        $product_query = " SELECT product_id FROM users_products WHERE user_id ='".$item['uid']."' ";
        $query_result = mysqli_query($con, $product_query);
        $product_row = mysqli_num_rows($query_result);
        while($status = mysqli_fetch_array($query_result))
        {
            $query_update = "UPDATE users_products SET confirmation = 'Confirmed' WHERE product_id = '".$status['product_id']."'";            
            $result_update = mysqli_query($con, $query_update) or die(mysqli_error($con));
        }
        }
    }
?>