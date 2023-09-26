<?php
    // Include the header template
    include("includes/header.php");
?>

        <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="fw-bold mb-0 fs-2">Contact Us</h1>
                    </div>

                    <div class="modal-body p-5 pt-0">
                        <form class="contact" action="contact_process.php" method="POST">

                            <!-- Full Name Input -->
                            <div class="form-floating mb-3">
                                <input type="text" name="full_name" class="form-control rounded-3" placeholder="Full Name">
                                <label for="floatingInput">Full Name</label>
                                <?php
                                    if(isset($_SESSION['error']['fnm'])) {
                                        echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error']['full_name'] . '</div>';
                                    }
                                ?>
                            </div>

                            <!-- Mobile Number Input -->
                            <div class="form-floating mb-3">
                                <input type="number" name="mobile_number" class="form-control rounded-3" placeholder="Mobile Number">
                                <label for="floatingInput">Mobile Number</label>
                                <?php
                                    if(isset($_SESSION['error']['mobile_number'])) {
                                        echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error']['mobile_number'] . '</div>';
                                    }
                                ?>
                            </div>

                            <!-- Email Input -->
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control rounded-3" placeholder="E-mail">
                                <label for="floatingInput">E-mail</label>
                                <?php
                                    if(isset($_SESSION['error']['email'])) {
                                        echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error']['email'] . '</div>';
                                    }
                                ?>
                            </div>

                            <!-- Message Textarea -->
                            <div class="form-floating mb-3">
                                <textarea type="text" name="message" class="form-control rounded-3" placeholder="Message"></textarea>
                                <label for="floatingInput">Message</label>
                                <?php
                                    if(isset($_SESSION['error']['message'])) {
                                        echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error']['message'] . '</div>';
                                    }
                                    // Unset error messages after displaying them
                                    unset($_SESSION['error']);
                                ?>
                            </div>

                            <!-- Submit Button -->
                            <button class="w-100 mb-2 btn btn-sm rounded-3 btn-primary" type="submit" value="Submit">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php
    include("includes/footer.php");
?>
