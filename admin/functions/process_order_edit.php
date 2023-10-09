<?php
	session_start();

	include("../../includes/connection.php");

	if(!empty($_POST))
	{
		$_SESSION['error'] = array();

		extract($_POST);

		$querys = "SELECT * FROM `order_table` WHERE `order_id` = '$order_id'";
		$get_response = mysqli_query($connection_database, $querys);
		$values = mysqli_fetch_assoc($get_response);	
	
		$query = "UPDATE `order_table` SET `order_name` = '$order_name', `order_address` = '$order_address', `order_pincode` = '$order_pincode', `order_city` = '$order_city', `order_state` = '$order_state', `order_mobile` = '$order_mobile', `order_register_id` = '$order_register_id', `order_total_price` = '$order_total_price', `order_list_books` = '$order_list_books' WHERE `order_id` = $order_id";

		mysqli_query($connection_database, $query);

		header("location: ../order_view.php");
        exit();
	}
	else
	{
		header("location: ../admin/order_view.php");
        exit();
	}

?>