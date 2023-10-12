<?php
	session_start();

	include("../../includes/connection.php");

	if(!empty($_POST))
	{
		$_SESSION['error'] = array();

		extract($_POST);
	
		$query = "UPDATE `order_table` SET `order_name` = '$order_name', `order_address` = '$order_address', `order_pincode` = '$order_pincode', `order_city` = '$order_city', `order_state` = '$order_state', `order_mobile` = '$order_mobile', `order_register_id` = '$order_register_id', `order_total_price` = '$order_total_price', `order_list_books` = '$order_list_books' WHERE `order_id` = $order_id";

		mysqli_query($connection_database, $query);

		header("location: ../../admin/order_view.php");
        exit();
	}
	else
	{
		header("location: ../../admin/order_view.php");
        exit();
	}

?>