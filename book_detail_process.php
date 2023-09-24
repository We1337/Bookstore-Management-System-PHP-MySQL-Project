<?php
    include("includes/connection.php");

    // Get the book ID from the URL
    $book_id = $_GET['id'];

    // Query to select the book information
    $book_query = "SELECT * FROM `book_table` WHERE `book_id` = $book_id";

    // Execute the query
    $book_result = mysqli_query($connection_database, $book_query);

    // Fetch the book details
    $book_row = mysqli_fetch_assoc($book_result);
?>