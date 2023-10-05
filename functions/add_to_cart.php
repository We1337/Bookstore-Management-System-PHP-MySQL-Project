<?php
    session_start();

    // Include the database connection
    include("../includes/connection.php");

    if (isset($_GET['book_card_id'])) 
    {
        // Add a book to the cart
        $book_id = (int)$_GET['book_card_id'];

        // Query to select the book information
        $query = "SELECT * FROM `book_table` WHERE `book_id` = $book_id";

        // Execute the query
        $result = mysqli_query($connection_database, $query);

        if ($result && mysqli_num_rows($result) > 0) 
        {
            $row = mysqli_fetch_assoc($result);
            // Add the selected book to the cart session
            $_SESSION['cart'][] = array( "name" => $row['book_name'], "img" => $row['book_img'], "price" => $row['book_price'], "quantity" => 1);
        }
    } 
    elseif (!empty($_POST)) 
    {
        // Update quantities in the cart based on the submitted form data
        foreach ($_POST as $id => $quantity) 
        {
            if (isset($_SESSION['cart'][$id])) 
            {
                $_SESSION['cart'][$id]['quantity'] = $quantity;
            }
        }
    } 
    elseif (isset($_GET['id'])) 
    {
        // Remove a book from the cart
        $id = $_GET['id'];

        if (isset($_SESSION['cart'][$id])) 
        {
            unset($_SESSION['cart'][$id]);
        }
    }

    // Redirect to the cart page
    header("location: ../cart.php");
    exit();
?>
