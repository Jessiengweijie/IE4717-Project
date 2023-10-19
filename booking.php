<?php
// Set auth for page
$authRequired = 1;
// create short variable names

include "assets/php/dbconnect.php";
include "assets/php/check_login.php";
// Fetch car data from the database

$locationName = $_GET['location_name'];

// Query to fetch the entire row from the 'car' table based on 'car_id'
$carId = $_GET['car_id'];
$queryCar = "SELECT * FROM car WHERE id = $carId";
$resultCar = $db->query($queryCar);
$carData = $resultCar->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Booking</title>
    <script type="text/javascript" src="assets/scripts/booking.js"></script>
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
        <div class="car-info">
            <form action="assets/php/processorder.php" method="post">
                <div class="car-info-selected">
                    <div class="car-info-head">
                        <div>
                            <div class="car-info-name">
                                <?php echo $carData['name']; ?>
                            </div>
                            <div class="car-info-type">
                                <?php echo $carData['category']; ?> - <?php echo $carData['type']; ?>
                            </div>
                        </div>
                        <div class="car-info-image">
                        <img src="assets/images/Cars/Brands/<?php echo $carData['brand']; ?>/<?php echo $carData['type']; ?>/<?php echo $carData['imageURL']; ?>" alt="<?php echo $carData['name']; ?>">
                        </div>
                    </div>
                </div>

                <div class="car-info-desc">
                    <h1>Car Information</h1>
                    <table>
                        <tr>
                            <td>Seats:</td>
                            <td><?php echo $carData['seats']; ?></td>
                        </tr>
                        <tr>
                            <td>Fuel type:</td>
                            <td><?php echo $carData['fuel_type']; ?></td>
                        </tr>
                        <tr>
                            <td>Boot space:</td>
                            <td><?php echo $carData['boot_space']; ?></td>
                        </tr>
                        <tr>
                            <td>Pick-up & Drop-off Location:</td>
                            <td>
                            <?php
                            $text = $carData['description'];
                            $displayText = str_replace(";", "<br>", $text);
                            echo $displayText;
                            ?>
                        </td>
                        </tr>
                    </table>
                    <div class="car-info-row">
                        <h1>Price:&nbsp;</h1>
                        <p>$<?php echo $carData['price']; ?> per hour</p>
                        <input type="hidden" name="rental-rate" id="rental-rate" value="<?php echo $carData['price']; ?>">
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
                                <td>Duration (in hours):&nbsp;</td>
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
                    <input type="submit" class="center book-now-button-big" onclick="bookNow();" value="Book Now">
                    <br />
                </div>
                <input type="hidden" name="booking-location" id="booking-location">
                <input type="hidden" name="booking-car" id="booking-car">
                <input type="hidden" name="booking-fee" id="booking-fee-final">
                <input type="hidden" name="booking-end" id="booking-end-final">

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
    <script type="text/javascript" src="assets/scripts/bookingr.js"></script>
</body>

</html>

<?php
// Close the database connection
$db->close();
?>