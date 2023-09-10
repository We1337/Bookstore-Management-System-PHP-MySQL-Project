<?php
// Start a session
session_start();

// Include the database connection
include("includes/connection.php");

if (isset($_GET['bcid'])) {
    // Add a book to the cart
    $bookId = (int)$_GET['bcid'];

    // Query to select the book information
    $query = "SELECT * FROM book WHERE b_id = $bookId";

    // Execute the query
    $result = mysqli_query($link, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Add the selected book to the cart session
        $_SESSION['cart'][] = array(
            "nm" => $row['b_nm'],
            "img" => $row['b_img'],
            "price" => $row['b_price'],
            "qty" => 1
        );
    }
} elseif (!empty($_POST)) {
    // Update quantities in the cart based on the submitted form data
    foreach ($_POST as $id => $qty) {
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['qty'] = $qty;
        }
    }
} elseif (isset($_GET['id'])) {
    // Remove a book from the cart
    $id = $_GET['id'];

    if (isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]);
    }
}

// Redirect to the cart page
header("location:cart.php");
?>
