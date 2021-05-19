<?php

    $serverName = "localhost";
    $username = "s3022041";
    $passsword = "irogyman";
    $database = "s3022041";


    // creating connnection
    $connection = mysqli_connect($serverName, $username, $passsword, $database);
    
    // checking connection

    if(!$connection){
        die("connection failed:" . mysqli_connect_error());
    }
    else{
       

        mysqli_set_charset($connection, 'utf8');
        //echo "hello welcome";
        

        
    }

    


?>