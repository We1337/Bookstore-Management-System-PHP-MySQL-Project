<?php
    session_start();

    if (!empty($_POST)) {
        // Extract form data into variables
        extract($_POST);

        // If 'unm' is not empty, attempt to retrieve data from the database
        include("../includes/connection.php");

        // Query the database to find a matching 'register_user_name'
        $query = "SELECT * FROM `register_table` WHERE `register_user_name` = '$username'";
        $result_user_name = mysqli_query($connection_database, $query);
        $row = mysqli_fetch_assoc($result_user_name);

        // Check if 'row' is empty, indicating no matching user
        if (!empty($row)) 
        {
            $secret_value = $row['register_answer'];

            if(empty($username)) 
            {
                $_SESSION['error'][] = "Please enter user name";
            }

            // Check if the 'answer' (Security Answer) field is empty
            if (empty($answer)) 
            {
                $_SESSION['error'][] = "Please enter security answer";
            } 
            else if ($row['register_answer'] !== $answer && $row['register_question'] !== $question) 
            {
                // Check if 'answer' does not match the value in the database
                $_SESSION['error'][] = "Incorrect security answer";
            }

            // Check if the 'pwd' (New Password) and 'cpwd' (Confirm Password) fields are empty
            if (empty($password) || empty($confirm_password)) 
            {
                $_SESSION['error'][] = "Please enter new password";
            } 
            else if ($password != $confirm_password) 
            {
                // Check if 'pwd' and 'cpwd' do not match
                $_SESSION['error'][] = "Passwords don't match";
            }
            else if (strlen($password) <= 7)
            {
                $_SESSION['error'][] = "Please enter minimum 8 letters password";
            }

            if ($secret_value == $answer) 
            {

                if (!empty($error)) 
                {
                    header("location: ../forget_password.php");
                    exit();
                } 
                else 
                {
                    // If there are no errors, update the password
                    $update_password = "UPDATE `register_table` SET `register_password` = '$password' WHERE `register_user_name` = '$username'";
                    $result_user_update = mysqli_query($connection_database, $update_password);

                    if ($result_user_update) 
                    {
                        $_SESSION['message']['success'] = "New password updated";
                        header("location: ../login.php");
                        exit();
                    } 
                    else 
                    {
                        $_SESSION['error'][] = "Error updating password";
                        header("location: ../forget_password.php");
                        exit();
                    }
                }
            } 
            else 
            {
                header("location: ../forget_password.php");
                exit();
            }
        } 
        else 
        {
            $_SESSION['error'][] = "Wrong information given";
            header("location: ../forget_password.php");
            exit();
        }
    } 
    else 
    {
        // If the form was not submitted, redirect to the contact page with an error message
        header("Location: ../forget_password.php");
        exit();
    }
?>
