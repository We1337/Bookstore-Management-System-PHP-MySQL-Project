<?php
    include("includes/header.php");
    include("functions/cart_process.php");
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
                                display();
                            ?>
                        </tbody>
                        
                    </table>
                </form>
            </div>
        </div>

<?php
    include("includes/footer.php");
?>
