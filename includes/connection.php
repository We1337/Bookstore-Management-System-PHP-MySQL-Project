<?php
	define("DB_HOST", "localhost");
	define("DB_NAME", "bookstoredatabase");
	define("DB_USER", "root");
	define("DB_PASS", "DedSec44678@");

	try 
	{
		// Connection to database
		$connection_database = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	}
	catch(Exception $error) 
	{
		// Error message
		$error_message = $error->getMessage();
		echo "Failed to connect to MySQL: " . $error_message;

	}
?>