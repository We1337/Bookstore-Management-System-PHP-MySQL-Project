<?php
    include("includes/header.php");
    include("../includes/connection.php");

    $id = $_GET['id'];

    $query = "SELECT * FROM `category_table` WHERE `category_id` = '$id'";
        
    $result = mysqli_query($connection_database, $query);

    $row = mysqli_fetch_assoc($result);
?>
        <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <br>
                    <h1 class="page-header text-center">Update Category</h1>

                    <div class="modal-body p-5 pt-0">
                                   
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
                                            foreach($_SESSION['error'] as $er)
                                            {
                                                echo '
                                                    <div class="msg msg-error; error">
                                                        <p><strong>'.$er.'</strong></p>
                                                    </div>';
                                            }
                                            
                                            unset($_SESSION['error']); 
                                        }
                                    ?>

                                    <form role="form" action="process_category_edit.php" method="POST">

                                        <div class="form-floating mb-3">
                                            <input type="text" name="category" value="<?php echo $row['category_name']; ?>" class="form-control">
                                            <label>New Name for Category</label>
                                        </div>

                                        <?php
                                            if(isset($_SESSION['error']['category']))
                                            {
                                                echo '<p class="error">'.$_SESSION['error']['category'].'</p>';
                                            } 
                                        ?>

                                        <input type="hidden" name="id" value="<?php echo $row['category_id']; ?>" /> 

                                        <button type="submit" class="w-100 mb-2 btn rounded-3 btn-primary">Update Category</button>

                                    </form>

                                    <?php
                                        unset($_SESSION['error']);
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
    include("includes/footer.php");
?>