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
    if (empty($fnm)) {
        $_SESSION['error']['fnm'] = "Please enter Full Name";
    }

    // Validate User Name
    if (empty($unm)) {
        $_SESSION['error']['unm'] = "Please enter User Name";
    }

    // Validate Password
    if (empty($pwd) || empty($cpwd)) {
        $_SESSION['error']['pwd'] = "Please enter Password";
    } else if ($pwd != $cpwd) {
        $_SESSION['error']['pwd'] = "Password isn't Match";
    } else if (strlen($pwd) < 8) {
        $_SESSION['error']['pwd'] = "Please Enter Minimum 8 Digit Password";
    }

    // Validate E-Mail Address
    if (empty($email)) {
        $_SESSION['error']['email'] = "Please enter E-Mail Address";
    } else if (!preg_match("/^[a-z0-9]+@[a-z\.]+$/i", $email)) {
        $_SESSION['error']['email'] = "Please Enter Valid E-Mail Address";
    }

    // Validate Security Answer
    if (empty($answer)) {
        $_SESSION['error']['answer'] = "Please Enter Security Answer";
    }

    // Validate Contact Number
    if (empty($cno)) {
        $_SESSION['error']['cno'] = "Please Contact Number";
    } elseif (!is_numeric($cno)) {
        $_SESSION['error']['cno'] = "Please Enter Contact Number in Numbers";
    }

    // Check if there are any errors
    if (!empty($error)) {
        foreach ($error as $er) {
            echo '<font color="red">' . $er . '</font><br>';
        }
    }

    // If there are validation errors, redirect back to the registration page
    if (!empty($_SESSION['error'])) {
        header("location:register.php");
    } else {
        // Include a database connection
        include("includes/connection.php");

        // Get the current timestamp
        $t = time();

        // Insert user data into the database
        $q = "INSERT INTO register(r_fnm, r_unm, r_pwd, r_cno, r_email, r_question, r_answer, r_time) VALUES ('$fnm', '$unm', '$pwd', '$cno', '$email', '$question', '$answer', '$t')";

        mysqli_query($link, $q);

        // Redirect to the registration success page
        header("location:register.php?register");
    }
} else {
    // If the form was not submitted, redirect to the registration page
    header("location:register.php");
}
?>
