<?php

	session_start();
	
	include("../../includes/connection.php");

	$query = "DELETE FROM `user_support_table` WHERE `user_support_id` = " . $_GET['id'];

	mysqli_query($connection_database, $query);

	header("location: ../support.php");
	
	exit();
?>