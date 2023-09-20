<?php
    include("includes/header.php");
    include("includes/connection.php");
?>

<div class="container">

    <!-- Display the search query -->
    <header class="d-flex justify-content-center py-3">
        <h3 class="nav-item">Search: <?php echo $_GET['search']; ?></h3>
    </header>

    <div class="container">
        <?php
            // Get the search query from the URL
            $search = $_GET['search'];

            // Construct the SQL query to search for books with a name containing the search query
            $book_list_query = "SELECT * FROM `book` WHERE `book_name` LIKE '%$search%' OR `book_description` LIKE '%$search%'";

            // Execute the SQL query
            $book_list_result = mysqli_query($connection_db, $book_list_query);
        ?>

        <div class="album py-5 bg-body-tertiary">
            <div class="container">
                <div class="row">
                    <?php while ($book_list_row = mysqli_fetch_assoc($book_list_result)) { ?>
                        <div class="col-md-4">
                            <!-- Display book details and link to book_detail.php for more information -->
                            <a href="book_detail.php?id=<?php echo $book_list_row['book_id']; ?>">
                                <div class="card shadow-sm">
                                    <!-- Display book image -->
                                    <img class="bd-placeholder-img card-img-top" width="50" height="400" src="<?php echo $book_list_row['book_img']; ?>">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- Display book name and price -->
                                            <small class="text-body-secondary"><?php echo $book_list_row['book_name']; ?></small>
                                            <small class="text-body-secondary">₸ <?php echo $book_list_row['book_price']; ?></small>
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
    include("includes/footer.php");
?>
