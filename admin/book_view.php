<?php
    include("includes/header.php");
    include("../includes/connection.php");
?>

        <div class="container">
            <div class="post">
                <br>
                <h1 class="page-header text-center">View Book</h1>
    
                <p class="text-center"><strong>Book List</strong></p>
                
                <form method="get" action="book_view.php" class="form-inline">
                    <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                    <br>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="search-submit">Search</button>
                </form> 
                <br>

                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="col">No</th>
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
                            $blq = "SELECT * FROM `book_table` WHERE `book_name` LIKE '%$search%'";
                            $blres = mysqli_query($connection_database, $blq);

                            $count = 1;

                            while($book_row = mysqli_fetch_assoc($blres))
                            {
                                echo '
                                    <tr>
                                        <td>'.$count.'</td>
                                        <td>'.$book_row['book_name'].'</td>
                                        <td>'.$book_row['book_category'].'</td>
                                        <td>'.$book_row['book_price'].'</td>';

                                echo "  <td width='120'><center><img src='../$book_row[book_img]' width='50' height='70'></center></td>";
                                                      
                                echo '
                                        <td>'.@date("d-M-y",$book_row['book_time']).'</td>
                                        <td align="center"><a class="btn btn-danger btn-sm" href="process_book_del.php?id='.$book_row['book_id'].'">Delate</a></td>
                                        <td align="center"><a class="btn btn-info btn-sm" href="book_edit.php?id='.$book_row['book_id'].'">Edit</a></td>
                                    </tr>';
                                
                                $count++;
                            }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
<?php
    include("includes/footer.php");
?>