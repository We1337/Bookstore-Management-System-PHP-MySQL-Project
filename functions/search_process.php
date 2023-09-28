<?php
    // Get the search query from the URL
    $search = $_GET['search'];

    // Construct the SQL query to search for books with a name containing the search query
    $book_list_query = "SELECT * FROM `book_table` WHERE `book_name` LIKE '%$search%' OR `book_description` LIKE '%$search%'";

    // Execute the SQL query
    $book_list_result = mysqli_query($connection_database, $book_list_query);
?>