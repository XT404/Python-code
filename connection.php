<?php

    $con=mysqli_connect('localhost','root','','test');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
    else{
        //echo"CONNCET";
    }
?>