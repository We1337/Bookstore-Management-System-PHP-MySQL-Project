<?php
    include("includes/header.php");
    include("../includes/connection.php");
    include("functions/process_contact_view.php");

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
                        display_data($contact_list_row);
                    ?>
                                            
                </tbody>
            </table>
        </main>
        
<?php
    include("includes/footer.php");
?>