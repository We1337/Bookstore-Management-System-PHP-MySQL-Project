<?php

    function display_data($order_list_result)
    {
        while($order_row = mysqli_fetch_assoc($order_list_result))
		{
			echo '
				<tr>
					<td>' . $order_row['order_id'] . '</td>
					<td>' . $order_row['order_name'] . '</td>
					<td>' . $order_row['order_address'] . '</td>
					<td>' . $order_row['order_pincode'] . '</td>
					<td>' . $order_row['order_city'] . '</td>
                    <td>' . $order_row['order_state'] . '</td>
                    <td>' . $order_row['order_mobile'] . '</td>
                    <td>' . $order_row['order_register_id'] . '</td>
                    <td>' . $order_row['order_total_price'] . '</td>
                    <td>' . $order_row['order_list_books'] . '</td>
					<td align="center"><a class="btn btn-info btn-sm" href="order_edit.php?id=' . $order_row['order_id'] . '">Edit</a></td>
					<td align="center"><a class="btn btn-danger btn-sm" href="functions/process_order_del.php?id=' . $order_row['order_id'] . '">Delate</a></td>
				</tr>
            ';	
		}
    }

?>