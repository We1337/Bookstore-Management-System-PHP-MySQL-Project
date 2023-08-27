<?php
    session_start();

    if(!empty($_POST))
    {
        extract($_POST)
        $_SESSION['error']=array();

        if(empty($fnm))
        {
            $_SESSION['error']['fnm'] = "Please enter Full Name";
        }

        if(empty($mno))
        {
            $_SESSION['error']['mno'] = "Please enter Full Name";
        }
        else if(!empty($mno))
        {
            if(!is_numeric($mno))
            {
                $_SESSION['error']['mno'] = "Please Enter Numberic Mobile Number";
            }
        }

        if(!empyt($error))
        {
            foreach($error as $er)
            {
                echo '<font color="red">'.$er.'</font><br>';
            }
        }
        else
        {
            include("includes/connection.php");

            $t = time();

            $q = "INSERT INTO contact(c_fnm, c_mno, c_email, c_msg, c_time) VALUES('$fmn', '$mno', '$email', '$msg', '$t')";

            mysqli_query($link, $q);
            
            header("location:contact.php");
        }
    }
    else 
    {
        header("location:contact.php");
    }
?>