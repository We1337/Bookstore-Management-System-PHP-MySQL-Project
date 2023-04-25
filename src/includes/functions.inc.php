<?php
	function emptyInputSignup($fullname, $email, $username, $password, $passwordRepeat)
	{
		$result;
		if( empty($fullname) || empty($email) || empty($username) || empty($password) || empty($passwordRepeat) )
		{
			$result = true;
		}
		else
		{
			$result = false;
		}
		return $result;
	}
	
	function emptyInputLogin($username, $password)
	{
		$result;
		if( empty($username) || empty($password) )
		{
			$result = true;
		}
		else
		{
			$result = false;
		}
		return $result;
	}
	
	function invalidUsername($username)
	{
		$result;
		if( !preg_match("/^[a-zA-Z0-9]*$/", $username) )
		{
			$result = true;
		}
		else
		{
			$result = false;
		}
		return $result;
	}
	
	function invalidEmail($email)
	{
		$result;
		if( !filter_var($email, FILTER_VALIDATE_EMAIL) )
		{
			$result = true;
		}
		else
		{
			$result = false;
		}
		return $result;
	}
	
	function passwordsMatch($password, $passwordRepeat)
	{
		$result;
		if( $password !== $passwordRepeat )
		{
			$result = true;
		}
		else
		{
			$result = false;
		}
		return $result;
	}
	
	function usernameExists($conn, $username)
	{
		$sql = "SELECT * FROM users WHERE usersUsername = ?;";
		
		$stmt = mysqli_stmt_init($conn);
		
		if( !mysqli_stmt_prepare($stmt, $sql) )
		{
			header("location: ../sign_up.php?error=stmtfailed");
			exit();
		}
		
		mysqli_stmt_bind_param($stmt, "s", $username);
		mysqli_stmt_execute($stmt);
		
		$resultData = mysqli_stmt_get_result($stmt);
		
		mysqli_stmt_close($stmt);
		
		if( $row = mysqli_fetch_assoc($resultData) )
		{
			return $row;
		}
		else
		{
			return false;
		}
	}
	
	function emailExists($conn, $email)
	{
		$sql = "SELECT * FROM users WHERE usersEmail = ?;";
		
		$stmt = mysqli_stmt_init($conn);
		
		if( !mysqli_stmt_prepare($stmt, $sql) )
		{
			header("location: ../sign_up.php?error=stmtfailed");
			exit();
		}
		
		mysqli_stmt_bind_param($stmt, "s", $email);
		mysqli_stmt_execute($stmt);
		
		$resultData = mysqli_stmt_get_result($stmt);
		
		mysqli_stmt_close($stmt);
		
		if( $row = mysqli_fetch_assoc($resultData) )
		{
			return $row;
		}
		else
		{
			return false;
		}
	}
	
	function createUser($conn, $fullname, $email, $username, $password)
	{
		$sql = "INSERT INTO users (usersUsername, usersEmail, usersPassword, usersRealname) VALUES (?, ?, ?, ?);";
		
		$stmt = mysqli_stmt_init($conn);
		
		if ( !mysqli_stmt_prepare($stmt, $sql) )
		{
			header("location: ../sign_up.php?error=stmtfailed");
			exit();
		}
		
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
		
		mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $hashedPassword, $fullname);
		
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		header("location: ../sign_up.php?error=none");
		exit();
	}
	
	function loginUser($conn, $username, $password)
	{
		$usernameExists = usernameExists($conn, $username);
		
		if ($usernameExists === false)
		{
			header("location: ../index.php?error=wronglogin");
			exit();
		}
		
		$hashedPassword = $usernameExists["usersPassword"];
		$checkPassword = password_verify($password, $hashedPassword);
		
		if ( $checkPassword === false )
		{
			header("location: ../index.php?error=wronglogin");
			exit();
		}
		else if ( $checkPassword === true )
		{
			session_start();
			$_SESSION["userid"  ] = $usernameExists["usersId"      ];
			$_SESSION["username"] = $usernameExists["usersUsername"];
			$_SESSION["realname"] = $usernameExists["usersRealname"];
			header("location: ../index.php");
			exit();
		}
	}