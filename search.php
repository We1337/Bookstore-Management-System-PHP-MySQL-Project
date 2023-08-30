<?php
	include("includes/header.php");
?>

<div class="container">

	<header class="d-flex justify-content-center py-3">
        <h3 class="nav-item">Search: <?php echo $_GET['s']; ?></h3>
    </header>

	<div class="container">
		<?php
			include("includes/connection.php");

			$s = $_GET['s'];

			$blq = "SELECT * FROM book WHERE b_nm LIKE '%$s%'";

			$blres = mysqli_query($link, $blq);
		?>

		<div class="album py-5 bg-body-tertiary">
			<div class="container">
				<div class="row">
					<?php while ($blrow = mysqli_fetch_assoc($blres)) { ?>
						<div class="col-md-4">
							<a href="book_detail.php?id=<?php echo $blrow['b_id']; ?>">
								<div class="card shadow-sm">
									<img class="bd-placeholder-img card-img-top" width="50" height="400" src="<?php echo $blrow['b_img']; ?>">
									<div class="card-body">
										<div class="d-flex justify-content-between align-items-center">
											<small class="text-body-secondary"><?php echo $blrow['b_nm']; ?></small>
											<small class="text-body-secondary">$ <?php echo $blrow['b_price']; ?></small>
										</div>
									</div>
								</div>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	include("includes/footer.php");
?>