<?php
    include('includes/header.php');
    include('functions/notification.php');

    display_notification_messages();
?>

        <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">

                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="fw-bold mb-0 fs-2">User support</h1>
                    </div>

                    <div class="modal-body p-5 pt-0">
                        <form action="functions/user_support_process.php" method="POST">
                            <!-- Full Name Input -->
                            <div class="form-floating mb-3">
                                <input name="user_email" type="email" class="form-control rounded-3" placeholder="E-mail">
                                <label>Email</label>
                            </div>

                            <!-- Email Input -->
                            <div class="form-floating mb-3">
                                <input name="subject" type="text" class="form-control rounded-3" placeholder="Subject">
                                <label>Subject</label>
                            </div>

                            <!-- Message Textarea -->
                            <div class="form-floating mb-3">
                                <textarea name="message" type="text" class="form-control rounded-3" placeholder="Message"></textarea>
                                <label>Message</label>
                            </div>

                            <!-- Submit Button -->
                            <button class="w-100 mb-2 btn btn-sm rounded-3 btn-outline-info" type="submit">Submit</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>

<?php
    include("includes/footer.php");
?>