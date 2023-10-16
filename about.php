<?php
// Set auth for page
$authRequired = 0;
include "assets/php/dbconnect.php";
include "assets/php/check_login.php";
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
        <header>
            <a href="/ConviGo" style="text-decoration: none; color: inherit;">
                <h1 class="logo">ConviGo
                    <img src="assets/images/Logo/finallogo.png" height="40px" width="40px" alt="ConviGo_Logo" style="margin-left: 5px;">
                </h1>
            </a>

            <nav class="navbar">
                <b>
                    <a href="about.php">About</a> &nbsp;
                    <a href="cars.php">Cars</a> &nbsp;
                    <a href="locations.php">Locations</a> &nbsp;
                    <a href="faqs.php">FAQs</a> &nbsp;
                    <?php
                    if ($loggedInUserID) {
                        echo "<a href='my_account.php'>My Account</a>";
                        echo "<a href='assets/php/logout.php'>Log Out</a>";
                    } else {
                        echo "<a href='signup.php'>Sign Up</a>";
                        echo "<a href='/ConviGo'>Login</a>";
                    }
                    ?>
                </b>
            </nav>
        </header>
        <div class="center">

            <div class="flex space-evenly homephoto">
                <img src="assets/images/Cars/Sample/testcar2.jpg" height="auto" width="100%" alt="Sample Car 1">
            </div>

        </div>
        <div class="about">
            <br />
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
                <div class="flex row">
                    <img src="assets/images/Icons/lightning.png" height="80px" width="80px" alt="lightning icon">
                    <div class="about-why">
                        <strong> Instant Verification, Zero Delays </strong>
                        Kickstart your journey in no time. With Convigo's swift registration process powered by MyInfo, you're set to drive in a flash. No wait. No fuss.<br><br>
                    </div>
                </div>


                <div class="flex row">
                    <img src="assets/images/Icons/dollars.png" height="80px" width="80px" alt="dollars icon">
                    <div class="about-why">
                        <strong> Transparent Pricing</strong>
                        No hidden charges. You pay for what you see, making it easier for you to plan and budget.<br><br>
                    </div>
                </div>


                <div class="flex row">
                    <img src="assets/images/Icons/car_map.png" height="80px" width="80px" alt="car map icon">
                    <div class="about-why">
                        <strong> Easy Access Across the City</strong>
                        Dive into Singapore's rhythms with Convigo. With many cars across the country, a Convigo car is always just around the corner.<br><br>
                    </div>
                </div>

                <div class="flex row">
                    <img src="assets/images/Icons/car_time.png" height="80px" width="80px" alt="car time icon">
                    <div class="about-why">
                        <strong> 24/7 Availability </strong>
                        Be it a late-night adventure or an early morning errand, our cars are available around the clock, ensuring you’re never left without wheels.<br><br>
                    </div>
                </div>

                <div class="flex row">
                    <img src="assets/images/Icons/car_clean.png" height="80px" width="80px" alt="car time icon">
                    <div class="about-why">
                        <strong> Cleanliness in Every Drive </strong>
                        With Convigo, pristine isn't just a standard—it's a promise. We prioritize cleanliness, ensuring each vehicle is spotless and fresh for your journey.<br><br>
                    </div>
                </div>
                <br />
            </div>

            <br />

        </div>

        <!-- <div class="center">

            <div class="flex space-evenly" style="margin-bottom: 10px;">
                <div class="container" style="height: auto; width: 20%;">
                    <img src="assets/images/Cars/Sample/sample_car_1.png" height="auto" width="100%" alt="Sample Car 1">
                </div>
                <div class="container" style="height: auto; width: 20%;">
                    <img src="assets/images/Cars/Sample/sample_car_2.png" height="auto" width="100%" alt="Sample Car 2">
                </div>
                <div class="container" style="height: auto; width: 20%;">
                    <img src="assets/images/Cars/Sample/sample_car_3.png" height="auto" width="100%" alt="Sample Car 3">
                </div>
            </div>

        </div> -->


        <footer>
            <div class="footer-container">
                <div class="footer-left">
                    <h2 class="underline">Contact Us</h2>
                    <p>Email: ConviGo@localhost</p>
                    <p>Contact: +65 9876 5432</p>
                </div>
                <div class="footer-right">
                    <h2 class="underline">Register for our newsletter</h2>
                    <p>Get the latest news about ConviGo</p>
                    <form method="post" action="assets/php/show_post.php">
                        <input type="email" name="email" id="email" required placeholder="your email here" style="padding: 5px 15px; border-radius: 5px;">
                        <input class="subscribe-button" type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
            Copyright &copy; 2023 ConviGo. All Rights Reserved.
            <br />
            <br />
        </footer>
    </div>
</body>

</html>