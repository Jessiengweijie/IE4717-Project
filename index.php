<?php
// Set auth for page
include "assets/php/dbconnect.php";
include "assets/php/check_login.php";
include "assets/php/fetch_user_info.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/stylesheet.css">
  <script type="text/JavaScript">
    var message="     ConviGo is excited to announce our special opening promotion.";
    message += " We are waiving GST costs until further notice!";
    message += " Get ready to enjoy a fantastic ride with ConviGo.";
    var space="\u{1F6A6} \u{1F697}\u{2728}     \u{1F699}\u{2728}     \u{1F695}\u{2728}     \u{1F690}\u{2728}     ";
    // get unicode from https://www.w3schools.com/charsets/ref_emoji_transport.asp
    var position=0;
    function scroller(){
          var newtext = message.substring(position,message.length)+
          space + message.substring(0,position);
          var td = document.getElementById("tabledata");
          td.firstChild.nodeValue = newtext;
          position++;
          if (position > message.length){position=0;}
          window.setTimeout("scroller()",200);
    }
  </script>
</head>

<body onload="scroller();">
  <div id="wrapper">
    <?php include "assets/php/header.php"; ?>
    <div class="center home">
      <div class="center home-header">
        <table>
          <tr>
            <td>
              <img src="assets/images/Icons/bell.png" height="16px" width="16px">
            </td>
            <td id="tabledata">message goes here</td>
          </tr>
        </table>
        <?php if (isset($userInfo['firstname'])) {
          echo '<h1 style="height:300px; color:black;">Welcome, ' . $userInfo['firstname'] . ' ' . $userInfo['surname'] . '!</h1>';
        } ?>
        <?php if (!isset($_SESSION['valid_user'])) {
          include "assets/html/login.html";
        } ?>
      </div>



      <div class="center">
        <h1 style="margin-bottom: 75px;">Why Convigo</h1>

        <div class="flex space-evenly" style="margin-bottom: 100px;">

          <!--   --------------------------  Instant Verification, Zero Delays ---------------------------->
          <div class="home-content">
            <img src="assets/images/Icons/verification_icon.png">
            <h2>Instant Verification, <br> Zero Delays</h2>
          </div>

          <!--   --------------------------  Transparent Pricing ---------------------------->
          <div class="home-content">
            <img src="assets/images/Icons/price_icon.png">
            <h2>Transparent <br> Pricing</h2>
          </div>

          <!--   --------------------------  Easy Access Across the City ---------------------------->
          <div class="home-content">
            <img src="assets/images/Icons/easyaccess_icon.png">
            <h2>Easy Access<br> Across the City</h2>
          </div>

          <!--   --------------------------  24/7 Availability ---------------------------->
          <div class="home-content">
            <img src="assets/images/Icons/daynight_icon.png">
            <h2>24/7 <br>Availability</h2>
          </div>

          <!--   --------------------------  Cleanliness in Every Drive ---------------------------->
          <div class="home-content">
            <img src="assets/images/Icons/clean_icon.png">
            <h2>Cleanliness in <br>Every Drive</h2>
          </div>
        </div>
        <!----------------------------------------------------------------------------------->

        <h1 style="margin-bottom: 75px;">How to use</h1>
        <div class="flex space-evenly" style="margin-bottom: 10px;">
          <div class="home-how">
            <img src="assets/images/Cars/Sample/home_search.png" width="100%">
            <div class="home-how-content">
              <h2><a href="/ConviGo/locations.php">Search</a></h2>
              <p>Discover a Convigo vehicle just moments away</p>
            </div>
          </div>
          <div class="home-how">
            <img src="assets/images/Cars/Sample/home_book.png" width="100%">
            <div class="home-how-content">
              <h2><a href="/ConviGo/cars.php">Book</a></h2>
              <p>Select the perfect car to your liking</p>
            </div>
          </div>
          <div class="home-how">
            <img src="assets/images/Cars/Sample/home_drive.png" width="100%">
            <div class="home-how-content">
              <h2><a href="/ConviGo/cars.php">Drive</a></h2>
              <p>Activate your ride with the ConviGo app</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "assets/html/footer.html"; ?>
  </div>
</body>

</html>