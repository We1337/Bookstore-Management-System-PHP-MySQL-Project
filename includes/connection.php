<?php
	define("DB_HOST", "localhost");
	define("DB_NAME", "bookstoredatabase");
	define("DB_USER", "root");
	define("DB_PASS", "DedSec44678@");

	try {
		$connection_database = new mysqli(DB_HOST, DB_NAME, DB_USER, DB_PASS);
	} catch(Exception $error) {
		$error_message = $error->getMessage();
		echo "Failed to connect to MySQL: " . $error_message;
	}
?>