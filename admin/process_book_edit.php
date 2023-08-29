<?php

	session_start();

	include("../includes/connection.php");

	if(!empty($_POST))
	{
		$_SESSION['error']=array();

		extract($_POST);

		if(empty($bnm))
		{
			$_SESSION['error']['bnm'] = "Enter Book Name";
		}

		if(empty($desc))
		{
			$_SESSION['error']['desc'] = "Enter Book Description";
		}

		if(empty($price))
		{
			$_SESSION['error']['price'] = "Enter Book Price";
		}
		else if(!is_numeric($price))
		{
			$_SESSION['error']['price'] = "Enter Book Price in Numbers";
		}

		if(empty($_FILES['b_img']['name']))
		{	$_SESSION['error']['b_img'] = "Please provide a file";
		}
		else if($_FILES['b_img']['error']>0)
		{	$_SESSION['error']['b_img'] = "Error uploading file";
		}	
		else if(!(strtoupper(substr($_FILES['b_img']['name'],-4))==".JPG" || strtoupper(substr($_FILES['b_img']['name'],-5))==".JPEG"|| strtoupper(substr($_FILES['b_img']['name'],-4))==".GIF"))
		{
			$_SESSION['error']['b_img'] = "wrong file  type";
		}	

		//image validation

		$upper = strtoupper(substr($_FILES['b_img']['name'],-4));

		
		if(!empty($_SESSION['error']))
		{
			header("location:book_edit.php");
		}
		else
		{
			$t = time();
		
			//move_uploaded_file($_FILES['b_img']['tmp_name'],"../book_img/".$img_nm);
			move_uploaded_file($_FILES['b_img']['tmp_name'],"../book_img/".$_FILES['b_img']['name']);
			$b_img = "book_img/".$_FILES['b_img']['name'];

			$q = "update book set b_nm='$bnm', b_cat='$cat', b_desc='$desc', b_price=$price, b_img='$b_img', b_time='$t' where b_id=".$id;

			$res = mysqli_query($link, $q);

			header("location:book_view.php");
		}
	}
	else
	{
		header("location:book_view.php");
	}

?>