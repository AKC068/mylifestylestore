<?php
    require('includes/common.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <title>Cart | Lifestyle Store</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="newcss.css" type="text/css">
        
    </head>
    
    <body>
        <?php
        include('includes/header.php');
        
        ?>
        <div class="container" style="margin-top: 80px;"> 
            <!-- discount code -->
            <form action="discount.php" class="form-inline" method="POST"> 
            <div class="form-group">
                <input type="password" class="form-control" name="code" placeholder="Enter Discount Code Here">                
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
            </form>
            <?php if(isset($_GET['m2'])){
                  echo $_GET['m2'];
            } ?>
            <table class="table table-striped table-responsive">
        <?php
        if(isset($_GET['m1'])){
            $disc = $_GET['m1'];
        }
        if(isset($_GET['message'])){
            echo $_GET['message'];
        }
        $sum = 0;
        $email = $_SESSION['email'];
        $user_query = " SELECT `uid`, `email` FROM `users` WHERE email = '$email' ";
        $user_result = mysqli_query($con, $user_query);
        
        while($user = mysqli_fetch_array($user_result)){
        $query = " SELECT p.pid, p.product_name, p.Price, up.user_id FROM products p INNER JOIN users_products up ON p.pid = up.product_id WHERE up.user_id = '".$user['uid']."' ";
        $result = mysqli_query($con, $query) ;
        $row = mysqli_num_rows($result);
        if ($row >0) {
            ?>
            <thead>
                <tr>
                    <th><h4>Item Number</h4></th>
                    <th><h4>Item Name</h4></th>
                    <th><h4>Price</h4></th>
                    <th><h4></h4></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($item = mysqli_fetch_array($result)) {
                    $sum= $sum + $item['Price'];                                    
                    $id = $item['pid'];
                    echo "<tr><td>" . "#" . $item['pid'] . "</td><td>" . $item['product_name'] . "</td><td>Rs " . $item['Price'] . "</td><td><a href='includes/cart_remove.php?pid={$item['pid']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                    
                }
                if(isset($disc)){
                    ?> 
                        <div class='alert alert-success' style='margin: 15px 0px 0px 0px;'>Congratulations!!! You have availed 25% discount on Total. Click on Confirm Order to Purchase.</div> 
                    <?php
                    $sum = $sum - $sum * (0.25);
                }
                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                ?>
            </tbody>
            <?php
        } else {
            echo "<h3>"."<div style='margin-top: 80px; font-family: Poppins;'>Add items to the cart first!</div>"."</h3>";
        }
        }
        ?>
        
    </table>
    </div>
        <?php
        include('includes/footer.php');
        ?>
    </body>
</html>
