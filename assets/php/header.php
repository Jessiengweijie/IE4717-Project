<?php
include "assets/php/fetch_user_info.php";
?>
<header>
    <a href="/ConviGo">
        <h1 style="color:var(--secondary-color);" class="logo">ConviGo
            <img src="assets/images/Logo/finallogo.png" height="40px" width="40px" alt="ConviGo_Logo" style="margin-left: 5px;">
        </h1>
    </a>
    <?php if (isset($userInfo['firstname']) && isset($_SESSION['valid_user'])) {
        echo 'Welcome, ' . $userInfo['firstname'] . ' ' . $userInfo['surname'] . '!';
    } ?>
    <nav class="navbar">
        <b>
            <a href="about.php">About</a> &nbsp;
            <div class="dropdown">
                <a href="cars.php">Cars</a>
                <div class="dropdown-content">
                    <a href="cars.php?category=Standard">Standard</a>
                    <a href="cars.php?category=Premium">Premium</a>
                </div>
            </div>
            <a href="locations.php">Locations</a> &nbsp;
            <a href="faqs.php">FAQs</a> &nbsp;
            <?php
            if ($loggedInUserID) {
                echo '
                <div class="dropdown">
                    <a href="my_account.php">My Account</a>
                    <div class="dropdown-content">
                        <a href="my_account.php">Profile</a>
                        <a href="order_history.php">Order History</a>
                    </div>
                </div>
                ';
                echo '<a href="assets/php/logout.php">Log Out</a>';
            } else {
                echo '<a href="signup.php">Sign Up</a>';
                echo '<a href="/ConviGo">Login</a>';
            }
            ?>
        </b>
    </nav>
</header>