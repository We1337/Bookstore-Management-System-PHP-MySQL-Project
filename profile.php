<?php
    include("includes/header.php");
    include("includes/connection.php");

    $id = $_SESSION['client']['id'];
    $query = "SELECT * FROM `register_table` WHERE `register_id` = $id";
    $result_user_name = mysqli_query($connection_database, $query);
    $row = mysqli_fetch_assoc($result_user_name);
?>

        <div class="container-xl px-4 mt-4">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Profile Picture</div>
                            <div class="card-body text-center">

                                <img class="img-account-profile rounded-circle mb-2" src="<?php echo $row['register_profile_picture'] ?>" alt>

                                <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>

                                <button class="btn btn-primary" type="button">Upload new image</button>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card mb-4">
                            <div class="card-header">Account Details</div>
                                <div class="card-body">
                                    <form action="functions/profile_process.php" method="POST">

                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                                            <input name="username" class="form-control" type="text" placeholder="Enter your username" value="<?php echo $row['register_user_name']; ?>">
                                        </div>

                                        <div class="row gx-3 mb-3">
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputFullName">Full name</label>
                                                <input name="fullname" class="form-control" type="text" placeholder="Enter your full name" value="<?php echo $row['register_full_name']; ?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input name="password" class="form-control" type="text" placeholder="Enter your Password" value="<?php echo $row['register_password']; ?>">
                                            </div>
                                        </div>

                                        <div class="row gx-3 mb-3">
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                                <input name="email" class="form-control" type="email" placeholder="Enter your email address" value="<?php echo $row['register_email']; ?>">
                                            </div>

                                            <div class="row gx-3 mb-3">
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputPhone">Phone number</label>
                                                    <input name="contact" class="form-control" type="tel" placeholder="Enter your phone number" value="<?php echo $row['register_contact_number']; ?>">
                                                </div>
                                            </div>

                                            <input name="id" type="hidden" value="<?php echo $row['register_id']; ?>">

                                            <button class="btn btn-primary" type="submit">Save changes</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
    include("includes/footer.php");
?>