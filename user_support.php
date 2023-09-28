<?php
    include('includes/header.php');
?>

        <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">

                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="fw-bold mb-0 fs-2">User support</h1>
                    </div>

                    <div class="modal-body p-5 pt-0">
                        <form class="contact" action="functions/user_support_process.php" method="POST">
                            <!-- Full Name Input -->
                            <div class="form-floating mb-3">
                                <input type="text" name="useremail" class="form-control rounded-3" placeholder="Email">
                                <label for="floatingInput">Email</label>
                            </div>

                            <!-- Email Input -->
                            <div class="form-floating mb-3">
                                <input type="text" name="subject" class="form-control rounded-3" placeholder="Subject">
                                <label for="floatingInput">Subject</label>
                            </div>

                            <!-- Message Textarea -->
                            <div class="form-floating mb-3">
                                <textarea type="text" name="message" class="form-control rounded-3" placeholder="Message"></textarea>
                                <label for="floatingInput">Message</label>
                            </div>

                            <!-- Submit Button -->
                            <button class="w-100 mb-2 btn btn-sm rounded-3 btn-primary" type="submit">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

<?
include("includes/footer.php");
?>