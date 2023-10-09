<?php
	session_start();

	include("../../includes/connection.php");

	if(!empty($_POST))
	{
		$_SESSION['error'] = array();

		extract($_POST);

		$query = "SELECT * FROM `order_table` WHERE `order_id` = '$order_id'";
		$get_response = mysqli_query($connection_database, $query);
		$values = mysqli_fetch_assoc($get_response);	
	
		if (empty($order_name)) 
        {
            $_SESSION['error'][] = "Order user name is empty";
        }

        if (empty($order_address)) 
        {
            $_SESSION['error'][] = "Order address is empty";
        }

        if (empty($order_pincode)) 
        {
            $_SESSION['error'][] = "Order pincode is empty";
        }

        if (empty($order_city))
        {
            $_SESSION['error'][] = "Order city is empty";
        }

        if (empty($order_state))
        {
            $_SESSION['error'][] = "Order state is empty";
        }

        if (empty($order_mobile))
        {
            $_SESSION['error'][] = "Order mobile phone is empty";
        }

        if (empty($order_register_id))
        {
            $_SESSION['error'][] = "Order register is empty";
        }

        if (empty($order_total_price))
        {
            $_SESSION['error'][] = "Order total price is empty";
        }

        if (empty($order_list_books))
        {
            $_SESSION['error'][] = "Order list book is empty";
        }
		
		if(!empty($_SESSION['error']))
		{
            header("location: ../order_edit.php?id=");
            exit();
		}
		else
		{

			$query = "UPDATE `order_table` SET `order_name` = '$order_name', `order_address` = '$order_address', `order_pincode` = '$order_pincode', `order_city` = '$order_city', `order_state` = '$order_state', `order_mobile` = '$order_mobile', `order_register_id` = '$order_register_id', `order_total_price` = '$order_total_price', `order_list_books` = '$order_list_books' WHERE `order_id` = $order_id";

			mysqli_query($connection_database, $query);

			header("location: ../order_view.php");
            exit();
		}
	}
	else
	{
		header("location: ../admin/order_view.php");
        exit();
	}

?>