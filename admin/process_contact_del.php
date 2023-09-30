<?php

	session_start();
	
	include("../includes/connection.php");

	$query = "DELETE FROM `contact_table` WHERE `contact_id` = " . $_GET['id'] . ";";

	mysqli_query($connection_database, $query);

	header("location:contact_view.php");

?>