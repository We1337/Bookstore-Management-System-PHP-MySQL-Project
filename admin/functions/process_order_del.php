<?php

	session_start();
	
	include("../../includes/connection.php");

	$query = "DELETE FROM `order_table` WHERE `order_id` = " . $_GET['id'] . ";";

	mysqli_query($connection_database, $query);

	header("location: ../order_view.php");
	exit();
?>