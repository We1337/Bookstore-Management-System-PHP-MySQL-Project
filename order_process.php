<?php
session_start();

if (!empty($_POST)) {
    extract($_POST);
    $_SESSION['error'] = array();

    // Check if 'fnm' (Full Name) is empty
    if (empty($fnm)) {
        $_SESSION['error']['fnm'] = "Enter Full Name";
    }

    // Check if 'add' (Full Address) is empty
    if (empty($add)) {
        $_SESSION['error']['add'] = "Enter Full Address";
    }

    // Check if 'pc' (City Pincode) is empty
    if (empty($pc)) {
        $_SESSION['error']['pc'] = "Enter City Pincode";
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
    if (empty($mno)) {
        $_SESSION['error']['mno'] = "Enter Mobile Number";
    } elseif (!is_numeric($mno)) {
        // Check if 'mno' contains non-numeric characters
        $_SESSION['error']['mno'] = "Enter Mobile Number in Numbers";
    }

    if (!empty($_SESSION['error'])) {
        // Redirect to 'order.php' with an error message
        header("location: order.php?error=wentwrong");
    } else {
        include("includes/connection.php");

        // Get the user ID from the session
        $rid = $_SESSION['client']['id'];

        // Prepare and execute the SQL query to insert the order data into the database
        $q = "INSERT INTO `order`(`o_id`, `o_name`, `o_address`, `o_pincode`, `o_city`, `o_state`, `o_mobile`, `o_rid`, `o_total_price`, `o_list_books`) VALUES (NULL, '$fnm', '$add', '$pc', '$city', '$state', '$mno', '$rid', '$totalprice', '$totalbooks')";
        $res = mysqli_query($link, $q);

        // Redirect to 'payment.php' with the total price as a parameter
        header("location: payment.php?price=" . $totalprice);
    }
} else {
    // Redirect to 'order.php' with an empty error message
    header("location: order.php?error=empty");
}
?>
