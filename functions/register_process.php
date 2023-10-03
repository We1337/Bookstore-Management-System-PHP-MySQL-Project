<?php
    // Start a session
    session_start();

    // Check if the form has been submitted
    if (!empty($_POST)) 
    {
        // Extract form data into variables
        extract($_POST);
        
        // Initialize an array to store error messages
        $_SESSION['error'] = array();

        // Validate Full Name
        if (empty($fullname)) 
        {
            $_SESSION['error']['fullname'] = "Please enter Full Name";
        }

        // Validate User Name
        if (empty($username)) 
        {
            $_SESSION['error']['username'] = "Please enter User Name";
        }

        // Validate Password
        if (empty($password) || empty($confirm_password)) 
        {
            $_SESSION['error']['password'] = "Please enter Password";
        } 
        else if ($password != $confirm_password) 
        {
            $_SESSION['error']['password'] = "Password isn't Match";
        } 
        else if (strlen($password) < 8) 
        {
            $_SESSION['error']['password'] = "Please Enter Minimum 8 Digit Password";
        }

        // Validate E-Mail Address
        if (empty($email)) 
        {
            $_SESSION['error']['email'] = "Please enter E-Mail Address";
        } 
        else if (!preg_match("/^[a-z0-9]+@[a-z\.]+$/i", $email)) 
        {
            $_SESSION['error']['email'] = "Please Enter Valid E-Mail Address";
        }

        // Validate Security Answer
        if (empty($answer)) 
        {
            $_SESSION['error']['answer'] = "Please Enter Security Answer";
        }

        // Validate Contact Number
        if (empty($contact_number)) 
        {
            $_SESSION['error']['contact_number'] = "Please Contact Number";
        } 
        elseif (!is_numeric($contact_number)) 
        {
            $_SESSION['error']['contact_number'] = "Please Enter Contact Number in Numbers";
        }

        // Check if there are any errors
        if (!empty($error)) 
        {
            foreach ($error as $errors) 
            {
                echo '<font color="red">' . $errors . '</font><br>';
            }
        }

        // If there are validation errors, redirect back to the registration page
        if (!empty($_SESSION['error'])) 
        {
            header("location:register.php");
        } 
        else 
        {
            // Include a database connection
            include("../includes/connection.php");

            // Get the current timestamp
            $time = time();

            // Insert user data into the database
            $query = "INSERT INTO `register_table`(`register_full_name`, `register_user_name`, `register_password`, `register_contact_number`, `register_email`, `register_question`, `register_answer`, `register_time`) VALUES ('$fullname', '$username', '$password', '$contact_number', '$email', '$question', '$answer', '$time')";

            mysqli_query($connection_database, $query);

            // Redirect to the registration success page
            header("location: ../register.php?registered");
        }
    } 
    else 
    {
        // If the form was not submitted, redirect to the registration page
        header("location:../register.php");
    }
?>
