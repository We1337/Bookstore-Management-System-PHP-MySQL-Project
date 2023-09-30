<?php

    session_start();

    include("includes/header.php");
    include("../includes/connection.php");

    $id = $_GET['id'];

    $cq = "SELECT * FROM `book_table` WHERE `book_id` = '$id'";

    $res = mysqli_query($connection_database, $cq);

    $crow = mysqli_fetch_assoc($res);

?>

        <div class="modal position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="page-header text-center">Update Book</h1>
                    </div>
        
                    <div class="modal-body p-5 pt-0">

                        <form role="form" action="process_book_edit.php" method="POST" enctype="multipart/form-data">

                            <input type="hidden" name="book_id" value="<?php echo $crow['book_id']; ?>" />

                            <div class="form-floating mb-3">
                                <input type="text" name="book_name" value="<?php echo $crow['book_name']; ?>" class="form-control">
                                <label>Book Name</label>
                                <?php
                                    if(isset($_SESSION['error']['book_name']))
                                    {
                                        echo '<p class="error">'.$_SESSION['error']['book_name'].'</p>';
                                    } 
                                ?>
                            </div>

                            <div class="form-group mb-3">
                                <select name="book_category" class="form-control">
                                    <option value="<?php echo $crow['book_category']; ?>" selected disable hidden><?php echo $crow['book_category']; ?></option>
                                    <?php
                                        include("../includes/connection.php");

                                        $cq = "SELECT * FROM `category_table`";

                                        $cres = mysqli_query($connection_database, $cq);

                                        while($crows = mysqli_fetch_assoc($cres))
                                        {
                                            echo '<option value="'.$crows['category_name'].'">'.$crows['category_name'].'</option>';
                                        }
                                    ?>
                                </select>
                                <?php
                                    if(isset($_SESSION['error']['book_category']))
                                    {
                                        echo '<p class="error">'.$_SESSION['error']['book_category'].'</p>';
                                    } 
                                ?>
                            </div>
    
                            <div class="form-floating mb-3">
                                <textarea name="book_description" class="form-control" rows="3">
                                    <?php echo $crow['book_description'] ?>
                                </textarea>
                                <?php
                                    if(isset($_SESSION['error']['book_description']))
                                    {
                                        echo '<p class="error">'.$_SESSION['error']['book_description'].'</p>';
                                    }
                                ?>
                            </div>

                            <div class="form-floating mb-3">
                                <input name="book_price" type="text" class="form-control rounded-3" value="<?php echo $crow['book_price'] ?>" placeholder="Price">
                                <label>Price</label>
                                <?php
                                    if(isset($_SESSION['error']['book_price']))
                                    {
                                        echo '<p class="error">'.$_SESSION['error']['book_price'].'</p>';
                                    } 
                                ?>
                            </div>

                            <div class="form-group mb-3">
                                <input name="book_img" type="file" class="form-control">
                                <?php
                                    if(isset($_SESSION['error']['book_img']))
                                    {
                                        echo '<p class="error">'.$_SESSION['error']['book_img'].'</p>';
                                    }
                                ?>
                            </div>
                            <br>

                            <button type="submit" class="btn btn-info btn-sm">Update Book</button>

                            <a href="book_view.php" class="btn btn-info btn-sm">Exit</a>

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