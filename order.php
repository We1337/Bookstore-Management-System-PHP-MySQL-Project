<?php
	include("includes/header.php");
?>

<div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
	<div class="modal-dialog" role="document">
		<div class="modal-content rouneded-4 shadow">
			<div class="modal-header p-5 pb-4 border-bottom-0">
				<h1 class="fw-bold mb-0 fs-2">Order - Cash On Delivery</h1>
			</div>

			<div class="modal-body p-5 pt-0">	
				<form action="order_process.php" method="POST">
						
					<?php
						if(isset($_GET['order']))
						{
							echo '<font style="color:red">Order Successfully Placed</font><br><br>';
						}
					?>

					<br>

					<div class="form-floating mb-3">
						<input name="fnm" type="text" class="form-control rounded-3" placeholder="Full Name">
						<label>Full Name or Surname</label>
						<?php	
							if(isset($_SESSION['error']['fnm']))
							{
								echo '<font color="red">'.$_SESSION['error']['fnm'].'</font>';
							}
						?>
					</div>

					<div class="form-floating mb-3">
						<input name="add" type="text" class="form-control rounded-3" placeholder="Address">
						<label>Address</label>
						<?php
							if(isset($_SESSION['error']['add']))
							{
								echo '<font color="red">'.$_SESSION['error']['add'].'</font>';
							}
						?>
					</div>

					<div class="form-floating mb-3">
						<input name="pc" type="text" class="form-control rounded-3" placeholder="Pin code">
						<label>Pin code</label>
						<?php
							if(isset($_SESSION['error']['pc']))
							{
								echo '<font color="red">'.$_SESSION['error']['add'].'</font>';
							}
						?>
					</div>
					
					<div class="form-floating mb-3">
						<input name="city" type="text" class="form-control rounded-3" placeholder="City">
						<label>City</label>
						<?php
							if(isset($_SESSION['error']['city']))
							{
								echo '<font color="red">'.$_SESSION['error']['city'].'</font>';
							}
						?>
					</div>

					<div class="form-floating mb-3">
						<input name="state" type="text" class="form-control rounded-3" placeholder="State">
						<label>State</label>
						<?php
							if(isset($_SESSION['error']['state']))
							{
								echo '<font color="red">'.$_SESSION['error']['state'].'</font>';
							}
						?>
					</div>

					<div class="form-floating mb-3">
						<input name="mno" type="text" class="form-control rounded-3" placeholder="Mobile Number">
						<label>Mobile Number</label>
						<?php
							if(isset($_SESSION['error']['mno']))
							{
								echo '<font color="red">'.$_SESSION['error']['state'].'</font>';
							}
						?>
					</div>

					<button type="submit" name="sub" class="btn btn-outline-primary">Confirm & Proceed</button>
							
				</form>
			</div>
		</div>
	</div>
</div>

<?php
	include("includes/footer.php");
?>