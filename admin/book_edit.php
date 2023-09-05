<?php

    session_start();

    include("includes/header.php");
    include("../includes/connection.php");

    $id = $_GET['id'];

    $cq = "SELECT * FROM book WHERE b_id='".$id."';";

    echo $cq;

    $res = mysqli_query($link, $cq);

    $crow = mysqli_fetch_assoc($res);

?>

        <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="page-header text-center">Update Book</h1>
                    </div>
        
                    <div class="modal-body p-5 pt-0">

                        <form role="form" action="process_book_edit.php" method="POST" enctype="multipart/form-data">

                            <input type="hidden" name="id" value="<?php echo $crow['b_id']; ?>" />

                            <div class="form-floating mb-3">
                                <input type="text" name="bnm" value="<?php echo $crow['b_nm'] ?>" class="form-control">
                                <label>Book Name</label>
                                    <?php
                                        if(isset($_SESSION['error']['bnm']))
                                        {
                                            echo '<p class="error">'.$_SESSION['error']['bnm'].'</p>';
                                        } 
                                    ?>
                            </div>

                            <div class="form-group mb-3">
                                <select name="cat" class="form-control">
                                    <?php
                                        include("../includes/connection.php");

                                        $cq = "SELECT * FROM category";

                                        $cres = mysqli_query($link, $cq);

                                        while($crows = mysqli_fetch_assoc($cres))
                                        {
                                            echo '<option value="'.$crows['cat_nm'].'">'.$crows['cat_nm'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
    
                            <div class="form-floating mb-3">
                                <textarea name="desc" class="form-control">
                                    <?php echo $crow['b_desc'] ?>
                                </textarea>
                                <label>Description</label>
                                <?php
                                    if(isset($_SESSION['error']['desc']))
                                    {
                                        echo '<p class="error">'.$_SESSION['error']['desc'].'</p>';
                                    }
                                ?>
                            </div>

                            <div class="form-floating mb-3">
                                <input name="price" type="text" class="form-control rouneded-3" placeholder="Price">
                                <label>Price</label>
                                <?php
                                    if(isset($_SESSION['error']['price']))
                                    {
                                        echo '<p class="error">'.$_SESSION['error']['price'].'</p>';
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