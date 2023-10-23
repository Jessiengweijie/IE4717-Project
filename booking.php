<?php
// Set auth for page
$authRequired = 1;

$carId = $_GET['car_id'];
$locationName = $_GET['location_name'];

@session_start();
$_SESSION['cart']['car'] = $carId;
$_SESSION['cart']['location'] = $locationName;

include "assets/php/dbconnect.php";
include "assets/php/check_login.php";
include "assets/php/fetch_user_info.php";
// Fetch car data from the database

// Query to fetch the location_id based on location_name
$queryLocationId = "SELECT id FROM location WHERE name = '$locationName'";
$resultLocationId = $db->query($queryLocationId);

// Fetch the location_id from the result object
$locationIdArray = $resultLocationId->fetch_assoc();
$locationId = $locationIdArray['id'];

$queryCar = "SELECT * FROM car WHERE id = $carId";
$resultCar = $db->query($queryCar);
$carData = $resultCar->fetch_assoc();

$queryCarCheck = "SELECT * FROM car_location WHERE car_id = $carId and location_id = $locationId";
$resultCarCheck = $db->query($queryCarCheck);

if ($resultCarCheck->num_rows <= 0) {
    echo "<script>";
    echo "alert('This car cannot be found in $locationName');";
    echo "window.location.href='cars.php'";
    echo "</script>";
}

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
        <?php include "assets/php/header.php"; ?>
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


        <?php include "assets/html/footer.html"; ?>
    </div>
    <script type="text/javascript" src="assets/scripts/bookingr.js"></script>
</body>

</html>

<?php
// Close the database connection
$db->close();
?>