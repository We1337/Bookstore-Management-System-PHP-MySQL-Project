<?php
	include("includes/header.php");
	include("includes/connection.php");

	$bid=$_GET['id'];

	$book_query="SELECT * FROM book,category WHERE b_cat=cat_id AND b_id=$bid";

	$book_res=mysqli_query($link, $book_query);

	$book_row=mysqli_fetch_assoc($book_res);
?>

<div id="content">
	<div class="post">

		<header class="d-flex justify-content-center py-3">
        	<h3 class="nav-item"><?php echo $book_row['cat_nm']; ?></h3>
    	</header>


		<div class="container px-4 py-5" id="custom-cards">
    		<h2 class="pb-2 border-bottom">Custom cards</h2>

    		<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      			<div class="col">
        			<div class="card card-cover h-100 text-bg-dark shadow-lg" style="background: url('<?php echo $book_row['b_img']; ?>');">
          				<div class="d-flex flex-column h-100 p-100 pb-3 text-shadow-1">
            
          				</div>
        			</div>
      			</div>
    		</div>

  		</div>



		<div class="entry">
			<table class="book_detail" width="100%" border="0px">
				<tr valign="top">
					<td width="48%">
						<img class="book_img" src="" width="280px" height="350px">
					</td>

					<td>
						<h1><?php echo $book_row['b_nm']; ?></h1>

						<p class="desc"><?php echo $book_row['b_desc']; ?></p>

						<p class="price">Rs. <?php echo $book_row['b_price']; ?></p>

						<?php

							$is_cart = 0;

							if(isset($_SESSION['cart']))
							{
								foreach($_SESSION['cart'] as $id => $val)
								{
									if($val['img'] == $book_row['b_img'])
									{	
										$is_cart = 1;
										break;
									}
								}
							}

							if(isset($_SESSION['client']['status']))
							{
								if($is_cart == 0)
								{
									echo '<a href="addtocart.php?bcid='.$book_row['b_id'].'" class="cart_btn">Add to Cart</a>';
								}
								else
								{
									echo "Already in Cart";
								}
							}
							else
							{
								echo '<a href="#" class="cart_btn">Add to Cart</a><a style="text-decoration: none" href="login.php"><h2>Click here Login..</h2></a>';
							}
						?>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div><!-- end #content -->

<?php
	include("includes/footer.php");
?>