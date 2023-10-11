<?php
    include("includes/header.php");
    include("../includes/connection.php");

    $search = $_GET['search'];
    $contact_list = "SELECT * FROM `contact_table` WHERE `contact_full_name` LIKE '%$search%'";
    $contact_list_row = mysqli_query($connection_database, $contact_list);
?>
        <main class="px-md-4">
            <h2 class="page-header">View Contacts</h2> 
                
            <form method="GET" action="contact_view.php" class="form-inline">
                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                <br>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> 
            <br>

            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="col">ID</th>
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
                        while($contact_row = mysqli_fetch_assoc($contact_list_row))
                        {
                            echo '
                                <tr>
                                    <td>' . $contact_row['contact_id'] . '</td>
                                    <td>' . $contact_row['contact_full_name'] . '</td>
                                    <td>' . $contact_row['contact_mobile_number'] . '</td>
                                    <td>' . $contact_row['contact_email'] . '</td>
                                    <td>' . $contact_row['contact_message'] . '</td>
                                    <td>' . @date("d-M-y", $contact_row['contact_time']) . '</td>
                                    <td align="center"><a class="btn btn-danger btn-sm" href="process_contact_del.php?id=' . $contact_row['contact_id'] . '">Delate</a></td>
                                </tr>';
                        }
                    ?>
                                            
                </tbody>
            </table>
        </main>
        
<?php
    include("includes/footer.php");
?>