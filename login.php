<?php
	include("includes/header.php");
?>

<div id="content">
	<div class="post">
		<h2 class="title"><a href="#">Login</a></h2>
		<p class="meta"></p>
		<div class="entry">
			<form class="login" action="login_process.php" method="post">
					
				User Name :<br>
				<input type="text" name="unm" class="txt"><br><br>

				Password :<br>
				<input type="password" name="pwd" class="txt"><br><br>

				<?php
					if(!empty($_SESSION['error']))
					{
						foreach($_SESSION['error'] as $er)
						{
							echo '<font color="red">'.$er.'</font><br>';
						}
						unset($_SESSION['error']);
					}
				?>
				<br>

				<input type="submit" class="btn" value="Login">
				<a href="admin/index.php" style="text-decoration: none; margin-left: 83px" class="btn" value="Admin Login">Admin Login</a>

				<p class="login_link">
					<a href="forget_password.php" style="text-decoration: none">Forget Password ?</a>
					<a href="register.php" style="margin-left: 100px;text-decoration: none">Register</a>
				</p>

			</form>
		</div>
	</div>
</div><!-- end #content -->

<?php
	include("includes/footer.php");
?>