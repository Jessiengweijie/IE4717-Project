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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // create short variable names
    $timezoneOffset = "+08:00";
    $start = strtotime($_POST['booking-date'] . $timezoneOffset); //need to offset because html date input does not have timezone
    if (isset($_POST['booking-duration-day'])) {
        $duration = $_POST['booking-duration-day'] * 24;
        echo $duration;
    } else {
        $duration = $_POST['booking-duration'];
    }
    $rate = $_POST['rental-rate'];
    $fee = $_POST['booking-fee'];
    $end = strtotime($_POST['booking-end']);
    $car = $_POST['booking-car'];
    $location = $_POST['booking-location'];
    $today = time();

    // Check if car is booked
    $queryBooked = "SELECT * FROM order_history 
        WHERE car_id = $car
        AND location_id = $location
        AND NOT (
            start_date >= $end 
            OR end_date <= $start
        )";
    $resultBooked = $db->query($queryBooked);
    if ($resultBooked->num_rows > 0) {
        // Clash detected, return an error
        echo '<script>alert("This car is already booked for the selected time period. Please choose another time period.");</script>';
    } else {
        // Check for existing booking
        $queryBooked = "SELECT * FROM order_history 
        WHERE user_id = $loggedInUserID
        AND NOT (
            start_date >= $end 
            OR end_date <= $start
        )";
        $resultBooked = $db->query($queryBooked);
        if ($resultBooked->num_rows > 0) {
            // Clash detected, return an error
            echo '<script>alert("You already have a booking at this timing. You are not allowed to have multiple bookings concurrently.");</script>';
        } else {
            // No clash, proceed with the booking
            $query = "INSERT INTO order_history (user_id,start_date,end_date,order_date,duration,rate,fee,car_id,location_id) VALUES ($loggedInUserID,$start,$end,$today,$duration,$rate,$fee,$car,$location);";
            $result = $db->query($query);
            if ($result) {
                unset($_SESSION['cart']);
                header("Location: order_history.php");
            } else {
                echo 'an error has occured';
            }
        }
    }
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
            <form action="" method="post" onsubmit="return validateForm();">
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
                    <div class="booking-form">
                        <table>
                            <tr>
                                <td>Select a Date and Time:&nbsp;</td>
                                <td>
                                    <input type="datetime-local" name="booking-date" id="booking-date" required>
                                </td>
                                <td><span class="error" id="dateError"></span></td>
                            </tr>

                            <tr class="hourly">
                                <td>Duration (in hours):&nbsp;</td>
                                <td>
                                    <select name="booking-duration" id="booking-duration">
                                        <option value="" hidden disabled selected>Select Duration</option>
                                        <?php for ($i = 1; $i <= 24; $i++) { ?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                                <td></td>
                            </tr>
                            <tr class="daily" style="display: none;">
                                <td>Duration (in days):&nbsp;</td>
                                <td>
                                    <select name="booking-duration-day" id="booking-duration-day">
                                        <option value="" hidden disabled selected>Select Duration</option>
                                        <?php for ($i = 1; $i <= 30; $i++) { ?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                                <td></td>
                            </tr>
                            <br />
                            <tr>
                                <td>Approx Fee:&nbsp;</td>
                                <td id="booking-fee"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Return by:&nbsp;</td>
                                <td id="booking-end"></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div style="margin-left: auto; margin-bottom: 20px; width: 55%;">
                    <input type="submit" class="center book-now-button-big" value="Book Now">
                    <br />
                </div>
                <input type="hidden" name="booking-location" id="booking-location" value="<?php echo $locationId ?>">
                <input type="hidden" name="booking-car" id="booking-car" value="<?php echo $carId ?>">
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