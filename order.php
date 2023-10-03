<?php
    // Include the header of the page
    include("includes/header.php");

    // Get the total price and number of books from the query parameters
    $total = $_GET['total'];
    $books = $_GET['books'];
?>

        <!-- Order Form Modal -->
        <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <!-- Modal Header -->
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="fw-bold mb-0 fs-2">Order - Cash On Delivery</h1>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body p-5 pt-0">
                        <form action="functions/order_process.php" method="POST">
                            <?php
                                // Check if the 'order' parameter is set (order successfully placed)
                                if (isset($_GET['order'])) {
                                    echo '<font style="color:green">Order Successfully Placed</font><br><br>';
                                }
                            ?>

                            <br>

                            <!-- Full Name Input -->
                            <div class="form-floating mb-3">
                                <input name="fullname" type="text" class="form-control rounded-3" placeholder="Full Name">
                                <label>Full Name</label>
                                <?php
                                    if (isset($_SESSION['error']['fullname'])) {
                                        echo '<font color="red">' . $_SESSION['error']['fullname'] . '</font>';
                                    }
                                ?>
                            </div>

                            <!-- Address Input -->
                            <div class="form-floating mb-3">
                                <input name="add" type="text" class="form-control rounded-3" placeholder="Address">
                                <label>Address</label>
                                <?php
                                    if (isset($_SESSION['error']['add'])) {
                                        echo '<font color="red">' . $_SESSION['error']['add'] . '</font>';
                                    }
                                ?>
                            </div>

                            <!-- Pincode Input -->
                            <div class="form-floating mb-3">
                                <input name="pincode" type="text" class="form-control rounded-3" placeholder="Pin code">
                                <label>Pin code</label>
                                <?php
                                    if (isset($_SESSION['error']['pincode'])) {
                                        echo '<font color="red">' . $_SESSION['error']['pincode'] . '</font>';
                                    }
                                ?>
                            </div>

                            <!-- City Input -->
                            <div class="form-floating mb-3">
                                <input name="city" type="text" class="form-control rounded-3" placeholder="City">
                                <label>City</label>
                                <?php
                                    if (isset($_SESSION['error']['city'])) {
                                        echo '<font color="red">' . $_SESSION['error']['city'] . '</font>';
                                    }
                                ?>
                            </div>

                            <!-- State Input -->
                            <div class="form-floating mb-3">
                                <input name="state" type="text" class="form-control rounded-3" placeholder="State">
                                <label>State</label>
                                <?php
                                    if (isset($_SESSION['error']['state'])) {
                                        echo '<font color="red">' . $_SESSION['error']['state'] . '</font>';
                                    }
                                ?>
                            </div>

                            <!-- Mobile Number Input -->
                            <div class="form-floating mb-3">
                                <input name="mobile_number" type="text" class="form-control rounded-3" placeholder="Mobile Number">
                                <label>Mobile Number</label>
                                <?php
                                    if (isset($_SESSION['error']['mobile_number'])) {
                                        echo '<font color="red">' . $_SESSION['error']['mobile_number'] . '</font>';
                                    }
                                ?>
                            </div>

                            <!-- Hidden Fields for Total Price and Total Books -->
                            <input name="totalprice" type="hidden" value="<?php echo intval($total) ?>">
                            <input name="totalbooks" type="hidden" value="<?php echo $books ?>">

                            <!-- Submit Button -->
                            <button type="submit" name="sub" class="btn btn-outline-primary">Confirm & Proceed</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php
    include("includes/footer.php");
?>