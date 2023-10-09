<?php
// Set auth for page
$authRequired = 1;
include "assets/php/dbconnect.php";
include "assets/php/check_login.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Account</title>
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
        <div class="account">
            <div class="account-information">
                <p class="account-information-header">My Personal Information</p>
                <div class="account-information-body">
                    <p class="account-information-subheader">Identity</p>
                    <div>
                        <div class="row line">
                            <p class="account-information-content">Surname: </p>
                            <input class="account-information-input" type="text" value="test" readonly>
                        </div>
                        <div class="row line">
                            <p class="account-information-content">First name:</p>
                            <input class="account-information-input" type="text" value="test" readonly>
                        </div>
                        <div class="row line">
                            <p class="account-information-content">Date of birth:</p>
                            <input class="account-information-input" type="text" value="test" readonly>
                        </div>
                        <div class="row line">
                            <p class="account-information-content">License class:</p>
                            <input class="account-information-input" type="text" value="test" readonly>
                        </div>
                    </div>
                </div>

                <div class="account-information-body">
                    <p class="account-information-subheader">Contact Details</p>
                    <div>
                        <div class="row line">
                            <p class="account-information-content">Mobile number:</p>
                            <input class="account-information-input" type="text" value="test" readonly>
                        </div>
                        <div class="row line">
                            <p class="account-information-content">Email:</p>
                            <input class="account-information-input" type="text" value="test" readonly>
                        </div>
                        <div class="row line">
                            <p class="account-information-content">Spoken language:</p>
                            <input class="account-information-input" type="text" value="test" readonly>
                        </div>
                    </div>
                </div>

                <div class="account-information-body">
                    <p class="account-information-subheader">Address</p>
                    <div class="row line">
                        <p class="account-information-content">Address:</p>
                        <input class="account-information-input" type="text" value="test" readonly>
                    </div>
                </div>

                <div class="account-information-body">
                    <p class="account-information-subheader">Payment Information</p>
                    <div>
                        <div class="row line">
                            <p class="account-information-content">Payment mode:</p>
                            <input class="account-information-input" type="text" value="test" readonly>
                        </div>
                        <div class="row line">
                            <p class="account-information-content">Bank account number:</p>
                            <input class="account-information-input" type="text" value="test" readonly>
                        </div>
                    </div>
                </div>

                <input type="submit" class="edit-button" value="Edit">
                <input type="submit" class="save-button" value="Save">

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