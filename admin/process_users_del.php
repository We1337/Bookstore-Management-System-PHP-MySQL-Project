<?php
	session_start();
	
	include("../includes/connection.php");

	$query = "DELETE FROM `register_table` WHERE register_id = " . $_GET['id'] . ";";

	mysqli_query($connection_database, $query);

	header("location:users_view.php");

?>