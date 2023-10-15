<?php

	$query_length_of_users = "SELECT * FROM `register_table`";
	$result_users_table = mysqli_query($connection_database, $query_length_of_users);
	$users_result = mysqli_num_rows($result_users_table);

	$query_length_of_books = "SELECT * FROM `book_table`";
	$result_books_table = mysqli_query($connection_database, $query_length_of_books);
	$books_result = mysqli_num_rows($result_books_table);

	$query_length_of_contact = "SELECT * FROM `contact_table`";
	$result_contact_table = mysqli_query($connection_database, $query_length_of_contact);
	$contact_result = mysqli_num_rows($result_contact_table);

	$query_length_of_order = "SELECT * FROM `order_table`";
	$result_order_table = mysqli_query($connection_database, $query_length_of_order);
	$order_result = mysqli_num_rows($result_order_table);

	$query_length_of_support = "SELECT * FROM `user_support_table`";
	$result_support_table = mysqli_query($connection_database, $query_length_of_support);
	$support_result = mysqli_num_rows($result_support_table);

	$query_length_of_category = "SELECT * FROM `category_table`";
	$result_category_table = mysqli_query($connection_database, $query_length_of_category);
	$category_result = mysqli_num_rows($result_category_table);

	$dataPoints = array(
		array("label"=> "Users", "y"=> $users_result),
		array("label"=> "Books", "y"=> $books_result),
		array("label"=> "Contact", "y"=> $contact_result),
		array("label"=> "Order", "y"=> $order_result),
		array("label"=> "Support", "y"=> $support_result),
		array("label"=> "Category", "y"=> $category_result),
	);