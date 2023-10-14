<?php
    include("includes/header.php");
    include("../includes/connection.php");
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
                        $search = $_GET['search'];
                        $category_query = "SELECT * FROM `category_table` WHERE `category_name` LIKE '%$search%'";
                        $category_result = mysqli_query($connection_database, $category_query);
                        $count = 1;

                        while($category_row = mysqli_fetch_assoc($category_result))
                        {
                            echo '
                                <tr class="odd gradeX">
                                    <td>' . $count . '</td>
                                    <td>' . $category_row['category_name'] . '</td>
                                    <td><a class="btn btn-info btn-sm" href="category_edit.php?id=' . $category_row['category_id'] . '">Edit</a></td>
                                    <td><a class="btn btn-danger btn-sm" href="functions/process_category_del.php?id=' . $category_row['category_id'] . '">Delate</a></td>
                                </tr>';

                            $count++;
                        }
                            
                    ?>                        
                </tbody>
            </table>
        </div>

<?php
    include("includes/footer.php");
?>