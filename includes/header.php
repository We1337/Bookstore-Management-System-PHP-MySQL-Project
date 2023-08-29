<?php
	session_start();
?>

<!DOCTYPE html>

<html>
	<head>
	
		<title>Bookstore Management System</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width", initial-scale=1.0>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

	</head>
	<body>
		
		<header class="p-3 text-bg-dark">
    		<div class="container">
      			<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        			<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          				<svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        			</a>

        			<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          				<li><a href="index.php" class="nav-link px-2 text-secondary">Home</a></li>
          				<li><a href="contact.php" class="nav-link px-2 text-white">Contact Us</a></li>
          				<li><a href="cart.php" class="nav-link px-2 text-white">Cart</a></li>
          				<li><a href="#" class="nav-link px-2 text-white">About</a></li>
        			</ul>

					<form method="get" action="search.php" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 d-flex align-items-center" role="search">
  						<input type="text" name="s" class="form-control form-control-dark text-bg-dark me-2" placeholder="Search..." aria-label="Search">
  						<button type="submit" id="search-submit" value="GO" class="btn btn-primary">Search</button>
					</form>

        			<div class="text-end">
						<?php
							if(isset($_SESSION['client']['status']))
							{
								echo '<a href="logout.php"><button type="button" class="btn btn-outline-light me-2">Logout</button></a>';
							}
							else
							{
          						echo '<a href="login.php"><button type="button" class="btn btn-outline-light me-2">Login</button></a>';
          						echo '<a href="register.php"><button type="button" class="btn btn-warning">Sign-up</button></a>';
							}
		  				?>
       		 		</div>
      			</div>
    		</div>
  		</header>

		<!-- end #header-wrapper -->
		<div id="page">