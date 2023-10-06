<?php
    session_start();

    // Check if the form has been submitted
    if (!empty($_POST)) 
    {
        // Extract form data into variables
        extract($_POST);
    
        // Initialize an array to store error messages
        $_SESSION['error'] = array();

        // Validate Full Name
        if (empty($full_name)) 
        {
            $_SESSION['error'][] = "Please enter full name";
        }

        // Validate Mobile Number
        if (empty($mobile_number)) 
        {
            $_SESSION['error'][] = "Please enter mobile number";
        } 
        else if (!empty($mobile_number))
        { 
            if (!is_numeric($mobile_number)) 
            {
                $_SESSION['error'][] = "Please enter mobile number in digits";
            }
        }

        // Validate Message
        if (empty($message)) 
        {
            $_SESSION['error'][] = "Please enter message";
        }	

        // Validate E-Mail Address
        if (empty($email)) 
        {
            $_SESSION['error'][] = "Please enter email";
        }

        // Check if there are any errors
        if (!empty($_SESSION['error'])) 
        {
            // Redirect to the contact page with an error message
            header("Location: ../contact.php");
            exit();
        } 
        else 
        {
            // Include a database connection
            include("../includes/connection.php");

            // Get the current timestamp
            $time = time();
            $user_actual_id = (int)$_SESSION['client']['id'];

            // Insert contact form data into the database
            $query = "INSERT INTO `contact_table`(`contact_full_name`, `contact_actual_id`, `contact_mobile_number`, `contact_email`, `contact_message`, `contact_time`) VALUES ('$full_name', $user_actual_id, '$mobile_number', '$email', '$message', '$time')";

            mysqli_query($connection_database, $query);

            // Redirect to the index page with a success message
            $_SESSION['message']['success'] = "Message sended for contact";
            header("Location: ../index.php");
            exit();
        }
    } 
    else 
    {
        // If the form was not submitted, redirect to the contact page with an error message
        header("Location: ../contact.php");
        exit();
    }
?>