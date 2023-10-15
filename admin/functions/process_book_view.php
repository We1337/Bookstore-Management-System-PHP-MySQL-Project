<?php

    

    function display_data($book_list_result) 
    {
        while($book_row = mysqli_fetch_assoc($book_list_result))
        {
            echo '
                <tr>
                    <td>' . $book_row['book_id'] . '</td>
                    <td>' . $book_row['book_name'] . '</td>
                    <td>' . $book_row['book_category'] . '</td>
                    <td>' . $book_row['book_price'] . '</td>';

            echo "  <td width='120'><center><img src='../$book_row[book_img]' width='50' height='70'></center></td>";
                                                      
            echo '
                    <td>' . @date("d-M-y", $book_row['book_time']) . '</td>
                    <td align="center"><a class="btn btn-danger btn-sm" href="functions/process_book_del.php?id=' . $book_row['book_id'] . '">Delate</a></td>
                    <td align="center"><a class="btn btn-info btn-sm" href="book_edit.php?id=' . $book_row['book_id'] . '">Edit</a></td>
                </tr>';
        }
    }
?>