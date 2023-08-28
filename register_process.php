<?php
	
	session_start();

	if(! empty($_POST))
	{
		extract($_POST);
		$_SESSION['error'] = array();

		if(empty($fnm))
		{
			$_SESSION['error']['fnm'] = "Please enter Full Name";
		}

		if(empty($unm))
		{
			$_SESSION['error']['unm'] = "Please enter User Name";
		}

		if(empty($pwd) || empty($cpwd))
		{
			$_SESSION['error']['pwd'] = "Please enter Password";
		}
		else if($pwd != $cpwd)
		{
			$_SESSION['error']['pwd'] = "Password isn't Match";
		}
		else if(strlen($pwd)<8)
		{
			$_SESSION['error']['pwd'] = "Please Enter Minimum 8 Digit Password";
		}

		if(empty($email))
		{
			$_SESSION['error']['email'] = "Please enter E-Mail Address";
		} 
		else if(!preg_match("/^[a-z0-9]+@[a-z\.]+$/i", $email))
		{
			$_SESSION['error']['email'] = "Please Enter Valid E-Mail Address";
		}

		if(empty($answer))
		{
			$_SESSION['error']['answer'] = "Please Enter Security Answer";
		}

		if(empty($cno))
		{
			$_SESSION['error']['cno'] = "Please Contact Number";
		}

		if(!empty($cno))
		{
			if(!is_numeric($cno))
			{
				$_SESSION['error']['cno'] = "Please Enter Contact Number in Numbers";
			}
		}

		if(!empty($error))
		{
			foreach($error as $er)
			{
				echo '<font color="red">'.$er.'</font><br>';
			}
		}

		if(! empty($_SESSION['error']))
		{
			header("location:register.php");
		}

		else
		{
			include("includes/connection.php");

			$t = time();

			$q = "INSERT INTO register(r_fnm, r_unm, r_pwd, r_cno, r_email, r_question, r_answer, r_time) VALUES ('$fnm', '$unm', '$pwd', '$cno', '$email', '$question', '$answer', '$t')";

			mysqli_query($link, $q);

			header("location:register.php?register");
		}
	}
	else
	{
		header("location:register.php");
	}

?>