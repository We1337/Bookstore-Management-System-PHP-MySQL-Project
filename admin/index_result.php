<?php
include("../includes/connection.php");

$countUsers = "SELECT count(*) AS total FROM `register_table`;";
$resUsers = mysqli_query($connection_database, $countUsers);
$realResultUsers =  mysqli_fetch_assoc($resUsers);
   
$countBooks = "SELECT count(*) AS total FROM `book_table`;";
$resBooks = mysqli_query($connection_database, $countBooks);
$realResultBooks = mysqli_fetch_assoc($resBooks);

$countOrder = "SELECT count(*) AS total FROM `order_table`;";
$resOrder = mysqli_query($connection_database, $countOrder);
$realResultOrder = mysqli_fetch_assoc($resOrder);

$countContact = "SELECT count(*) AS total FROM `contact_table`;";
$resContact = mysqli_query($connection_database, $countContact);
$realResultContact = mysqli_fetch_assoc($resContact);

?>