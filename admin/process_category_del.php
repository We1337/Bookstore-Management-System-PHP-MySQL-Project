<?php

	session_start();
	
	include("../includes/connection.php");

	$query = "DELETE FROM category WHERE cat_id = ".$_GET['id'];

	mysqli_query($link, $query);

	header("location:category_view.php");

?>