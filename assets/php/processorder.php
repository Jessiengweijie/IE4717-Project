<?php
  // create short variable names
  $date = $_POST['booking-date'];
  $time = $_POST['booking-time'];
  $duration = $_POST['booking-duration'];
  $rate = $_POST['rental-rate'];
  $fee = $_POST['booking-fee'];
  $end = $_POST['booking-end'];
?>
<html>
<head>
  <title>ConviGo - Booking order</title>
</head>
<body>
<h1>CoviGo - Booking order</h1>
<h2>Breakdown</h2>
<?php
	date_default_timezone_set("Asia/Singapore");
	echo date_default_timezone_get();
	echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";

	echo "<p>Your Booking order is as follows: </p>";

	echo "Booking Date: ".$date."<br />";
	echo "Booking Time: ".$time."<br />";
	echo "Booking Rate: $".$rate."/Hour<br />";
	echo "Booking Duration: ".$duration." Hours<br />";
	echo "Booking Fee: $".$fee."<br />";
	echo "Booking End: ".$end."<br />";


?>
</body>
</html>
