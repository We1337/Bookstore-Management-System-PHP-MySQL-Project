<?php

    function display_data($contact_list_row)
    {
        while($contact_row = mysqli_fetch_assoc($contact_list_row))
        {
            echo '
                <tr>
                    <td>' . $contact_row['contact_id'] . '</td>
                    <td>' . $contact_row['contact_full_name'] . '</td>
                    <td>' . $contact_row['contact_mobile_number'] . '</td>
                    <td>' . $contact_row['contact_email'] . '</td>
                    <td>' . $contact_row['contact_message'] . '</td>
                    <td>' . @date("d-M-y", $contact_row['contact_time']) . '</td>
                    <td align="center"><a class="btn btn-danger btn-sm" href="functions/process_contact_del.php?id=' . $contact_row['contact_id'] . '">Delate</a></td>
                </tr>';
        }
    }