<?php
    include("includes/header.php");
    include("../includes/connection.php");
    include("functions/process_book_view.php");

    $search = $_GET['search'];
    $book_list_query = "SELECT * FROM `book_table` WHERE `book_name` LIKE '%$search%'";
    $book_list_result = mysqli_query($connection_database, $book_list_query);
?>

        <div class="px-md-4">
            <h2 class="page-header">View Book</h2>
                
            <form method="GET" action="book_view.php" class="form-inline">
                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                <br>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> 
            <br>

            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="col">ID</th>
                        <th class="col">Book Name</th>
                        <th class="col">Category</th>
                        <th class="col">Price</th>
                        <th class="col">Image</th>
                        <th class="col">Date</th>
                        <th class="col">Delate</th>
                        <th class="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        display_data($book_list_result);
                    ?>
                </tbody>
            </table>
        </div>

<?php
    include("includes/footer.php");
?>