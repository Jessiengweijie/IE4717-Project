<?php
@$loggedInUserID = $_SESSION['valid_user'];

$query = "SELECT * FROM user_info WHERE email = '$loggedInUserID'";

$result = $db->query($query);

if ($result) {
    if ($result->num_rows > 0) {
        // Fetch and use the data
        while ($row = $result->fetch_assoc()) {
            $surname = $row['surname'];
            $firstname = $row['firstname'];
            $nric = $row['nric'];
            $dob = $row['dob'];
            $license = $row['license'];
            $mobile = $row['mobile'];
            $email = $row['email'];
            $languages = unserialize($row['languages']);
            $address = $row['address'];
            $bank = $row['bank'];
            $bankacc = $row['bankacc'];
            $notification = unserialize($row['notification']);
        }
    } else {
        echo "No user found.";
    }
} else {
    echo "Error executing the query: " . $db->error;
}

var_dump($languages,$notification,$surname,$email,$dob,$license)
?>
