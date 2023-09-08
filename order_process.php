<?php

	session_start();

	if(!empty($_POST))
	{
		extract($_POST);
		$_SESSION['error'] = array();

		if(empty($fnm))
		{
			$_SESSION['error']['fnm'] = "Enter Full Name";
		}

		if(empty($add))
		{
			$_SESSION['error']['add'] = "Enter Full Address";
		}

		if(empty($pc))
		{
			$_SESSION['error']['pc'] = "Enter City Pincode";
		}

		if(empty($city))
		{
			$_SESSION['error']['city'] = "Enter City";
		}

		if(empty($state))
		{
			$_SESSION['error']['state'] = "Enter State";
		}

		if(empty($mno))
		{
			$_SESSION['error']['mno'] = "Enter Mobile Number";
		}
		else if(!is_numeric($mno))
		{
			$_SESSION['error']['mno'] = "Enter Mobile Number in Numbers";
		}

		if(!empty($_SESSION['error']))
		{
			header("location:order.php=wentwrong");
		}
		else
		{
			include("includes/connection.php");

			$rid = $_SESSION['client']['id'];

			$q = "INSERT INTO `order`(`o_id`, `o_name`, `o_address`, `o_pincode`, `o_city`, `o_state`, `o_mobile`, `o_rid`, `o_total_price`, `o_list_books`) VALUES (NULL, '$fnm', '$add', '$pc', '$city', '$state', '$mno', '$rid', '$totalprice', '$totalbooks')";

			$res = mysqli_query($link, $q);

			header("location:payment.php?price=".$totalprice);
		}
	}
	else
	{
		header("location:order.php=empty");
	}
?>