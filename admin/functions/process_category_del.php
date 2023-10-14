<?php

	session_start();
	
	include("../../includes/connection.php");

	$query = "DELETE FROM `category_table` WHERE `category_id` = " . $_GET['id'];

	mysqli_query($connection_database, $query);

	header("location: ../category_view.php");
	exit();
?>