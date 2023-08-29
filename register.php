<?php
	include("includes/header.php");
?>



<div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content rounded-4 shadow">
      		<div class="modal-header p-5 pb-4 border-bottom-0">
        		<h1 class="fw-bold mb-0 fs-2">Sign up for free</h1>
        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>

      		<div class="modal-body p-5 pt-0">
        		<form class="">
          			<div class="form-floating mb-3">
            			<input name="fnm" type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
            			<label for="floatingInput">Email address</label>
          			</div>
          			<div class="form-floating mb-3">
            			<input name="unm" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
            			<label for="floatingPassword">Password</label>
          			</div>
					<div class="form-floating mb-3">
            			<input name="pwd" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
            			<label for="floatingPassword">Password</label>
          			</div>
					<div class="form-floating mb-3">
            			<input name="cpwd" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
            			<label for="floatingPassword">Password</label>
          			</div>
					<div class="form-floating mb-3">
            			<input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
            			<label for="floatingPassword">Password</label>
          			</div>
          			<button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Sign up</button>
          			<small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
          			<hr class="my-4">
          			<h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
          			<button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
            			<svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"></use></svg>
            			Sign up with Twitter
          			</button>
          			<button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
            			<svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"></use></svg>
            			Sign up with Facebook
          			</button>
          			<button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
            			<svg class="bi me-1" width="16" height="16"><use xlink:href="#github"></use></svg>
            			Sign up with GitHub
          			</button>
        		</form>
      		</div>
    	</div>
  	</div>
</div>



<div id="content">
	<div class="post">
		<h2 class="title"><a href="#">User Registration</a></h2>
		<p class="meta"></p>
		<div class="entry">	
			<form class="register" action="register_process.php" method="post">
					
				<?php
					if(isset($_GET['register']))
					{
						echo '<font color="red">Registered Sussessfully..</font>';
						echo '<br><br>';
					}
				?>

				Full Name :<br>
				<input type="text" name="fnm" class="txt">
				<?php
					if(isset($_SESSION['error']['fnm']))
					{
						echo '<font color="red">'.$_SESSION['error']['fnm'].'</font>';
					}
				?>
				<br><br>

				User Name :<br>
				<input type="text" name="unm" class="txt">
				<?php
					if(isset($_SESSION['error']['unm']))
					{
						echo '<font color="red">'.$_SESSION['error']['unm'].'</font>';
					}
				?>
				<br><br>

				Password :<br>
				<input type="password" name="pwd" class="txt">
				<?php
					if(isset($_SESSION['error']['pwd']))
					{
						echo '<font color="red">'.$_SESSION['error']['pwd'].'</font>';
					}
				?>
				<br><br>

				Confirm Password :<br>
				<input type="password" name="cpwd" class="txt"><br><br>

				E-Mail :<br>
				<input type="text" name="email" class="txt">
				<?php
					if(isset($_SESSION['error']['email']))
					{
						echo '<font color="red">'.$_SESSION['error']['email'].'</font>';
					}
				?>
				<br><br>

				Contact No :<br>
				<input type="text" name="cno" class="txt">
				<?php
					if(isset($_SESSION['error']['cno']))
					{
						echo '<font color="red">'.$_SESSION['error']['cno'].'</font>';
					}
				?>
				<br><br>

				Security Question :<br>
				<select name="question" class="txt">
					<option>Which is your Favourite Movie ?</option>
					<option>Which is your Favourite Actress ?</option>
				</select>
				<?php 
					if(isset($_SESSION['error']['que']))
					{
						echo '<font color="red">'.$_SESSION['error']['que'].'</font>';
					}
				?>
				<br><br>

				Security Answer :<br>
				<input type="text" name="answer">
				<?php 
					if(isset($_SESSION['error']['answer']))
					{
						echo '<font color="red">'.$_SESSION['error']['answer'].'</font>';
					}
				?>
				<br><br>

				<input type="submit" class="btn" value="Register">

				<p class="login_link">
					<a href="login.php" style="margin-left: 145px; text-decoration: none">Already Account - Login</a>
				</p>

			</form>

			<?php
				unset($_SESSION['error']);
				unset($_GET['register']);
			?>

		</div>
	</div>
</div><!-- end #content -->

<?php
	include("includes/footer.php");
?>