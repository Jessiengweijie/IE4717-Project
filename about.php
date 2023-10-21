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
    <title>About</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
</head>

<body>
    <div id="wrapper">
        <?php include "assets/php/header.php"; ?>

        <div class="about-photo">
            <h1 style="padding-left:150px;padding-bottom:150px;">About Us</h1>
        </div>

        <div class="about">

            <div class="about-body">
                <h1 style="font-size:30px">Our Story</h1>
                <p class="story-content">In the vibrant heartbeat of Singapore, we recognized a distinct need: a way to cater to the ever-evolving demands
                    of its people. This drove us to create ConviGo. More than a mere car rental, ConviGo stands as a testament to our vision
                    of seamless urban transportation, accommodating the diverse needs of every Singaporean. Whether it's an eco-conscious ride
                    or a stylish getaway, our platform offers quick bookings, honest pricing, and unwavering support. Have queries? Our comprehensive
                    FAQ and attentive team stand ready. ConviGo isn't just another service; it's our pledge to reshape urban mobility in sync with the
                    people's needs. Choose ConviGo, and journey with us towards a transformative driving experience.</p>
            </div>

            <div class="about-body">
                <h1 style="font-size:30px">Why Convigo?</h1>

                <!--   --------------------------  Instant Verification, Zero Delays ---------------------------->
                <div class="flex row">
                    <img src="assets/images/Icons/verification_icon.png" height="60px" width="60px">
                    <div class="about-why">
                        <strong> Instant Verification, Zero Delays </strong>
                        Kickstart your journey in no time. With Convigo's swift registration using Singpass, you're set to drive in a flash. No wait. No fuss.<br><br>
                    </div>
                </div>

                <!--   --------------------------  Transparent Pricing ---------------------------->
                <div class="flex row">
                    <img src="assets/images/Icons/price_icon.png" height="60px" width="60px">
                    <div class="about-why">
                        <strong> Transparent Pricing</strong>
                        Pay strictly by the hour; fuel and electricity included. No hidden fees, ensuring straightforward costs for hassle-free planning.<br><br>
                    </div>
                </div>

                <!--   --------------------------  Easy Access Across the City ---------------------------->
                <div class="flex row">
                    <img src="assets/images/Icons/easyaccess_icon.png" height="60px" width="60px">
                    <div class="about-why">
                        <strong> Easy Access Across the City</strong>
                        Conveniently located near MRT stations and HDBs, Convigo cars are positioned throughout Singapore for your immediate needs. Ensuring a smooth city journey for you.<br><br>
                    </div>
                </div>

                <!--   --------------------------  24/7 Availability ---------------------------->
                <div class="flex row">
                    <img src="assets/images/Icons/daynight_icon.png" height="60px" width="60px">
                    <div class="about-why">
                        <strong> 24/7 Availability </strong>
                        Be it a late-night adventure or an early morning errand, our cars are available around the clock, ensuring you’re never left without wheels.<br><br>
                    </div>
                </div>

                <!--   --------------------------  Cleanliness in Every Drive ---------------------------->
                <div class="flex row">
                    <img src="assets/images/Icons/clean_icon.png" height="60px" width="60px">
                    <div class="about-why">
                        <strong> Cleanliness in Every Drive </strong>
                        At Convigo, every ride is more than just clean—it's meticulously maintained. We uphold stringent cleanliness standards, guaranteeing a refreshing journey every time.<br><br>
                    </div>
                </div>
                <br />
            </div>
            <br />
        </div>

        <?php include "assets/html/footer.html"; ?>
    </div>
</body>

</html>