<?php
    require('includes/common.php');
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <title>Products | Lifestyle Store</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="newcss.css" type="text/css">
        
    </head>
    
    <body>
        <?php
        include('includes/header.php');
        include('includes/check_if_added.php');
        if(isset($_SESSION['email'])){
            $user_id = $_SESSION['user_id'];
            $email = $_SESSION['email'];
        }
        ?>
        <div class="container">
            <div class="jumbotron" style="margin-top: 80px;">
                <?php echo "<h2>$email</h2>" ?>
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div  class="thumbnail">
                        <img src="imjproj/5.jpg" alt="camera" >
                        <center>
                        <div class="caption">
                            <h3>Cannon EOS</h3>
                            <p>Price: Rs.36000.00</p>
                            
                               <?php 
                                 //We have created a function to check whether this particular product is added to cart or not. 
                                if(check_if_added_to_cart(1)) {
                                    echo '<a href="confirm.php?pid=1" class="btn btn-success btn-block">Added To Cart</a>';
                                    
                                    if(isset($_GET['message'])){
                                    echo $_GET['message'];
                                    }
                                    
                                } else {
                                    
                                    if(isset($_GET['message'])){
                                    echo $_GET['message'];
                                    }?>
                            
                                    <a href="includes/cart_add.php?pid=1" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php }                                
                              ?> 
                        </div>
                        </center>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-6">
                    <div  class="thumbnail">
                        <img src="imjproj/2.jpg" alt="camera">
                        <center>
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs.40000.00</p>
                            <?php 
                                 //We have created a function to check whether this particular product is added to cart or not. 
                                if(check_if_added_to_cart(2)) {
                                    echo '<a href="confirm.php?pid=2" class="btn btn-success btn-block">Added To Cart</a>';
                                } else {?>
                                    <a href="includes/cart_add.php?pid=2" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php }                                
                              ?> 
                        </div>
                        </center>
                    </div>
                </div> <div class="col-md-3 col-sm-6">
                    <div  class="thumbnail">
                        <img src="imjproj/3.jpg" alt="camera">
                        <center>
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs.50000.00</p>
                             <?php 
                                 //We have created a function to check whether this particular product is added to cart or not. 
                                if(check_if_added_to_cart(3)) {
                                    echo '<a href="confirm.php?pid=3" class="btn btn-success btn-block">Added To Cart</a>';
                                } else {?>
                                    <a href="includes/cart_add.php?pid=3" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php }                                
                              ?> 
                        </div>
                        </center>
                    </div>
                </div> <div class="col-md-3 col-sm-6">
                    <div  class="thumbnail">
                        <img src="imjproj/4.jpg" alt="camera">
                        <center>
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price: Rs.80000.00</p>
                            <?php 
                                 //We have created a function to check whether this particular product is added to cart or not. 
                                if(check_if_added_to_cart(4)) {
                                    echo '<a href="confirm.php?pid=4" class="btn btn-success btn-block">Added To Cart</a>';
                                } else {?>
                                    <a href="includes/cart_add.php?pid=4" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                    
                                <?php }                                
                              ?> 
                        </div>
                        </center>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div  class="thumbnail">
                        <img src="imjproj/9.jpg" alt="watch">
                        <center>
                        <div class="caption">
                            <h3>Titan Model #301</h3>
                            <p>Price: Rs.13000.00</p>
                            <?php 
                                 //We have created a function to check whether this particular product is added to cart or not. 
                                if(check_if_added_to_cart(5)) {
                                    echo '<a href="confirm.php?pid=5" class="btn btn-success btn-block">Added To Cart</a>';
                                } else {?>
                                    <a href="includes/cart_add.php?pid=5" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php }                                
                              ?> 
                        </div>
                        </center>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-6">
                    <div  class="thumbnail">
                        <img src="imjproj/10.jpg" alt="watch">
                        <center>
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price: Rs.3000.00</p>
                            <?php 
                                 //We have created a function to check whether this particular product is added to cart or not. 
                                if(check_if_added_to_cart(6)) {
                                    echo '<a href="confirm.php?pid=6" class="btn btn-success btn-block">Added To Cart</a>';
                                } else {?>
                                    <a href="includes/cart_add.php?pid=6" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php }                                
                              ?> 
                        </div>
                        </center>
                    </div>
                </div> <div class="col-md-3 col-sm-6">
                    <div  class="thumbnail">
                        <img src="imjproj/11.jpg" alt="watch">
                        <center>
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price: Rs.8000.00</p>
                            <?php 
                                 //We have created a function to check whether this particular product is added to cart or not. 
                                if(check_if_added_to_cart(7)) {
                                    echo '<a href="confirm.php?pid=7" class="btn btn-success btn-block">Added To Cart</a>';
                                } else {?>
                                    <a href="includes/cart_add.php?pid=7" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php }                                
                              ?> 
                        </div>
                        </center>
                    </div>
                </div> <div class="col-md-3 col-sm-6">
                    <div  class="thumbnail">
                        <img src="imjproj/12.jpg" alt="watch">
                        <center>
                        <div class="caption">
                            <h3>Faber Luba #111</h3>
                            <p>Price: Rs.18000.00</p>
                            <?php 
                                 //We have created a function to check whether this particular product is added to cart or not. 
                                if(check_if_added_to_cart(8)) {
                                    echo '<a href="confirm.php?pid=8" class="btn btn-success btn-block">Added To Cart</a>';
                                } else {?>
                                    <a href="includes/cart_add.php?pid=8" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php }                                
                              ?> 
                        </div>
                        </center>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div  class="thumbnail">
                        <img src="imjproj/8.jpg" alt="shirt">
                        <center>
                        <div class="caption">
                            <h3>H&W</h3>
                            <p>Price: Rs.800.00</p>
                            <?php 
                                 //We have created a function to check whether this particular product is added to cart or not. 
                                if(check_if_added_to_cart(9)) {
                                    echo '<a href="confirm.php?pid=9" class="btn btn-success btn-block">Added To Cart</a>';
                                } else {?>
                                    <a href="includes/cart_add.php?pid=9" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php }                                
                              ?> 
                        </div>
                        </center>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-6">
                    <div  class="thumbnail">
                        <img src="imjproj/6.jpg" alt="shirt">
                        <center>
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>Price: Rs.1000.00</p>
                            <?php 
                                 //We have created a function to check whether this particular product is added to cart or not. 
                                if(check_if_added_to_cart(10)) {
                                    echo '<a href="confirm.php?pid=10" class="btn btn-success btn-block">Added To Cart</a>';
                                } else {?>
                                    <a href="includes/cart_add.php?pid=10" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php }                                
                              ?> 
                        </div>
                        </center>
                    </div>
                </div> <div class="col-md-3 col-sm-6">
                    <div  class="thumbnail">
                        <img src="imjproj/13.jpg" alt="shirt">
                        <center>
                        <div class="caption">
                            <h3>Johan Zok</h3>
                            <p>Price: Rs.1500.00</p>
                            <?php 
                                 //We have created a function to check whether this particular product is added to cart or not. 
                                if(check_if_added_to_cart(11)) {
                                    echo '<a href="confirm.php?pid=11" class="btn btn-success btn-block">Added To Cart</a>';
                                } else {?>
                                    <a href="includes/cart_add.php?pid=11" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php }                                
                              ?> 
                        </div>
                        </center>
                    </div>
                </div> <div class="col-md-3 col-sm-6">
                    <div  class="thumbnail">
                        <img src="imjproj/14.jpg" alt="shirt">
                        <center>
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price: Rs.1300.00</p>
                            <?php 
                                 //We have created a function to check whether this particular product is added to cart or not. 
                                if(check_if_added_to_cart(12)) {
                                    echo '<a href="confirm.php?pid=12" class="btn btn-success btn-block">Added To Cart</a>';
                                } else {?>
                                    <a href="includes/cart_add.php?pid=12" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php }                                
                              ?>           
                        </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>
