<?php
    include("includes/header.php");
?>

    <div class="container">
        <div class="post">
            <br>
            <h2 class="title text-center">Cart</h2>
            <form action="functions/add_to_cart.php" method="POST">
                <table class="table" cellspacing="0" border="0" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Price</th>
                            <th scope="col">Rate</th>
                            <th scope="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $count = 1;
                            $total = 0;
                            $book_id_amout = array();
                            $indexs = "";

                            // Check if the 'cart' session variable is set
                            if (isset($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $id => $value) {
                                    $rate = $value['quantity'] * $value['price'];
                                    $total = $total + $rate;
                                    $indexs = '(Name: ' . $value['name'] . '. Amount: ' . $value['quantity'] . '), ';
                                    array_push($book_id_amout, $indexs);

                                    echo '
                                        <tr>
                                            <td>' . $count . '</td>
                                            <td>' . $value['name'] . '</td>
                                            <td><img src="' . $value['img'] . '" width="50" height="70"></td>
                                            <td><input type="number" min="1" value="' . $value['quantity'] . '" style="width: 50px" name="' . $id . '"></td>
                                            <td>' . $value['price'] . '</td>
                                            <td>' . $rate . '</td>
                                            <td><a class="btn btn-outline-danger" href="functions/add_to_cart.php?id=' . $id . '">Delete</a></td>
                                        </tr>';

                                    $count++;
                                }
                            }
                        ?>
                    </tbody>

                    <tr>
                        <td colspan="5">Total: </td>
                        <td colspan="2">KZT. <?php echo $total; ?></td>
                    </tr>
                </table>

                <p><?php $amout_of_books = implode($book_id_amout); ?></p>

                <div align="center" style="margin-top: 20px">
                    <input type="submit" value="Re-calculate" class="btn btn-primary btn-sm">

                    <?php
                    echo '<a class="btn btn-outline-success btn-sm" href="order.php?total=' . $total . '&books=' . $amout_of_books . '" name="button" >Confirm & Submit Order</a>';
                    ?>
                </div>
            </form>
        </div>
    </div>

<?php
    include("includes/footer.php");
?>
