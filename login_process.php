<?php
    session_start();

    if (!empty($_POST)) {
        extract($_POST);
        $_SESSION['error'] = [];

        // Check if username or password is empty
        if (empty($username) || empty($password)) {
            $_SESSION['error'][] = "Please enter a User Name and Password";
            header("location: login.php");
        } else {
            include("includes/connection.php");

            // Query the database to check for valid credentials
            $query = "SELECT * FROM register WHERE register_full_name='$username' AND register_password='$password'";
            $res = mysqli_query($connection_database, $query);
            $row = mysqli_fetch_assoc($res);

            if (!empty($row)) {
                // Store user information in the session
                $_SESSION['client'] = [
                    'username' => $row['register_full_name'],
                    'id' => $row['register_id'],
                    'status' => true
                ];
                header("location: index.php?message=loginsuccess&username='$username'");
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
