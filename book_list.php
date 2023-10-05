<?php
    include("includes/header.php");
    include("includes/connection.php");
    include("functions/book_list_process.php");
    include("functions/notification.php");

    display_notification_messages();
?>

        <header class="d-flex justify-content-center py-3">
            <h3 class="nav-item">List of Books</h3>
        </header>

        <div class="album py-3 bg-body-tertiary">
            <div class="container">
                <div class="row">
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-md-4">
                            <a class="link-offset-2 link-underline link-underline-opacity-0" href="book_detail.php?id=<?php echo $row['book_id']; ?>">
                                <div class="card shadow-sm">
                                    <img class="bd-placeholder-img card-img-top" width="100" height="500" src="<?php echo $row['book_img']; ?>">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <small class="text-body-secondary"><?php echo $row['book_name']; ?></small>
                                            <small class="text-body-secondary">₸ <?php echo $row['book_price']; ?></small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

<?php
    include("includes/footer.php");
?>
