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
        
        <title>Success | Lifestyle Store</title>
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="newcss.css" type="text/css">
        
    </head>
    <body>
        <?php
            include('includes/header.php');
            require 'confirm2.php';
        ?>
        <div class="container" style="margin: 200px 0 160px 0;" >
            
                <div class="col-xs-10 col-xs-offset-2">
                    <center>
                    <div class="jumbotron">
                        <div class="panel-body">
                          
                            <h2 class="text-center">Thank You for Ordering from Lifestyle Store!</h2>
                            <h3 class="text-center">Your order is confirmed. <span class="glyphicon glyphicon-thumbs-up"></span></h3>
                            <h4 class="text-center"><a href="products.php" class="link">Click here</a> to purchase any other item. </h4>
                          
                        </div>
                    </div>
                    </center>
          
            </div>
        </div>
        <?php
            include('includes/footer.php');
        ?>
    </body>
</html>

