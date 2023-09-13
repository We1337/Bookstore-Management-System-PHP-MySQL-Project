<?php
session_start();

include('includes/connection.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = 1;
    $subject = "subject";
    $message = "message";

    $sql = "INSERT INTO `userSupport`(`user_id`, `subject`, `message`) VALUES ('$user_id', '$subject', '$message')";
    
    mysqli_query($link, $sql);
    exit;
}

// Fetch and display user's tickets
$user_id = $_SESSION['register'];
$sql = "SELECT id, subject, status FROM userSupport WHERE user_id = ?";
$stmt = $link->prepare($sql);
$stmt->bind_param("i", $user_id); // Bind the parameter

if ($stmt->execute()) {
    $result = $stmt->get_result(); // Get the result set

    ?>

    <div class="container">
        <h2>Submit a Ticket</h2>
        <form method="post" action="user_support.php">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" required><br>

            <label for="message">Message:</label>
            <textarea name="message" rows="4" required></textarea><br>

            <button type="submit">Submit</button>
        </form>
        <h2><?php echo $_SESSION['user']; ?></h2>
        <h2>Your Tickets</h2>
        <ul>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<li>";
                echo "<strong>Subject:</strong> " . htmlspecialchars($row['subject']) . "<br>";
                echo "<strong>Status:</strong> " . htmlspecialchars($row['status']);
                echo "</li>";
            }
            ?>
        </ul>

        <p><a href="logout.php">Logout</a></p>
    </div>

    <?php
} else {
    echo "Error: " . $sql . "<br>" . $stmt->error;
}

// Close the statement and connection when you're done
$stmt->close();
$link->close();
?>
