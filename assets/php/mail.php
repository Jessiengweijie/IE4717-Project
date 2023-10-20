<?php
include "dbconnect.php";
@$newsletter = $_POST['newsletter'];
@$faq = $_POST['faq-query-form'];
@$location = $_POST['location-query-form'];

if ($newsletter) {
    // Check Duplicate
    $queryDupe = "SELECT * FROM newsletter WHERE email = '$newsletter'";
    $resultDupe = $db->query($queryDupe);
    if ($resultDupe) {
        // Check if any rows are returned
        if ($resultDupe->num_rows > 0) {
            // Duplicate found, display a warning
            echo '<script>';
            echo 'alert("This email is already subscribed to our newsletter!");';
            echo 'window.history.back();';
            echo '</script>';
        } else {
            $queryNewsletter = "INSERT INTO newsletter (email) VALUES ('$newsletter');";
            $resultNewsletter = $db->query($queryNewsletter);
            if ($resultNewsletter) {
                $subject = 'Thanks for Choosing ConviGo - Your Car Rental Subscription Is Confirmed';
                $message =
                    '<!DOCTYPE html>
                    <html>
                    <head>
                        <title>Welcome to ConviGo Car Rentals</title>
                    </head>
                    <body>
                        <p>Dear Car Enthusiast,</p>
                        <div style="margin-left: 20px;">
                            <p>Thank you for subscribing to ConviGo Car Rentals! We\'re thrilled to have you on board.</p>
                            <p>At ConviGo, we\'re passionate about cars and dedicated to providing you with the best car rental experience. As a subscriber, you\'ll enjoy the following benefits:</p>
                            <ul>
                                <li>Access to our diverse and top-quality car fleet.</li>
                                <li>Exclusive offers, discounts, and promotions for our subscribers.</li>
                                <li>Convenient online booking and reservation management.</li>
                                <li>Exceptional customer support to assist you in every step of your car rental journey.</li>
                            </ul>
                            <p>We\'re committed to making your car rental experience hassle-free and enjoyable. Whether you\'re planning a weekend getaway, a business trip, or just need a reliable set of wheels, ConviGo has you covered.</p>
                            <p>Stay tuned for our latest updates and special offers. Follow us on social media to join our community of car enthusiasts and receive the latest news, travel tips, and more.</p>
                            <p>Thank you for choosing ConviGo Car Rentals. We look forward to serving you and providing you with the keys to unforgettable journeys!</p>
                        </div>
                        <span>Best Regards,</span> <br /> 
                        <span>ConviGo Team</span>
                    </body>
                    </html>';
                $headers = 'Content-type: text/html' . "\r\n" .
                    'From: ConviGo' . "\r\n" .
                    'Reply-To: ConviGo@localhost' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                mail("$newsletter", $subject, $message, $headers);
                echo '<script>';
                echo 'alert("Welcome aboard ' . $newsletter . '! Thank you for subscribing to ConviGo Car Rentals! You are now part of our community. You will receive the latest updates, special offers, and travel tips in your inbox.");';
                echo 'window.history.back();';
                echo '</script>';
            } else {
                echo 'an error has occured.';
            }
        }
    } else {
        echo 'an error has occured.';
    }
}



// Format
// $to      = 'f32ee@localhost';
// $subject = 'test';
// $message = 'test';
// $headers = 'From: ConviGo' . "\r\n" .
//     'Reply-To: ConviGo@localhost' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();

// mail($to, $subject, $message, $headers);
// echo ("mail sent to : " . $to);

?>
