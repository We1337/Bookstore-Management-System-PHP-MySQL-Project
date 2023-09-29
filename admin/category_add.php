<?php
    include("includes/header.php");
?>

        <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <br>
                    <h1 class="page-header text-center">Add Category</h1>
    
                    <div class="modal-body p-5 pt-0">

                        <form role="form" action="process_category_add.php" method="POST">

                            <div class="form-floating mb-3">
                                <input name="category" type="text" class="form-control rounded-3" placeholder="Category Name">
                                <label>Category Name</label>
                            </div>

                            <?php
                                if(isset($_SESSION['error']['category']))
                                {
                                    echo '<p class="error">'.$_SESSION['error']['category'].'</p>';
                                } 
                            ?>

                            <button type="submit" class="w-100 mb-2 btn rounded-3 btn-primary">Add Category</button>

                        </form>

                        <?php unset($_SESSION['error']); ?>
                    </div> 
                </div>
            </div>
        </div>

<?php
    include("includes/footer.php");
?>