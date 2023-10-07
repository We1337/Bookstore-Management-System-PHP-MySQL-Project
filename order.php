<?php
    // Include the header of the page
    include("includes/header.php");
    include("functions/notification.php");

    display_notification_messages();
    display_notification_messages_sucesses();
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
                            <!-- Full Name Input -->
                            <div class="form-floating mb-3">
                                <input name="fullname" type="text" class="form-control rounded-3" placeholder="Full Name">
                                <label>Full Name</label>
                            </div>

                            <!-- Address Input -->
                            <div class="form-floating mb-3">
                                <input name="address" type="text" class="form-control rounded-3" placeholder="Address">
                                <label>Address</label>
                            </div>

                            <!-- Pincode Input -->
                            <div class="form-floating mb-3">
                                <input name="pincode" type="text" class="form-control rounded-3" placeholder="Pin code">
                                <label>Pin code</label>
                            </div>

                            <!-- City Input -->
                            <div class="form-floating mb-3">
                                <input name="city" type="text" class="form-control rounded-3" placeholder="City">
                                <label>City</label>
                            </div>

                            <!-- State Input -->
                            <div class="form-floating mb-3">
                                <input name="state" type="text" class="form-control rounded-3" placeholder="State">
                                <label>State</label>
                            </div>

                            <!-- Mobile Number Input -->
                            <div class="form-floating mb-3">
                                <input name="mobile_number" type="text" class="form-control rounded-3" placeholder="Mobile Number">
                                <label>Mobile Number</label>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" name="submit" class="w-100 mb-2 btn btn-lg rounded-3 btn-outline-info btn-sm">Confirm & Proceed</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php
    include("includes/footer.php");
?>