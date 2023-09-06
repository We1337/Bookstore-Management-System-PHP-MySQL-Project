<?php
	include("includes/header.php");
?>

	<div class="container">
		<div class="post">
			<br>
			<h2 class="title text-center">Cart</h2>			
			<form action="addtocart.php" method="POST">
				<table class="table" cellspacing="0" border="0" width="100%">
					<thead>
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
							$book_id_amout = array();
							$indexs = "";

							if(isset($_SESSION['cart']))
							{
								foreach($_SESSION['cart'] as $id => $val)
								{
									$rate = $val['qty'] * $val['price'];
									$total = $total + $rate;
									$indexs = '(Name: ' . $val['nm'] . '. Amout: ' . $val['qty'] . '), ';
									array_push($book_id_amout, $indexs);

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
						<td colspan="5">Total: </td>
						<td colspan="2">KZT. <?php echo $total; ?></td>
					</tr>

				</table>
						
				<p><?php $link = implode($book_id_amout); ?></p>
					
				<div align="center" style="margin-top: 20px">
					<input type="submit" value="Re-calculate" class="btn btn-primary btn-sm">
						
					<?php
						echo '<a class="btn btn-outline-success btn-sm" href="order.php?total='.$total.'&books='.$link.'" name="button" >Confirm & Submit Order</a>';
					?>
				</div>
			</form>
		</div>
	</div>

<?php
	include("includes/footer.php");
?>