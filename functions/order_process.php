<?php
    session_start();

    if (!empty($_POST)) 
    {
        extract($_POST);

        $_SESSION['error'] = array();

        // Check if 'fnm' (Full Name) is empty
        if (empty($fullname)) 
        {
            $_SESSION['error'][] = "Enter full name";
        }

        // Check if 'add' (Full Address) is empty
        if (empty($address)) 
        {
            $_SESSION['error'][] = "Enter full address";
        }

        // Check if 'pc' (City Pincode) is empty
        if (empty($pincode)) 
        {
            $_SESSION['error'][] = "Enter city pincode";
        }

        // Check if 'city' (City) is empty
        if (empty($city)) 
        {
            $_SESSION['error'][] = "Enter city";
        }

        // Check if 'state' (State) is empty
        if (empty($state)) 
        {
            $_SESSION['error'][] = "Enter state";
        }

        // Check if 'mno' (Mobile Number) is empty
        if (empty($mobile_number)) 
        {
            $_SESSION['error'][] = "Enter mobile number";
        } 
        elseif (!is_numeric($mobile_number)) 
        {
            // Check if 'mobile_number' contains non-numeric characters
            $_SESSION['error'][] = "Enter mobile number in digits";
        }

        if($_SESSION['client']['order_total_price'] <= 0)
        {
            $_SESSION['error'][] = "Cart is empty";
            header("location: ../book_list.php");
            exit();
        }

        if (!empty($_SESSION['error'])) 
        {
            // Redirect to 'order.php' with an error message
            header("location: ../order.php");
            exit();
        } 
        else 
        {
            include("../includes/connection.php");

            // Get the user ID from the session
            $register = $_SESSION['client']['id'];
            $total_price = $_SESSION['client']['order_total_price'];
            $book_name = $_SESSION['client']['order_books_name'];

            // Prepare and execute the SQL query to insert the order data into the database
            $query = "INSERT INTO `order_table`(`order_name`, `order_address`, `order_pincode`, `order_city`, `order_state`, `order_mobile`, `order_register_id`, `order_total_price`, `order_list_books`) VALUES ('$fullname', '$address', '$pincode', '$city', '$state', '$mobile_number', '$register', '$total_price', '$book_name')";
            mysqli_query($connection_database, $query);

            // Redirect to 'payment.php' with the total price as a parameter
            header("location: ../payment.php");
            exit();
        }
    } 
    else 
    {
        // Redirect to 'order.php' with an empty error message
        header("location: ../order.php");
        exit();
    }
?>
