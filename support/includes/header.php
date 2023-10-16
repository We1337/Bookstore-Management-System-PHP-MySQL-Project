<?php 
    session_start();

    if(!isset($_SESSION['support']['status']))
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
        <title>Support Panel</title>

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

      		<a class="navbar-brand" href="index.php">Support Panel</a>

      		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
      		</button>

      		<div class="navbar-collapse collapse" id="navbarsExample01">
        		<ul class="navbar-nav mr-auto">
          			<li class="nav-item">
            			<a class="nav-link" href="../support/order_view.php">Orders</a>
						<a class="nav-link" href="../support/support.php">Support</a>
						<a class="nav-link" href="../support/contact_view.php">Contact</a>
          			</li>
					<li class="nav-item">
						<a class="nav-link" href="../support/logout.php">Logout</a>
					</li>
        		</ul>
      		</div>

    	</nav>