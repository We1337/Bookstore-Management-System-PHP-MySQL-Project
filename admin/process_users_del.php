<?php

	session_start();
	
	include("../includes/connection.php");

	$query = "DELETE FROM register WHERE r_id =".$_GET['id'];

	$result = mysqli_query($link, $query);

	$run = mysqli_fetch_assoc($result);

	header("location:users_view.php");

?>