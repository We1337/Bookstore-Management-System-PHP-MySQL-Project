<?php
    session_start();
?>

<!DOCTYPE html>
<html class="dark">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Books</title>
        <link rel="stylesheet" href="./dist/output.css">
        <link rel="icon" href="https://flowbite.s3.amazonaws.com/brand/logo-dark/mark/flowbite-logo.png" type="image/x-icon">
    </head>
    <body class="bg-gray-900 text-white p-4">

        <?php include 'header.php'; ?> 

        <!-- Alert windows -->
        <div class="pl-5 pr-5">
            <?php
                if( isset($_GET["error"])) {
                    if ( $_GET["error"] == "emptyinput") {
                        echo '<div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 mg-4" role="alert">
                            <span class="font-medium">Warning alert!</span> empty input, please try again.
                            </div>';
                    }
                    if ( $_GET["error"] == "wronglogin") {
                        echo '<div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <span class="font-medium">Danger alert!</span> wrong login, please try again.
                            </div>';
                    }
                    if($_GET["error"]=="none") {
                        echo '<div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                            <span class="font-medium">Success alert!</span> You are signed up.
                            </div>';
                    }
                }
            ?>
        </div>

        <!-- Hero section -->
        <div class="bg-gray-900 text-white relative flex flex-col items-center justify-center min-h-screen bg-cover min-w-screen">
            <div class="flex flex-col items-center justify-center p-5 mx-auto lg:flex-row lg:max-w-6xl lg:p-0">
                <div class="container relative z-20 flex flex-col w-full px-5 pb-1 pr-12 mb-16 text-2xl text-gray-700 lg:w-1/2 sm:px-0 md:px-10 sm:items-center lg:items-start lg:mb-0">
                    <h1 class="relative z-20 text-5xl font-extrabold leading-none text-purple-500 xl:text-6xl sm:text-center lg:text-left">Bookstore<br class="md:hidden lg:block"> <span class="text-white">ONLINE</span></h1>
                    <p class="relative z-20 block mt-6 text-base text-gray-500 xl:text-xl sm:text-center lg:text-left">We've crafted the ultimate design tool that will help you build the design of your dreams. Built with configuration in mind, you can fully customize every aspect.</p>
                    <div class="relative flex mt-4"></div>
                </div>
                <div class="relative w-full px-5 rounded-lg md:w-2/3 lg:w-1/2 group xl:px-0">
                    <div class="relative overflow-hidden rounded-md shadow-2xl">
                        <img src="https://hips.hearstapps.com/hmg-prod/images/gettyimages-502579466-1582919962.jpg" class="z-10 object-cover w-full h-full">
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    </body>
</html>