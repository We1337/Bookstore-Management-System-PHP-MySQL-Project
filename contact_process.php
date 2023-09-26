<?php
    // Start a session
    session_start();

    // Check if the form has been submitted
    if (!empty($_POST)) {
        // Extract form data into variables
        extract($_POST);
    
        // Initialize an array to store error messages
        $_SESSION['error'] = array();

        // Validate Full Name
        if (empty($full_name)) {
            $_SESSION['error']['full_name'] = "Please enter Full Name";
        }

        // Validate Mobile Number
        if (empty($mobile_number)) {
            $_SESSION['error']['mobile_number'] = "Please enter Mobile Number";
        } elseif (!empty($mobile_number)) {
            // Check if Mobile Number is numeric
            if (!is_numeric($mobile_number)) {
                $_SESSION['error']['mobile_number'] = "Please Enter Numeric Mobile Number";
            }
        }

        // Validate Message
        if (empty($message)) {
            $_SESSION['error']['message'] = "Please enter Message";
        }	

        // Validate E-Mail Address
        if (empty($email)) {
            $_SESSION['error']['email'] = "Please enter E-Mail ID";
        }

        // Check if there are any errors
        if (!empty($error)) {
            // Redirect to the contact page with an error message
            header("Location: contact.php?message=error");
            exit();
        } else {
            // Include a database connection
            include("includes/connection.php");

            // Get the current timestamp
            $time = time();

            $phone_number = (int)$mobile_number;

            // Insert contact form data into the database
            $query = "INSERT INTO `contact_table`(`contact_full_name`, `contact_mobile_number`, `contact_email`, `contact_message`, `contact_time`) VALUES ('$full_name', '$phone_number', '$email', '$message', '$time')";

            mysqli_query($connection_database, $query);

            // Redirect to the index page with a success message
            header("Location: index.php?message=success");
            exit();
        }
    } else {
        // If the form was not submitted, redirect to the contact page with an error message
        header("Location: contact.php?message=error");
        exit();
    }
?>
