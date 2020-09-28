
<?php 
    $con = mysqli_connect('localhost','root','2019ugec068','ecommerce')or die(mysqli_error($con));
    if(!isset($_SESSION['email'])){
        session_start();
    }
?>