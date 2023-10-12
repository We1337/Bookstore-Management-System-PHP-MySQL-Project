<?php
    include("includes/header.php");
    include("../includes/connection.php");

    $search = $_GET['search'];
    $support_search_query = "SELECT * FROM `user_support_table` WHERE `user_support_subject` LIKE '%$search%'";
    $support_search_result = mysqli_query($connection_database, $support_search_query);
?>
            
        <div class="px-md-4">
            <h2 class="page-header">View Support</h2> 
                
            <form method="GET" action="support.php" class="form-inline">
                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                <br>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> 
            <br>

            <table class="table table-striped table-bordered table-hover">

                <thead>
                    <tr>
                        <th class="col">ID</th>
                        <th class="col">User actual ID</th>
                        <th class="col">Email</th>
                        <th class="col">Subject</th>
                        <th class="col">Message</th>
                        <th class="col">Status</th>
                        <th class="col">Time</th>
                        <th class="col">Remove</th>
                    </tr>
                </thead>

                <tbody>
                        
                    <?php
                        while($support_row = mysqli_fetch_assoc($support_search_result))
                        {
                            echo "
                                <tr>
                                    <td> " . $support_row['user_support_id'] . " </td>
                                    <td> " . $support_row['user_support_actual_id'] . " </td>
                                    <td> " . $support_row['user_support_email'] . " </td>
                                    <td> " . $support_row['user_support_subject'] . " </td>
                                    <td> " . $support_row['user_support_message'] . " </td>
                                    <td> " . $support_row['user_support_created_at'] . " </td>
                                    <td><a class='btn btn-warning btn-sm' href='functions/process_support_status.php?id=" . $support_row['user_support_id'] . "&status=" . $support_row['user_support_status'] . "'>" . $support_row['user_support_status'] . "</a></td>
                                    <td><a class='btn btn-danger btn-sm' href='functions/process_support_del.php?id=" . $support_row['user_support_id'] . "'>Delete</a></td>     
                                </tr>";
                        }
                    ?>
                                            
                </tbody>
            </table>
        </div>
        
<?php
    include("includes/footer.php");
?>