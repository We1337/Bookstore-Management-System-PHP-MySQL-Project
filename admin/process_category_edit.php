<?php
	session_start();

	if(!empty($_POST))
	{
		extract($_POST);

		$_SESSION['error'] = array();
		
		if(empty($category))
		{
			$_SESSION['error'][] = "Please enter Category Name";
			header("location: category_edit.php?id='$id'");
		}
		else
		{
			include("../includes/connection.php");

			$query = "UPDATE `category_table` SET `category_name` = '$category' WHERE `category_id` = '$id'";
	
			mysqli_query($connection_database, $query);
	
			header("Location: category_view.php");
		}
	}
	else
	{
		header("Location: category_view.php");
	}

?>