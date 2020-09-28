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
        
        <title>Settings | Lifestyle Store</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="newcss.css" type="text/css">
        
    </head>
    
    <body>
        <?php
            include('includes/header.php');
        ?>
        <div class="container">
            <div class="row row_style" style="margin-bottom: 25%;">
                <div class="col-xs-4 col-xs-offset-4">
                    <h2>Change Password</h2>
                    <form action="includes/settings_script.php" method="POST">
                       <div class="form-group">
                           <label for="oldPassword">Old Password</label>
                           <input type="password" name="oldPassword"  class="form-control " required>
                        </div>
                        <div class="form-group">
                            <label for="newPassword">New Password</label>
                            <input type="password" name="newPassword" class="form-control " required>
                        </div>
                        <div class="form-group">
                            <label for="newPasswordRe">Re-type New Password</label>
                            <input type="password" name="newPasswordRe" class="form-control " required>
                        </div>
                        <?php 
                    if(isset($_GET['message'])){
                      echo $_GET['message'];
                    }                      
                    ?>
                    
                        <input type="submit" class="btn btn-primary btn-sm" value="Confirm">
                    </form>
                </div>
            </div> 
        </div>
        <?php
            include('includes/footer.php');
        ?>
    </body>        
</html>

