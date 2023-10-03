<?php
	include("includes/header.php");
	include("includes/connection.php");

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
						<form action="functions/forget_password_process.php" method="POST">
							<!-- User Name Input -->
							<div class="form-floating mb-3">
								<input name="username" type="text" class="form-control rounded-3" placeholder="Full Name">
								<label>User Name</label>
								<?php 
									// Display an error message for if it exists in the session
									if(isset($_SESSION['error']['username'])) {
										echo '<font color="red">'.$_SESSION['error']['unm'].'</font>';
									}
								?>
							</div>

							<!-- Security Question Selection -->
							<select class="form-select mb-3" name="question" aria-label="Default select example">
								<option>Which is your Favourite Movie?</option>
								<option>Which is your Favourite Actress?</option>
							</select>
							<?php
								// Display an error message for (question) if it exists in the session
								if(isset($_SESSION['error']['question'])) {
									echo '<font color="red">'.$_SESSION['error']['question'].'</font>';
								}
							?>

							<!-- Security Answer -->
							<div class="form-floating mb-3">
								<input name="answer" type="text" class="form-control rounded-3" placeholder="Security answer">
								<label>Security answer</label>
								<?php 
									// Display an error message for if it exists in the session
									if(isset($_SESSION['error']['answer'])) {
										echo '<font color="red">'.$_SESSION['error']['answer'].'</font>';
									}
								?>
							</div>
							
							<!-- Password Input -->
							<div class="form-floating mb-3">
								<input name="password" type="password" class="form-control rounded-3" placeholder="New Password">
								<label>New Password</label>
								<?php
									// Display an error message for if it exists in the session
									if(isset($_SESSION['error']['password'])) {
										echo '<font color="red">'.$_SESSION['error']['password'].'</font>';
									}
								?>
							</div>

							<!-- Confirm Password Input -->
							<div class="form-floating mb-3">
								<input name="confirm_password" type="password" class="form-control rounded-3" placeholder="Confirm Password">
								<label>Confirm Password</label>
								<?php
									// Display an error message for 'pwd' if it exists in the session
									if(isset($_SESSION['error']['confirm_password'])) {
										echo '<font color="red">'.$_SESSION['error']['confirm_password'].'</font>';
									}
								?>
							</div>

							<!-- Submit Button -->
							<input type="submit" class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" value="Change Password">
						</form>
					</div>
				</div>
			</div>
		</div>

<?php
	include("includes/footer.php");
?>