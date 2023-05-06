<?php
	if( isset($_POST["submit"]) )
	{
		$fullname       = $_POST["fullname"];
		$email          = $_POST["email"];
		$username       = $_POST["username"];
		$password       = $_POST["password"];
		$passwordRepeat = $_POST["passwordRepeat"];
		
		require_once 'functions.inc.php';
		require_once 'dbconnect.php';
		
		if( emptyInputSignup($fullname, $email, $username, $password, $passwordRepeat) !== false )
		{
			header("location: ../signup.php?error=emptyinput");
			exit();
		}
		if( invalidUsername($username) !== false )
		{
			header("location: ../signup.php?error=invalidusername");
			exit();
		}
		if( invalidEmail($email) !== false )
		{
			header("location: ../signup.php?error=invalidemail");
			exit();
		}
		if( passwordsMatch($password, $passwordRepeat) !== false )
		{
			header("location: ../signup.php?error=passwordmismatch");
			exit();
		}
		if( usernameExists($conn, $username) !== false )
		{
			header("location: ../signup.php?error=usernametaken");
			exit();
		}
		if( emailExists($conn, $email) !== false )
		{
			header("location: ../signup.php?error=emailregistered");
			exit();
		}
	}
	createUser($conn, $fullname, $email, $username, $password);