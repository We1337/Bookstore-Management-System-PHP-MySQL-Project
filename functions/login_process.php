<?php
    session_start();

    if (!empty($_POST)) 
    {
        extract($_POST);

        $_SESSION['error'] = array();

        // Check if username or password is empty
        if (empty($username)) 
        {
            $_SESSION['error'][] = "Please enter a user ID or Email";
            header("Location: ../login.php");
            exit();
        } 
        else 
        {
            if (empty($password)) 
            {
                $_SESSION['error'][] = "Please enter a password";
                header("Location: ../login.php");
                exit();
            } 
            else 
            {
                include("../includes/connection.php");

                // Query the database to check for valid credentials
                $query_username = "SELECT * FROM `register_table` WHERE `register_user_name` = '$username' OR `register_email` = '$username'";
                $query_password = "SELECT * FROM `register_table` WHERE `register_password` = '$password'";

                $result_username = mysqli_query($connection_database, $query_username);
                $result_password = mysqli_query($connection_database, $query_password);

                $value_of_username = mysqli_fetch_assoc($result_username);
                $value_of_password = mysqli_fetch_assoc($result_password);

                if (!empty($value_of_username)) 
                {
                    if(!empty($value_of_password)) 
                    {
                        // User information
                        $_SESSION['client']['username'] = $value_of_username['register_user_name'];
                        $_SESSION['client']['id'] = $value_of_username['register_id'];
                        $_SESSION['client']['status'] = true;
                        $_SESSION['message']['success'] = 'Welcome!';

                        header("Location: ../index.php");
                        exit();
                    } 
                    else 
                    {
                        $_SESSION['error'][] = "Wrong password";
                        header("Location: ../login.php");
                        exit();
                    }
                } 
                else 
                {
                    $_SESSION['error'][] = "Wrong user ID or Email";
                    header("Location: ../login.php");
                    exit();
                }
            }
        }
    } 
    else 
    {
        // No form submission data, redirect to login page
        header("Location: ../login.php");
        exit();
    }
?>
