<?php

	$query_length_of_contact = "SELECT * FROM `contact_table`";
	$result_contact_table = mysqli_query($connection_database, $query_length_of_contact);
	$contact_result = mysqli_num_rows($result_contact_table);

	$query_length_of_order = "SELECT * FROM `order_table`";
	$result_order_table = mysqli_query($connection_database, $query_length_of_order);
	$order_result = mysqli_num_rows($result_order_table);

	$query_length_of_support = "SELECT * FROM `user_support_table`";
	$result_support_table = mysqli_query($connection_database, $query_length_of_support);
	$support_result = mysqli_num_rows($result_support_table);


	$dataPoints = array(
		array("label"=> "Contact", "y"=> $contact_result),
		array("label"=> "Order", "y"=> $order_result),
		array("label"=> "Support", "y"=> $support_result),
	);

?>