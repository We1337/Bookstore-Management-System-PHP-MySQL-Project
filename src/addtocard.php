<?php
    session_start();

    if(isset($_GET['bcid'])) 
    {
        include("includes/connection.php");

        $q = "SELECT * FROM book WHERE b_id = " . $_GET['bcid'];

        $res = mysqli_query($link, $q);

        $row = mysqli_fetch_assoc($res);

        $_SESSION['card'][] = array("nm" => $row['b_nm'], "img" => $row['b_img'], "price" => $row['b_price'], "qty" => 1);
    }
    else if(!empty($_POST)) 
    {
        foreach($_POST as $id => $qty)
        {
            $_SESSION['card'][$id]['qty'] = $qty;
        }
    }
    else if(isset($_GET['id']))
    {
        $if = $_GET['id'];
        unset($_SESSION['cart'][$id]);
    }

    header("location:card.php");
?>