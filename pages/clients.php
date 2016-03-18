<?php

    // turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    // Connect to the database
    require '../../db.php';
    
    // Define the INSERT query
    $sql = "INSERT INTO clients (
                fname,
                lname,
                email,
                comments
                ORDER BY lname";
                
    
    // Send the query to the database
    $result = @mysqli_query($cnxn, $sql);
    
    // Process the rows
    while ($row = mysqli_fetch_assoc($result)) {
        
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $comments = $row['comments'];
        
        
        echo "<p>$fname  $lname  $email $comments</p>";
    }

?>


