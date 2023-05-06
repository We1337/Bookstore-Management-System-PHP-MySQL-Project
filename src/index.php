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

        <!-- Main modal -->
        <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="bg-gray-900 text-white p-4 fixed top-0 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full bg-gray-900 text-white p-4">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
                        <form class="space-y-6" action="includes/login.inc.php" method="post">
                            <div>
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <button name="submit" id="ClickTheButton" type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                Not registered? <a href="signup.php" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </div> 

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