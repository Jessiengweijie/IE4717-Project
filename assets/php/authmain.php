<?php
include "dbconnect.php";
session_start();

if (isset($_POST['userid']) && isset($_POST['password'])) {
    // if the user has just tried to log in
    $userid = $_POST['userid'];
    $password = sha1($_POST['password']);

    // $password = sha1($password);
    $query = 'select * from authorized_users '
        . "where LOWER(username) = LOWER('$userid')"
        . " and password='$password'";
    $result = $db->query($query);
    if ($result->num_rows > 0) {
        // if they are in the database register the user id
        $row = $result->fetch_assoc();
        $id = $row['id'];
        $_SESSION['valid_user'] = $id;
        header("Location: /ConviGo"); // Redirect to the home page
    } else {
        // User entered wrong ID/password, display an alert and redirect with JavaScript
        echo '<script>alert("Wrong username or password. Please try again.");';
        echo 'window.location.href = "/ConviGo";</script>';
    }
}
?>