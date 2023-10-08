<?php
    include("includes/header.php");
    include("../includes/connection.php");
?>

		<main class="px-md-4">
			<h2>Books</h2>
			<div class="table-responsive">
				<table class="table table-striped table-sm">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Book Name</th>
							<th scope="col">Category</th>
							<th scope="col">Price</th>
							<th scope="col">Image</th>
							<th scope="col">Data</th>
							<th scope="col">Delate</th>
							<th scope="col">Edit</th>
						</tr>
					</thead>

					<?php

						$search = $_GET['search'];
						$book_list_query = "SELECT * FROM `book_table` WHERE `book_name` LIKE '%$search%'";
						$book_list_result = mysqli_query($connection_database, $book_list_query);

						$count = 1;

						while($book_row = mysqli_fetch_assoc($book_list_result))
						{
							echo '
								<tr>
									<td>'.$count.'</td>
									<td>'.$book_row['book_name'].'</td>
									<td>'.$book_row['book_category'].'</td>
									<td>'.$book_row['book_price'].'</td>';

							echo "  <td width='120'><center><img src='../$book_row[book_img]' width='50' height='70'></center></td>";
														
							echo '
									<td>'.@date("d-M-y",$book_row['book_time']).'</td>
									<td align="center"><a class="btn btn-danger btn-sm" href="process_book_del.php?id='.$book_row['book_id'].'">Delate</a></td>
									<td align="center"><a class="btn btn-info btn-sm" href="book_edit.php?id='.$book_row['book_id'].'">Edit</a></td>
								</tr>';
									
								$count++;
						}
					?> 

				</table>
			</div>
		</main>

        <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    
	</body>
</html>