<?php
    include("includes/header.php");
?>

    <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">    

                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h1 class="page-header text-center">Add New Book</h1>
                </div>

                <div class="modal-body p-5 pt-0">
                    <form role="form" action="process_book_add.php" method="POST" enctype="multipart/form-data">
                            
                        <div class="form-floating mb-3">
                            <input name="book_name" type="text" class="form-control rounded-3" placeholder="Name of the Book">
                            <label>Name of the Book</label>
                            <?php
                                if(isset($_SESSION['error']['book_name']))
                                {
                                    echo '<font color="red">'.$_SESSION['error']['book_name'].'</font>';
                                }
                            ?>
                        </div>

                        <div class="form-group mb-3">
                            <select name="book_category" class="form-control">
                                <?php
                                    include("../includes/connection.php");

                                    $cq = "SELECT * FROM `category_table`";

                                    $cres = mysqli_query($connection_database, $cq);

                                    while($crow = mysqli_fetch_assoc($cres))
                                    {
                                        echo '<option value="' . $crow['category_name'] . '">' . $crow['category_name'] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
    
                        <div class="form-floating mb-3">
                            <textarea name="book_description" rows="3" class="form-control"></textarea>
                            <label>Description</label>
                            <?php
                                if(isset($_SESSION['error']['book_description']))
                                {
                                    echo '<p class="error">'.$_SESSION['error']['book_description'].'</p>';
                                }
                            ?>
                        </div>

                        <div class="form-floating mb-3">
                            <input name="book_price" type="text" class="form-control rounded-3" placeholder="Price">
                            <label>Price</label>
                            <?php
                                if(isset($_SESSION['error']['book_price']))
                                {
                                    echo '<font color="red">'.$_SESSION['error']['book_price'].'</font>';
                                }
                            ?>
                        </div>

                        <div class="form-group mb-3">
                            <?php
                                if(isset($_SESSION['error']['book_img']))
                                {
                                    echo '<p class="error">'.$_SESSION['error']['book_img'].'</p>';
                                } 
                            ?>
                            <input type="file" name="book_img" class="form-control">
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