<?php
    include("includes/header.php");
?>

<div id="content">
    <div class="post">
        <h2 class="title"><a href="#">Search :<?php echo $_GET['s']; ?></a></h2>
        <p class="meta"></p>
        <div class="entry">
            <?php
                include("includes/connection.php");

                $s = $_GET['s'];

                $blq = "SELECT * FROM book WHERE b_nm LIKE '%$s%'";

                $blres = mysqli_query($link, $blq);

                while($blrow = mysqli_fetch_assoc($blres))
                {
                    echo '  <div class="book_box">
                                <a href="book_detail.php?id='.$blrow['b_id'].'">
                                    <img src="'.$blrow['b_img'].'">
                                    <h2>'.$blrow['b_nm'].'</h2>
                                    <p>Rs. '.$blrow['b_price'].'</p>
                                </a>
                            </div>';
                }
            ?>
            <div style="clear:both;"></div>
        </div>
    </div>
</div>

<?php
    include("incldes/footer.php");
?>