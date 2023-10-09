<?php
    include("includes/header.php");
    include("../includes/connection.php");
?>
        <main class="px-md-4">
			<h2>Order</h2>

			<form method="GET" action="../admin/order_view.php" class="form-inline">
                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                <br>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="search-submit">Search</button>
            </form> 

			<div class="table-responsive">
				<table class="table table-striped table-sm">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">User order</th>
							<th scope="col">Address</th>
							<th scope="col">Postcode</th>
							<th scope="col">City</th>
							<th scope="col">State</th>
							<th scope="col">Phone</th>
							<th scope="col">User ID</th>
                            <th scope="col">Total price</th>
                            <th scope="col">Order</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
						</tr>
					</thead>

					<?php
						
						$search = $_GET['search'];
						$order_list_query = "SELECT * FROM `order_table` WHERE `order_name` LIKE '%$search%'";
						$order_list_result = mysqli_query($connection_database, $order_list_query);

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
                                    <td align="center"><a class="btn btn-danger btn-sm" href="functions/process_order_del.php?id=' . $order_row['order_id'] . '">Delate</a></td>
									<td align="center"><a class="btn btn-info btn-sm" href="order_edit.php?id=' . $order_row['order_id'] . '">Edit</a></td>
								</tr>
                            ';	
						}
					?> 

				</table>
			</div>
		</main>

<?php
    include("includes/footer.php");
?>