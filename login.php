<?php
// Set auth for page
$authRequired = 0;
include "assets/php/dbconnect.php";
include "assets/php/check_login.php";
include "assets/php/fetch_user_info.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
</head>

<body>
    <div id="wrapper">
        <?php include "header.php"; ?>
        <div class="center home">
            <div class="center home-header">
                <div class="login">
                    <div>
                        <p class="login-font"> Login </p>
                        <img src="assets/images/Logo/finallogo.png" height="135px" width="135px" alt="ConviGo_Logo" style="margin-bottom: 25px;">

                        <form class="login-form" method="post" action="assets/php/authmain.php">
                            <input class="login-input" type="text" name="userid" required placeholder="Email">
                            <br />
                            <input class="login-input" type="password" name="password" required placeholder="Password">
                            <br />
                            <input class="login-button" type="submit" value="Sign In">
                        </form>
                    </div>
                    <br />
                    <div class="login-signup">
                        <span>Don't have an account?</span>
                        <a href="signup.php" style="color:white;">Sign up an account, it's free</a>
                    </div>
                </div>


                <!-- <a class="book-now-button" href="cars.php">Book Now</a>  -->
            </div>

            <div class="center">
                <h1 style="margin-bottom: 55px;">Why Convigo</h1>

                <div class="flex space-evenly" style="margin-bottom: 100px;">

                    <!--   --------------------------  Instant Verification, Zero Delays ---------------------------->
                    <div class="home-content">
                        <img src="assets/images/Icons/verification_icon.png">
                        <h2>Instant Verification, Zero Delays</h2>
                    </div>

                    <!--   --------------------------  Transparent Pricing ---------------------------->
                    <div class="home-content">
                        <img src="assets/images/Icons/price_icon.png">
                        <h2>Transparent Pricing</h2>
                    </div>

                    <!--   --------------------------  Easy Access Across the City ---------------------------->
                    <div class="home-content">
                        <img src="assets/images/Icons/easyaccess_icon.png">
                        <h2>Easy Access Across the City</h2>
                    </div>

                    <!--   --------------------------  24/7 Availability ---------------------------->
                    <div class="home-content">
                        <img src="assets/images/Icons/daynight_icon.png">
                        <h2>24/7 Availability</h2>
                    </div>

                    <!--   --------------------------  Cleanliness in Every Drive ---------------------------->
                    <div class="home-content">
                        <img src="assets/images/Icons/clean_icon.png">
                        <h2>Cleanliness in Every Drive</h2>
                    </div>
                </div>
                <!----------------------------------------------------------------------------------->

                <h1 style="margin-bottom: 55px;">How to use</h1>
                <div class="flex space-evenly" style="margin-bottom: 15px;">
                    <div class="home-how">
                        <img src="assets/images/Cars/Sample/home_search.png" width="100%">
                        <div class="home-how-content" style="color:black;">
                            <h2>Search</h2>
                            <p>Discover a Convigo vehicle just moments away</p>
                        </div>
                    </div>
                    <div class="home-how">
                        <img src="assets/images/Cars/Sample/home_book.png" width="100%">
                        <div class="home-how-content" style="color:black;">
                            <h2>Book</h2>
                            <p>Select the perfect car to your liking</p>
                        </div>
                    </div>
                    <div class="home-how">
                        <img src="assets/images/Cars/Sample/home_drive.png" width="100%">
                        <div class="home-how-content" style="color:black;">
                            <h2>Drive</h2>
                            <p>Activate your ride with the ConviGo app</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('footer.html'); ?>
    </div>
</body>

</html>