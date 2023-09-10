<?php
// Include the header
include("includes/header.php");
?>

<div id="content">
    <div class="post">
        <h2 class="title">
            <a href="#"><?php echo $_GET['cat']; ?></a>
        </h2>

        <p class="meta"></p>

        <div class="entry">

            <?php
            // Include the database connection
            include("includes/connection.php");

            // Get the category ID from the URL
            $id = $_GET['id'];

            // Query to select books in the specified category
            $blq = "SELECT * FROM book WHERE b_cat=$id";

            // Execute the query
            $blres = mysqli_query($link, $blq);

            // Loop through the results and display book information
            while ($blrow = mysqli_fetch_assoc($blres)) {
                echo '
                    <div class="book_box">
                        <a href="book_detail.php?id=' . $blrow['b_id'] . '">
                            <img src="' . $blrow['b_img'] . '">
                            <h2>' . $blrow['b_nm'] . '</h2>
                            <p>Rs.' . $blrow['b_price'] . '</p>
                        </a>
                    </div>';
            }
            ?>

            <div style="clear:both;"></div>

        </div>
    </div>
</div><!-- end #content -->

<?php
// Include the footer
include("includes/footer.php");
?>
