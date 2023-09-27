<?php
session_start();

if (!empty($_POST)) {
    extract($_POST);
    $_SESSION['error'] = array();

    // Check if 'fnm' (Full Name) is empty
    if (empty($fullname)) {
        $_SESSION['error']['fullname'] = "Enter Full Name";
    }

    // Check if 'add' (Full Address) is empty
    if (empty($add)) {
        $_SESSION['error']['add'] = "Enter Full Address";
    }

    // Check if 'pc' (City Pincode) is empty
    if (empty($pincode)) {
        $_SESSION['error']['pincode'] = "Enter City Pincode";
    }

    // Check if 'city' (City) is empty
    if (empty($city)) {
        $_SESSION['error']['city'] = "Enter City";
    }

    // Check if 'state' (State) is empty
    if (empty($state)) {
        $_SESSION['error']['state'] = "Enter State";
    }

    // Check if 'mno' (Mobile Number) is empty
    if (empty($mobile_number)) {
        $_SESSION['error']['mobile_number'] = "Enter Mobile Number";
    } elseif (!is_numeric($mobile_number)) {
        // Check if 'mobile_number' contains non-numeric characters
        $_SESSION['error']['mobile_number'] = "Enter Mobile Number in Numbers";
    }

    if (!empty($_SESSION['error'])) {
        // Redirect to 'order.php' with an error message
        header("location: order.php?error=wentwrong");
    } else {
        include("includes/connection.php");

        // Get the user ID from the session
        $register = $_SESSION['client']['id'];

        // Prepare and execute the SQL query to insert the order data into the database
        $query = "INSERT INTO `order_table`(`order_name`, `order_address`, `order_pincode`, `order_city`, `order_state`, `order_mobile`, `order_register_id`, `order_total_price`, `order_list_books`) VALUES ('$fullname', '$add', '$pincode', '$city', '$state', '$mobile_number', '$register', '$totalprice', '$totalbooks')";
        $res = mysqli_query($connection_database, $query);

        // Redirect to 'payment.php' with the total price as a parameter
        header("location: payment.php?price=" . $totalprice);
    }
} else {
    // Redirect to 'order.php' with an empty error message
    header("location: order.php?error=empty");
}
?>
