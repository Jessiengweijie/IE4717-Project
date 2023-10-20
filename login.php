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
                        <input type="email" name="newsletter" id="newsletter" required placeholder="your email here" style="padding: 5px 15px; border-radius: 5px;">
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