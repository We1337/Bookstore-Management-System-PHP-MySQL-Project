<?php

	session_start();
	
	include("../../includes/connection.php");

	$query = "DELETE FROM `book_table` WHERE `book_id` = " . $_GET['id'];

	$result = mysqli_query($connection_database, $query);

	header("location: ../book_view.php");
	exit();
?>