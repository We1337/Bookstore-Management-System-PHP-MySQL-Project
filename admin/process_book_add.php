<?php
	include("../includes/connection.php");

	if(!empty($_POST))
	{
		$_SESSION['error'] = array();

		extract($_POST);

		if(empty($book_name))
		{
			$_SESSION['error']['book_name'] = "Enter book name";
		}

		if(empty($book_description))
		{
			$_SESSION['error']['book_description'] = "Enter book description";
		}

		if(empty($book_price))
		{
			$_SESSION['error']['price'] = "Enter book price";
		}
		else if(!is_numeric($book_price))
		{
			$_SESSION['error']['price'] = "Enter book price in numbers";
		}

		if(empty($_FILES['book_img']['name']))
		{	
			$_SESSION['error']['book_img'] = "Please provide a file";
		}
		else if($_FILES['book_img']['error'] > 0)
		{	
			$_SESSION['error']['book_img'] = "Error uploading file";
		}	
		else if(!(strtoupper(substr($_FILES['book_img']['name'], -4)) == ".JPG" || strtoupper(substr($_FILES['book_img']['name'], -5)) == ".JPEG"|| strtoupper(substr($_FILES['book_img']['name'], -4))==".PNG"))
		{	
			$_SESSION['error']['book_img'] = "Wrong file type";
		}

		if(!empty($_SESSION['error']))
		{
			header("location: book_add.php");
			exit();
		}
		else
		{
			$time = time();
		
			//move_uploaded_file($_FILES['b_img']['tmp_name'],"../book_img/".$img_nm);

			move_uploaded_file($_FILES['book_img']['tmp_name'], "../book_img/" . $_FILES['book_img']['name']);
			$book_img = "book_img/".$_FILES['book_img']['name'];

			$query = "INSERT INTO `book_table`(`book_name`, `book_category`, `book_description`, `book_price`, `book_img`, `book_time`) VALUES ('$book_name', '$book_category', '$book_description', '$book_price', '$book_img', '$time')";

			mysqli_query($connection_database, $query);

			header("location: book_view.php");
		}
	}
	else
	{
		header("location: book_add.php");
	}

?>