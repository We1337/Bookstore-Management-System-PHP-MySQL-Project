<?php
    session_start();

    if(isset($_SESSION['admin']['status']))
    {
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon.ico" type="image/x-icon">

        <title>Login</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    </head>

    <body>

        <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">

                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="fw-bold mb-0 fs-2">Admin login</h1>
                    </div>

                    <div class="modal-body p-5 pt-0">
                        <form class="login" action="functions/login_process.php" method="POST">
                            
                            <div class="form-floating mb-3">
                                <input name="username" type="text" class="form-control rounded-3" id="floatingInput" placeholder="Admin name">
                                <label for="floatingInput">Admin name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="password" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div> 

                            <button class="w-100 mb-2 btn btn-sm rounded-3 btn-outline-info" type="submit">Login</button>
                            <a class="w-100 mb-2 btn btn-sm rounded-3 btn-outline-info" href="../index.php">Exit</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </body>

</html>