<?php
// create short variable names

@$db = new mysqli('localhost', 'root', '', 'convigo');

if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
}

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
    <title>Cars</title>
    <script type="text/javascript" src="assets/scripts/locations.js"></script>
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
                    <a href="locations.php">Locations</a> &nbsp;
                    <a href="faqs.html">FAQs</a> &nbsp;
                    <a href="my_account.html">My Account</a>
                </b>
            </nav>
        </header>
        <div class="center location" style="background-color: lightskyblue; padding: 20px;">
            <p class="location-header">Pick a location!</p>
            <p class="location-subheader">ConviGo has cars Island-wide</p>
            <div class="car-location-filter-container">
                <select id="car-location-filter" name="location_name">
                    <option value="">All Locations</option>

                    <!-- php -->
                    <?php foreach ($locationData as $location) : ?>
                        <option value="<?php echo $location['name']; ?>"><?php echo $location['name']; ?></option>
                    <?php endforeach; ?>

                </select>
                <!-- id="car-location-filter" causes function to activate from carsr.js -->
                <a class="center search-button" onclick="searchLocation()">Search</a>
            </div>
            <br />

            <div class="map-info">
                <p class="map-header">ConviGo Locations</p>

                <img src="assets/images/Map/sg_map.png" height="auto" width="100%" alt="map">
            </div>

            <div class="location-query">
                <p class="location-query-header">Need more cars in your location?</p>
                <p class="location-query-subheader">Submit your request in the form below.</p>
                <textarea class="location-query-form" name="location-query-form" id="location-query-form"></textarea>
                <input type="submit" class="submit-button" value="Submit">
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
</body>

</html>

<?php
// Close the database connection
$db->close();
?>