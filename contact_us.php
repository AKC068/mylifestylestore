<?php
    require('includes/common.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <title>Contact Us | Lifestyle Store</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="newcss.css" type="text/css">
        
    </head>
    
    <body>
        <?php
            include ('includes/header.php');
        ?>
    <!-- Header End -->

    <!-- Main -->
        <div class="content">
          <div class="container">
            
              <div class="row" style="margin-top: 80px;">
              <div class="col-md-8">
                  <h2 class="p-bold">Live Support</h2>
                <div style="padding: 10px 0;">
                <h4>24 Hours | 7 Days a Week | 365 Days a Year - Live Technical Support</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci maiores maxime expedita voluptatibus? Quam, cumque cupiditate laboriosam ducimus optio neque repudiandae vero sint nulla ipsum facilis earum consequuntur eum quo. voluptate obcaecati eveniet suscipit provident animi voluptatem placeat doloremque facere maxime totam nostrum necessitatibus cupiditate in corrupti quidem, explicabo saepe. Dolorem aut odit quo qui veniam!</p>
              </div>
              </div>

              <div class="col-md-4">
                  <img src="./imjproj/contact-us.png" style="height: 250px; width: 269px;"class="img-responsive" alt="Live Support">
              </div>
            </div>

            <div class="row">
              <div class="col-md-7">
              <h2 class="p-bold">Contact Us</h2>
              <div style="padding: 10px 0;">
              <form action="#" method="POST">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"  required>
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                  <input type="email" name="email" class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="message" cols="85" class="form-control" rows="10" required></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
               </form>
                  <?php if(!empty($_POST['name']) || !empty($_POST['email']) || !empty($_POST['message'])){
                echo  "<div class='alert alert-success' style='margin: 15px 0px 15px 0px;'>Thanks for your Feedback!<br>It will highly appreciated. We will soon contact you.</div>";
                } ?>
              </div>
              </div>

              <div class="col-md-5">
                <div style="padding-left: 12px;">
                  <h2 class="p-bold">Contact Information</h2>
                  <p class="text-muted">House No.:-20 Ram Lakha Nivas,</p>
                  <p class="text-muted">Chitraguptnagar Kankarbaghn Patna : 800020,</p>
                  <p class="text-muted">INDIA</p>
                  <p class="text-muted"> <span class = "glyphicon glyphicon-phone-alt"></span> : +91-90000-00000</p>
                  <p class="text-muted"><span class = "glyphicon glyphicon-envelope"></span> : lifestyle_store@shoppee.com</p>
                  <p class="text-muted">Follow Us On : <br><i class="fa fa-instagram" style="font-size:25px;"></i><a href="#"></a><br> <i class="fa fa-facebook-square" style="font-size:25px;"></i><a href="#"></a> </p>                 
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

