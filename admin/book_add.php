<?php
    include("includes/header.php");
    include("../includes/connection.php");
    include("functions/process_book_add_category.php");
?>

        <div class="container-fluid px-4 mt-4">
            <form action="functions/process_book_add.php" method="POST" enctype="multipart/form-data">
                <div class=" mb-4">
                    <div class="card-header">New book</div>
                        <div class="card-body">

                            <div class="mb-3">
                                <label class="small mb-1">Name of the Book</label>
                                <input name="book_name" class="form-control" type="text" placeholder="Name of the Book">
                            </div>

                            <div class="form-group mb-3">
                                <select name="book_category" class="form-control">
                                    <?php
                                        while($category_row = mysqli_fetch_assoc($category_result))
                                        {
                                            echo '<option value="' . $category_row['category_name'] . '">' . $category_row['category_name'] . '</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                           
                            <div class="mb-3">
                                <label class="small mb-1">Description</label>
                                <textarea name="book_description" rows="3" class="form-control"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1">Price</label>
                                <input name="book_price" class="form-control" type="text" placeholder="Price">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1">Image</label>
                                <input name="book_img" class="form-control" type="file">
                            </div>

                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <button class="btn btn-outline-info" type="submit" value="submit">Save changes</button>
                                    <a class="btn btn-outline-info" href="book_view.php">Exit</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div> 

<?php
    include("includes/footer.php");
?>