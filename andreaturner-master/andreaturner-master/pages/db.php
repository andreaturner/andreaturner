<?php

    $username = "pisrael_user";
    $password = '!!user1960';
    $hostname = "localhost";
    $database = "pisrael_grcc";
    
    $cnxn = @mysqli_connect($hostname, $username, $password, $database)
        or die("Error connecting to database:".
        mysqli_connect_error());
        
    echo 'Connected to database!';
    
?>