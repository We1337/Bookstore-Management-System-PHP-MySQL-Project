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
			$_SESSION['error']['mno'] = "Please enter Full Name";
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
			foreach($error as $er)
			{
				echo '<font color="red">'.$er.'</font><br>';
			}
		}
		else
		{
			include("includes/connection.php");

			$t = time();

			$q = "insert into contact(c_fnm,c_mno,c_email,c_msg,c_time) values('$fnm','$mno','$email','$msg','$t')";

			mysqli_query($link, $q);

			header("location:contact.php");
		}
	}
	else
	{
		header("location:contact.php");
	}
?>