<?php
// Set auth for page
$authRequired = 0;
include "assets/php/dbconnect.php";
include "assets/php/check_login.php";
include "assets/php/fetch_user_info.php";

@session_start();


if (isset($_SESSION['valid_user'])) {
    // Check if logged in and redirect to home
    header('Location: /Convigo');
}

if (!$_SESSION) {
    header('Location: signup.php');
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
        <?php include "assets/php/header.php"; ?>
        <div class="account">
            <div class="center" style="background-color: var(--backgroundcolor);">
                <p class="signup-header" style="color:#fdf8e3;">You're almost there!</p>
                <p class="signup-subheader" style="color:#fdf8e3;">Please review the terms and conditions below.</p>
            </div>
            <form method="post" action="">
                <div class="signup-confirmation">
<<<<<<< HEAD
                    <div class="signup-box-scroll">
=======


>>>>>>> refs/remotes/origin/main
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
        <?php include "assets/html/footer.html"; ?>
    </div>
</body>

</html>