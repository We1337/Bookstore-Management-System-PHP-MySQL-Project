<?php
    require_once('payment/dbclass.php');
    include("includes/header.php");
?>

        <!-- Payment Integration Section -->
        <br>
            <h2 class="text-center">PayPal Payment</h2>
        <br>

        <div style='text-align: center;'>
            <div class='product_wrapper'>
                
                <!-- Display the total price in KZT received from the 'price' query parameter -->
                <h2 class='price'>Total price: <?php echo $_SESSION['client']['order_total_price']; ?>₸</h2>
                <br>

                <form method='POST' action='<?php echo PAYPAL_URL; ?>'>

                    <!-- PayPal business email to collect payments -->
                    <input type='hidden' name='business' value='<?php echo PAYPAL_EMAIL; ?>'>

                    <!-- Details of the item that customers will purchase -->
                    <input type='hidden' name='item_number' value="1">
                    <input type='hidden' name='item_name' value='<?php echo 'books'; ?>'>
                    <input type='hidden' name='amount' value='<?php echo round($_SESSION['client']['order_total_price'] / 477, 2); ?>'>
                    <input type='hidden' name='currency_code' value='<?php echo CURRENCY; ?>'>
                    <input type='hidden' name='no_shipping' value='1'>
                    
                    <!-- PayPal return, cancel & IPN (Instant Payment Notification) URLs -->
                    <input type='hidden' name='return' value='<?php echo RETURN_URL; ?>'>
                    <input type='hidden' name='cancel_return' value='<?php echo CANCEL_URL; ?>'>
                    <input type='hidden' name='notify_url' value='<?php echo NOTIFY_URL; ?>'>

                    <!-- Specify a Pay Now button. -->
                    <input type="hidden" name="cmd" value="_xclick">
                    <button type='submit' class='btn btn-outline-primary'>Pay Now</button>
                    
                </form>
            </div>
        </div>

<?php
    include("includes/footer.php");
?>