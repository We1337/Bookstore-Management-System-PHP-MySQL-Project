<?php
	include("includes/header.php");
?>

<div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content rounded-4 shadow">
			<div class="modal-header p-5 pb-4 border-bottom-0">
				<h1 class="fw-bold mb-0 fs-2">Forget Password</h1>
			</div>

			<div class="modal-body p-5 pt-0">
				<form action="forget_password_process.php" method="POST">

					<div class="form-floating mb-3">
            			<input name="unm" type="text" class="form-control rounded-3" placeholder="Full Name">
            			<label>User Name</label>
						<?php 
							if(isset($_SESSION['error']['unm']))
							{
								echo '<font color="red">'.$_SESSION['error']['unm'].'</font>';
							}
						?>
					</div>

					<select class="form-select" name="question" aria-label="Default select example">
  						<option>Which is your Favourite Movie?</option>
  						<option>Which is your Favourite Actress?</option>
					</select>
					<?php
						if(isset($_SESSION['error']['que']))
						{
							echo '<font color="red">'.$_SESSION['error']['que'].'</font>';
						}
					?>
					
					<div class="form-floating mb-3">
            			<input name="pwd" type="password" class="form-control rounded-3" placeholder="Password">
            			<label>Password</label>
						<?php
							if(isset($_SESSION['error']['pwd']))
							{
								echo '<font color="red">'.$_SESSION['error']['pwd'].'</font>';
							}
						?>
          			</div>

					<div class="form-floating mb-3">
            			<input name="cpwd" type="password" class="form-control rounded-3" placeholder="Confirm Password">
            			<label>Confirm Password</label>
						<?php
							if(isset($_SESSION['error']['pwd']))
							{
								echo '<font color="red">'.$_SESSION['error']['pwd'].'</font>';
							}
						?>
          			</div>


					<input type="submit" class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" value="Change Password">

				</form>
			</div>
		</div>
	</div>
</div><!-- end #content -->

<?php
	include("includes/footer.php");
?>