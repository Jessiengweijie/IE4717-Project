<?php
// Set auth for page
$authRequired = 0;
include "assets/php/dbconnect.php";
include "assets/php/check_login.php";
include "assets/php/fetch_user_info.php";

@session_start();


if (isset($_SESSION['valid_user'])) {
    // Check if logged in and redirect to home
    header("Location:" . $baseURL . "/ConviGo");
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
    $username = $userInfo['username'];
    $password = $userInfo['password'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Check if the checkbox is checked
        if (isset($_POST['accept-terms-checkbox'])) {
            $query1 = "INSERT INTO authorized_users (username, password) VALUES ('$username', '$password')";
            $result1 = $db->query($query1);

            if ($result1) {
                $userId = $db->insert_id;

                // Step 2: Insert data into the "user_info" table
                $query2 = "INSERT INTO user_info (id, username, surname, firstname, nric, dob, license, mobile, email, languages, address, bank, bankacc, notification)
        VALUES ($userId, '$username','$surname', '$firstname', '$nric', '$dob', '$license', '$mobile', '$email', '$languages', '$address', '$bank', '$bankacc', '$notification');";
                $result2 = $db->query($query2);

                if ($result2) {
                    echo "Sign up is successful.";
                    $queryLogin = 'select * from authorized_users '
                        . "where username='$username' "
                        . " and password='$password'";
                    $resultLogin = $db->query($queryLogin);
                    if ($resultLogin->num_rows > 0) {
                        // if they are in the database register the user id
                        $row = $resultLogin->fetch_assoc();
                        $id = $row['id'];
                        unset($_SESSION['user_info']);
                        $_SESSION['valid_user'] = $id;
                        header("Location:" . $baseURL . "/ConviGo"); // Redirect to the home page 
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
        <?php include "assets/html/footer.html"; ?>
    </div>
</body>

</html>