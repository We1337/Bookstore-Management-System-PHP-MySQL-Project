<?php

    $category_query = "SELECT * FROM `category_table`";
    $category_result = mysqli_query($connection_database, $category_query);

    $book_id = $_GET['id'];
    
    $books_query = "SELECT * FROM `book_table` WHERE `book_id` = '$book_id'";
    $books_result = mysqli_query($connection_database, $books_query);
    $books_row = mysqli_fetch_assoc($books_result);    

?>