<?php 
    session_start();

    if(! isset($_SESSION['admin']['status']))
    {
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon.ico" type="image/x-icon">

        <title>Bookstore Management System - Admin Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    </head>
    <body>

        <div id="wrapper">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Admin Panel</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Category</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="category_add.php">Add Category</a></li>
                                    <li><a class="dropdown-item" href="category_view.php">View Category</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Book</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="book_add.php">Add Book</a></li>
                                    <li><a class="dropdown-item" href="book_view.php">View Book</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact_view.php">View Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="users_view.php">View Users</a>
                            </li>  
                        </ul>
                    </div>
                </div>
            </nav>
        </div>