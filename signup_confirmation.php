<?php
// Set auth for page
$authRequired = 0;
include "assets/php/dbconnect.php";
include "assets/php/check_login.php";

@session_start();


if (!$_SESSION) {
    // header('Location: signup.php');
} else {
    // Retrieve the user information from the session
    $userInfo = $_SESSION['user_info'];

    // Access individual elements of the array
    $surname = $userInfo['surname'];
    $firstname = $userInfo['firstname'];
    $nric = $userInfo['nric'];
    $dob = $userInfo['dob'];
    $license = $userInfo['license'];
    $mobile = $userInfo['mobile'];
    $email = $userInfo['email'];
    $languages = serialize($userInfo['languages']);
    $address = $userInfo['address'];
    $bank = $userInfo['bank'];
    $bankacc = $userInfo['bankacc'];
    $notification = serialize($userInfo['notification']);
    $password = $userInfo['password'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Check if the checkbox is checked
        if (isset($_POST['accept-terms-checkbox'])) {
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
                        $row = $resultLogin->fetch_assoc();
                        $id = $row['id'];
                        unset($_SESSION['user_info']);
                        $_SESSION['valid_user'] = $id;
                        header("Location: /ConviGo"); // Redirect to the home page 
                    }
                } else {
                    echo "Sign up failed, please try again.";
                }
            } else {
                echo "An error has occured.";
            }
        } else {
            // Checkbox is not checked
            echo "<script>";
            echo "alert('Please accept the terms and conditions to continue.')";
            echo "</script>";
        }
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


                    <div class="signup-box">

                        <div class="signup-information">
                            <div class="signup-box-scroll">
                                <?php include('assets/text/tnc.txt') ?>
                                <!-- Add your terms and conditions text here -->
                            </div>
                            <label class="checkbox-label">
                                <input type="checkbox" name="accept-terms-checkbox" id="accept-terms-checkbox">
                                <div class="signup-box-scroll" style="width: 95%;">
                                    <?php include('assets/text/disclaimer.txt') ?>
                                </div>
                            </label>
                        </div>
                        <input type="submit" class="save-button" value="Sign up!">
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
</body>

</html>