<?php

    $id = $_GET['id'];

    $query = "SELECT * FROM `category_table` WHERE `category_id` = '$id'"; 
    $category_result = mysqli_query($connection_database, $query);
    $row = mysqli_fetch_assoc($category_result);

?>