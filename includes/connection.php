<?php
	define("DB_HOST", "localhost");
	define("DB_NAME", "bookstoredatabase");
	define("DB_USER", "root");
	define("DB_PASS", "DedSec44678@");

	try {
		$connection_db = new mysqli(DB_HOST, DB_NAME, DB_USER, DB_PASS);
	} catch(Exception $error_message) {
		$error = $error_message->getMessage();
		echo "Error: " . $error;
	}
?>