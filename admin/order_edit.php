<?php
    session_start();

    include("includes/header.php");
    include("../includes/connection.php");

    $id = $_GET['id'];

    $order_query = "SELECT * FROM `order_table` WHERE `order_id` = '$id'";

    $result = mysqli_query($connection_database, $order_query);

    $order_row = mysqli_fetch_assoc($result);
?>

        <div class="modal position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="page-header text-center">Update Order</h1>
                    </div>
        
                    <div class="modal-body p-5 pt-0">

                        <form role="form" action="../admin/functions/process_order_edit.php" method="POST" enctype="multipart/form-data">

                            <input type="hidden" name="order_id" value="<?php echo $order_row['order_id']; ?>" />

                            <div class="form-floating mb-3">
                                <input type="text" name="order_name" value="<?php echo $order_row['order_name']; ?>" class="form-control">
                                <label>Order user name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="order_address" value="<?php echo $order_row['order_address']; ?>" class="form-control">
                                <label>Order address</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="order_pincode" value="<?php echo $order_row['order_pincode']; ?>" class="form-control">
                                <label>Order pincode</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="order_city" value="<?php echo $order_row['order_city']; ?>" class="form-control">
                                <label>Order city</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="order_state" value="<?php echo $order_row['order_state']; ?>" class="form-control">
                                <label>Order state</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="order_mobile" value="<?php echo $order_row['order_mobile']; ?>" class="form-control">
                                <label>Order mobile phone</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="order_register_id" value="<?php echo $order_row['order_register_id']; ?>" class="form-control">
                                <label>Order register</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="order_total_price" value="<?php echo $order_row['order_total_price']; ?>" class="form-control">
                                <label>Total price</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="order_list_books" value="<?php echo $order_row['order_list_books']; ?>" class="form-control">
                                <label>Order list</label>
                            </div>

                            <button type="submit" class="btn btn-info btn-sm">Update Order</button>

                            <a href="../admin/order_view.php" class="btn btn-info btn-sm">Exit</a>

                        </form>

                        <?php
                            unset($_SESSION['error']);
                        ?>

                </div>
            </div>
        </div>
    </div>

<?php
    include("includes/footer.php");
?>