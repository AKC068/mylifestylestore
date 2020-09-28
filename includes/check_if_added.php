<?php
    
    function check_if_added_to_cart($product_id)
    {
        $con = mysqli_connect("localhost","root","","ecommerce");
        $email=$_SESSION['email'];
        $user_query= " SELECT `uid`, `email` FROM `users` WHERE email = '$email' ";
        $user_result = mysqli_query($con, $user_query);
        $user_row =  mysqli_num_rows($user_result);
        while($user_id = mysqli_fetch_array($user_result)){
        $query = " SELECT * FROM users_products WHERE product_id='$product_id' and user_id = '".$user_id['uid']."' ";
        $result = mysqli_query($con, $query);
        $row = mysqli_num_rows($result);
        if($row > 0)
        {
            while($item = mysqli_fetch_array($result)){
                return true;
            }    
        }
        else 
        {
            return false;
        }
        }
    }
      
?>


