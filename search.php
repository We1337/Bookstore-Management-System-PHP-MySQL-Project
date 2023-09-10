<?php
// Include the header for your web page
include("includes/header.php");
?>

<div class="container">

    <!-- Display the search query -->
    <header class="d-flex justify-content-center py-3">
        <h3 class="nav-item">Search: <?php echo $_GET['s']; ?></h3>
    </header>

    <div class="container">
        <?php
        // Include a database connection
        include("includes/connection.php");

        // Get the search query from the URL
        $s = $_GET['s'];

        // Construct the SQL query to search for books with a name containing the search query
        $blq = "SELECT * FROM book WHERE b_nm LIKE '%$s%'";

        // Execute the SQL query
        $blres = mysqli_query($link, $blq);
        ?>

        <div class="album py-5 bg-body-tertiary">
            <div class="container">
                <div class="row">
                    <?php while ($blrow = mysqli_fetch_assoc($blres)) { ?>
                        <div class="col-md-4">
                            <!-- Display book details and link to book_detail.php for more information -->
                            <a href="book_detail.php?id=<?php echo $blrow['b_id']; ?>">
                                <div class="card shadow-sm">
                                    <!-- Display book image -->
                                    <img class="bd-placeholder-img card-img-top" width="50" height="400" src="<?php echo $blrow['b_img']; ?>">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- Display book name and price -->
                                            <small class="text-body-secondary"><?php echo $blrow['b_nm']; ?></small>
                                            <small class="text-body-secondary">$ <?php echo $blrow['b_price']; ?></small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Include the footer for your web page
include("includes/footer.php");
?>
