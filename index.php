<?php
	include("includes/header.php");
?>

<main>

	<?php	
		if($_GET['message'] === "success")
		{
			echo '<div class="alert alert-success" role="alert">Message have been delivered.</div>';
		}
		else if($_GET['message'] === "error")
		{
			echo '<div class="alert alert-danger" role="alert">Please try again leter.</div>';
		}
		else if($_GET['message'] === "loginsuccess")
		{
			echo '<div class="alert alert-success" role="alert">Welcome! Successfully logined';
		}
	?>

  	<section class="py-5 text-center container">
    	<div class="row py-lg-5">
      		<div class="col-lg-6 col-md-8 mx-auto">
        		<h1 class="fw-light">Bookstore</h1>
        		<p class="lead text-body-secondary">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      		</div>
    	</div>
  	</section>

	<?php
		include("includes/connection.php");

		$lq = "SELECT * FROM book ORDER BY b_id DESC LIMIT 0,9";
		$lres = mysqli_query($link, $lq);
	?>

	<div class="album py-5 bg-body-tertiary">
    	<div class="container">
        	<div class="row">
            	<?php while ($lrow = mysqli_fetch_assoc($lres)) { ?>
                	<div class="col-md-4">
                    	<a href="book_detail.php?id=<?php echo $lrow['b_id']; ?>">
                        	<div class="card shadow-sm">
                            	<img class="bd-placeholder-img card-img-top" width="100" height="500" src="<?php echo $lrow['b_img']; ?>">
                            	<div class="card-body">
                                	<div class="d-flex justify-content-between align-items-center">
                                    	<small class="text-body-secondary"><?php echo $lrow['b_nm']; ?></small>
                                    	<small class="text-body-secondary">$ <?php echo $lrow['b_price']; ?></small>
                                	</div>
                            	</div>
                        	</div>
                    	</a>
                	</div>
            	<?php } ?>
        	</div>
    	</div>
	</div>

</main>

<?php
	include("includes/footer.php");
?>