<?php
// Start or resume the PHP session
session_start();

if (!empty($_POST)) {
    // Initialize an array to store error messages
    $_SESSION['error'] = [];

    // Extract data from the POST request
    extract($_POST);

    // Check if the 'unm' (User Name) field is empty
    if (empty($unm)) {
        $_SESSION['error']['unm'] = "Please enter User Name";
    } else {
        // If 'unm' is not empty, attempt to retrieve data from the database
        include("includes/connection.php");

        // Query the database to find a matching 'register_user_name' and 'register_answer'
        $qeury = "SELECT * FROM `register_table` WHERE `register_user_name` = '$unm' AND `register_answer` = '$answer'";
        $result_user_name = mysqli_query($connection_database, $qeury);
        $row = mysqli_fetch_assoc($result_user_name);

        // Check if 'row' is empty, indicating no matching user
        if (empty($row)) {
            $_SESSION['error']['unm'] = "Wrong User Name";
        }

        // Check if the 'answer' (Security Answer) field is empty
        if (empty($answer)) {
            $_SESSION['error']['answer'] = "Please enter Security Answer";
        }

        // Check if the 'pwd' (New Password) and 'cpwd' (Confirm Password) fields are empty
        if (empty($pwd) || empty($cpwd)) {
            $_SESSION['error']['pwd'] = "Please enter New Password";
        } elseif ($pwd != $cpwd) {
            // Check if 'pwd' and 'cpwd' do not match
            $_SESSION['error']['pwd'] = "Password isn't Match";
        }

        $update_password = "UPDATE `register_table` SET `register_password` = '$pwd' WHERE `register_user_name` = '$unm'";
        $result_user_update = mysqli_query($connection_database, $update_password);

        if($result_user_update) {
            header("location: forget_password.php");
            exit();
        } else {
            header("location: login.php");
            exit();
        }
    }

    // If there are any errors, redirect to 'forget_password.php'
    if (!empty($_SESSION['error'])) {
        header("location: forget_password.php");
    }
} else {
    // If the POST request is empty, redirect to 'forget_password.php'
    header("location: forget_password.php");
}
?>