<?php
	session_start();

	include("../../includes/connection.php");

	if (!empty($_POST)) 
	{

		$_SESSION['error'] = array();

		extract($_POST);

		// Use prepared statements to prevent SQL injection
		$query = "SELECT * FROM `book_table` WHERE `book_id` = ?";
		$stmt = mysqli_prepare($connection_database, $query);
		mysqli_stmt_bind_param($stmt, "i", $book_id);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		$values = mysqli_fetch_assoc($result);

		if (!empty($values['book_img'])) 
		{
			$book_img = $values['book_img'];
		}

		if (!empty($_FILES['book_img']['name'])) 
		{
			move_uploaded_file($_FILES['book_img']['tmp_name'], "../book_img/" . $_FILES['book_img']['name']);
			$book_img = "book_img/" . $_FILES['book_img']['name'];
		}

		if (!empty($_SESSION['error'])) 
		{
			header("location: ../book_edit.php");
			exit();
		} 
		else 
		{
			$time = time();

			// Use prepared statements for the update query as well
			$querys = "UPDATE `book_table` SET `book_name` = ?, `book_category` = ?, `book_description` = ?, `book_price` = ?, `book_img` = ?, `book_time` = ? WHERE `book_id` = ?";
			$stmt = mysqli_prepare($connection_database, $querys);
			mysqli_stmt_bind_param($stmt, "ssssssi", $book_name, $book_category, $book_description, $book_price, $book_img, $time, $book_id);
			mysqli_stmt_execute($stmt);

			header("location: ../book_view.php");
			exit();
		}
	} 
	else 
	{
		header("location: ../book_edit.php");
		exit();
	}
?>