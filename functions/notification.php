<?php

    function display_notification_messages() 
    {
        // Display error messages, if any
        if (!empty($_SESSION['error'])) 
        {
            $arrays_of_message = array();
            
            foreach ($_SESSION['error'] as $errors) 
            { 
                array_push($arrays_of_message, $errors); 
            }

            $messages = implode("<br> ", $arrays_of_message);

            echo '
                <!-- Modal HTML -->
                <div id="myModal" class="modal fade" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Warning!</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <p class="alert alert-warning">' . $messages . '</p>
                            </div>
                        </div>
                    </div>
                </div>
            ';

            unset($_SESSION['error']);
        }
    }

    function display_notification_messages_sucesses() 
    {
        // Display error messages, if any
        if (!empty($_SESSION['message'])) 
        {
            echo '
                <!-- Modal HTML -->
                <div id="myModal" class="modal fade" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Message!</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <p class="alert alert-success">' . $_SESSION['message']['success'] . '</p>
                            </div>
                        </div>
                    </div>
                </div>
            ';

            unset($_SESSION['message']);
        }
    }

?>