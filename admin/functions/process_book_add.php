<?php
	include("../../includes/connection.php");

	if(!empty($_POST))
	{
		extract($_POST);
		
		$time = time();

		move_uploaded_file($_FILES['book_img']['tmp_name'], "../../book_img/" . $_FILES['book_img']['name']);
		$book_img = "book_img/" . $_FILES['book_img']['name'];

		$query = "INSERT INTO `book_table`(`book_name`, `book_category`, `book_description`, `book_price`, `book_img`, `book_time`) VALUES ('$book_name', '$book_category', '$book_description', '$book_price', '$book_img', '$time')";

		mysqli_query($connection_database, $query);

		header("location: ../book_view.php");
	}
	else
	{
		header("location: ../book_add.php");
	}

?>