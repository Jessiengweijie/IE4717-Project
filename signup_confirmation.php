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
    if (isset($_POST['notification']) && $_POST['notification'] != '') {
        $notification = serialize($_POST['notification']);
    }
    $password = $_POST['password'];


    $queryDupe = "SELECT * FROM authorized_users WHERE username = '$email'";
    $resultDupe = $db->query($queryDupe);
    if ($resultDupe) {
        // Check if any rows are returned
        if ($resultDupe->num_rows > 0) {
            // Duplicate found, display a warning
            echo '<script>';
            echo 'alert("Username already exists. Please choose a different username.");';
            echo 'window.location.href = "signup.php";';
            echo '</script>';
        } else {
            $query1 = "INSERT INTO authorized_users (username, password) VALUES ('$email', '$password')";
            $result1 = $db->query($query1);

            if ($result1) {
                $userId = $db->insert_id;

                // Step 2: Insert data into the "user_info" table
                $query2 = "INSERT INTO user_info (id, surname, firstname, nric, dob, license, mobile, email, languages, address, bank, bankacc, notification)
        VALUES ($userId, '$surname', '$firstname', '$nric', '$dob', '$license', '$mobile', '$email', '$languages', '$address', '$bank', '$bankacc', '$notification');";
                $result2 = $db->query($query2);

                if ($result2) {
                    echo "Sign up is successful.";
                    $queryLogin = 'select * from authorized_users '
                        . "where username='$email' "
                        . " and password='$password'";
                    $resultLogin = $db->query($queryLogin);
                    if ($resultLogin->num_rows > 0) {
                        // if they are in the database register the user id
                        $_SESSION['valid_user'] = $email;
                        header("Location: /ConviGo"); // Redirect to the home page 
                    }
                } else {
                    echo "Sign up failed, please try again.";
                }
            } else {
                echo "An error has occured."; // Display the error message
            }
        }
    }
} else {
    if (!$_SESSION) {
        header('Location: signup.php');
    } else {
        // Access the saved session variables
        $surname = $_SESSION['surname'];
        $firstname = $_SESSION['firstname'];
        $nric = $_SESSION['nric'];
        $dob = $_SESSION['dob'];
        $license = $_SESSION['license'];

        $mobile = $_SESSION['mobile'];
        $email = $_SESSION['email'];
        $languages = $_SESSION['languages'];

        $address = $_SESSION['address'];

        $bank = $_SESSION['bank'];
        $bankacc = $_SESSION['bankacc'];

        // Clear the session variables if needed
        unset($_SESSION['surname']);
        unset($_SESSION['firstname']);
        unset($_SESSION['nric']);
        unset($_SESSION['dob']);
        unset($_SESSION['license']);

        unset($_SESSION['mobile']);
        unset($_SESSION['email']);
        unset($_SESSION['languages']);

        unset($_SESSION['address']);

        unset($_SESSION['bank']);
        unset($_SESSION['bankacc']);
        session_destroy();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up Confirmation</title>
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
            <div class="center" style="background-color: var(--backgroundcolor);">
                <p class="signup-header" style="color:#fdf8e3;">You're almost there!</p>
                <p class="signup-subheader" style="color:#fdf8e3;">Please review the terms and conditions below.</p>
            </div>
            <form method="post" action="">
                <div class="signup-confirmation">
                    <div class="signup-box-scroll">
                    <div class="signup-box">
                        <label class="checkbox-label">
                            <input type="checkbox" id="accept-terms-checkbox">
                            <div class="signup-box" style="width: 95%;">
                                <?php include('assets/text/disclaimer.txt') ?>
                            </div>
                        </label>
                        <div class="signup-information">
                            <div class="signup-contact">
                                <p>Please send me marketing and promotional materials via the following mode(s):</p>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="notification[]" value="Text Message">
                                    <div style="margin-left: 5px;">
                                        Text Message
                                    </div>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="notification[]" value="Phone Call">
                                    <div style="margin-left: 5px;">
                                        Phone Call
                                    </div>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="notification[]" value="Email">
                                    <div style="margin-left: 5px;">
                                        Email
                                    </div>
                                </label>
                            </div>
                            <div class="signup-password">
                                <div class="left-password-section">
                                    <p>Please choose a strong password.</p>
                                    <input class="login-input" type="password" name="password" id="password" required placeholder="Password">
                                    <input class="login-input" type="password" name="confirm_password" id="confirm_password" required placeholder="Confirm Password">
                                </div>
                                <div class="right-password-section">
                                    <p>Your password should be</p>
                                    <ul>
                                        <li><span class="circle red"></span>One number (0-9)</li>
                                        <li><span class="circle red"></span>Between 8 and 20 characters long.</li>
                                        <li><span class="circle red"></span>One lowercase letter (a-z)</li>
                                        <li><span class="circle red"></span>One uppercase letter (A-Z)</li>
                                        <li><span class="circle red"></span>One special character (e.g., !, @, #, $, %, etc.)</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <input type="text" hidden name="surname" value="<?php echo $surname ?>">
                        <input type="text" hidden name="firstname" value="<?php echo $firstname ?>">
                        <input type="text" hidden name="nric" value="<?php echo $nric ?>">
                        <input type="text" hidden name="dob" value="<?php echo $dob ?>">
                        <input type="text" hidden name="license" value="<?php echo $license ?>">

                        <input type="text" hidden name="mobile" value="<?php echo $mobile ?>">
                        <input type="text" hidden name="email" value="<?php echo $email ?>">
                        <input type="text" hidden name="languages" value="<?php echo htmlspecialchars($languages) ?>">

                        <input type="text" hidden name="address" value="<?php echo $address ?>">

                        <input type="text" hidden name="bank" value="<?php echo $bank ?>">
                        <input type="text" hidden name="bankacc" value="<?php echo $bankacc ?>">

                        <input type="submit" class="save-button" value="Sign up!">
                    </div>
                </div>
                        <?php include('assets/text/tnc.txt') ?>
                        <!-- Add your terms and conditions text here -->
                    </div>

                    <!-- <div class="signup-box">
                        <label class="checkbox-label">
                            <input type="checkbox" id="accept-terms-checkbox">
                            <div class="signup-box" style="width: 95%;">
                                <?php include('assets/text/disclaimer.txt') ?>
                            </div>
                        </label>
                        <div class="signup-information">
                            <div class="signup-contact">
                                <p>Please send me marketing and promotional materials via the following mode(s):</p>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="notification[]" value="Text Message">
                                    <div style="margin-left: 5px;">
                                        Text Message
                                    </div>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="notification[]" value="Phone Call">
                                    <div style="margin-left: 5px;">
                                        Phone Call
                                    </div>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="notification[]" value="Email">
                                    <div style="margin-left: 5px;">
                                        Email
                                    </div>
                                </label>
                            </div>
                            <div class="signup-password">
                                <div class="left-password-section">
                                    <p>Please choose a strong password.</p>
                                    <input class="login-input" type="password" name="password" id="password" required placeholder="Password">
                                    <input class="login-input" type="password" name="confirm_password" id="confirm_password" required placeholder="Confirm Password">
                                </div>
                                <div class="right-password-section">
                                    <p>Your password should be</p>
                                    <ul>
                                        <li><span class="circle red"></span>One number (0-9)</li>
                                        <li><span class="circle red"></span>Between 8 and 20 characters long.</li>
                                        <li><span class="circle red"></span>One lowercase letter (a-z)</li>
                                        <li><span class="circle red"></span>One uppercase letter (A-Z)</li>
                                        <li><span class="circle red"></span>One special character (e.g., !, @, #, $, %, etc.)</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <input type="text" hidden name="surname" value="<?php echo $surname ?>">
                        <input type="text" hidden name="firstname" value="<?php echo $firstname ?>">
                        <input type="text" hidden name="nric" value="<?php echo $nric ?>">
                        <input type="text" hidden name="dob" value="<?php echo $dob ?>">
                        <input type="text" hidden name="license" value="<?php echo $license ?>">

                        <input type="text" hidden name="mobile" value="<?php echo $mobile ?>">
                        <input type="text" hidden name="email" value="<?php echo $email ?>">
                        <input type="text" hidden name="languages" value="<?php echo htmlspecialchars($languages) ?>">

                        <input type="text" hidden name="address" value="<?php echo $address ?>">

                        <input type="text" hidden name="bank" value="<?php echo $bank ?>">
                        <input type="text" hidden name="bankacc" value="<?php echo $bankacc ?>">

                        <input type="submit" class="save-button" value="Sign up!">
                    </div>
                </div> -->


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
</body>

</html>