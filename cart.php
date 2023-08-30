<?php
	include("includes/header.php");
?>

<div id="content">
	<div class="post">
		<br>
		<h2 class="title text-center">Cart</h2>
	
		<div class="container">
				
			<form action="addtocart.php" method="post">
				<table class="table" cellspacing="0" border="0" width="100%">
					<thead class="thead-dark">
    					<tr>
      						<th scope="col">No</th>
      						<th scope="col">Name</th>
      						<th scope="col">Image</th>
      						<th scope="col">Qty</th>
							<th scope="col">Price</th>
							<th scope="col">Rate</th>
							<th scope="col">Remove</th>
    					</tr>
  					</thead>
					<tbody>
						<?php
							$count = 1;
							$total = 0;

							if(isset($_SESSION['cart']))
							{
								foreach($_SESSION['cart'] as $id => $val)
								{
									$rate = $val['qty'] * $val['price'];
									$total = $total + $rate;

									echo '
										<tr>
											<td>'.$count.'</td>
											<td>'.$val['nm'].'</td>
											<td><img src="'.$val['img'].'" width="50" height="70"></td>
											<td><input type="number" min="1" value="'.$val['qty'].'" style="width: 50px" name="'.$id.'"></td>
											<td>'.$val['price'].'</td>
											<td>'.$rate.'</td>
											<td><a style="color: red;text-decoration:none;" href="addtocart.php?id='.$id.'">X</a></td>
										</tr>';

									$count++;
								}
							}
						?>
					</tbody>

					<tr>
						<td colspan="5">Total : </td>
						<td colspan="2">KZT. <?php echo $total; ?></td>
					</tr>

				</table>

				<div align="center" style="margin-top: 20px">
					<input type="submit" value="Re-calculate" class="btn btn-primary">
					
					<?php 
						echo '<a class="btn btn-outline-primary" href="order.php?total='.$total.'" name="button" >Confirm & Submit Order</a>'
					?>
				</div>
			</form>
		</div>
	</div>
</div><!-- end #content -->

<?php
	include("includes/footer.php");
?>