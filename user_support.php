<?php
session_start();

include('includes/connection.php');
include('includes/header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_id = $_POST["username"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $sql = "INSERT INTO `userSupport`(`username`, `subject`, `message`) VALUES ('$user_id', '$subject', '$message')";
    
    mysqli_query($link, $sql);
    header("Location: index.php");
    exit;
}

// Fetch and display user's tickets
$user_id = $_SESSION['register'];
$sql = "SELECT `id`, `subject`, `status` FROM `userSupport` WHERE `username` = ?";
$stmt = $link->prepare($sql);
$stmt->bind_param("i", $user_id); // Bind the parameter

?>

<div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2">User support</h1>
            </div>

            <div class="modal-body p-5 pt-0">
                <form class="contact" action="user_support.php" method="POST">
                    <!-- Full Name Input -->
                    <div class="form-floating mb-3">
                        <input type="text" name="username" class="form-control rounded-3" id="floatingInput" placeholder="Email">
                        <label for="floatingInput">Email</label>
                        <?php
                            if(isset($_SESSION['error']['fnm'])) {
                                echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error']['fnm'] . '</div>';
                            }
                        ?>
                    </div>

                    <!-- Email Input -->
                    <div class="form-floating mb-3">
                        <input type="text" name="subject" class="form-control rounded-3" id="floatingInput" placeholder="Subject">
                        <label for="floatingInput">Subject</label>
                        <?php
                            if(isset($_SESSION['error']['email'])) {
                                echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error']['email'] . '</div>';
                            }
                        ?>
                    </div>

                    <!-- Message Textarea -->
                    <div class="form-floating mb-3">
                        <textarea type="txt" name="message" class="form-control rounded-3" id="floatingInput" placeholder="Message"></textarea>
                        <label for="floatingInput">Message</label>
                        <?php
                            if(isset($_SESSION['error']['msg'])) {
                                echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error']['msg'] . '</div>';
                            }
                            // Unset error messages after displaying them
                            unset($_SESSION['error']);
                        ?>
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