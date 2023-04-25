<?php
	if (isset($_POST["submit"]))
	{
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		require_once 'dbconnect.php';
		require_once 'functions.inc.php';
		
		if( emptyInputLogin($username, $password) )
		{
			header("location: ../index.php?error=emptyinput");
			exit();
		}
		
		loginUser($conn, $username, $password);
	}
	else
	{
		header("location: ../index.php");
		exit();
	}