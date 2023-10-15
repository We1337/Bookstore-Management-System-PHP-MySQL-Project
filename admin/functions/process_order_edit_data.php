<?php

    $id = $_GET['id'];

    $order_query = "SELECT * FROM `order_table` WHERE `order_id` = '$id'";
    $result = mysqli_query($connection_database, $order_query);
    $order_row = mysqli_fetch_assoc($result);

?>