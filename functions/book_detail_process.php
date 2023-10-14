<?php

    include("./includes/connection.php");

    // Get the book ID from the URL
    $book_id = $_GET['id'];

    // Query to select the book information
    $book_query = "SELECT * FROM `book_table` WHERE `book_id` = $book_id";

    // Execute the query
    $book_result = mysqli_query($connection_database, $book_query);

    // Fetch the book details
    $book_row = mysqli_fetch_assoc($book_result);

    function show_details($input) 
    {
        $cart = 0;

        if (isset($_SESSION['cart'])) 
        {
            foreach ($_SESSION['cart'] as $id => $value) 
            {
                if ($value['img'] == $input['book_img']) 
                {
                    $cart = 1;
                    break;
                }
            }
        }

        if (isset($_SESSION['client']['status'])) 
        {
            if ($cart == 0) 
            {
                echo '<a href="functions/add_to_cart.php?book_card_id=' . $input['book_id'] . '" class="btn btn-outline-success mb-3">Add to Cart</a>';
            } 
            else 
            {
                echo "<a class='btn btn-outline-info mb-3' href='../cart.php'>Already in Cart</a>";
            }
        } 
        else 
        {
            echo '<a type="button" href="login.php" class="btn btn-outline-success me-2">Click here to Login..</a>';
        }
    }

?>