<?php

	session_start();
	
	include("../../includes/connection.php");

	$contact_id = $_GET['id'];

	$query = "DELETE FROM `contact_table` WHERE `contact_id` = $contact_id";

	mysqli_query($connection_database, $query);

	header("location: ../contact_view.php");
	exit();
?>