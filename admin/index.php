<?php
    include("includes/header.php");
    include("../includes/connection.php");

    $countUsers = "SELECT count(*) AS total FROM `register`;";
    $resUsers = mysqli_query($link, $countUsers);
    $realResultUsers =  mysqli_fetch_assoc($resUsers);
   
    $countBooks = "SELECT count(*) AS total FROM `book`;";
    $resBooks = mysqli_query($link, $countBooks);
    $realResultBooks = mysqli_fetch_assoc($resBooks);

    $countOrder = "SELECT count(*) AS total FROM `order`;";
    $resOrder = mysqli_query($link, $countOrder);
    $realResultOrder = mysqli_fetch_assoc($resOrder);

    $countContact = "SELECT count(*) AS total FROM `contact`;";
    $resContact = mysqli_query($link, $countContact);
    $realResultContact = mysqli_fetch_assoc($resContact);
?>
       
    <main role="main" class="container">

        <div class="my-3 p-3 bg-white rounded box-shadow">
            <h6 class="border-bottom border-gray pb-2 mb-0">Data base information</h6>
            <div class="media pt-3">
                <h4 class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
                    <strong>Users: <?php echo $realResultUsers['total']; ?></strong>
                </h4>
            </div>
            <div class="media pt-3">
                <h4 class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
                    <strong>Books: <?php echo $realResultBooks['total']; ?></strong>
                </h4>
            </div>
            <div class="media pt-3">
                <h4 class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
                    <strong>Orders: <?php echo $realResultOrder['total']; ?></strong>
                </h4>
            </div>
            <div class="media pt-3">
                <h4 class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
                    <strong>Contact: <?php echo $realResultContact['total']; ?></strong>
                </h4>
            </div>
        </div>

    </main>

       
<?php
    include("includes/footer.php");
?>