<?php

    $host = "localhost";
    $user =  "root";
    $password = "";
    $db = "rest_api";
    // connecting to database : 
    $connect = mysqli_connect($host, $user, $password, $db);
    // if there is a problem with connection
    if(!$connect){
        die("Connection Error : " . mysqli_connect_error());
    }