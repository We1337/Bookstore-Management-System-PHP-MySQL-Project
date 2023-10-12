<?php
	session_start();

	include("../../includes/connection.php");

	if(!empty($_POST))
	{
		$_SESSION['error'] = array();

		extract($_POST);
	
		$query = "UPDATE `register_table` SET `register_full_name` = '$register_full_name', `register_user_name` = '$register_user_name', `register_password` = '$register_password', `register_contact_number` = '$register_contact_number', `register_email` = '$register_email', `register_question` = '$register_question', `register_answer` = '$register_answer', `register_profile_picture` = '$register_profile_picture' WHERE `register_id` = $register_id";

		mysqli_query($connection_database, $query);

		header("location: ../../admin/users_view.php");
        exit();
	}
	else
	{
		header("location: ../../admin/users_view.php");
        exit();
	}

?>