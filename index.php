<?php
// Set auth for page
include "assets/php/dbconnect.php";
include "assets/php/check_login.php";
include "assets/php/fetch_user_info.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
</head>

<body>
    <div id="wrapper">
        <?php include "header.php"; ?>
        <div class="center home">
            <div class="center home-header">
                <?php if (isset($userInfo['firstname'])) {
                    echo '<h1>Welcome, ' . $userInfo['firstname'] . ' ' . $userInfo['surname'] . '!</h1>';
                } ?>
                <?php if (!isset($_SESSION['valid_user'])) {
                    include "login.html";
                } ?>
            </div>


            <div class="center">
                <h1 style="margin-bottom: 75px;">Why Convigo</h1>

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

                <h1 style="margin-bottom: 75px;">How to use</h1>
                <div class="flex space-evenly" style="margin-bottom: 10px;">
                    <div class="home-how">
                        <img src="assets/images/Cars/Sample/home_search.png" width="100%">
                        <div class="home-how-content">
                            <h2>Search</h2>
                            <p>Discover a Convigo vehicle just moments away</p>
                        </div>
                    </div>
                    <div class="home-how">
                        <img src="assets/images/Cars/Sample/home_book.png" width="100%">
                        <div class="home-how-content">
                            <h2>Book</h2>
                            <p>Select the perfect car to your liking</p>
                        </div>
                    </div>
                    <div class="home-how">
                        <img src="assets/images/Cars/Sample/home_drive.png" width="100%">
                        <div class="home-how-content">
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