<?php
   
   $server = "localhost";
    $username = "root";
    $password = "";
    $db = "test";

    $con = mysqli_connect($server,$username,$password,$db);

    if($con){
        //echo "Connection Successfull";
    
    }
    else{
        echo "No connection";
    }
    ?>