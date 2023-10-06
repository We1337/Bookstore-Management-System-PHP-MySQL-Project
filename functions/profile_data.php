<?php
    $id = $_SESSION['client']['id'];

    $query_user_data = "SELECT * FROM `register_table` WHERE `register_id` = $id";
    
    $result_user_name = mysqli_query($connection_database, $query_user_data);

    $row = mysqli_fetch_assoc($result_user_name);
?>