<?php
    include("includes/header.php");
    include("../includes/connection.php");
    include("functions/process_users_edit_data.php");
?>

        <div class="container-fluid px-4 mt-4">
            <form action="functions/process_users_edit.php" method="POST" enctype="multipart/form-data">
                <div class=" mb-4">
                    <div class="card-header">Users Details</div>
                        <div class="card-body">
                                        
                            <input name="register_id" type="hidden" value="<?php echo $id; ?>">

                            <div class="mb-3">
                                <label class="small mb-1">Full name</label>
                                <input name="register_full_name" class="form-control" type="text" placeholder="Register full name" value="<?php echo $users_row['register_full_name']; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1">User name</label>
                                <input name="register_user_name" class="form-control" type="text" placeholder="Register user name" value="<?php echo $users_row['register_user_name']; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1">Password</label>
                                <input name="regsiter_password" class="form-control" type="text" placeholder="Password" value="<?php echo $users_row['register_password']; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1">Phone number</label>
                                <input name="register_contact_number" class="form-control" type="text" placeholder="Phone number" value="<?php echo $users_row['register_contact_number']; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1">E-Mail</label>
                                <input name="register_email" class="form-control" type="text" placeholder="E-Mail" value="<?php echo $users_row['register_email']; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1">Question</label>
                                <input name="register_question" class="form-control" type="text" placeholder="Question" value="<?php echo $users_row['register_question'] ?>">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1">Answer</label>
                                <input name="register_answer" class="form-control" type="text" placeholder="Answer" value="<?php echo $users_row['register_answer']; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1">Profile picture</label>
                                <input name="register_profile_picture" class="form-control" type="text" placeholder="Profile picture" value="<?php echo $users_row['register_profile_picture']; ?>">
                            </div>

                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <button class="btn btn-outline-info" type="submit" value="submit">Save changes</button>
                                    <a class="btn btn-outline-info" href="order_view.php">Exit</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>     

<?php
    include("includes/footer.php");
?>