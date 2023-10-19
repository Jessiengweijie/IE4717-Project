<?php
// Set auth for page
$authRequired = 1;
include "assets/php/dbconnect.php";
include "assets/php/check_login.php";
include "assets/php/fetch_user_info.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Account</title>
    <meta charset="utf-8">
    <script type="text/javascript" src="assets/scripts/sign_up.js"></script>
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
            <div class="center" style="background-color: var(--backgroundcolor);">
                <p class="signup-header" style="color:#fdf8e3;">Welcome to Convigo</p>
                <p class="signup-subheader" style="color:#fdf8e3">Please fill up the form below</p>
            </div>
            <form method="post" action="" autocomplete="off" onsubmit="return validateForm()">
                <div class="account-information">
                    <p class="account-information-header">My Personal Information</p>
                    <div class="account-information-body">
                        <p class="account-information-subheader">Identity</p>
                        <div>
                            <div class="row line">
                                <p class="account-information-content">Surname: </p>
                                <input class="account-information-input editable" type="text" name="surname" id="surname" value="<?php echo isset($_SESSION['user_info']['surname']) ? $_SESSION['user_info']['surname'] : ''; ?>" required readonly>
                                <span class="error" id="surnameError"></span>
                            </div>
                            <div class="row line">
                                <p class="account-information-content">First name:</p>
                                <input class="account-information-input editable" type="text" name="firstname" id="firstname" value="<?php echo isset($_SESSION['user_info']['firstname']) ? $_SESSION['user_info']['firstname'] : ''; ?>" required readonly>
                                <span class="error" id="firstnameError"></span>
                            </div>
                            <div class="row line">
                                <p class="account-information-content">NRIC:</p>
                                <input class="account-information-input editable" type="text" name="nric" id="nric" oninput="convertToUppercase(this)" value="<?php echo isset($_SESSION['user_info']['nric']) ? $_SESSION['user_info']['nric'] : ''; ?>" required readonly>
                                <span class="error" id="nricError"></span>
                            </div>
                            <div class="row line">
                                <p class="account-information-content">Date of birth:</p>
                                <input class="account-information-date main-font editable" type="date" name="dob" id="dob" value="<?php echo isset($_SESSION['user_info']['dob']) ? $_SESSION['user_info']['dob'] : ''; ?>" required readonly>
                                <span class="error" id="dobError"></span>
                            </div>
                            <div class="row line edit">
                                <p class="account-information-content">License class:</p>
                                <select class="account-information-dropdown main-font" name="license" id="license" required>
                                    <option class="main-font" value="" hidden selected disabled>Select License Class</option>
                                    <option value="3" <?php if (isset($_SESSION['user_info']['license']) && $_SESSION['user_info']['license'] == '3') echo 'selected'; ?>>3</option>
                                    <option value="3A" <?php if (isset($_SESSION['user_info']['license']) && $_SESSION['user_info']['license'] == '3A') echo 'selected'; ?>>3A</option>
                                </select>
                                <span class="error" id="licenseError"></span>
                            </div>
                            <div class="row line original">
                                <p class="account-information-content">License class:</p>
                                <input class="account-information-input" type="text" value="<?php echo $_SESSION['user_info']['license'] ?>" readonly>
                                <span class="error" id="licenseError"></span>
                            </div>
                        </div>
                    </div>

                    <div class="account-information-body">
                        <p class="account-information-subheader">Contact Details</p>
                        <div>

                            <div class="row line">
                                <p class="account-information-content">Mobile number:</p>
                                <input class="account-information-input editable" type="text" name="mobile" id="mobile" value="<?php echo isset($_SESSION['user_info']['mobile']) ? $_SESSION['user_info']['mobile'] : ''; ?>" required readonly>
                                <span class="error" id="mobileError"></span>
                            </div>
                            <div class="row line">
                                <p class="account-information-content">Email:</p>
                                <input class="account-information-input editable" type="text" name="email" id="email" value="<?php echo isset($_SESSION['user_info']['email']) ? $_SESSION['user_info']['email'] : ''; ?>" required readonly>
                                <span class="error" id="emailError"></span>
                            </div>
                            <div class="row line edit">
                                <p class="account-information-content">Spoken language:</p>
                                <div class="multiselect-container account-information-dropdown" id="multiselectContainer" tabindex="0" readonly>
                                    <div class="selected-items" id="selectedItems">
                                    </div>
                                    <div class="multiselect-options">
                                        <label><input type="checkbox" name="languages[]" value="English" <?php if (isset($_SESSION['user_info']['languages']) && in_array('English', $_SESSION['user_info']['languages'])) echo 'checked'; ?>>English</label>
                                        <label><input type="checkbox" name="languages[]" value="Chinese" <?php if (isset($_SESSION['user_info']['languages']) && in_array('Chinese', $_SESSION['user_info']['languages'])) echo 'checked'; ?>>Chinese</label>
                                        <label><input type="checkbox" name="languages[]" value="Malay" <?php if (isset($_SESSION['user_info']['languages']) && in_array('Malay', $_SESSION['user_info']['languages'])) echo 'checked'; ?>>Malay</label>
                                        <label><input type="checkbox" name="languages[]" value="Tamil" <?php if (isset($_SESSION['user_info']['languages']) && in_array('Tamil', $_SESSION['user_info']['languages'])) echo 'checked'; ?>>Tamil</label>
                                        <label><input type="checkbox" name="languages[]" value="Hindi" <?php if (isset($_SESSION['user_info']['languages']) && in_array('Hindi', $_SESSION['user_info']['languages'])) echo 'checked'; ?>>Hindi</label>
                                        <label><input type="checkbox" name="languages[]" value="Others" <?php if (isset($_SESSION['user_info']['languages']) && in_array('Others', $_SESSION['user_info']['languages'])) echo 'checked'; ?>>Others</label>
                                    </div>
                                </div>
                                <span class="error" id="languagesError"></span>
                            </div>
                            <div class="row line original">
                                <p class="account-information-content">Spoken language:</p>
                                <input class="account-information-input" type="text" value="<?php echo implode(', ', $_SESSION['user_info']['languages']) ?>" readonly>
                                <span class="error" id="languagesError"></span>
                            </div>

                        </div>
                    </div>

                    <div class="account-information-body">
                        <p class="account-information-subheader">Address</p>
                        <div class="row line">
                            <p class="account-information-content">Address:</p>
                            <input class="account-information-input editable" type="text" name="address" id="address" value="<?php echo isset($_SESSION['user_info']['address']) ? $_SESSION['user_info']['address'] : ''; ?>" required readonly>
                            <span class="error" id="addressError"></span>
                        </div>
                    </div>

                    <div class="account-information-body">
                        <p class="account-information-subheader">Payment Information</p>
                        <div>
                            <div class="row line edit">
                                <p class="account-information-content">Bank name:</p>
                                <select class="account-information-dropdown main-font" name="bank" id="bank" value="<?php echo isset($_SESSION['user_info']['bank']) ? $_SESSION['user_info']['bank'] : ''; ?>" required readonly>
                                    <option value="" hidden selected disabled>Select bank</option>
                                    <option value="ANZ" <?php if (isset($_SESSION['user_info']['bank']) && $_SESSION['user_info']['bank'] == 'ANZ') echo 'selected'; ?>>ANZ</option>
                                    <option value="CIMB" <?php if (isset($_SESSION['user_info']['bank']) && $_SESSION['user_info']['bank'] == 'CIMB') echo 'selected'; ?>>CIMB</option>
                                    <option value="Citibank" <?php if (isset($_SESSION['user_info']['bank']) && $_SESSION['user_info']['bank'] == 'Citibank') echo 'selected'; ?>>Citibank</option>
                                    <option value="DBS" <?php if (isset($_SESSION['user_info']['bank']) && $_SESSION['user_info']['bank'] == 'DBS') echo 'selected'; ?>>DBS</option>
                                    <option value="HSBC" <?php if (isset($_SESSION['user_info']['bank']) && $_SESSION['user_info']['bank'] == 'HSBC') echo 'selected'; ?>>HSBC</option>
                                    <option value="Maybank" <?php if (isset($_SESSION['user_info']['bank']) && $_SESSION['user_info']['bank'] == 'Maybank') echo 'selected'; ?>>Maybank</option>
                                    <option value="OCBC" <?php if (isset($_SESSION['user_info']['bank']) && $_SESSION['user_info']['bank'] == 'OCBC') echo 'selected'; ?>>OCBC</option>
                                    <option value="Standard Chartered" <?php if (isset($_SESSION['user_info']['bank']) && $_SESSION['user_info']['bank'] == 'Standard Chartered') echo 'selected'; ?>>Standard Chartered</option>
                                    <option value="UOB" <?php if (isset($_SESSION['user_info']['bank']) && $_SESSION['user_info']['bank'] == 'UOB') echo 'selected'; ?>>UOB</option>
                                </select>
                                <span class="error" id="bankError"></span>
                            </div>
                            <div class="row line original">
                                <p class="account-information-content">Bank name:</p>
                                <input class="account-information-input" type="text" value="<?php echo $_SESSION['user_info']['bank'] ?>" readonly>
                                <span class="error" id="bankError"></span>
                            </div>
                            <div class="row line">
                                <p class="account-information-content">Bank account number:</p>
                                <input class="account-information-input editable" type="text" name="bankacc" id="bankacc" value="<?php echo isset($_SESSION['user_info']['bankacc']) ? $_SESSION['user_info']['bankacc'] : ''; ?>" required readonly>
                                <span class="error" id="bankaccError"></span>
                            </div>
                        </div>
                    </div>

                    <div class="account-information-body edit">
                        <p class="account-information-subheader">Notification Mode</p>
                        <div class="signup-contact">
                            <p>Please send me marketing and promotional materials via the following mode(s):</p>
                            <label class="checkbox-label">
                                <input type="checkbox" name="notification[]" value="Text Message" <?php if (isset($_SESSION['user_info']['notification']) && in_array('Text Message', $_SESSION['user_info']['notification'])) echo 'checked'; ?> readonly>
                                <div style="margin-left: 5px;">
                                    Text Message
                                </div>
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="notification[]" value="Phone Call" <?php if (isset($_SESSION['user_info']['notification']) && in_array('Phone Call', $_SESSION['user_info']['notification'])) echo 'checked'; ?> readonly>
                                <div style="margin-left: 5px;">
                                    Phone Call
                                </div>
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="notification[]" value="Email" <?php if (isset($_SESSION['user_info']['notification']) && in_array('Email', $_SESSION['user_info']['notification'])) echo 'checked'; ?> readonly>
                                <div style="margin-left: 5px;">
                                    Email
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="account-information-body original">
                        <p class="account-information-subheader">Notification Mode</p>
                        <div class="signup-contact row line">
                            <p>Please send me marketing and promotional materials via:</p>
                            <input class="account-information-input" type="text" value="<?php echo implode(', ', $_SESSION['user_info']['notification']) ?>" readonly>
                        </div>
                    </div>

                    <div style="margin-top: 5%">
                        <button type="button" class="edit-button" id="toggleButton">Enable Edit</button>
                        <input type="submit" class="save-button" value="Save">
                        <!-- temp button -->
                        <a class="save-button" onclick="validateForm()">Test</a>
                    </div>

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
    <script type="text/javascript" src="assets/scripts/sign_upr.js"></script>
</body>

</html>