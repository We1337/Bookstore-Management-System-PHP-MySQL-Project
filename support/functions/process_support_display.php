<?php

    function display_data($support_search_result)
    {
        while($support_row = mysqli_fetch_assoc($support_search_result))
        {
            echo "
                <tr>
                    <td> " . $support_row['user_support_id'] . " </td>
                    <td> " . $support_row['user_support_actual_id'] . " </td>
                    <td> " . $support_row['user_support_email'] . " </td>
                    <td> " . $support_row['user_support_subject'] . " </td>
                    <td> " . $support_row['user_support_message'] . " </td>
                    <td> " . $support_row['user_support_created_at'] . " </td>
                    <td><a class='btn btn-warning btn-sm' href='functions/process_support_status.php?id=" . $support_row['user_support_id'] . "&status=" . $support_row['user_support_status'] . "'>" . $support_row['user_support_status'] . "</a></td>
                    <td><a class='btn btn-danger btn-sm' href='functions/process_support_del.php?id=" . $support_row['user_support_id'] . "'>Delete</a></td>     
                </tr>";
        }
    }
?>