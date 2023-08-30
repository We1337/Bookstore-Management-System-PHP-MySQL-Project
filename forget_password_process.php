<?php

	session_start();


	if(!empty($_POST))
	{
		$_SESSION['error'] = array();
		extract($_POST);

		if(empty($unm))
		{
			$_SESSION['error']['unm'] = "Please enter User Name";
		}
		else if(empty($row))
		{
			$_SESSION['error']['unm'] = "Wrong User Name";
		}
		else if(empty($answer))
		{
			$_SESSION['error']['unm'] = "Please enter Security Answer";
		}

		if(empty($unm))
		{
			$_SESSION['error']['answer'] = "Please enter Security Answer";
		}

		if(empty($pwd) || empty($cpwd))
		{
			$_SESSION['error']['pwd'] = "Please enter New Password";
		}
		else if($pwd != $cpwd)
		{
			$_SESSION['error']['pwd'] = "Password isn't Match";
		}

		if(!empty($_SESSION['error']))
		{
			header("location:forget_password.php");
		}
		else
		{
			include("includes/connection.php");

			$q = "SELECT * FROM register WHERE r_unm='$unm'";

			$res = mysqli_query($link, $q);

			$row = mysqli_fetch_assoc($res);
		}
	}
	else
	{
		header("location:forget_password.php");
	}

?>