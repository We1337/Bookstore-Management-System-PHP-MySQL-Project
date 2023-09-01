<?php
include("../includes/connection.php");

$countUsers = "SELECT count(*) AS total FROM `register`;";
$resUsers = mysqli_query($link, $countUsers);
$realResultUsers =  mysqli_fetch_assoc($resUsers);
   
$countBooks = "SELECT count(*) AS total FROM `book`;";
$resBooks = mysqli_query($link, $countBooks);
$realResultBooks = mysqli_fetch_assoc($resBooks);

$countOrder = "SELECT count(*) AS total FROM `order`;";
$resOrder = mysqli_query($link, $countOrder);
$realResultOrder = mysqli_fetch_assoc($resOrder);

$countContact = "SELECT count(*) AS total FROM `contact`;";
$resContact = mysqli_query($link, $countContact);
$realResultContact = mysqli_fetch_assoc($resContact);

?>