<!DOCTYPE html>
<html lang="en">

<head>
    <title>Car Information</title>
    <script type="text/javascript" src="assets/scripts/booking.js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
</head>

<body>
    <div id="wrapper">
        <header>
            <a href="/ConviGo" style="text-decoration: none; color: inherit;">
                <h1 class="logo">ConviGo
                    <img src="assets/images/Logo/ConviGo_Logo.png" height="40px" width="40px" alt="ConviGo_Logo" style="margin-left: 5px;">
                </h1>
            </a>

            <nav class="navbar">
                <b>
                    <a href="about.html">About</a> &nbsp;
                    <a href="cars.html">Cars</a> &nbsp;
                    <a href="locations.html">Locations</a> &nbsp;
                    <a href="faqs.html">FAQs</a> &nbsp;
                    <a href="my_account.html">My Account</a>
                </b>
            </nav>
        </header>
        <div class="car-info" style="background-color: lightskyblue;">
            <form action="assets/php/processorder.php" method="post">
                <div class="car-info-selected">
                    <div class="car-info-head">
                        <div>
                            <div class="car-info-name">
                                Tesla Model 3
                            </div>
                            <div class="car-info-type">
                                Premium - Electric
                            </div>
                        </div>
                        <div class="car-info-image">
                            <img src="assets/images/Cars/Brands/Tesla/Electric/Tesla_Model3.png" height="auto" width="100%" alt="Sample Car 3">
                        </div>
                    </div>
                </div>

                <div class="car-info-desc">
                    <h1>About the car</h1>
                    <table>
                        <tr>
                            <td>Seats:</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>Fuel type:</td>
                            <td>Diesel</td>
                        </tr>
                        <tr>
                            <td>Boot space:</td>
                            <td>2 large luggage</td>
                        </tr>
                    </table>
                    <div class="car-info-row">
                        <h1>Price:&nbsp;</h1>
                        <p id="rental-rate"></p>
                    </div>
                    <div class="car-info-row">
                        <h1>Location Selected:&nbsp;</h1>
                        <p id="location-info"></p>
                    </div>
                </div>


                <div class="booking">
                    <div class="booking-type">
                        <a class="toggle-button active" id="hourly-button" onclick="toggleContent('hourly')">Hourly</a>
                        <a class="toggle-button" id="daily-button" onclick="toggleContent('daily')">Daily</a>
                    </div>
                    <div class="hourly">
                        <table>
                            <tr>
                                <td>Pickup Date:&nbsp;</td>
                                <td><input type="date" name="booking-date" id="booking-date" required></td>
                            </tr>
                            <tr>
                                <td>Time:&nbsp;</td>
                                <td>
                                    <select name="booking-time" id="booking-time" required>
                                        <option value="" hidden disabled selected>Select Time</option>
                                        <?php for ($i = 0; $i < 24; $i++) { ?>
                                            <?php $hour = str_pad($i, 2, "0", STR_PAD_LEFT); ?>
                                            <option value="<?php echo $hour; ?>:00"><?php echo $hour; ?>:00</option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Duration:&nbsp;</td>
                                <td>
                                    <select name="booking-duration" id="booking-duration" required>
                                        <option value="" hidden disabled selected>Select Duration</option>
                                        <?php for ($i = 1; $i <= 24; $i++) { ?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                            <br />
                            <tr>
                                <td>Approx Fee:&nbsp;</td>
                                <td id="booking-fee"></td>
                            </tr>
                            <tr>
                                <td>Return by:&nbsp;</td>
                                <td id="booking-end"></td>
                            </tr>
                        </table>
                    </div>

                    <div class="daily" style="display: none;">DAILY
                    </div>
                </div>

                <div style="margin-left: auto; margin-bottom: 20px; width: 55%;">
                    <!-- <a class="center book-now-button-big" onclick="bookNow();">Book Now</a>  -->
                    <input type="submit" class="center book-now-button-big" onclick="bookNow();" value="Book Now">
                    <br />
                </div>
                <input type="hidden" name="booking-location" id="booking-location">
                <input type="hidden" name="booking-car" id="booking-car">
                <input type="hidden" name="booking-fee" id="booking-fee-final">
                <input type="hidden" name="booking-end" id="booking-end-final">
                <input type="hidden" name="rental-rate" id="rental-rate-final">

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
                        <input type="email" name="email" id="email" required placeholder="your email here" style="padding: 5px 15px; border-radius: 5px;">
                        <input class="subscribe-button" type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
            Copyright &copy; 2023 ConviGo. All Rights Reserved.
            <br />
            <br />
        </footer>
    </div>
    <script type="text/javascript" src="assets/scripts/bookingr.js"></script>
</body>

</html>