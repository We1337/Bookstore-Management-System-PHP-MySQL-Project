<?php
    include("includes/header.php");
    include("includes/connection.php");
    include("functions/profile_data.php");
    include("functions/notification.php");

    display_notification_messages(); 
?>

        <div class="container-xl px-4 mt-4">
            <div class="row">
                <div class="col-xl-4">
                    <form action="functions/profile_process.php" method="POST" enctype="multipart/form-data">
                        <div class="card mb-4 mb-xl-0">

                            <div class="card-header">Profile Picture</div>
                                <div class="card-body text-center">

                                    <img class="img-account-profile rounded-circle mb-2" style="width:220px;height:220px;" src="<?php echo $row['register_profile_picture'] ?>" alt>

                                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>

                                    <input name="file" type="file" class="form-control">

                                </div>
                            </div>

                        </div>
                        <div class="col-xl-8">
                            <div class="card mb-4">
                                <div class="card-header">Account Details</div>
                                    <div class="card-body">
                                        
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
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputPhone">Phone number</label>
                                                    <input name="contact" class="form-control" type="tel" placeholder="Enter your phone number" value="<?php echo $row['register_contact_number']; ?>">
                                                </div>
                                            </div>

                                            <button class="btn btn-outline-info" type="submit" value="submit">Save changes</button>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                     </form>
                </div>
            </div>
        </div>

<?php
    include("includes/footer.php");
?>