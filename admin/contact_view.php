<?php
    include("includes/header.php");
    include("../includes/connection.php");
?>
        <div class="container">
            <div class="post">
                <br>
                <h1 class="page-header text-center">View Contacts</h1> 
                
                <form method="GET" action="contact_view.php" class="form-inline">
                    <input class="form-control mr-sm-2" type="text" name="s" placeholder="Search" aria-label="Search">
                    <br>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="search-submit">Search</button>
                </form> 
                <br>

                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="col">No</th>
                            <th class="col">Name</th>
                            <th class="col">Mobile</th>
                            <th class="col">E-Mail Address</th>
                            <th class="col">Message</th>
                            <th class="col">Time</th>
                            <th class="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            $s = $_GET['s'];
                            $blq = "SELECT * FROM `contact_table` WHERE `contact_full_name` LIKE '%$s%'";
                            $blres = mysqli_query($connection_database, $blq);

                            $count = 1;

                            while($book_row = mysqli_fetch_assoc($blres))
                            {
                                echo '
                                    <tr>
                                        <td>'.$count.'</td>
                                        <td>'.$book_row['contact_full_name'].'</td>
                                        <td>'.$book_row['contact_mobile_number'].'</td>
                                        <td>'.$book_row['contact_email'].'</td>
                                        <td>'.$book_row['contact_message'].'</td>
                                        <td>'.@date("d-M-y",$book_row['contact_time']).'</td>
                                        <td align="center"><a class="btn btn-danger btn-sm" href="process_contact_del.php?id='.$book_row['contact_id'].'">Delate</a></td>
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