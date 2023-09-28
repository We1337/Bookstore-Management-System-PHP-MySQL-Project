<?php
    $query = "SELECT * FROM `book_table` ORDER BY `book_id`";
    
    $result = mysqli_query($connection_database, $query);
?>