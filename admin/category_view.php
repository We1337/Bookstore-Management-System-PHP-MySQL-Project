<?php
    include("includes/header.php");
    include("../includes/connection.php");
    include("functions/process_category_view_data.php");

    $search = $_GET['search'];
    $category_query = "SELECT * FROM `category_table` WHERE `category_name` LIKE '%$search%'";
    $category_result = mysqli_query($connection_database, $category_query);
    $count = 1;
?>
        <div class="px-md-4">
            <h2>View Category</h2>

            <form method="GET" action="category_view.php" class="form-inline">
                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                <br>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> 
            <br>
                        
            <table class="table" cellspacing="0" border="0" width="100%">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        display_data($count, $category_result);
                    ?>                        
                </tbody>
            </table>
        </div>

<?php
    include("includes/footer.php");
?>