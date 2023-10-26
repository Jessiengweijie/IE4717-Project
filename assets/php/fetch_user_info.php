<?php
if (isset($_SESSION['valid_user'])) { 
    $queryUser = "SELECT * FROM user_info WHERE id = '$loggedInUserID'";
    $resultUser = $db->query($queryUser);
    
    if ($resultUser) {
        if ($resultUser->num_rows > 0) {
            // Fetch and use the data
            while ($row = $resultUser->fetch_assoc()) {
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
    
            // Create an array to store user information
            $userInfo = array(
                'surname' => $surname,
                'firstname' => $firstname,
                'nric' => $nric,
                'dob' => $dob,
                'license' => $license,
                'mobile' => $mobile,
                'email' => $email,
                'languages' => $languages,
                'address' => $address,
                'bank' => $bank,
                'bankacc' => $bankacc,
                'notification' => $notification
            );
    
            // Store the array in the session
            $_SESSION['user_info'] = $userInfo;
        } else {
            echo "No user found.";
        }
    } else {
        echo "Error executing the query: " . $db->error;
    }
}
?>
