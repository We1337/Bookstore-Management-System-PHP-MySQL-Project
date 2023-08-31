<?php
	include("includes/header.php");
?>

<div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content rounded-4 shadow">
      		<div class="modal-header p-5 pb-4 border-bottom-0">
        		<h1 class="fw-bold mb-0 fs-2">Sign up for free</h1>
      		</div>

      		<div class="modal-body p-5 pt-0">
        		<form action="register_process.php" method="POST">

					<?php
						if(isset($_GET['register']))
						{
							echo '<font color="red">Registered Successfully..</font>';
							echo '<br>';
						}
					?>

          			<div class="form-floating mb-3">
            			<input name="fnm" type="text" class="form-control rounded-3" placeholder="Full Name">
            			<label>Full Name</label>
						<?php
							if(isset($_SESSION['error']['fnm']))
							{
								echo '<font color="red">'.$_SESSION['error']['fnm'].'</font>';
							}
						?>
          			</div>

          			<div class="form-floating mb-3">
            			<input name="unm" type="text" class="form-control rounded-3" placeholder="User Name">
            			<label>User Name</label>
						<?php
							if(isset($_SESSION['error']['fnm']))
							{
								echo '<font color="red">'.$_SESSION['error']['fnm'].'</font>';
							}
						?>
          			</div>

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

					<div class="form-floating mb-3">
            			<input name="email" type="email" class="form-control rounded-3" placeholder="E-Mail">
            			<label>E-Mail:</label>
						<?php
							if(isset($_SESSION['error']['email']))
							{
								echo '<font color="red">'.$_SESSION['error']['email'].'</font>';
							}
						?>
          			</div>

					<div class="form-floating mb-3">
            			<input name="cno" type="text" class="form-control rounded-3" placeholder="Contact Number">
            			<label>Contact Number</label>
						<?php
							if(isset($_SESSION['error']['cno']))
							{
								echo '<font color="red">'.$_SESSION['error']['cno'].'</font>';
							}
						?>
          			</div>

					<select class="form-select" name="txt" aria-label="Default select example">
  						<option>Which is your Favourite Movie?</option>
  						<option>Which is your Favourite Actress?</option>
					</select>
					<?php
						if(isset($_SESSION['error']['que']))
						{
							echo '<font color="red">'.$_SESSION['error']['que'].'</font>';
						}
					?>
					<br>

					<div class="form-floating mb-3">
            			<input name="cno" type="text" class="form-control rounded-3" placeholder="Security Answer">
            			<label>Security Answer</label>
						<?php
							if(isset($_SESSION['error']['cno']))
							{
								echo '<font color="red">'.$_SESSION['error']['cno'].'</font>';
							}
						?>
          			</div>

          			<button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" value="Register">Sign up</button>
					<a href="login.php" class="w-100 mb-2 btn btn-lg rounded-3 btn-primary">Sign in</a>
					
        		</form>
      		</div>
    	</div>
  	</div>
</div>

<?php
	include("includes/footer.php");
?>