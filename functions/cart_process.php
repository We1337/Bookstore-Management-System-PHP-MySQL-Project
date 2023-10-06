<?php
    function display() 
    {
        $count = 1;
        $total_price = 0;
        $book_id_amout = array();
        $indexs = "";

        // Check if the 'cart' session variable is set
        if (isset($_SESSION['cart'])) 
        {
            foreach ($_SESSION['cart'] as $id => $value) 
            {
                $rate = $value['quantity'] * $value['price'];
                $total_price = $total_price + $rate;
                $indexs = '(Name: ' . $value['name'] . '. Amount: ' . $value['quantity'] . '), ';
                array_push($book_id_amout, $indexs);

                echo '
                    <tr>
                        <td>' . $count . '</td>
                        <td>' . $value['name'] . '</td>
                        <td><img src="' . $value['img'] . '" width="50" height="70"></td>
                        <td><input type="number" min="1" value="' . $value['quantity'] . '" style="width: 50px" name="' . $id . '"></td>
                        <td>' . $value['price'] . '</td>
                        <td>' . $rate . '</td>
                        <td><a class="btn btn-outline-danger" href="../functions/add_to_cart.php?id=' . $id . '">Delete</a></td>
                    </tr>';

                $count++;
            }
        }

        $amout_of_books = implode($book_id_amout);

        echo '
            <tr>
                <td colspan="5">Total: </td>
                <td colspan="2">KZT ' . $total_price . ' </td>
            </tr>

            <div align="center" style="margin-top: 20px">
                <input type="submit" value="Re-calculate" class="btn btn-outline-info btn-sm">
                <a class="btn btn-outline-success btn-sm" href="../order.php" name="button" >Confirm & Submit Order</a>     
            </div>';

        $_SESSION['client']['order_total_price'] = $total_price;
        $_SESSION['client']['order_books_name'] = $amout_of_books;

    }

?>