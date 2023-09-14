<?php
include("includes/header.php");

// Display messages based on the 'message' query parameter
$messages = [
    'success' => '<div class="alert alert-success" role="alert">Message has been delivered.</div>',
    'error' => '<div class="alert alert-danger" role="alert">Please try again later.</div>',
    'loginsuccess' => '<div class="alert alert-success" role="alert">Welcome! Successfully logged in.</div>',
];

$messageType = $_GET['message'] ?? '';
$_SESSION['actualusername'] = $_GET['username'];


if (isset($messages[$messageType])) {
    echo $messages[$messageType];
}
?>

<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Bookstore</h1>
                <p class="lead text-body-secondary">A Bookstore Management System aims to eliminate paperwork and streamline book-related tasks. It centralizes all activities and allows for multi-tasking. Records are kept securely, and the system prioritizes user experience. Continuous improvement is a priority.</p>
            </div>
        </div>
    </section>

    <?php
    include("includes/connection.php");

    $query = "SELECT * FROM book ORDER BY b_id DESC LIMIT 0,9";
    $result = mysqli_query($link, $query);
    ?>

    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row">
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-md-4">
                        <a href="book_detail.php?id=<?php echo $row['b_id']; ?>">
                            <div class="card shadow-sm">
                                <img class="bd-placeholder-img card-img-top" width="100" height="500" src="<?php echo $row['b_img']; ?>">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-body-secondary"><?php echo $row['b_nm']; ?></small>
                                        <small class="text-body-secondary">$ <?php echo $row['b_price']; ?></small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>

<?php
include("includes/footer.php");
?>
