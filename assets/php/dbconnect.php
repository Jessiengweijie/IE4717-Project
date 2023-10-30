<?php
include "config.php";
@$db = new mysqli('localhost', 'root', '', 'convigo');
date_default_timezone_set("Asia/Singapore");
if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
}
?>	