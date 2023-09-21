<?php
    include("includes/header.php");
    include("includes/connection.php");

    // Get the book ID from the URL
    $book_id = $_GET['id'];

    // Query to select the book information
    $book_query = "SELECT * FROM `book` WHERE `book_id` = $book_id";

    // Execute the query
    $book_res = mysqli_query($connection, $book_query);

    // Fetch the book details
    $book_row = mysqli_fetch_assoc($book_res);
?>

<header class="d-flex justify-content-center py-3">
    <h3 class="nav-item"><?php echo $book_row['b_cat']; ?></h3>
</header>

<div class="container text-center">
    <div class="d-flex justify-content-center py-3">
        <div class="col-md-12"> 
            <div class="card flex-md-row mb-4 box-shadow h-md-550"> 
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary"><?php echo $book_row['b_nm']; ?></strong>
                    <h3 class="mb-0">
                        <?php echo $book_row['b_price']; ?> KZT
                    </h3>
                    <p class="card-text mb-auto">
                        <?php echo $book_row['b_desc']; ?>
                    </p>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <?php
                            $is_cart = 0;

                            if (isset($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $id => $val) {
                                    if ($val['img'] == $book_row['b_img']) {
                                        $is_cart = 1;
                                        break;
                                    }
                                }
                            }

                            if (isset($_SESSION['client']['status'])) {
                                if ($is_cart == 0) {
                                    echo '<a href="addtocart.php?bcid='.$book_row['b_id'].'" class="btn btn-outline-success mb-3">Add to Cart</a>';
                                } else {
                                    echo "Already in Cart";
                                }
                            } else {
                                echo '<a type="button" href="login.php" class="btn btn-outline-success me-2">Click here Login..</a>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" style="width: 500px; height: 550px;" src="<?php echo $book_row['b_img']; ?>" data-holder-rendered="true">
            </div>
        </div>
    </div>
</div>

<?php
// Include the footer
include("includes/footer.php");
?>
