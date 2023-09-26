<?php
    include("includes/header.php");
    include("book_detail_process.php");
?>

    <header class="d-flex justify-content-center py-3">
        <h3 class="nav-item"><?php echo $book_row['book_category']; ?></h3>
    </header>

    <div class="container text-center">
        <div class="d-flex justify-content-center py-3">
            <div class="col-md-12"> 
                <div class="card flex-md-row mb-4 box-shadow h-md-550"> 
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary"><?php echo $book_row['book_name']; ?></strong>
                        <h3 class="mb-0">
                            ₸ <?php echo $book_row['book_price']; ?> 
                        </h3>
                        <p class="card-text mb-auto">
                            <?php echo $book_row['book_description']; ?>
                        </p>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <?php
                                    $cart = 0;

                                    if (isset($_SESSION['cart'])) {
                                        foreach ($_SESSION['cart'] as $id => $value) {
                                            if ($value['img'] == $book_row['book_img']) {
                                                $cart = 1;
                                                break;
                                            }
                                        }
                                    }

                                    if (isset($_SESSION['client']['status'])) {
                                        if ($cart == 0) {
                                            echo '<a href="add_to_cart.php?book_card_id='.$book_row['book_id'].'" class="btn btn-outline-success mb-3">Add to Cart</a>';
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
                    <img class="card-img-right flex-auto d-none d-md-block" style="width: 500px; height: 550px;" src="<?php echo $book_row['book_img']; ?>" data-holder-rendered="true">
                </div>
            </div>
        </div>
    </div>

<?php
    include("includes/footer.php");
?>
