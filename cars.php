<?php
// create short variable names

@$db = new mysqli('localhost', 'root', '', 'convigo');

if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
}

// Fetch car data from the database

// Initialize the base query
$carData = array();
$queryCar = "SELECT * FROM car";
$locationName = '';
$category = '';
$type = '';
$brand = '';

// Check for location_name parameter
if (isset($_GET['location_name']) && $_GET['location_name'] != '') {
    $locationName = $_GET['location_name'];

    // Query to fetch the location_id based on location_name
    $queryLocationId = "SELECT id FROM location WHERE name = '$locationName'";
    $resultLocationId = $db->query($queryLocationId);

    // Fetch the location_id from the result object
    $locationIdArray = $resultLocationId->fetch_assoc();
    $locationId = $locationIdArray['id'];

    // Add a condition for location_id to the base query
    $queryCar .= " INNER JOIN car_location ON car.id = car_location.car_id
                   WHERE car_location.location_id = $locationId";
}

// Check for category parameter
if (isset($_GET['category']) && $_GET['category'] != '') {
    $category = $_GET['category'];
    // Add a condition for category to the query
    $queryCar .= (strpos($queryCar, 'WHERE') === false) ? ' WHERE' : ' AND';
    $queryCar .= " car.category = '$category'";
}

// Check for type parameter
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = $_GET['type'];
    // Add a condition for type to the query
    $queryCar .= (strpos($queryCar, 'WHERE') === false) ? ' WHERE' : ' AND';
    $queryCar .= " car.type = '$type'";
}

// Check for brand parameter
if (isset($_GET['brand']) && $_GET['brand'] != '') {
    $brand = $_GET['brand'];
    // Add a condition for brand to the query
    $queryCar .= (strpos($queryCar, 'WHERE') === false) ? ' WHERE' : ' AND';
    $queryCar .= " car.brand = '$brand'";
}
// Execute the final query 
$resultCar = $db->query($queryCar);

