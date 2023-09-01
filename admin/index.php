<?php
    include("includes/header.php");
    include("../includes/connection.php");

    $count = "SELECT count(*) AS total FROM register;";
    $res = mysqli_query($link, $count);
    $relres =  mysqli_fetch_assoc($res);
    
?>
       
    <main role="main" class="container">

        <div class="my-3 p-3 bg-white rounded box-shadow">
            <h6 class="border-bottom border-gray pb-2 mb-0">Data base information</h6>
            <div class="media pt-3">
                <h4 class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
                    <strong> Users: <?php echo $relres['total']; ?></strong>
                </h4>
            </div>
            <div class="media text-muted pt-3">
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </p>
            </div>
            <div class="media text-muted pt-3">
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </p>
            </div>
        </div>

    </main>

       
<?php
    include("includes/footer.php");
?>