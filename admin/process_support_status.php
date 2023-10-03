<?php

    $user_id = $_GET['id']; // Change this to the actual user ID
    $new_status = $_GET['status']; // Change this to the desired new status    

    if($new_status === 'Open') 
    {
        $new_status = 'Closed';
    } 
    else 
    {
        $new_status = 'Open';
    }

    include("../includes/connection.php");

    $sql = "UPDATE userSupport SET status = '$new_status' WHERE id = $user_id";

    mysqli_query($link, $sql);

	header("location:support.php");

?>