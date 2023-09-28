<?php
    $query = "SELECT * FROM `book_table` ORDER BY `book_id` DESC LIMIT 0,9";
    
    $result = mysqli_query($connection_database, $query);

    function display_notification_messages() {
        // Display messages based on the 'message' query parameter
        $messages = [
            'success' => '<div class="alert alert-success" role="alert">Message has been delivered.</div>',
            'error' => '<div class="alert alert-danger" role="alert">Please try again later.</div>',
            'welcome' => '<div class="alert alert-success" role="alert">Welcome! Successfully logged in.</div>',
            'support_sended' => '<div class="alert alert-success" role="alert">Your message sended to support group.</div>'
        ];

        $messageType = $_GET['message'] ?? '';

        if (isset($messages[$messageType])) {
            echo $messages[$messageType];
        }
    }
?>
