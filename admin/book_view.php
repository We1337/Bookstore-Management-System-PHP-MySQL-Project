<?php
    include("includes/header.php");
    include("../includes/connection.php");
?>

//TODO: search bar 
//TODO: edit name 
//TODO: edit price 
//TODO: edit image

        <div class="container">
            <div class="post">
                <br>
                <h1 class="page-header text-center">View Book</h1>
    
                <p class="text-center"><strong>Book List</strong></p>
                    
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th class="col">No</th>
                                <th class="col">Book Name</th>
                                <th class="col">Category</th>
                                <th class="col">Price</th>
                                <th class="col">Image</th>
                                <th class="col">Date</th>
                                <th class="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                $book_q = "SELECT * FROM book";

                                $book_res = mysqli_query($link, $book_q);

                                $count = 1;

                                while($book_row = mysqli_fetch_assoc($book_res))
                                {
                                    echo '
                                        <tr class="odd gradeX">
                                        <td>'.$count.'</td>
                                        <td>'.$book_row['b_nm'].'</td>
                                        <td>'.$book_row['cat_nm'].'</td>
                                        <td>'.$book_row['b_price'].'</td>';

                                    echo "<td width='120'><center><img src='../$book_row[b_img]' width='50' height='70'></center>";
                                                      
                                    echo '
                                        <td>'.@date("d-M-y",$book_row['b_time']).'</td>
                                        <td align="center">
                                            <a class="btn btn-danger btn-sm" href="process_book_del.php?id='.$book_row['b_id'].'">Delate</a></td>
                                        </tr>';

                                    $count++;
                                }

                            ?>
                                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
    include("includes/footer.php");
?>