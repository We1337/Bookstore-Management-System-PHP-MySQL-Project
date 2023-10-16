<?php
    include("includes/header.php");
    include("functions/notification.php");

    display_notification_messages();
    display_notification_messages_sucesses();
?>

        <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <!-- Modal Header -->
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="fw-bold mb-0 fs-2">Login</h1>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body p-5 pt-0">
                        <!-- Login Form -->
                        <form class="login" action="functions/login_process.php" method="POST">
                            
                            <div class="form-floating mb-3">
                                <input name="username" type="text" class="form-control rounded-3" placeholder="User ID or Email">
                                <label>User ID or Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="password" type="password" class="form-control rounded-3" placeholder="Password">
                                <label>Password</label>
                            </div>

                            <button class="w-100 mb-2 btn btn-info btn-sm rounded-3" type="submit" value="Login">Sign in</button>
                            <a href="register.php" class="w-100 mb-2 btn btn-info btn-sm rounded-3" role="button">Sign up</a>
                            <a href="forget_password.php" class="w-100 mb-2 btn btn-outline-info btn-sm rounded-3" role="button">Forget Password?</a>

                            <!-- Admin Section -->
                            <h2 class="fs-5 fw-bold mb-3">For Admins</h2>
                            <a href="admin/index.php" class="w-100 mb-2 btn btn-outline-info btn-sm rounded-3" role="button">Admin Login</a>
                           
                            <!-- Support Section -->
                            <h2 class="fs-5 fw-bold mb-3">For Support team</h2>
                            <a href="support/index.php" class="w-100 mb-2 btn btn-outline-info btn-sm rounded-3" role="button">Support Login</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php
    include("includes/footer.php");
?>
