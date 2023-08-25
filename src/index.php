<?php
    include("includes/header.php");
?>

<div id="content">
    <div class="post">
        <h2 class="title"><a href="#">Latest Books</a></h2>
        <p class="meta"></p>
        <div class="entry">         
            <?php
                include("includes/connection.php");
                    
                $lq = "SELECT * FROM book ORDER BY b_id DESC LIMIT 0, 9";
                $lres = mysqli_query($link, $lq);

                while ($lrow = mysqli_fetch_assoc($lres))
                {
                    echo '  
                        <div class="book_box">
                            <a href="book_detail.php?id='.$lrow['b_id'].'">
                                <img src="'.$lrow['b_img'].'">
                                <h2>'.$lrow['b_nm'].'</h2>
                                <p>Rs. '.$lrow['b_price'].'</p>
                            </a>
                        </div>';
                }
            ?>
            <div style="clear:both;"></div>
        </div>
    </div>
</div><!-- end #content -->

<?php
    include("includes/footer.php");
?>
