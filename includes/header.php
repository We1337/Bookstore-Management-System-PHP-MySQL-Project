<?php
	session_start();
?>

<!DOCTYPE html>

<html>
	<head>
	
		<title>Bookstore Management System</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width", initial-scale=1.0>

		<link rel="stylesheet" type="text/css" href="style.css">

	</head>
	<body>
		<div id="logo">
			<h1><a href="#">Bookstore Management System</a></h1>
		</div>
		<!-- end #logo -->
		
		<div id="header">
			<div id="menu">
				<ul>
					<li><a href="index.php" class="first">Home</a></li>
				
					<?php 

						if(isset($_SESSION['client']['status']))
						{
							echo '<li class="current_page_item"><a href="logout.php">Logout</a></li>';
						}
						else
						{
							echo '<li><a href="login.php">Login</a></li>';
							echo '<li class="current_page_item"><a href="register.php">Register</a></li>';
						}

					?>
				
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="cart.php">Cart</a></li>
				</ul>
			</div>
			<!-- end #menu -->
			<div id="search">
				<form method="get" action="search.php">
					<fieldset>
						<input type="text" name="s" id="search-text" size="15" placeholder="Search" />
						<input type="submit" id="search-submit" value="GO" />
					</fieldset>
				</form>
			</div>
			<!-- end #search -->
		</div>
		<!-- end #header -->
		<!-- end #header-wrapper -->
		<div id="page">