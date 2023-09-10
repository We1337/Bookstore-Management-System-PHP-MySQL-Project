<?php
// Include the header of the page
include("includes/header.php");
?>

<!-- Forget Password Modal -->
<div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content rounded-4 shadow">
			<!-- Modal Header -->
			<div class="modal-header p-5 pb-4 border-bottom-0">
				<h1 class="fw-bold mb-0 fs-2">Forget Password</h1>
			</div>

			<!-- Modal Body -->
			<div class="modal-body p-5 pt-0">
				<!-- Forget Password Form -->
				<form action="forget_password_process.php" method="POST">
					<!-- User Name Input -->
					<div class="form-floating mb-3">
            			<input name="unm" type="text" class="form-control rounded-3" placeholder="Full Name">
            			<label>User Name</label>
						<?php 
							// Display an error message for 'unm' if it exists in the session
							if(isset($_SESSION['error']['unm'])) {
								echo '<font color="red">'.$_SESSION['error']['unm'].'</font>';
							}
						?>
					</div>

					<!-- Security Question Selection -->
					<select class="form-select" name="question" aria-label="Default select example">
  						<option>Which is your Favourite Movie?</option>
  						<option>Which is your Favourite Actress?</option>
					</select>
					<?php
						// Display an error message for 'que' (question) if it exists in the session
						if(isset($_SESSION['error']['que'])) {
							echo '<font color="red">'.$_SESSION['error']['que'].'</font>';
						}
					?>
					
					<!-- Password Input -->
					<div class="form-floating mb-3">
            			<input name="pwd" type="password" class="form-control rounded-3" placeholder="Password">
            			<label>Password</label>
						<?php
							// Display an error message for 'pwd' if it exists in the session
							if(isset($_SESSION['error']['pwd'])) {
								echo '<font color="red">'.$_SESSION['error']['pwd'].'</font>';
							}
						?>
          			</div>

					<!-- Confirm Password Input -->
					<div class="form-floating mb-3">
            			<input name="cpwd" type="password" class="form-control rounded-3" placeholder="Confirm Password">
            			<label>Confirm Password</label>
						<?php
							// Display an error message for 'pwd' if it exists in the session
							if(isset($_SESSION['error']['pwd'])) {
								echo '<font color="red">'.$_SESSION['error']['pwd'].'</font>';
							}
						?>
          			</div>

					<!-- Submit Button -->
					<input type="submit" class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" value="Change Password">
				</form>
			</div>
		</div>
	</div>
</div><!-- end #content -->

<?php
// Include the footer of the page
include("includes/footer.php");
?>