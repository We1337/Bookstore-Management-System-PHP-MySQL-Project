<?php
    
    $dbServer = "localhost";
    $dbUsername = "root";
    $dbPassword = "dedsec44678!";
    $dbName = "webservicebook";

    $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }