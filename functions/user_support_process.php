<?php
    include('../includes/connection.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $useremail = $_POST["useremail"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $query = "INSERT INTO `user_support_table`(`user_support_email`, `user_support_subject`, `user_support_message`) VALUES ('$useremail', '$subject', '$message')";
        
        mysqli_query($connection_database, $query);
        header("Location: ../index.php?message=support_sended");
        exit();
    }
?>