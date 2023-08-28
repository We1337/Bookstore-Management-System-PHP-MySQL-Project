<?php

	session_start();

	if(!empty($_POST))
	{
		$_SESSION['error'] = array();
		extract($_POST);

		if(empty($cat))
		{
			$_SESSION['error']['cat'] = "Please Enter Category Name";
		}

		if(!empty($_SESSION['error']['cat']))
		{
			header("location:category_add.php");
		}
		else
		{
			include("../includes/connection.php");

			$q = "INSERT INTO category(cat_nm) VALUES ('$cat')";

			mysqli_query($link, $q);

			header("location:category_add.php");
		}
	}
	else
	{
		header("location:category.php");
	}

?>