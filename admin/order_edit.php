<?php
    session_start();

    include("includes/header.php");
    include("../includes/connection.php");
    include("functions/process_order_edit_data.php");
?>

        <div class="container-fluid px-4 mt-4">
            <form action="functions/process_order_edit.php" method="POST" enctype="multipart/form-data">
                <div class=" mb-4">
                    <div class="card-header">Order Details</div>
                        <div class="card-body">
                                        
                            <input name="order_id" type="hidden" value="<?php echo $id; ?>">

                            <div class="mb-3">
                                <label class="small mb-1">Order user name</label>
                                <input name="order_name" class="form-control" type="text" placeholder="Order user name" value="<?php echo $order_row['order_name']; ?>">
                            </div>

                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1">Address</label>
                                    <input name="order_address" class="form-control" type="text" placeholder="Address" value="<?php echo $order_row['order_address']; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1">Post code</label>
                                    <input name="order_pincode" class="form-control" type="text" placeholder="Post code" value="<?php echo $order_row['order_pincode']; ?>">
                                </div>
                            </div>

                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1">City</label>
                                    <input name="order_city" class="form-control" type="text" placeholder="City" value="<?php echo $order_row['order_city']; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1">Order state</label>
                                    <input name="order_state" class="form-control" type="text" placeholder="State" value="<?php echo $order_row['order_state']; ?>">
                                </div>
                            </div>

                            <div class="row gx-3 mb-3">
                                <div class="mb-3">
                                    <label class="small mb-1">Phone number</label>
                                    <input name="order_mobile" class="form-control" type="text" placeholder="Phone number" value="<?php echo $order_row['order_mobile']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="small mb-1">Order user ID</label>
                                    <input name="order_register_id" class="form-control" type="text" placeholder="Order user ID" value="<?php echo $order_row['order_register_id']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="small mb-1">Order total price</label>
                                    <input name="order_total_price" class="form-control" type="text" placeholder="Order total price" value="<?php echo $order_row['order_total_price']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="small mb-1">Order list book</label>
                                    <input name="order_list_books" class="form-control" type="text" placeholder="Order list book" value="<?php echo $order_row['order_list_books']; ?>">
                                </div>

                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <button class="btn btn-outline-info" type="submit" value="submit">Save changes</button>
                                        <a class="btn btn-outline-info" href="order_view.php">Exit</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>     

<?php
    include("includes/footer.php");
?>