<?php 
    session_start();

    if(!isset($_SESSION['admin']['status']))
    {
        header("location: login.php");
		exit();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Panel</title>

        <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Favicons -->
        <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>
    <body>

    	<nav class="navbar navbar-dark bg-dark px-md-4">

      		<a class="navbar-brand" href="index.php">Admin Panel</a>

      		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
      		</button>

      		<div class="navbar-collapse collapse" id="navbarsExample01">
        		<ul class="navbar-nav mr-auto">
          			<li class="nav-item">
            			<a class="nav-link" href="../admin/order_view.php">Orders</a>
						<a class="nav-link" href="../admin/support.php">Support</a>
						<a class="nav-link" href="../admin/contact_view.php">Contact</a>
						<a class="nav-link" href="../admin/users_view.php">Users</a>
						<a class="nav-link" href="../admin/backup_panel.php">Back up</a>
          			</li>
          			<li class="nav-item dropdown">
            			<a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Books</a>
            			<div class="dropdown-menu" aria-labelledby="dropdown01">
              				<a class="dropdown-item" href="../admin/book_add.php">Add books</a>
              				<a class="dropdown-item" href="../admin/book_view.php">View books</a>
            			</div>
          			</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="treu" aria-expanded="false">Category</a>
						<div class="dropdown-menu" aria-labelledby="dropdown01">
							<a class="dropdown-item" href="../admin/category_add.php">Add categorys</a>
							<a class="dropdown-item" href="../admin/category_view.php">View categorys</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../admin/logout.php">Logout</a>
					</li>
        		</ul>
      		</div>

    	</nav>