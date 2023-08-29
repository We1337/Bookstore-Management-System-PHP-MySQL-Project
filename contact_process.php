<?php
	
	session_start();

	if(!empty($_POST))
	{
		extract($_POST);
		$_SESSION['error'] = array();

		if(empty($fnm))
		{
			$_SESSION['error']['fnm'] = "Please enter Full Name";
		}
		
		if(empty($mno))
		{
			$_SESSION['error']['mno'] = "Please enter Mobile Number";
		}
		else if(!empty($mno))
		{
			if(!is_numeric($mno))
			{
				$_SESSION['error']['mno'] = "Please Enter Numeric Mobile Number";
			}
		}

		if(empty($msg))
		{
			$_SESSION['error']['msg'] = "Please enter Message";
		}	

		if(empty($email))
		{
			$_SESSION['error']['email'] = "Please enter E-Mail ID";
		}

		if(!empty($error))
		{
			header("Location:contact.php?message=error");
			exit;
		}
		else
		{
			include("includes/connection.php");

			$t = time();

			$q = "INSERT INTO contact(c_fnm, c_mno, c_email, c_msg, c_time) VALUES ('$fnm', '$mno', '$email', '$msg', '$t')";

			mysqli_query($link, $q);

			header("Location:index.php?message=success");
			exit;
		}
	}
	else
	{
		header("location:contact.php?message=error");
		exit;
	}
?>