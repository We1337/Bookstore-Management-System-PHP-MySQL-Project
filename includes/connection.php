<?php

	$link = mysqli_connect("localhost","root","dedsec","bms");

	// Check connection
	if ($link -> connect_errno) 
	{
		echo "Failed to connect to MySQLi: " . $link -> connect_error;
	}
?>