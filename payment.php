<?php

require_once('payment/dbclass.php');
?>

<html>
<head>
<title>PayPal Payment Integration in PHP</title>
</head>
<body>

<h2>PayPal Payment Integration in PHP</h2>


        <div class='product_wrapper'>
            <div class='name'><?php echo 'hello'; ?></div>
            <div class='price'>$<?php echo $_GET['price']; ?></div>
            <form method='post' action='<?php echo PAYPAL_URL; ?>'>

                <!-- PayPal business email to collect payments -->
                <input type='hidden' name='business' value='<?php echo PAYPAL_EMAIL; ?>'>

                <!-- Details of item that customers will purchase -->
                <input type='hidden' name='item_number' value='<?php echo 12; ?>'>
                <input type='hidden' name='item_name' value='<?php echo 'books'; ?>'>
                <input type='hidden' name='amount' value='<?php echo $_GET['price']; ?>'>
                <input type='hidden' name='currency_code' value='<?php echo CURRENCY; ?>'>
                <input type='hidden' name='no_shipping' value='1'>
                
                <!-- PayPal return, cancel & IPN URLs -->
                <input type='hidden' name='return' value='<?php echo RETURN_URL; ?>'>
                <input type='hidden' name='cancel_return' value='<?php echo CANCEL_URL; ?>'>
                <input type='hidden' name='notify_url' value='<?php echo NOTIFY_URL; ?>'>

                <!-- Specify a Pay Now button. -->
                <input type="hidden" name="cmd" value="_xclick">
                <button type='submit' class='pay'>Pay Now</button>
                
            </form>
		</div>

</body>
</html>