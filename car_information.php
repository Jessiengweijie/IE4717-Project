<?php
// Set auth for page
$authRequired = 0;
// create short variable names

include "assets/php/dbconnect.php";
include "assets/php/check_login.php";
include "assets/php/fetch_user_info.php";
// Fetch car data from the database
if (isset($_GET['location_name']) && $_GET['location_name'] != '') {
    $locationName = $_GET['location_name'];

    // Query to fetch the location_id based on location_name
    $queryLocationId = "SELECT id FROM location WHERE name = '$locationName'";
    $resultLocationId = $db->query($queryLocationId);

    // Fetch the location_id from the result object
    $locationIdArray = $resultLocationId->fetch_assoc();
    $locationId = $locationIdArray['id'];

    $queryCarCheck = "SELECT * FROM car_location WHERE car_id = $carId and location_id = $locationId";
    $resultCarCheck = $db->query($queryCarCheck);

    if ($resultCarCheck->num_rows <= 0) {
        echo "<script>";
        echo "alert('This car cannot be found in $locationName');";
        echo "window.location.href='cars.php'";
        echo "</script>";
    }
}
// Query to fetch the entire row from the 'car' table based on 'car_id'
$carId = $_GET['car_id'];
$queryCar = "SELECT * FROM car WHERE id = $carId";
$resultCar = $db->query($queryCar);
$carData = $resultCar->fetch_assoc();

// Query to fetch available locations for the selected car_id from the car_location table
$queryAvailableLocations = "SELECT location.id, location.name
    FROM location
    INNER JOIN car_location ON location.id = car_location.location_id
    WHERE car_location.car_id = $carId";

$resultAvailableLocations = $db->query($queryAvailableLocations);

// Create an array to store available location data
$availableLocations = array();

if ($resultAvailableLocations) {
    while ($rowLocation = $resultAvailableLocations->fetch_assoc()) {
        $availableLocations[] = $rowLocation;
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Car Information</title>
    <script type="text/javascript" src="assets/scripts/car_information.js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
</head>

<body>
    <div id="wrapper">
        <?php include "header.php"; ?>

        <div class="car-info">
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
                        <td>Fuel Type:</td>
                        <td><?php echo $carData['fuel_type']; ?></td>
                    </tr>
                    <tr>
                        <td>Boot Space:</td>
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
                </div>
                <div class="car-info-row">
                    <h1>Location Available:&nbsp;</h1>
                    <select id="preset-options">

                        <!-- php -->
                        <?php foreach ($availableLocations as $location) : ?>
                            <option value="<?php echo $location['name']; ?>" <?php if (isset($_GET['location_name']) && $_GET['location_name'] == $location['name']) echo 'selected'; ?>><?php echo $location['name']; ?></option>
                        <?php endforeach; ?>

                    </select>
                </div>
            </div>
            <div style="margin-left: auto; margin-bottom: 20px; width: 55%;">
                <a class="center book-now-button-big" onclick="bookNow();">Book Now</a> <br />
            </div>

        </div>


        <?php include('footer.html'); ?>
    </div>
    <script type="text/javascript" src="assets/scripts/car_informationr.js"></script>
</body>

</html>

<?php
// Close the database connection
$db->close();
?>