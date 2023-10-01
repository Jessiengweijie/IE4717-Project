<?php
// create short variable names

@$db = new mysqli('localhost', 'root', '', 'convigo');

if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
}

// Fetch car data from the database
if (isset($_GET['location_name']) && $_GET['location_name'] != '') {
$locationName = $_GET['location_name'];

// Query to fetch the location_id based on location_name
$queryLocationId = "SELECT id FROM location WHERE name = '$locationName'";
$resultLocationId = $db->query($queryLocationId);

// Fetch the location_id from the result object
$locationIdArray = $resultLocationId->fetch_assoc();
$locationId = $locationIdArray['id'];
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
        <header>
            <a href="/ConviGo" style="text-decoration: none; color: inherit;">
                <h1 class="logo">ConviGo
                    <img src="assets/images/Logo/ConviGo_Logo.png" height="40px" width="40px" alt="ConviGo_Logo" style="margin-left: 5px;">
                </h1>
            </a>

            <nav class="navbar">
                <b>
                    <a href="about.html">About</a> &nbsp;
                    <a href="cars.php">Cars</a> &nbsp;
                    <a href="locations.html">Locations</a> &nbsp;
                    <a href="faqs.html">FAQs</a> &nbsp;
                    <a href="my_account.html">My Account</a>
                </b>
            </nav>
        </header>
        <div class="car-info" style="background-color: lightskyblue;">
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
                        <img src="assets/images/Cars/Brands/<?php echo $carData['brand']; ?>/<?php echo $carData['type']; ?>/<?php echo $carData['imageURL']; ?>" height="auto" width="100%" alt="<?php echo $carData['name']; ?>">
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
                    <p>$12 per hour</p>
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
    <script type="text/javascript" src="assets/scripts/car_informationr.js"></script>
</body>

</html>

<?php
// Close the database connection
$db->close();
?>