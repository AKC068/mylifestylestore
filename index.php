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
        
        <title>Lifestyle Store</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="newcss.css" type="text/css">
        
    </head>
    
    <body>
        <?php
        include('includes/header.php');
        ?>
        <div id="banner_image">
            <div class="container">
                
                <center>
                <div class="banner_content">
                    <h1>We sell lifestyle</h1>
                    <h5>Flat 25% OFF on premium brands</h5>
                    <p><a href="login.php" class="btn btn-danger btn-lg active">Shop Now</a></p>
                    <?php if(isset($_GET['message'])){
                           echo $_GET['message'];
                    } ?>
                </div> 
                </center>    
            </div>
        </div>
        <?php
        include('includes/footer.php');
        ?>
    </body> 
</html>
