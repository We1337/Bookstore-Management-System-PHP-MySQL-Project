<?php

	if(!empty($_POST))
	{
		extract($_POST);
		
		include("../../includes/connection.php");

		$query = "UPDATE `category_table` SET `category_name` = '$category' WHERE `category_id` = '$id'";
	
		mysqli_query($connection_database, $query);
	
		header("Location: ../category_view.php");
		exit();
	}
	else
	{
		header("Location: ../category_view.php");
		exit();
	}

?>