<?php
    session_start();

    include('../includes/connection.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $useremail = $_POST["useremail"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        $user_id_support =  intval($_SESSION['client']['id']);

        $query = "INSERT INTO `user_support_table`(`user_support_actual_id`, `user_support_email`, `user_support_subject`, `user_support_message`) VALUES ('$user_id_support', '$useremail', '$subject', '$message')";
        
        mysqli_query($connection_database, $query);
        $_SESSION['message']['success'] = 'Message sended to support group';
        header("Location: ../index.php");
        exit();
    }
?>