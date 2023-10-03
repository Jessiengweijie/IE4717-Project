<?php
// Set auth for page
$authRequired = 0;
include "assets/php/dbconnect.php";
include "assets/php/check_login.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>FAQs</title>
    <script type="text/javascript" src="assets/scripts/faqs.js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
</head>

<body>
    <div id="wrapper">
        <header>
            <a href="/ConviGo" style="text-decoration: none; color: inherit;">
                <h1 class="logo">ConviGo
                    <img src="assets/images/Logo/ConviGo_Logo.png" height="40px" width="40px" alt="ConviGo_Logo" style="margin-left: 5px;">
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
        <div class="faq">
            <div class="faq-container">
                <p class="faq-header">Frequently Asked Questions</p>
                <div class="faq-body">
                    <a class="faq-subheader" id="faq-general" onclick="toggleContent('faq-general-content')">General</a>
                    <div class="faq-general-content hidden" id="faq-general-content">
                        <ul>
                            <li>content 1</li>
                            <li>content 2</li>
                        </ul>
                    </div>
                </div>

                <div class="faq-body">
                    <a class="faq-subheader" id="faq-booking" onclick="toggleContent('faq-booking-content')">Booking</a>
                    <div class="faq-booking-content hidden" id="faq-booking-content">
                        <ul>
                            <li>content 1</li>
                            <li>content 2</li>
                        </ul>
                    </div>
                </div>

                <div class="faq-body">
                    <a class="faq-subheader" id="faq-payment" onclick="toggleContent('faq-payment-content')">Payment &
                        Pricing</a>
                    <div class="faq-payment-content hidden" id="faq-payment-content">
                        <ul>
                            <li>content 1</li>
                            <li>content 2</li>
                        </ul>
                    </div>
                </div>

                <div class="faq-body">
                    <a class="faq-subheader" id="faq-collection" onclick="toggleContent('faq-collection-content')">Collection & Return</a>
                    <div class="faq-collection-content hidden" id="faq-collection-content">
                        <ul>
                            <li>content 1</li>
                            <li>content 2</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="faq-query center">
                <p class="faq-query-header">Your question is not here?</p>
                <p class="faq-query-subheader">Submit your request in the form below.</p>
                <textarea class="faq-query-form" name="faq-query-form" id="faq-query-form"></textarea>
                <input type="submit" class="submit-button" value="Submit">
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