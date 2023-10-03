<?php
@session_start(); // Start the session if it hasn't already been started

if (!isset($_SESSION['valid_user']) && $authRequired) {
    // User is not logged in, redirect to the login page or show an error message
    header("Location: /ConviGo"); // Redirect to the login page
    exit(); // Stop further execution of the current script
}

// If $_SESSION['valid_user'] is set, the user is logged in
// You can also fetch user information here if needed
@$loggedInUserID = $_SESSION['valid_user'];
?>
