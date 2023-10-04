<?php
    $query = "SELECT * FROM `book_table` ORDER BY `book_id` DESC LIMIT 0,9";
    
    $result = mysqli_query($connection_database, $query);
?>
