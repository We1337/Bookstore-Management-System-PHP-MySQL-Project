<?php
    include("includes/header.php");
    include("../includes/connection.php");
    include("functions/process_users_view_data.php");

    $search = $_GET['search'];
    $users_list = "SELECT * FROM `register_table` WHERE register_full_name LIKE '%$search%'";
    $users_list_result = mysqli_query($connection_database, $users_list);
?>
        <main class="px-md-4">
            <h2 class="title">View Users</h2>

            <form method="GET" action="users_view.php" class="form-inline">
                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                <br>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="search-submit">Search</button>
            </form> 
            <br>

            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        display_data($users_list_result);
                    ?>               
                </tbody>
            </table>
        </main> 

<?php
    include("includes/footer.php");
?>