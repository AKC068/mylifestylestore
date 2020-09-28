<?php
    require('includes/common.php');
    if (isset($_SESSION['email'])) 
    { 
        header('location: products.php'); 
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <title>Sign Up | Lifestyle Store</title>
        
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
                    <h2>SIGN UP</h2>       
                    
                    <form action="includes/signup_script.php" method="POST">
                       
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email" class="form-control input-sm" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                            <?php
                                if(isset($_GET['m1'])){
                                 echo $_GET['m1'] ;
                                }
                                ?>
                        </div>
                        <div class="form-group">
                            <input type="password" name="user_password" placeholder="Password" class="form-control input-sm" pattern=".{6,}">
                            <?php
                                if(isset($_GET['m3'])){
                                 echo $_GET['m3'] ;
                                }
                                ?>
                            
                        </div>
                        <div class="form-group">
                            <input type="text" name="first_name" placeholder="Name" class="form-control input-sm">
                            
                        </div>
                        <div class="form-group">
                            <input type="number" name="contact" placeholder="Contact" class="form-control input-sm">
                             <?php
                                if(isset($_GET['m2'])){
                                 echo $_GET['m2'] ;
                                }
                                ?>
                            
                        </div>
                        <div class="form-group">
                            <input type="text" name="city" placeholder="City" class="form-control input-sm">
                            
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" placeholder="Address" class="form-control input-sm">
                        </div>
                        <?php
                                if(isset($_GET['m4'])){
                                 echo $_GET['m4'] ;
                                }
                                ?>
                        <button class="btn btn-primary btn-sm" name="submit">Submit</button>
                        <?php
                                if(isset($_GET['message'])){
                                 echo $_GET['message'] ;
                                }
                                ?>
                    </form>
                    
                </div>
            </div>
        </div>
        
        
        <?php
            include('includes/footer.php');
        ?>
    </body>         
</html>


