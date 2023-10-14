<?php

	session_start();

	if(!empty($_POST))
	{
		$_SESSION['error'] = array();

		extract($_POST);

		if(!empty($_SESSION['error']['category']))
		{
			header("location: category_add.php");
			exit();
		}
		else
		{
			include("../includes/connection.php");

			$query = "INSERT INTO `category_table`(`category_name`) VALUES ('$category')";

			mysqli_query($connection_database, $query);

			header("location: category_view.php");
			exit();
		}
	}
	else
	{
		header("location: category.php");
		exit();
	}

?>