<?php
    include("includes/header.php");
    include("../includes/connection.php");
?>
        <div class="container">
            <div class="post">
                <br>
                <h1 class="page-header text-center">View Support</h1> 
                
                <form method="GET" action="contact_view.php" class="form-inline">
                    <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                    <br>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="search-submit">Search</button>
                </form> 
                <br>

                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="col">No</th>
                            <th class="col">Email</th>
                            <th class="col">Subject</th>
                            <th class="col">Message</th>
                            <th class="col">Status</th>
                            <th class="col">Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            $s = $_GET['search'];
                            $blq = "SELECT * FROM userSupport WHERE username LIKE '%$search%'";
                            $blres = mysqli_query($link, $blq);

                            $count = 1;

                            while($book_row = mysqli_fetch_assoc($blres))
                            {
                                echo '
                                    <tr>
                                        <td>'.$count.'</td>
                                        <td>'.$book_row['username'].'</td>
                                        <td>'.$book_row['subject'].'</td>
                                        <td>'.$book_row['message'].'</td>
                                        <td><a class="btn btn-danger btn-sm" href="process_support_status.php?id='.$book_row['id'].'&status='.$book_row['status'].'">'.$book_row['status'].'</a></td>
                                        <td>'.@date("d-M-y",$book_row['c_time']).'</td>
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