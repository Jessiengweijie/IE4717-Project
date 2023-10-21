<?php
include "assets/php/fetch_user_info.php";
?>
<header>
    <a href="/ConviGo">
        <h1 style="color:var(--secondary-color);" class="logo">ConviGo
            <img src="assets/images/Logo/finallogo.png" height="40px" width="40px" alt="ConviGo_Logo" style="margin-left: 5px;">
        </h1>
    </a>
    <?php if (isset($userInfo['firstname'])) {
        echo 'Welcome, ' . $userInfo['firstname'] . ' ' . $userInfo['surname'] . '!';
    } ?>
    <nav class="navbar">
        <b>
            <a href="/ConviGo/about.php">About</a> &nbsp;
            <a href="/ConviGo/cars.php">Cars</a> &nbsp;
            <a href="/ConviGo/locations.php">Locations</a> &nbsp;
            <a href="/ConviGo/faqs.php">FAQs</a> &nbsp;
            <?php
            if ($loggedInUserID) {
                echo '
                <div class="dropdown">
                    <a>My Account</a>
                    <div class="dropdown-content">
                        <a href="/ConviGo/my_account.php">My Profile</a>
                        <a href="#">Login Credentials</a>
                    </div>
                </div>
                
                ';
                echo "<a href='/ConviGo/assets/php/logout.php'>Log Out</a>";
            } else {
                echo "<a href='/ConviGo/signup.php'>Sign Up</a>";
                echo "<a href='/ConviGo'>Login</a>";
            }
            ?>
        </b>
    </nav>
</header>