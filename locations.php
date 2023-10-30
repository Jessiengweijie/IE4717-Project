<?php
// Set auth for page
$authRequired = 0;
// create short variable names

include "assets/php/dbconnect.php";
include "assets/php/check_login.php";
include "assets/php/fetch_user_info.php";
// Fetch location data from the database
$queryLocation = "SELECT * FROM location";
$resultLocation = $db->query($queryLocation);

$locationData = array();

if ($resultLocation->num_rows > 0) {
    while ($rowLocation = $resultLocation->fetch_assoc()) {
        $locationData[] = $rowLocation;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Locations</title>
    <script type="text/javascript" src="assets/scripts/locations.js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
</head>

<body>
    <div id="wrapper">
        <?php include "assets/php/header.php"; ?>
        <div class="center location">
            <p class="location-header">Pick a Location!</p>
            <p class="location-subheader">ConviGo has cars island-wide</p>
            <div class="car-location-filter-container">
                <select id="car-location-filter" name="location_name">
                    <option value="">All Locations</option>
                    <?php foreach ($locationData as $location) : ?>
                        <option value="<?php echo $location['name']; ?>"><?php echo $location['name']; ?></option>
                    <?php endforeach; ?>

                </select>
                <a class="center search-button" onclick="searchLocation()">Search</a>
            </div>
            <br />
            <div class="map-info">
                <p class="map-header">ConviGo Locations</p>
                <img src="assets/images/Map/sg_map.png" height="auto" width="100%" alt="map">
                <!-- image retrieved from google maps -->
            </div>
            <div class="location-query">
                <form method="post" action="assets/php/mail.php" autocomplete="off">
                    <p class="location-query-subheader">Need more cars in your location? Submit your request below.</p>
                    <textarea class="location-query-form" name="location-query-form" id="location-query-form" required></textarea>
                    <input type="submit" class="submit-button" value="Submit">
                </form>
            </div>
        </div>

        <?php include "assets/html/footer.html"; ?>
    </div>
</body>

</html>

<?php
// Close the database connection
$db->close();
?>