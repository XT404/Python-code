<?php

    $connection=mysqli_connect('localhost','root','','test');

    if(!$connection)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
    else{
        echo"CONNCET SUCCESSFUL";
    }
?>
