<?php

/*
 *  Paige Israel
 *  IT 305
 *  February 12, 2016
 *  http://pisrael.greenrivertech.net/305/SQL/students.php
 *  Display the students in the GRCC database
*/

    // turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    // Connect to the database
    require '../../db.php';
    
    // Define the SELCET query
    $sql = "SELECT * FROM student
                ORDER BY last";
                
    
    // Send the query to the database
    $result = @mysqli_query($cnxn, $sql);
    
    // Process the rows
    while ($row = mysqli_fetch_assoc($result)) {
        
        $sid = $row['sid'];
        $last = $row['last'];
        $first = $row['first'];
        $birthdate = $row['birthdate'];
        $gpa = $row = $row['gpa'];
        
        echo "<p>$sid  $last  $first $birthdate $gpa</p>";
    }

?>


