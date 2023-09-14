<?php
session_start();

if (!empty($_POST)) {
    extract($_POST);
    $_SESSION['error'] = [];

    // Check if username or password is empty
    if (empty($unm) || empty($pwd)) {
        $_SESSION['error'][] = "Please enter a User Name and Password";
        header("location: login.php");
    } else {
        include("includes/connection.php");

        // Query the database to check for valid credentials
        $q = "SELECT * FROM register WHERE r_unm='$unm' AND r_pwd='$pwd'";
        $res = mysqli_query($link, $q);
        $row = mysqli_fetch_assoc($res);

        if (!empty($row)) {
            // Store user information in the session
            $_SESSION['client'] = [
                'unm' => $row['r_fnm'],
                'id' => $row['r_id'],
                'status' => true
            ];
            header("location: index.php?message=loginsuccess&username='$unm'");
        } else {
            // Invalid username or password
            $_SESSION['error'][] = "Wrong Username or Password";
            header("location: login.php");
        }
    }
} else {
    // No form submission data, redirect to login page
    header("location: login.php");
}
?>
