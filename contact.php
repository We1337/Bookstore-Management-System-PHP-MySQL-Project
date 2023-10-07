<?php
    // Include the header template
    include("includes/header.php");
    include("functions/notification.php");

    display_notification_messages();
    display_notification_messages_sucesses();
?>

        <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="fw-bold mb-0 fs-2">Contact Us</h1>
                    </div>

                    <div class="modal-body p-5 pt-0">
                        <form action="functions/contact_process.php" method="POST">

                            <!-- Full Name Input -->
                            <div class="form-floating mb-3">
                                <input type="text" name="full_name" class="form-control rounded-3" placeholder="Full Name">
                                <label>Full Name</label>
                            </div>

                            <!-- Mobile Number Input -->
                            <div class="form-floating mb-3">
                                <input type="text" name="mobile_number" class="form-control rounded-3" placeholder="Mobile Number">
                                <label>Mobile Number</label>
                            </div>

                            <!-- Email Input -->
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control rounded-3" placeholder="E-mail">
                                <label>E-mail</label>
                            </div>

                            <!-- Message Textarea -->
                            <div class="form-floating mb-3">
                                <textarea type="text" name="message" class="form-control rounded-3" placeholder="Message"></textarea>
                                <label>Message</label>
                            </div>

                            <!-- Submit Button -->
                            <button class="w-100 mb-2 btn btn-sm rounded-3 btn-outline-info" type="submit" value="Submit">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php
    include("includes/footer.php");
?>
