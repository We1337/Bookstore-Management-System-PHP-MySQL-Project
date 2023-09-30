<?php
	session_start();

	include("../includes/connection.php");

	if(!empty($_POST))
	{
		$_SESSION['error'] = array();

		extract($_POST);

		$query = "SELECT * FROM `book_table` WHERE `book_id` = '$book_id'";
		$get_response = mysqli_query($connection_database, $query);
		$values = mysqli_fetch_assoc($get_response);
		
		$checks = false;
	
		
		if(!empty($values['book_img']))
		{	
	 		$book_img = $values['book_img'];
		}

		if(!empty($_FILES['book_img']['name'])) 
		{
			move_uploaded_file($_FILES['book_img']['tmp_name'], "../book_img/" . $_FILES['book_img']['name']);
			$book_img = "book_img/" . $_FILES['book_img']['name'];
		}

		
		
		if(!empty($_SESSION['error']))
		{
			header("location:book_edit.php");
		}
		else
		{
			$time = time();

			$q = "UPDATE `book_table` SET `book_name` = '".$book_name."', `book_category` = '".$book_category."', `book_description` = '".$book_description."', `book_price` = '".$book_price."', `book_img` = '".$book_img."', `book_time` = '".$time."' WHERE `book_id` = ".$book_id;

			mysqli_query($connection_database, $q);

			header("location:book_view.php?=" . $_FILES['book_img']['name']);
		}
		
	}
	else
	{
		header("location:book_view.php?error=empty");
	}

?>