<?php
	session_start();
	
	include("../../includes/connection.php");

	$user_id = $_GET['id'];

	$query = "DELETE FROM `register_table` WHERE `register_id` = $user_id";

	mysqli_query($connection_database, $query);

	header("location: ../users_view.php");
	exit();
?>