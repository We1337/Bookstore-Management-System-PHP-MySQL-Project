<?php
    session_start();

    include("includes/header.php");
    include("../includes/connection.php");

    $id = $_GET['id'];

    $order_query = "SELECT * FROM `order_table` WHERE `order_id` = '$id'";

    $result = mysqli_query($connection_database, $order_query);

    $order_row = mysqli_fetch_assoc($result);
?>

        <div class="container-fluid px-4 mt-4">
            <div class="">
                <div class="">
                    <form action="functions/profile_process.php" method="POST" enctype="multipart/form-data">

                        <div class="">
                            <div class=" mb-4">
                                <div class="card-header">Order Details</div>
                                    <div class="card-body">
                                        
                                        <div class="mb-3">
                                            <label class="small mb-1"></label>
                                            <input name="username" class="form-control" type="text" placeholder="" value="">
                                        </div>

                                        <div class="row gx-3 mb-3">
                                            <div class="col-md-6">
                                                <label class="small mb-1"></label>
                                                <input name="fullname" class="form-control" type="text" placeholder="" value="">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="small mb-1"></label>
                                                <input name="password" class="form-control" type="text" placeholder="" value="">
                                            </div>
                                        </div>

                                        <div class="row gx-3 mb-3">

                                            <div class="mb-3">
                                                <label class="small mb-1"></label>
                                                <input name="email" class="form-control" type="email" placeholder="" value="">
                                            </div>

                                            <div class="row gx-3 mb-3">
                                                <div class="mb-3">
                                                    <label class="small mb-1"></label>
                                                    <input name="contact" class="form-control" type="tel" placeholder="" value="">
                                                </div>
                                            </div>

                                            <div class="row gx-3 mb-3">
                                                <div class="col-md-6">
                                                    <button class="btn btn-outline-info" type="submit" value="submit">Save changes</button>
                                                    <button class="btn btn-outline-info" type="submit" value="submit">Save changes</button>
                                                </div>
                                            </div>

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