<?php
    $code = $_POST['code'];
    $CODE = "OFF";

    if($code==$CODE){
        $m=TRUE;
        header("location:cart2.php?m1=".$m);
    }else{
       // else{ 
        header("location:cart2.php?m2=<div class='alert alert-success' style='margin: 15px 0px 0px 0px;'>Invalid Code!!!</div>");
                
        //$m=FALSE;
       // header("location:cart2.php?m1=".$m);
    }
?>
