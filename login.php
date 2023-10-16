<?php
// Set auth for page
$authRequired = 0;
include "assets/php/dbconnect.php";
include "assets/php/check_login.php";
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
        <div class="center home-login">
            
            <div class="login">
                <div>
                    <p class="login-font"> Login </p>
                    <img src="assets/images/Logo/finallogo.png" height="200px" width="200px" alt="ConviGo_Logo" style="margin-bottom: 25px;">

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
                    <a href="signup.php">Sign up an account, it's free</a>
                </div>
            </div>


            <!-- <a class="book-now-button" href="cars.php">Book Now</a>  -->
            <br />
            <br />

        </div>

        <div class="center home">

        <div class="center">    
        <h1 style="margin-bottom: 75px;">Why Convigo</h1>

            <div class="flex space-evenly" style="margin-bottom: 100px;">

                <!--   --------------------------  Instant Verification, Zero Delays ---------------------------->
                <div class="container" style="border:none;" >
                    <img src="assets/images/Icons/verification_icon.png" height="80px" width="80px">
                    <span>
                        <h2 style="font-size:25px">
                            Instant Verification, Zero Delays
                        </h2>
                    </span>
                </div>

                <!--   --------------------------  Transparent Pricing ---------------------------->
                <div class="container" style="border:none;">
                    <img src="assets/images/Icons/price_icon.png" height="80px" width="80px">
                    <span>
                        <h2 style="font-size:25px">
                            Transparent Pricing
                        </h2>
                    </span>
                </div>

                <!--   --------------------------  Easy Access Across the City ---------------------------->
                <div class="container" style="border:none;">
                    <img src="assets/images/Icons/easyaccess_icon.png" height="80px" width="80px">
                    <span>
                        <h2 style="font-size:25px">
                            Easy Access Across the City
                        </h2>
                    </span>
                </div>

                 <!--   --------------------------  24/7 Availability ---------------------------->
                <div class="container" style="border:none;">
                    <img src="assets/images/Icons/daynight_icon.png" height="80px" width="80px">
                    <span>
                        <h2 style="font-size:25px">
                            24/7 Availability
                        </h2>
                    </span>
                </div>

                 <!--   --------------------------  Cleanliness in Every Drive ---------------------------->
                <div class="container" style="border:none;">
                    <img src="assets/images/Icons/clean_icon.png" height="80px" width="80px">
                    <span>
                        <h2 style="font-size:25px">
                            Cleanliness in Every Drive
                        </h2>
                    </span>
                </div>
            </div>
             <!----------------------------------------------------------------------------------->

            <h1 style="margin-bottom: 75px;">How to use</h1>
            <div class="flex space-evenly" style="margin-bottom: 10px;">
                <div class="container" style="height: 200px; width: 25%; border:none;">
                    <img src="assets/images/Cars/Sample/home_search.png" height="300px" width="100%" >                
                </div>
                <div class="container" style="height: 200px; width: 25%; border:none;">
                    <img src="assets/images/Cars/Sample/home_book.png" height="300px" width="100%" >                
                </div>
                <div class="container" style="height: 200px; width: 25%; border:none;">
                    <img src="assets/images/Cars/Sample/home_drive.png" height="300px" width="100%" >                
                </div>
            </div>

            <div class="flex space-evenly" style="margin-bottom: 50px; margin-top:120px">
                <div class="container" style="height: 120px; width: 15%; background-color:var(--secondary-color);color:var(--background-color)" >
                    <span>
                        <h2>
                            Search
                        </h2>
                        <p style="font-size:20px">Discover a Convigo vehicle just moments away</p>
                    </span>
                </div>
                <div class="container" style="height: 120px; width: 15%; background-color:var(--secondary-color);color:var(--background-color)">
                    <span>
                        <h2>
                            Book
                        </h2>
                        <p style="font-size:20px">Select the perfect car to your liking</p>
                    </span>
                </div>
                <div class="container" style="height: 120px; width: 15%; background-color:var(--secondary-color);color:var(--background-color)">
                    <span>
                        <h2>
                            Drive
                        </h2>
                        <p style="font-size:20px">Activate your ride with the ConviGo app</p>
                    </span>
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