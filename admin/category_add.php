<?php
    include("includes/header.php");
?>

        <div class="container-fluid px-4 mt-4">
            <form action="functions/process_book_edit.php" method="POST" enctype="multipart/form-data">
                <div class=" mb-4">
                    <div class="card-header">New category</div>
                        <div class="card-body">

                            <div class="form-floating mb-3">
                                <input name="category" type="text" class="form-control rounded-3" placeholder="Category Name">
                                <label>Category Name</label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm">Add Category</button>
                            <a href="category_view.php" class="btn btn-primary btn-sm">Exit</a>

                        </div>
                    <div>
                </div>
            </form>
        </div>             

<?php
    include("includes/footer.php");
?>