<?php
// Set auth for page
$authRequired = 1;
include "assets/php/dbconnect.php";
include "assets/php/check_login.php";
include "assets/php/fetch_user_info.php";
$orderData = array();
$queryOrder = "SELECT oh.*, c.brand AS car_brand, c.type AS car_type, c.imageURL AS car_imageURL, c.name AS car_name, c.fuel_type AS car_fuel_type, c.seats AS car_seats, c.category AS car_category,
l.name AS location_name
FROM order_history AS oh
LEFT JOIN car AS c ON oh.car_id = c.id
LEFT JOIN location AS l ON oh.location_id = l.id
WHERE oh.user_id = $loggedInUserID ORDER BY oh.order_id DESC";
$resultOrder = $db->query($queryOrder);
while ($rowOrder = $resultOrder->fetch_assoc()) {
	$orderData[] = $rowOrder;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Order History</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="assets/scripts/order_history.js"></script>
	<link rel="stylesheet" href="assets/css/stylesheet.css">
</head>

<body>
	<div id="wrapper">
		<?php include "assets/php/header.php"; ?>
		<div class="order">
			<div class="order-body">
				<h1 style="font-size: 30px;">Order History</h1>
				<div class="legends">
					<div class="legend">
						<div class="color-box" style="background-color: #FF6F4A;"></div>
						<div class="label">Past</div>
					</div>
					<div class="legend">
						<div class="color-box" style="background-color: #FFD700;"></div>
						<div class="label">Ongoing</div>
					</div>
					<div class="legend">
						<div class="color-box" style="background-color: #66CDAA;"></div>
						<div class="label">Future</div>
					</div>
				</div>


				<?php if (!empty($orderData)) : ?>
					<?php foreach ($orderData as $order) : ?>

						<?php if (time() > $order['start_date'] && time() > $order['end_date']) {
							$check = 'Past Booking';
							$color = '#FF6F4A';
						} elseif (time() > $order['start_date'] && time() < $order['end_date']) {
							$check = 'Ongoing Booking';
							$color = '#FFD700';
						} elseif (time() < $order['start_date'] && time() < $order['end_date']) {
							$check = 'Future Booking';
							$color = '#66CDAA';
						}
						?>
						<div class="order-content">
							<p class="order-number">Order #<?php echo $order['order_id']; ?></p>
							<table style="background-color: <?php echo $color ?>;">
								<tr>
									<td class="order-location"><?php echo $order['location_name']; ?></td>
									<td class="order-date"><?php echo date('H:i', $order['start_date']); ?></td>
									<td rowspan="2" style="width: 5%;">></td>
									<td class="order-date"><?php echo date('H:i', $order['end_date']); ?></td>
									<td>
										<?php
										if ($order['duration'] > 24) {
											$days = $order['duration'] / 24;
											echo $days . " Days";
										} else {
											echo $order['duration'];
											if ($order['duration'] == 1) {
												echo " Hour";
											} else {
												echo " Hours";
											}
										}
										?>
									</td>
									<td rowspan="2" class="order-view">
										<a class="order-button" onclick="openPopup('<?php echo $order['order_id']; ?>');">
											View Order
										</a>
									</td>
								</tr>
								<tr>
									<td class="order-car"><?php echo $order['car_name']; ?></td>
									<td class="order-date"><?php echo date('d M Y', $order['start_date']); ?></td>
									<td class="order-date"><?php echo date('d M Y', $order['end_date']); ?></td>
									<td class="order-cost">$<?php echo $order['fee']; ?></td>
								</tr>

							</table>
							<img class="order-image" src="assets/images/Cars/Brands/<?php echo $order['car_brand']; ?>/<?php echo $order['car_type']; ?>/<?php echo $order['car_imageURL']; ?>" alt="<?php echo $order['car_name']; ?>">


						</div>
						<div id="popup<?php echo $order['order_id']; ?>" class="popup">
							<div class="popup-content">
								<span class="close" onclick="closePopup('<?php echo $order['order_id']; ?>');">&times;</span>
								<h1>ConviGo - Booking Order #<?php echo $order['order_id']; ?></h1>
								<div class="order-row line">
									<div class="order-column ">
										<h1><?php echo $check ?> (<?php echo $order['car_category']; ?>)</h1>
										<h2><?php echo $order['car_name']; ?></h2>
										<?php echo $order['car_fuel_type']; ?> <br />
										<?php echo $order['car_seats']; ?> Seater <?php echo $order['car_type']; ?>
									</div>
									<img src="assets/images/Cars/Brands/<?php echo $order['car_brand']; ?>/<?php echo $order['car_type']; ?>/<?php echo $order['car_imageURL']; ?>" alt="<?php echo $order['car_name']; ?>">
								</div>

								<div class="order-row line">
									<h3>Trip Status</h3>
									<div class="order-column">
										Pick Up<br />
										<?php echo date('H:i', $order['start_date']); ?><br />
										<?php echo date('d M Y', $order['start_date']); ?>
									</div>
									>
									<div class="order-column">
										Drop Off<br />
										<?php echo date('H:i', $order['end_date']); ?><br />
										<?php echo date('d M Y', $order['end_date']); ?>
									</div>
								</div>

								<div class="order-row line">
									<h3>Booking Duration</h3>
									<?php
									if ($order['duration'] > 24) {
										$days = $order['duration'] / 24;
										echo $days . " Days";
									} else {
										echo $order['duration'] . ":00:00 Hours";
									}
									?>
								</div>

								<div class="order-row line">
									<h3>Location</h3>
									<?php echo $order['location_name']; ?>
								</div>
								<div class="order-column line">
									<div class="order-row">
										<h3>Total Fees</h3>
										<p>$<?php echo $order['fee']; ?></p>
									</div>
									<div class="order-row">
										<?php
										if ($order['duration'] > 24) {
											$days = $order['duration'] / 24;
											$rate = $order['rate'] * 24;
											echo "Booking Rate @ $" . $rate . "/Day x " . $days . " Days";
										} else {
											echo "Booking Rate @ $" . $order['rate'] . "/Hour x " . $order['duration'] . " Hours";
										}
										?>

										<p>$<?php echo $order['fee']; ?></p>
									</div>
								</div>
								<small>Order Processed at <?php echo date('H:i:s d M Y', $order['order_date']); ?></small>
							</div>
						</div>

					<?php endforeach; ?>
				<?php else : ?>
					<tr>
						<td colspan="9" style="text-align: center;">
							<p>No orders found.</p>
						</td>
					</tr>
				<?php endif; ?>
			</div>
		</div>


		<?php include "assets/html/footer.html"; ?>
	</div>
</body>

</html>