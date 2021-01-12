
<?php 
    $con = mysqli_connect('remotemysql.com','FzpqkBFCAV','GyK59H89mQ','FzpqkBFCAV')or die(mysqli_error($con));
    if(!isset($_SESSION['email'])){
        session_start();
    }
?>
