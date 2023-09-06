<?php
	include("includes/header.php");
?>

<div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content rounded-4 shadow">
      		<div class="modal-header p-5 pb-4 border-bottom-0">
        		<h1 class="fw-bold mb-0 fs-2">Login</h1>
      		</div>

      		<div class="modal-body p-5 pt-0">
        		<form class="login" action="login_process.php" method="POST">
					<?php
						if(!empty($_SESSION['error']))
						{
							foreach($_SESSION['error'] as $er)
							{
								echo '<div class="alert alert-info" role="alert">'.$er.'</div>';
							}
							unset($_SESSION['error']);
						}
					?>	
          			<div class="form-floating mb-3">
            			<input name="unm" type="text" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
            			<label for="floatingInput">Email address or ID</label>
          			</div>
          			<div class="form-floating mb-3">
            			<input name="pwd" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
            			<label for="floatingPassword">Password</label>
          			</div>
          			<button class="w-100 mb-2 btn btn-sm rounded-3 btn-primary" type="submit" value="Login">Login</button>
		    		<a href="register.php" class="w-100 mb-2 btn btn-sm rounded-3 btn-primary" role="button">Registration</button>
					<a href="forget_password.php" class="w-100 py-2 mb-2 btn btn-outline-primary btn-sm rounded-3" role="button">Forget Password?</a>

					<h2 class="fs-5 fw-bold mb-3">For Admins</h2>
          			<a href="admin/index.php" class="w-100 py-2 mb-2 btn btn-outline-primary btn-sm rounded-3" role="button">Admin Login</a>
        		</form>
      		</div>
    	</div>
  	</div>
</div>

<?php
	include("includes/footer.php");
?>