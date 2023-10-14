<?php
    include("includes/header.php");
    include("../includes/connection.php");

	$query_length_of_users = "SELECT * FROM `register_table`";
	$result_users_table = mysqli_query($connection_database, $query_length_of_users);
	$users_result = mysqli_num_rows($result_users_table);

	$query_length_of_books = "SELECT * FROM `book_table`";
	$result_books_table = mysqli_query($connection_database, $query_length_of_books);
	$books_result = mysqli_num_rows($result_books_table);

	$query_length_of_contact = "SELECT * FROM `contact_table`";
	$result_contact_table = mysqli_query($connection_database, $query_length_of_contact);
	$contact_result = mysqli_num_rows($result_contact_table);

	$query_length_of_order = "SELECT * FROM `order_table`";
	$result_order_table = mysqli_query($connection_database, $query_length_of_order);
	$order_result = mysqli_num_rows($result_order_table);

	$query_length_of_support = "SELECT * FROM `user_support_table`";
	$result_support_table = mysqli_query($connection_database, $query_length_of_support);
	$support_result = mysqli_num_rows($result_support_table);

	$query_length_of_category = "SELECT * FROM `category_table`";
	$result_category_table = mysqli_query($connection_database, $query_length_of_category);
	$category_result = mysqli_num_rows($result_category_table);

	$dataPoints = array(
		array("label"=> "Users", "y"=> $users_result),
		array("label"=> "Books", "y"=> $books_result),
		array("label"=> "Contact", "y"=> $contact_result),
		array("label"=> "Order", "y"=> $order_result),
		array("label"=> "Support", "y"=> $support_result),
		array("label"=> "Category", "y"=> $category_result),
	);
?>

		<script>
			window.onload = function () {
			
				var chart = new CanvasJS.Chart("chartContainer", {
					animationEnabled: true,
					theme: "light2",
					title: {
						text: "Database information"
					},
					axisY: {
						suffix: ":",
						scaleBreaks: {
							autoCalculate: true
						}
					},
					data: [{
						type: "column",
						yValueFormatString: "#,##0\"\"",
						indexLabel: "{y}",
						indexLabelPlacement: "inside",
						indexLabelFontColor: "white",
						dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
					}]
				});
				chart.render();
			}
		</script>


		<div class="px-md-4">
			<div class="" id="chartContainer" style="height: 470px; width: 100%;"></div>
		</div>

		<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

        <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    
	</body>
</html>