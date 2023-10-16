<?php
    include("includes/header.php");
    include("../includes/connection.php");
	include("functions/process_order_view_data.php");

	$search = $_GET['search'];
	$order_list_query = "SELECT * FROM `order_table` WHERE `order_name` LIKE '%$search%'";
	$order_list_result = mysqli_query($connection_database, $order_list_query);
?>
        <main class="px-md-4">
			<h2>Order</h2>

			<form method="GET" action="../support/order_view.php" class="form-inline">
                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
				<br>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
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
						display_data($order_list_result);
					?> 

				</table>
			</div>
		</main>

<?php
    include("includes/footer.php");
?>