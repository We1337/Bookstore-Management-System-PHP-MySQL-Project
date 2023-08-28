<?php
    include("includes/header.php");
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Book</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add New Book
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="process_book_add.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Book Name</label>
                                                <?php
                                                    if(isset($_SESSION['error']['bnm']))
                                                    {
                                                        echo '<p class="error">'.$_SESSION['error']['bnm'].'</p>';
                                                    } 
                                                ?>
                                            <input type="text" name="bnm" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Book Category</label>
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
 
                                        <div class="form-group">
                                            <label>Description
                                                <?php
                                                    if(isset($_SESSION['error']['desc']))
                                                    {
                                                        echo '<p class="error">'.$_SESSION['error']['desc'].'</p>';
                                                    }
                                                ?>
                                            </label>
                                            <textarea name="desc" rows="3" class="form-control"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Price</label>
                                                <?php
                                                    if(isset($_SESSION['error']['price']))
                                                    {
                                                        echo '<p class="error">'.$_SESSION['error']['price'].'</p>';
                                                    } 
                                                ?>
                                            <input type="text" name="price" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Book Image</label>
                                                <?php
                                                    if(isset($_SESSION['error']['b_img']))
                                                    {
                                                        echo '<p class="error">'.$_SESSION['error']['b_img'].'</p>';
                                                    } 
                                                ?>
                                            <input type="file" name="b_img" class="form-control">
                                        </div>

                                        <button type="submit" class="btn btn-default">Add Book</button>

                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>

                                    <?php
                                        unset($_SESSION['error']);
                                    ?>

                                </div>
                                <!-- /.col-lg-6 (nested) --> 
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

<?php
    include("includes/footer.php");
?>