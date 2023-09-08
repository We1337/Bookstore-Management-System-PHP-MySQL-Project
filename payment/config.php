<?php

// Database Configuration 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'bookstoredatabase'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', 'dedsec44678@'); 

// PayPal Configuration
define('PAYPAL_EMAIL', 'Your PayPal Business Email'); 
define('RETURN_URL', 'https://www.your-website.com/return.php'); 
define('CANCEL_URL', 'https://www.your-website.com/cancel.php'); 
define('NOTIFY_URL', 'https://www.your-website.com/notify.php'); 
define('CURRENCY', 'USD'); 
define('SANDBOX', TRUE); // TRUE or FALSE 
define('LOCAL_CERTIFICATE', FALSE); // TRUE or FALSE

if (SANDBOX === TRUE){
	$paypal_url = "https://www.sandbox.paypal.com/cgi-bin/webscr";
}else{
	$paypal_url = "https://www.paypal.com/cgi-bin/webscr";
}
// PayPal IPN Data Validate URL
define('PAYPAL_URL', $paypal_url);