<?php
include "assets/php/dbconnect.php";
// do not include "assets/php/check_login.php" it will cause loop
include "assets/php/authmain.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php
if (isset($_SESSION['valid_user'])) {
  // User is logged in, so show the home.php page.
  include('home.php');
} else {
  // User is not logged in, so show the login.php page.
  include('login.php');
}
?>

</html>