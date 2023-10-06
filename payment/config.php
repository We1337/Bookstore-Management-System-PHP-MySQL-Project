<?php

	// Database Configuration 
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'bookstoredatabase'); 
	define('DB_USERNAME', 'root'); 
	define('DB_PASSWORD', 'dedsec44678@'); 

	// PayPal Configuration
	define('PAYPAL_EMAIL', 'sb-wx1bv26591863@business.example.com'); 
	define('RETURN_URL', '/index.php'); 
	define('CANCEL_URL', 'cancel.php'); 
	define('NOTIFY_URL', 'notify.php'); 
	define('CURRENCY', 'USD'); 
	define('SANDBOX', TRUE); // TRUE or FALSE 
	define('LOCAL_CERTIFICATE', FALSE); // TRUE or FALSE

	$paypal_url = (SANDBOX === TRUE) ? "https://www.sandbox.paypal.com/cgi-bin/webscr" : "https://www.paypal.com/cgi-bin/webscr";
	// PayPal IPN Data Validate URL
	define('PAYPAL_URL', $paypal_url);

?>