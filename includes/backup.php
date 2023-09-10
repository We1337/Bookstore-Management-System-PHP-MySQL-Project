<?php
   $dbhost = 'localhost:8080';
   $dbuser = 'root';
   $dbpass = 'DedSec44678@';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ');
   }
	
   $table_name = "register";
   $backup_file  = "table.sql";
   $sql = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";
   
   $conn->select_db(`bookstoredatabase`);
   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval ) {
      die('Could not take data backup: ' . mysqli_error($conn));
   }
   
   echo "Backedup  data successfully\n";
   
   mysqli_close($conn);
?>