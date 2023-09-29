<?php
	session_start();

	include("../includes/connection.php");

	if(!empty($_POST))
	{
		$_SESSION['error'] = array();

		extract($_POST);

		if(empty($username) || empty($password))
		{
			$_SESSION['error'][] = "Required User Name & Password";

			header("location:login.php");
		}
		else
		{
			$query = "SELECT * FROM `admin_table` WHERE `admin_user_name` = '$username' AND `admin_password` = '$password'";

			$result = mysqli_query($connection_database, $query);

			$row = mysqli_fetch_assoc($result);

			if(!empty($row))
			{
				$_SESSION['admin']['username'] = $row['admin_user_name'];
				$_SESSION['admin']['status'] = true;

				header("location: index.php");
			}
			else
			{
				$_SESSION['error'][] = "Wrong User Name or Password";

				header("location: login.php");
			}
		}
	}
	else
	{
		header("location: login.php");
	}
?>