<?php
    include("includes/header.php");
    include("../includes/connection.php");
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
                        $search = $_GET['search'];
                        $book_list_query = "SELECT * FROM `book_table` WHERE `book_name` LIKE '%$search%'";
                        $book_list_result = mysqli_query($connection_database, $book_list_query);

                        while($book_row = mysqli_fetch_assoc($book_list_result))
                        {
                            echo '
                                <tr>
                                    <td>' . $book_row['book_id'] . '</td>
                                    <td>' . $book_row['book_name'] . '</td>
                                    <td>' . $book_row['book_category'] . '</td>
                                    <td>' . $book_row['book_price'] . '</td>';

                            echo "  <td width='120'><center><img src='../$book_row[book_img]' width='50' height='70'></center></td>";
                                                      
                            echo '
                                    <td>' . @date("d-M-y", $book_row['book_time']) . '</td>
                                    <td align="center"><a class="btn btn-danger btn-sm" href="functions/process_book_del.php?id=' . $book_row['book_id'] . '">Delate</a></td>
                                    <td align="center"><a class="btn btn-info btn-sm" href="book_edit.php?id=' . $book_row['book_id'] . '">Edit</a></td>
                                </tr>';
                        }
                    ?>

                </tbody>
            </table>
        </div>

<?php
    include("includes/footer.php");
?>