// Fetch car data based on the query result
while ($row = $resultCar->fetch_assoc()) {
    $carData[] = $row;
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

// Counting car table parameters

// Count the number of cars in the 'standard' category
$queryCountStandardCars = "SELECT COUNT(*) AS standardCount FROM (" . $queryCar . ") AS subquery WHERE category = 'standard'";
$resultCountStandardCars = $db->query($queryCountStandardCars);

// Check if the query was successful
if ($resultCountStandardCars) {
    // Fetch the count result
    $standardCarCount = $resultCountStandardCars->fetch_assoc()['standardCount'];
} else {
    $standardCarCount = 0; // Set a default value if there's an error
}


// Count the number of cars in the 'premium' category
$queryCountPremiumCars = "SELECT COUNT(*) AS premiumCount FROM (" . $queryCar . ") AS subquery WHERE category = 'premium'";
$resultCountPremiumCars = $db->query($queryCountPremiumCars);

// Check if the query was successful
if ($resultCountPremiumCars) {
    // Fetch the count result
    $premiumCarCount = $resultCountPremiumCars->fetch_assoc()['premiumCount'];
} else {
    $premiumCarCount = 0; // Set a default value if there's an error
}


// Count the number of cars in the 'electric' type
$queryCountElectricCars = "SELECT COUNT(*) AS electricCount FROM (" . $queryCar . ") AS subquery WHERE category = 'electric'";
$resultCountElectricCars = $db->query($queryCountElectricCars);

// Check if the query was successful
if ($resultCountElectricCars) {
    // Fetch the count result
    $electricCarCount = $resultCountElectricCars->fetch_assoc()['electricCount'];
} else {
    $electricCarCount = 0; // Set a default value if there's an error
}


// Count the number of cars in the 'sedan' type
$queryCountSedanCars = "SELECT COUNT(*) AS sedanCount FROM (" . $queryCar . ") AS subquery WHERE type = 'sedan'";
$resultCountSedanCars = $db->query($queryCountSedanCars);

// Check if the query was successful
if ($resultCountSedanCars) {
    // Fetch the count result
    $sedanCarCount = $resultCountSedanCars->fetch_assoc()['sedanCount'];
} else {
    $sedanCarCount = 0; // Set a default value if there's an error
}


// Count the number of cars in the 'suv' type
$queryCountSuvCars = "SELECT COUNT(*) AS suvCount FROM (" . $queryCar . ") AS subquery WHERE type = 'suv'";
$resultCountSuvCars = $db->query($queryCountSuvCars);

// Check if the query was successful
if ($resultCountSuvCars) {
    // Fetch the count result
    $suvCarCount = $resultCountSuvCars->fetch_assoc()['suvCount'];
} else {
    $suvCarCount = 0; // Set a default value if there's an error
}


// Count the number of cars in the 'honda' brand
$queryCountHondaCars = "SELECT COUNT(*) AS hondaCount FROM (" . $queryCar . ") AS subquery WHERE brand = 'honda'";
$resultCountHondaCars = $db->query($queryCountHondaCars);

// Check if the query was successful
if ($resultCountHondaCars) {
    // Fetch the count result
    $hondaCarCount = $resultCountHondaCars->fetch_assoc()['hondaCount'];
} else {
    $hondaCarCount = 0; // Set a default value if there's an error
}


// Count the number of cars in the 'hyundai' brand
$queryCountHyundaiCars = "SELECT COUNT(*) AS hyundaiCount FROM (" . $queryCar . ") AS subquery WHERE brand = 'hyundai'";
$resultCountHyundaiCars = $db->query($queryCountHyundaiCars);

// Check if the query was successful
if ($resultCountHyundaiCars) {
    // Fetch the count result
    $hyundaiCarCount = $resultCountHyundaiCars->fetch_assoc()['hyundaiCount'];
} else {
    $hyundaiCarCount = 0; // Set a default value if there's an error
}


// Count the number of cars in the 'tesla' brand
$queryCountTeslaCars = "SELECT COUNT(*) AS teslaCount FROM (" . $queryCar . ") AS subquery WHERE brand = 'tesla'";
$resultCountTeslaCars = $db->query($queryCountTeslaCars);

// Check if the query was successful
if ($resultCountTeslaCars) {
    // Fetch the count result
    $teslaCarCount = $resultCountTeslaCars->fetch_assoc()['teslaCount'];
} else {
    $teslaCarCount = 0; // Set a default value if there's an error
}


// Count the number of cars in the 'bmw' brand
$queryCountBMWCars = "SELECT COUNT(*) AS bmwCount FROM (" . $queryCar . ") AS subquery WHERE brand = 'bmw'";
$resultCountBMWCars = $db->query($queryCountBMWCars);

// Check if the query was successful
if ($resultCountBMWCars) {
    // Fetch the count result
    $bmwCarCount = $resultCountBMWCars->fetch_assoc()['bmwCount'];
} else {
    $bmwCarCount = 0; // Set a default value if there's an error
}


// Count the number of cars in the 'audi' brand
$queryCountAudiCars = "SELECT COUNT(*) AS audiCount FROM (" . $queryCar . ") AS subquery WHERE brand = 'audi'";
$resultCountAudiCars = $db->query($queryCountAudiCars);

// Check if the query was successful
if ($resultCountAudiCars) {
    // Fetch the count result
    $audiCarCount = $resultCountAudiCars->fetch_assoc()['audiCount'];
} else {
    $audiCarCount = 0; // Set a default value if there's an error
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cars</title>
    <script type="text/javascript" src="assets/scripts/cars.js"></script>
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
        <div class="car" style="background-color: lightskyblue; padding: 20px;">
            <div class="left-section">
                <select id="car-location-filter" name="location_name">
                    <option value="">All Locations</option>

                    <!-- php -->
                    <?php foreach ($locationData as $location) : ?>
                        <option value="<?php echo $location['name']; ?>" <?php if (isset($_GET['location_name']) && $_GET['location_name'] == $location['name']) echo 'selected'; ?>><?php echo $location['name']; ?></option>
                    <?php endforeach; ?>

                </select>
                <a class="center reset-button" style="cursor: pointer;" onclick="reset()">Reset</a>

                <h1>Our Cars</h1>
                <div class="car-filter">
                    <h1>Vehicle Category</h1>
                    <label>
                        <input type="radio" name="categoryFilter" value="Standard" onclick="categoryFilter(event)" <?php echo ($category === 'Standard') ? 'checked' : ''; ?>/>
                        Standard (<?php echo $standardCarCount; ?>)
                    </label>
                    <br />
                    <label>
                        <input type="radio" name="categoryFilter" value="Premium" onclick="categoryFilter(event)" <?php echo ($category === 'Premium') ? 'checked' : ''; ?>/>
                        Premium (<?php echo $premiumCarCount; ?>)
                    </label>
                </div>

                <div class="car-filter">
                    <h1>Vehicle type</h1>
                    <label>
                        <input type="radio" name="typeFilter" value="Electric" onclick="typeFilter(event)" <?php echo ($type === 'Electric') ? 'checked' : ''; ?>/>
                        Electric (<?php echo $electricCarCount; ?>)
                    </label>
                    <br />
                    <label>
                        <input type="radio" name="typeFilter" value="Sedan" onclick="typeFilter(event)" <?php echo ($type === 'Sedan') ? 'checked' : ''; ?>/>
                        Sedan (<?php echo $sedanCarCount; ?>)
                    </label>
                    <br />
                    <label>
                        <input type="radio" name="typeFilter" value="SUV" onclick="typeFilter(event)" <?php echo ($type === 'SUV') ? 'checked' : ''; ?>/>
                        SUV (<?php echo $suvCarCount; ?>)
                    </label>
                </div>

                <div class="car-filter">
                    <h1>Brand</h1>
                    <label>
                        <input type="radio" name="brandFilter" value="Honda" onclick="brandFilter(event)" <?php echo ($brand === 'Honda') ? 'checked' : ''; ?>/>
                        Honda (<?php echo $hondaCarCount; ?>)
                    </label>
                    <br />
                    <label>
                        <input type="radio" name="brandFilter" value="Hyundai" onclick="brandFilter(event)" <?php echo ($brand === 'Hyundai') ? 'checked' : ''; ?>/>
                        Hyundai (<?php echo $hyundaiCarCount; ?>)
                    </label>
                    <br />
                    <label>
                        <input type="radio" name="brandFilter" value="Tesla" onclick="brandFilter(event)" <?php echo ($brand === 'Tesla') ? 'checked' : ''; ?>/>
                        Tesla (<?php echo $teslaCarCount; ?>)
                    </label>
                    <br />
                    <label>
                        <input type="radio" name="brandFilter" value="BMW" onclick="brandFilter(event)" <?php echo ($brand === 'BMW') ? 'checked' : ''; ?>/>
                        BMW (<?php echo $bmwCarCount; ?>)
                    </label>
                    <br />
                    <label>
                        <input type="radio" name="brandFilter" value="Audi" onclick="brandFilter(event)" <?php echo ($brand === 'Audi') ? 'checked' : ''; ?>/>
                        Audi (<?php echo $audiCarCount; ?>)
                    </label>
                </div>
            </div>
            <!-- image retrieved from https://www.flaticon.com/search?word=question -->

            <div class="right-section">
                <input type="text" class="car-search-filter" placeholder="Search for cars">
                <div class="car-container" id="car-container">
                    <!-- php -->
                    <?php foreach ($carData as $car) : ?>
                        <div class="car-template">
                            <div class="car-body">
                                <div class="car-name">
                                    <span><?php echo $car['name']; ?></span>
                                    <a style="cursor: pointer;" onclick="inquiry('<?php echo $car['id']; ?>');">
                                        <img src="assets/images/Icons/questionmark-icon.png" height="16px" width="16px" alt="Question Mark">
                                    </a>
                                </div>
                                <div class="car-type">
                                    <?php echo $car['type']; ?>
                                </div>
                                <div class="car-image">
                                    <img src="assets/images/Cars/Brands/<?php echo $car['brand']; ?>/<?php echo $car['type']; ?>/<?php echo $car['imageURL']; ?>" height="auto" width="100%" alt="<?php echo $car['name']; ?>">
                                </div>
                            </div>
                            <a class="center book-now-button" style="cursor: pointer;" onclick="bookNow('<?php echo $car['id']; ?>');">Book Now</a>
                        </div>
                    <?php endforeach; ?>

                </div>
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
    <script type="text/javascript" src="assets/scripts/carsr.js"></script>
</body>

</html>

<?php
// Close the database connection
$db->close();
?>