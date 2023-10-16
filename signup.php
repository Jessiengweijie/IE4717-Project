<?php
// Set auth for page
$authRequired = 0;
include "assets/php/dbconnect.php";
include "assets/php/check_login.php";

@session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data from the POST request
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $nric = $_POST['nric'];
    $dob = $_POST['dob'];
    $license = $_POST['license'];

    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $languages = $_POST['languages'];

    $address = $_POST['address'];

    $bank = $_POST['bank'];
    $bankacc = $_POST['bankacc'];

    // Save the form data to session variables
    $_SESSION['surname'] = $surname;
    $_SESSION['firstname'] = $firstname;
    $_SESSION['nric'] = $nric;
    $_SESSION['dob'] = $dob;
    $_SESSION['license'] = $license;

    $_SESSION['mobile'] = $mobile;
    $_SESSION['email'] = $email;
    $_SESSION['languages'] = $languages;

    $_SESSION['address'] = $address;

    $_SESSION['bank'] = $bank;
    $_SESSION['bankacc'] = $bankacc;

    // Redirect to the 2nd page
    header('Location: signup_confirmation.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up</title>
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
        <div class="account">
            <div class="center">
                <p class="signup-header">Welcome to Convigo</p>
                <p class="signup-subheader">Please fill up the form below</p>
            </div>
            <form method="post" action="" autocomplete="off">
                <div class="account-information">
                    <p class="account-information-header">My Personal Information</p>
                    <div class="account-information-body">
                        <p class="account-information-subheader">Identity</p>
                        <div>
                            <div class="row line">
                                <p class="account-information-content">Surname: </p>
                                <input class="account-information-input" type="text" name="surname">
                            </div>
                            <div class="row line">
                                <p class="account-information-content">First name:</p>
                                <input class="account-information-input" type="text" name="firstname">
                            </div>
                            <div class="row line">
                                <p class="account-information-content">NRIC:</p>
                                <input class="account-information-input" type="text" name="nric">
                            </div>
                            <div class="row line">
                                <p class="account-information-content">Date of birth:</p>
                                <input class="account-information-date main-font" type="date" name="dob">
                            </div>
                            <div class="row line">
                                <p class="account-information-content">License class:</p>
                                <select class="account-information-dropdown main-font" name="license">
                                    <option class="main-font" value="" hidden selected disabled>Select License Class</option>
                                    <option value="1">3</option>
                                    <option value="1">3A</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="account-information-body">
                        <p class="account-information-subheader">Contact Details</p>
                        <div>

                            <div class="row line">
                                <p class="account-information-content">Mobile number:</p>
                                <input class="account-information-input" type="text" name="mobile">
                            </div>
                            <div class="row line">
                                <p class="account-information-content">Email:</p>
                                <input class="account-information-input" type="text" name="email">
                            </div>
                            <div class="row line">
                                <p class="account-information-content">Spoken language:</p>
                                <!-- <input class="account-information-input" type="text"> -->
                                <div class="multiselect-container account-information-dropdown" tabindex="0">
                                    <div class="selected-items" id="selectedItems">
                                    </div>
                                    <div class="multiselect-options">
                                        <label><input type="checkbox" name="languages[]" value="English">English</label>
                                        <label><input type="checkbox" name="languages[]" value="Chinese">Chinese</label>
                                        <label><input type="checkbox" name="languages[]" value="Malay">Malay</label>
                                        <label><input type="checkbox" name="languages[]" value="Tamil">Tamil</label>
                                        <label><input type="checkbox" name="languages[]" value="Hindi">Hindi</label>
                                        <label><input type="checkbox" name="languages[]" value="Others">Others</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="account-information-body">
                        <p class="account-information-subheader">Address</p>
                        <div class="row line">
                            <p class="account-information-content">Address:</p>
                            <input class="account-information-input" type="text" name="address">
                        </div>
                    </div>

                    <div class="account-information-body">
                        <p class="account-information-subheader">Payment Information</p>
                        <div>
                            <div class="row line">
                                <p class="account-information-content">Bank name:</p>
                                <select class="account-information-dropdown main-font" name="bank">
                                    <option value="" hidden selected disabled>Select bank</option>
                                    <option value="ANZ">ANZ</option>
                                    <option value="CIMB">CIMB</option>
                                    <option value="Citibank">Citibank</option>
                                    <option value="DBS">DBS</option>
                                    <option value="HSBC">HSBC</option>
                                    <option value="Maybank">Maybank</option>
                                    <option value="OCBC">OCBC</option>
                                    <option value="StandardChartered">Standard Chartered</option>
                                    <option value="UOB">UOB</option>
                                </select>
                            </div>
                            <div class="row line">
                                <p class="account-information-content">Bank account number:</p>
                                <input class="account-information-input" type="text" name="bankacc">
                            </div>
                        </div>
                    </div>

                    <input type="submit" class="save-button" value="Next">
                    <!-- temp button -->
                    <!-- <a class="save-button" href="signup_confirmation.php">Next</a> -->
                    <br />

                </div>
            </form>
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
    <script type="text/javascript" src="assets/scripts/sign_upr.js"></script>
</body>

</html>