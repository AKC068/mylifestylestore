<?php
    require('includes/common.php');
    if (isset($_SESSION['email'])) 
    { 
        header('location: products.php'); 
    }
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
        
        <title>Login  | Lifestyle Store</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="newcss.css" type="text/css">
        
    </head>
    <body>
        <?php
            include('includes/header.php');
        ?>
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary ">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning text_styling" >Login to make a purchase</p>
                            <form action="includes/login_submit.php" method="POST">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" class="form-control input-sm" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="user_password" placeholder="Password" class="form-control input-sm" pattern=".{6,}">
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-sm" name="Login" data-dismiss="modal">Login</button><br>
                            <div class="form-group">
                                <p><a href="#" class="text_styling">Forgot Password?</a></p>
                            </div>
                            <div>
                                    <?php
                                        if(isset($_GET['message'])){
                                            echo $_GET['message'];
                                        }
                                    ?>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer gap">
                            <h6>Don't have an account?<a href="signup.php" class="link"> Register</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include('includes/footer.php');
        ?>
    </body>
</html>
