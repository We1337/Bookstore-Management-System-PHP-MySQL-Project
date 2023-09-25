<?php
    include("includes/header.php");
?>

        <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <!-- Modal Header -->
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="fw-bold mb-0 fs-2">Login</h1>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body p-5 pt-0">
                        <!-- Login Form -->
                        <form class="login" action="login_process.php" method="POST">
                            <?php
                                // Display error messages, if any
                                if (!empty($_SESSION['error'])) {
                                    foreach ($_SESSION['error'] as $errors) {
                                        echo '<div class="alert alert-info" role="alert">' . $errors . '</div>';
                                    }
                                    unset($_SESSION['error']);
                                }
                            ?>
                            <div class="form-floating mb-3">
                                <input name="username" type="text" class="form-control rounded-3" placeholder="User ID">
                                <label for="floatingInput">User ID</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="password" type="password" class="form-control rounded-3" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <button class="w-100 mb-2 btn btn-sm rounded-3 btn-primary" type="submit" value="Login">Login</button>
                            <a href="register.php" class="w-100 mb-2 btn btn-sm rounded-3 btn-primary" role="button">Registration</a>
                            <a href="forget_password.php" class="w-100 py-2 mb-2 btn btn-outline-primary btn-sm rounded-3" role="button">Forget Password?</a>

                            <!-- Admin Section -->
                            <h2 class="fs-5 fw-bold mb-3">For Admins</h2>
                            <a href="admin/index.php" class="w-100 py-2 mb-2 btn btn-outline-primary btn-sm rounded-3" role="button">Admin Login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php
    include("includes/footer.php");
?>
