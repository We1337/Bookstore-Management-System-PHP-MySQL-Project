<?php
    include("includes/header.php");
    include("../includes/connection.php");
    include("functions/process_category_edit_data.php");
?>
        <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <br>
                    <h1 class="page-header text-center">Update Category</h1>

                    <div class="modal-body p-5 pt-0">

                        <form role="form" action="functions/process_category_edit.php" method="POST">

                            <div class="form-floating mb-3">
                                <input type="text" name="category" value="<?php echo $row['category_name']; ?>" class="form-control">
                                <label>New Name for Category</label>
                            </div>

                            <input type="hidden" name="id" value="<?php echo $row['category_id']; ?>" /> 

                            <button type="submit" class="w-100 mb-2 btn rounded-3 btn-primary">Update Category</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>

<?php
    include("includes/footer.php");
?>