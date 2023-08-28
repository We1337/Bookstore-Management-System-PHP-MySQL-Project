<?php
    include("includes/header.php");
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="process_category_add.php" method="post">
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input type="text" name="cat" class="form-control">
                                        </div>

                                        <?php
                                            if(isset($_SESSION['error']['cat']))
                                            {
                                                echo '<p class="error">'.$_SESSION['error']['cat'].'</p>';
                                            } 
                                        ?>

                                        <button type="submit" class="btn btn-default">Add Category</button>

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