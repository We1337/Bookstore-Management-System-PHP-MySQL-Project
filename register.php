<?php
    // Include the header
    include("includes/header.php");

    // Check if the registration was successful
    if (isset($_GET['registered'])) {
        echo '<div class="alert alert-success" role="alert">This is a success alert—check it out!</div>';
    }
?>

        <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="fw-bold mb-0 fs-2">Sign up for free</h1>
                    </div>

                    <div class="modal-body p-5 pt-0">
                        <form action="functions/register_process.php" method="POST">

                            <div class="form-floating mb-3">
                                <input name="fullname" type="text" class="form-control rounded-3" placeholder="Full Name">
                                <label>Full Name</label>
                                <?php
                                    if(isset($_SESSION['error']['fullname'])) {
                                        echo '<font color="red">' . $_SESSION['error']['fullname'] . '</font>';
                                    }
                                ?>
                            </div>

                            <div class="form-floating mb-3">
                                <input name="username" type="text" class="form-control rounded-3" placeholder="User Name">
                                <label>User Name</label>
                                <?php
                                    if(isset($_SESSION['error']['username'])) {
                                        echo '<font color="red">' . $_SESSION['error']['username'] . '</font>';
                                    }
                                ?>
                            </div>

                            <div class="form-floating mb-3">
                                <input name="password" type="password" class="form-control rounded-3" placeholder="Password">
                                <label>Password</label>
                                <?php
                                    if(isset($_SESSION['error']['password'])) {
                                        echo '<font color="red">' . $_SESSION['error']['password'] . '</font>';
                                    }
                                ?>
                            </div>

                            <div class="form-floating mb-3">
                                <input name="confirm_password" type="password" class="form-control rounded-3" placeholder="Confirm Password">
                                <label>Confirm Password</label>
                                <?php
                                    if(isset($_SESSION['error']['password'])) {
                                        echo '<font color="red">' . $_SESSION['error']['password'] . '</font>';
                                    }
                                ?>
                            </div>

                            <div class="form-floating mb-3">
                                <input name="contact_number" type="text" class="form-control rounded-3" placeholder="Contact Number">
                                <label>Contact Number</label>
                                <?php
                                    if(isset($_SESSION['error']['contact_number'])) {
                                        echo '<font color="red">' . $_SESSION['error']['contact_number'] . '</font>';
                                    }
                                ?>
                            </div>

                            <div class="form-floating mb-3">
                                <input name="email" type="email" class="form-control rounded-3" placeholder="E-Mail">
                                <label>E-Mail:</label>
                                <?php
                                    if(isset($_SESSION['error']['email'])) {
                                        echo '<font color="red">' . $_SESSION['error']['email'] . '</font>';
                                    }
                                ?>
                            </div>

                            <select name="question" class="form-select" name="text" aria-label="Default select example">
                                <option>Which is your Favourite Movie?</option>
                                <option>Which is your Favourite Actress?</option>
                            </select>
                            <?php
                                if(isset($_SESSION['error']['question'])) {
                                    echo '<font color="red">' . $_SESSION['error']['question'] . '</font>';
                                }
                            ?>
                            <br>

                            <div class="form-floating mb-3">
                                <input name="answer" type="text" class="form-control rounded-3" placeholder="Security Answer">
                                <label>Security Answer</label>
                                <?php
                                    if(isset($_SESSION['error']['answer'])) {
                                        echo '<font color="red">'.$_SESSION['error']['answer'].'</font>';
                                    }
                                ?>
                            </div>

                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary btn-sm" type="submit" value="Register">Sign up</button>
                            <a href="login.php" class="w-100 mb-2 btn btn-lg rounded-3 btn-primary btn-sm">Sign in</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php
    include("includes/footer.php");
?>