<?php
    include("includes/header.php");
    include("../includes/connection.php");
?>
        <div class="container">
            <div class="post">
                <br>
                <h2 class="title text-center">View Users</h2>

                <form method="GET" action="contact_view.php" class="form-inline">
                    <input class="form-control mr-sm-2" type="text" name="s" placeholder="Search" aria-label="Search">
                    <br>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="search-submit">Search</button>
                </form> 
                <br>

                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Register ID</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Contact No</th>
                            <th scope="col">E-Mail</th>
                            <th scope="col">Register Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $s = $_GET['s'];
                            $blq = "SELECT * FROM register WHERE r_fnm LIKE '%$s%'";
                            $blres = mysqli_query($link, $blq);

                            $count = 1;

                            while($r_row = mysqli_fetch_assoc($blres))
                            {
                                echo '
                                    <tr>
                                        <td>'.$count.'</td>
                                        <td>'.$r_row['r_id'].'</td>
                                        <td>'.$r_row['r_fnm'].'</td>
                                        <td>'.$r_row['r_unm'].'</td>
                                        <td>'.$r_row['r_cno'].'</td>
                                        <td>'.$r_row['r_email'].'</td>
                                        <td>'.@date("d-M-y",$book_row['r_time']).'</td>
                                        <td align="center"><a style="color: red;" href="process_users_del.php?id='.$r_row['r_id'].'">x</a></td>
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