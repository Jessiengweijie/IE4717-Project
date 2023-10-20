<?php
include "assets/php/fetch_user_info.php";
?>
<header>
    <a href="/ConviGo" style="text-decoration: none; color: inherit;">
        <h1 class="logo">ConviGo
            <img src="assets/images/Logo/finallogo.png" height="40px" width="40px" alt="ConviGo_Logo" style="margin-left: 5px;">
        </h1>
    </a>
    <?php if (isset($userInfo['firstname'])) {
        echo 'Welcome ' . $userInfo['firstname'] . ' ' . $userInfo['surname'] . '';
    } ?>
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