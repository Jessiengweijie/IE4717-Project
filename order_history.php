<?php
// Set auth for page
$authRequired = 1;
include "assets/php/dbconnect.php";
include "assets/php/check_login.php";
include "assets/php/fetch_user_info.php";

if (isset($_GET['order_id']) && $_GET['order_id'] != '') {
	$orderId = $_GET['order_id'];
}
$orderData = array();
$queryOrder = "SELECT oh.*, c.brand AS car_brand, c.type AS car_type, c.imageURL AS car_imageURL, c.name AS car_name,
l.name AS location_name
FROM order_history AS oh
LEFT JOIN car AS c ON oh.car_id = c.id
LEFT JOIN location AS l ON oh.location_id = l.id
WHERE oh.user_id = $loggedInUserID";
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
	<link rel="stylesheet" href="assets/css/stylesheet.css">
</head>

<body>
	<div id="wrapper">
		<?php include "assets/php/header.php"; ?>
		<div class="order">
			<h1>Order History</h1>
			<form method="post" action="" autocomplete="off">
				<div class="order-content">
					<?php if (!empty($orderData)) : ?>
						<?php foreach ($orderData as $order) : ?>

							<?php if (time() > $order['start_date'] && time() > $order['end_date']) {
								$check = 'Past';
								$color = '#CCCCCC';
							} elseif (time() > $order['start_date'] && time() < $order['end_date']) {
								$check = 'Ongoing';
								$color = '#A2E16D';
							} elseif (time() < $order['start_date'] && time() < $order['end_date']) {
								$check = 'Future';
								$color = '#FDFD96';
							}
							?>
							<table style="background-color: <?php echo $color; ?>;">
								<tr>
									<td rowspan="3" colspan="1" class="order-image">
										<img src="assets/images/Cars/Brands/<?php echo $order['car_brand']; ?>/<?php echo $order['car_type']; ?>/<?php echo $order['car_imageURL']; ?>" height="200px" width="200px" alt="<?php echo $order['car_name']; ?>">
									</td>
									<td colspan="4" class="order-car"><?php echo $order['car_name']; ?></td>
									<td><?php echo $check; ?></td>
								</tr>
								<tr>
									<td class="order-location"><?php echo $order['location_name']; ?></td>
									<td rowspan="2"><?php echo date('H:i d M Y', $order['start_date']); ?></td>
									<td rowspan="2">></td>
									<td rowspan="2"><?php echo date('H:i d M Y', $order['end_date']); ?></td>
									<td rowspan="2">
										<input type="hidden" name="order_id" value="<?php echo $order['order_id']; ?>">
										<input type="submit" class="order-button" value="View Order">
									</td>
								</tr>
								<tr>
									<td class="order-number">Order #<?php echo $order['order_id']; ?></td>
								</tr>

							</table>
							<!-- <img src="assets/images/Cars/Brands/<?php echo $order['car_brand']; ?>/<?php echo $order['car_type']; ?>/<?php echo $order['car_imageURL']; ?>" height="200px" width="200px" alt="<?php echo $order['car_name']; ?>"> -->
						<?php endforeach; ?>
					<?php else : ?>
						<tr>
							<td colspan="9" style="text-align: center;">
								<p>No orders found.</p>
							</td>
						</tr>
					<?php endif; ?>
				</div>
			</form>

			<!-- Start on: <?php echo date('D M d Y H:i:s \G\M\TO (e)', $order['start_date']); ?> -->
		</div>


		<?php include "assets/html/footer.html"; ?>
	</div>
</body>

</html>