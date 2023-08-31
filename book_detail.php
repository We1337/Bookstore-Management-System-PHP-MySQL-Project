<?php
	include("includes/header.php");
	include("includes/connection.php");

	$bid=$_GET['id'];

	$book_query="SELECT * FROM book,category WHERE b_cat=cat_id AND b_id=$bid";

	$book_res=mysqli_query($link, $book_query);

	$book_row=mysqli_fetch_assoc($book_res);
?>

	<header class="d-flex justify-content-center py-3">
        <h3 class="nav-item"><?php echo $book_row['cat_nm']; ?></h3>
    </header>

	<div class="container text-center"> <!-- Center the content -->
        <div class="d-flex justify-content-center py-3">
            <div class="col-md-12"> <!-- Increase the column width -->
                <div class="card flex-md-row mb-4 box-shadow h-md-550"> <!-- Increase the card height -->
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary"><?php echo $book_row['b_nm']; ?></strong>
                        <h3 class="mb-0">
                            <?php echo $book_row['b_price']; ?> KZT
                        </h3>
                        <p class="card-text mb-auto">
							<?php echo $book_row['b_desc']; ?>
						</p>
                        <a href="#">Continue reading</a>
						<a href="#">COntinue reading</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [500x550]" style="width: 500px; height: 550px;" src="<?php echo $book_row['b_img']; ?>" data-holder-rendered="true">
                </div>
            </div>
        </div>
    </div>
	
<?php
	include("includes/footer.php");
?>