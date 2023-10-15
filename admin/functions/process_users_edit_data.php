<?php

    $id = $_GET['id'];
    $order_query = "SELECT * FROM `register_table` WHERE `register_id` = '$id'";
    $users_list_result = mysqli_query($connection_database, $order_query);
    $users_row = mysqli_fetch_assoc($users_list_result);    

?>