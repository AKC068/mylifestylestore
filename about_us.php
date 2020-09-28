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
        
        <title>About Us | Lifestyle Store</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="newcss.css" type="text/css">
        
    </head>
    
    <body>
        <?php
            include ('includes/header.php');
        ?>
        <div class="content">
            <div class="container">
              
            <div class="row" style="margin-top: 70px;">
                <div class="col-md-4">
                  <h3 style="font-weight: 400; font-style: oblique;" class="text-uppercase">Who We Are</h3>                  
                  <div style="padding: 10px 0;">
                      <img src="./imjproj/who-we-are.png" alt="who we are" class="img-responsive img-circle" style="margin: auto 0px 20px 30px;">  
                  <p class="text-muted about-p">Lifestyle store is an Indian online platform for the people seeking for their perfect belongings like watches, cameras or outfits.
                      <br><br>
                      It is a web page designed by a student of NIT Jamshedpur- Ayush Kumar Chaudhary. It is a newly created online hub to satisfy everyone with their top quality products. It showcases watches that suit best to your personality, cameras which can hold your memories, outfits that will make you different from the rest and many other products as per your requirements. We are expecting it to rise as the most visited shopping site. Your support is always important.</p>
                  </div>
                </div>

                <div class="col-md-4">
                    <h3 style="font-weight: 400; font-style: oblique;">OUR HISTORY</h3>
                  <div style="padding: 10px 0;">
                      <p class="p-bold p-blue" style="color: blue;">2020 -</p>
                  <p class="text-muted">Currently this site has its branches only in India but with the upcoming years we are expecting to establish the connections with other nations too. It would be a great milestone and we are working on it day and night.</p>
                  </div>
                </div>

                <div class="col-md-4">
                  <h3 style="font-weight: 400; font-style: oblique;"">OPPURTUNITIES</h3>
                  <div style="padding: 10px 0;">
                    <p class="p-bold">Availabe Roles</p>
                    <div class="box-padding-left" style="padding-left: 20px;">
                      <p class="text-muted">
                        1. Jr./Sr. Web Developer<br>
                        2. Graphic Designer<br>
                        3. Web Designer<br>
                        4. Front End Developer<br>
                        5. Back End Developer<br>
                        6. Database Admin<br>
                        7 .System Admin<br>
                      </p>
                    </div>
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

