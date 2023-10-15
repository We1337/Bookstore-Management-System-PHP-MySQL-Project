<?php

    function display_data($users_list_result)
    {
        while($users_row = mysqli_fetch_assoc($users_list_result))
        {
            echo '
                <tr>
                    <td>' . $users_row['register_id'] . '</td>
                    <td>' . $users_row['register_full_name'] . '</td>
                    <td>' . $users_row['register_user_name'] . '</td>
                    <td>' . $users_row['register_contact_number'] . '</td>
                    <td>' . $users_row['register_email'] . '</td>
                    <td><a class="btn btn-sm btn-outline-info" href="users_edit.php?id=' . $users_row['register_id'] . '">Edit</a></td>
                    <td><a class="btn btn-sm btn-danger" href="functions/process_users_del.php?id=' . $users_row['register_id'] . '">Delete</a></td>
                </tr>';
        }
    }

?>