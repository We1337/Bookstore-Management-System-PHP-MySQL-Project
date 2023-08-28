<?php
    include("includes/header.php");
    include("../includes/connection.php");

    $id=$_GET['id'];

    $q = "SELECT * FROM category WHERE cat_id='$id'";
        
    $res = mysqli_query($link, $q);

    $row = mysqli_fetch_assoc($res);
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   
                                    <?php                           
                                        if(isset($_SESSION['done']))
                                        {
                                            echo '
                                                <div class="msg msg-ok">
                                                    <p><strong>'.$_SESSION['done'].'</strong></p>
                                                </div>';
                                                
                                            unset($_SESSION['done']);
                                        }
                                        else if(!empty($_SESSION['error']) )
                                        {
                                            foreach($_SESSION['error']as $er)
                                            {
                                                echo '
                                                    <div class="msg msg-error; error">
                                                        <p><strong>'.$er.'</strong></p>
                                                    </div>';
                                            }
                                            
                                            unset($_SESSION['error']); 
                                        }
                                    ?>

                                    <form role="form" action="process_category_edit.php" method="post">

                                        <div class="form-group">
                                            <label>New Name for Category</label>
                                            <input type="text" name="cat" value="<?php echo $row['cat_nm']; ?>" class="form-control">
                                        </div>

                                        <?php
                                            if(isset($_SESSION['error']['cat']))
                                            {
                                                echo '<p class="error">'.$_SESSION['error']['cat'].'</p>';
                                            } 
                                        ?>

                                        <input type="hidden" name="id" value="<?php echo $row['cat_id']; ?>" /> 

                                        <button type="submit" class="btn btn-default">Update Category</button>

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