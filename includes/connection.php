<?php

	$link = mysqli_connect("localhost","root","DedSec44678@","bookstoredatabase");

	// Check connection
	if ($link -> connect_errno) 
	{
		echo "Failed to connect to MySQLi: " . $link -> connect_error;
	}
?>