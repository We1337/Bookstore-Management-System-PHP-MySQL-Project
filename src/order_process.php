<?php
    session_start();

    include("includes/connection.php");

    if(!empty($_POST))
    {
        extract($_POST);
        extract($_SESSION);

        $_SESSION['error'] = arroy();

        if(empty($fnm))
        {
            $_SESSION['error'][] = "Enter Full Name";
        }

        if(empty($add))
        {
            $_SESSION['error'][] = "Enter Full Address";
        }

        if(empty($pc))
        {
            $_SESSION['error'][] = "Enter City Pincode";
        }

        if(empty($city))
        {
            $_SESSION['error'][] = "Enter City";
        }

        if(empty($state))
        {
            $_SESSION['error'][] = "Enter Mobile Number";
        }
        else if(!is_numeric($mno))
        {
            $_SESSION['error'][] = "Enter Mobile Number in Numbers";
        }

        if(!empty($_SESSION['error']))
        {
            header("location:order.php");
        }
        else
        {
            $rid = $_SESSION['client']['id'];

            $q = "INSERT INTO `bms`.`order` (
                                        `o_id`,
                                        `o_name`,
                                        `o_address`,
                                        `o_pincode`,
                                        `o_city`,
                                        `o_state`,
                                        `o_mobile`,
                                        `o_rid`
                                        )
                                        VALUES (
                                            NULL, '$fnm', '$add', '$pc', '$city', '$state', '$mno', '$rid'
                                        )";
            $res = mysqli_query($link, $q);

            header("location:order.php?order");
        }
    }
    else
    {
        header("location:order.php");
    }
?>