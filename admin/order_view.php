<?php
    include("includes/header.php");
    include("../includes/connection.php");
?>
        <div class="container">
            <div class="post">
                <br>
                <h2 class="title text-center">View Order</h2>

                <form method="GET" action="order_view.php" class="form-inline">
                    <input class="form-control mr-sm-2" type="text" name="s" placeholder="Search" aria-label="Search">
                    <br>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="search-submit">Search</button>
                </form> 
                <br>

                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Pincode</th>
                            <th scope="col">City</th>
                            <th scope="col">State</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Rid</th>
                            <th scope="col">Price</th>
                            <th scope="col">Order</th>
                            <th scope="col">Delate</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $s = $_GET['s'];
                            $blq = "SELECT * FROM `order_table` WHERE `order_name` LIKE '%$s%'";
                            $blres = mysqli_query($connection_database, $blq);

                            $count = 1;

                            while($r_row = mysqli_fetch_assoc($blres))
                            {
                                echo '
                                    <tr>
                                        <td>'.$count.'</td>
                                        <td>'.$r_row['order_id'].'</td>
                                        <td>'.$r_row['order_name'].'</td>
                                        <td>'.$r_row['order_address'].'</td>
                                        <td>'.$r_row['order_pincode'].'</td>
                                        <td>'.$r_row['order_city'].'</td>
                                        <td>'.$r_row['order_state'].'</td>
                                        <td>'.$r_row['order_mobile'].'</td>
                                        <td>'.$r_row['order_rid'].'</td>
                                        <td>'.$r_row['order_total_price'].'</td>
                                        <td>'.$r_row['order_list_books'].'</td>
                                        <td align="center"><a style="color: red;" href="process_order_del.php?id='.$r_row['order_id'].'">x</a></td>
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