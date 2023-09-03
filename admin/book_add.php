<?php
    include("includes/header.php");
?>

    <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">    

                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h1 class="page-header text-center">Add New Book</h1>
                </div>

                <div class="modal-body p-5 pt-0">
                    <form role="form" action="process_book_add.php" method="POST" enctype="multipart/form-data">
                                        
                        <?php
                            if(isset($_SESSION['error']['bnm']))
                            {
                                echo '<p class="error">'.$_SESSION['error']['bnm'].'</p>';
                            } 
                        ?>
                            
                        <div class="form-floating mb-3">
                            <input name="bnm" type="text" class="form-control rounded-3" placeholder="Name of the Book">
                            <label>Name of the Book</label>
                            <?php
                                if(isset($_SESSION['error']['fnm']))
                                {
                                    echo '<font color="red">'.$_SESSION['error']['fnm'].'</font>';
                                }
                            ?>
                        </div>

                        <div class="form-group mb-3">
                            <select name="cat" class="form-control">
                                <?php
                                    include("../includes/connection.php");

                                    $cq = "SELECT * FROM category";

                                    $cres = mysqli_query($link, $cq);

                                    while($crow = mysqli_fetch_assoc($cres))
                                    {
                                        echo '<option value="'.$crow['cat_id'].'">'.$crow['cat_nm'].'</option>';
                                    }
                                ?>
                            </select>
                        </div>
    
                        <div class="form-floating mb-3">
                            <textarea name="desc" rows="3" class="form-control"></textarea>
                            <label>Description</label>
                            <?php
                                if(isset($_SESSION['error']['desc']))
                                {
                                    echo '<p class="error">'.$_SESSION['error']['desc'].'</p>';
                                }
                            ?>
                        </div>

                        <div class="form-floating mb-3">
                            <input name="price" type="text" class="form-control rounded-3" placeholder="Price">
                            <label>Price</label>
                            <?php
                                if(isset($_SESSION['error']['price']))
                                {
                                    echo '<font color="red">'.$_SESSION['error']['fnm'].'</font>';
                                }
                            ?>
                        </div>

                        <div class="form-group mb-3">
                            <?php
                                if(isset($_SESSION['error']['b_img']))
                                {
                                    echo '<p class="error">'.$_SESSION['error']['b_img'].'</p>';
                                } 
                            ?>
                            <input type="file" name="b_img" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Add Book</button>

                    </form>

                    <?php
                        unset($_SESSION['error']);
                    ?>

                </div>
            </div>
        </div>
    </div>


<?php
    include("includes/footer.php");
?>