<?php
    session_start();

    include("../includes/connection.php");

    // Check if the form has been submitted
    if (!empty($_POST)) {
        // Extract form data into variables
        extract($_POST);

        $id = $_SESSION['client']['id'];
        $query = "SELECT * FROM `register_table` WHERE `register_id` = $id";
        $result_user_name = mysqli_query($connection_database, $query);
        $rows = mysqli_fetch_assoc($result_user_name);

        // Initialize an array to store error messages
        $_SESSION['error'] = array();

        // Validate Full Name
        if (empty($fullname)) {
            $_SESSION['error']['fullname'] = "Please enter Full Name";
        }

        // Validate User Name
        if (empty($username)) {
            $_SESSION['error']['username'] = "Please enter User Name";
        }

        // Validate Password
        if (empty($password)) {
            $_SESSION['error']['password'] = "Please enter Password";
        } else if (strlen($password) < 8) {
            $_SESSION['error']['password'] = "Please Enter Minimum 8 Digit Password";
        }

        // Validate E-Mail Address
        if (empty($email)) {
            $_SESSION['error']['email'] = "Please enter E-Mail Address";
        } else if (!preg_match("/^[a-z0-9]+@[a-z\.]+$/i", $email)) {
            $_SESSION['error']['email'] = "Please Enter Valid E-Mail Address";
        }

        // Validate Contact Number
        if (empty($contact)) {
            $_SESSION['error']['contact_number'] = "Please Enter Contact Number";
        } elseif (!is_numeric($contact)) {
            $_SESSION['error']['contact_number'] = "Please Enter Contact Number in Numbers";
        }

        if (!empty($rows['register_profile_picture']))
		{	
	 		$img = $rows['register_profile_picture'];
		}

		if (!empty($_FILES['file']['name'])) 
		{
			move_uploaded_file($_FILES['file']['tmp_name'], "../profile_img/" . $_FILES['file']['name']);
			$img = "profile_img/" . $_FILES['file']['name'];
		}	

        // If there are validation errors, redirect back to the registration page
        if (!empty($_SESSION['error'])) 
        {
            header("location: ../profile.php");
        } 
        else 
        {
            // Insert user data into the database
            $query = "UPDATE register_table SET register_full_name='$fullname', register_user_name='$username', register_password='$password', register_contact_number='$contact', register_email='$email', register_profile_picture='$img' WHERE register_id=$id";
        
            mysqli_query($connection_database, $query);

            header("location: ../profile.php?message=saved");
        }
    } 
    else 
    {
        header("location: ../profile.php");
    }
?>