			<!--<div id="sidebar">

				<?php
					//if(isset($_SESSION['client']['status']))
					//{
					//  	echo '
					//		<ul>
					//    		<li>
					//    			<h2>Hi : '.$_SESSION['client']['unm'].'</h2>
					//    			<ul>
					//    				<li><a href="logout.php">Log Out</a></li>
					//    			</ul>
					//    		</li>
					//    	</ul>';
					//}
				?>

				<div class="flex-shrink-0 p-3" style="width: 280px;">
    				<ul class="list-unstyled ps-0">
      					<li class="mb-1">
        					<button class="btn btn-toggle d-inline-flex align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
         	 					Category
        					</button>
        					<div class="collapse show" id="home-collapse" style="">
          						<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
									<?php
										include("includes/connection.php");

										$cat_q = "SELECT * FROM category ORDER BY cat_nm ASC";

										$cat_res = mysqli_query($link, $cat_q);

										while($cat_row = mysqli_fetch_assoc($cat_res))
										{
											echo '<li><a href="book_list.php?id='.$cat_row['cat_id'].'&cat='.$cat_row['cat_nm'].'" class="link-body-emphasis d-inline-flex text-decoration-none rounded">'.$cat_row['cat_nm'].'</a></li>';
										}
            							
									?>
          						</ul>
        					</div>
      					</li> 
          			</ul>
        		</div>
			</div>-->
			<!-- end #sidebar -->
								

			<div style="clear: both;">&nbsp;</div>

		</div>
		<!-- end #page -->
		
		<footer class="py-3 my-4">
    		<ul class="nav justify-content-center border-bottom pb-3 mb-3">
      			<li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      			<li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
      			<li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      			<li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      			<li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    		</ul>
    		<p class="text-center text-body-secondary">© 2023 Company, Inc</p>
  		</footer>

	</body>
</html>