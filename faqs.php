<?php
// Set auth for page
$authRequired = 0;
include "assets/php/dbconnect.php";
include "assets/php/check_login.php";
include "assets/php/fetch_user_info.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>FAQs</title>
    <script type="text/javascript" src="assets/scripts/faqs.js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
</head>

<body>
    <div id="wrapper">
        <?php include "assets/php/header.php"; ?>
        <div class="faq">
            <div class="faq-container">
                <p class="faq-header">FAQ</p>
                <div class="faq-body">
                    <a class="faq-subheader" id="faq-getting_started" onclick="toggleContent('faq-getting_started-content')">Getting Started</a>
                    <div class="faq-getting_started-content " id="faq-getting_started-content">
                        <ul>
                            <li class="faq-list" onclick="toggleContent('answer1')">
                                How do I sign up?
                                <div class="hidden faq-answer" id="answer1"><br>Simply click on the 'Sign Up' option in the navigation bar at the top. Follow the prompts to provide necessary details like your name, IC, email, and more.</div><br>
                            </li>
                            <li class="faq-list" onclick="toggleContent('answer2')"> What are the requirements to register?
                                <div class="hidden faq-answer" id="answer2"><br>You'll need a valid Class 3 or 3A driving license.</div>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="faq-body">
                    <a class="faq-subheader" id="faq-account" onclick="toggleContent('faq-account-content')">Account & Membership</a>
                    <!-- <div class="faq-account-content  hidden" id="faq-account-content"> -->
                    <div class="faq-account-content " id="faq-account-content">
                        <ul>
                            <li class="faq-list" onclick="toggleContent('answer3')"> How do I update my profile or payment information?
                                <div class="hidden faq-answer" id="answer3"><br>After logging in, click on the 'My Account' button in the navigation bar. From there, you can edit your personal and payment information as needed.</div><br>
                            </li>
                            <li class="faq-list" onclick="toggleContent('answer4')"> Are there membership tiers or loyalty programs?
                                <div class="hidden faq-answer" id="answer4"><br>Currently, we don't offer membership tiers or loyalty programs. Stay tuned for future updates!</div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="faq-body">
                    <a class="faq-subheader" id="faq-booking" onclick="toggleContent('faq-booking-content')">Booking</a>
                    <div class="faq-booking-content" id="faq-booking-content">
                        <ul>
                            <li class="faq-list" onclick="toggleContent('answer5')"> How do I book a car?
                                <div class="hidden faq-answer" id="answer5"><br>Simply click the 'Book Now' button on our homepage. This will guide you through selecting your location and preferred car. After making your selections, you can complete your booking entirely online.</div><br>
                            </li>
                            <li class="faq-list" onclick="toggleContent('answer6')"> Can I modify or cancel my booking?
                                <div class="hidden faq-answer" id="answer6"><br>Yes, you can modify or cancel your booking up to 1 hour before your scheduled start time. Cancellations made later than this will incur a $20 penalty.</div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="faq-body">
                    <a class="faq-subheader" id="faq-payment" onclick="toggleContent('faq-payment-content')">Pricing & Payment </a>
                    <div class="faq-payment-content  " id="faq-payment-content">
                        <ul>

                            <li class="faq-list" onclick="toggleContent('answer7')"> How does the pricing work?
                                <div class="hidden faq-answer" id="answer7"><br>Our car rental operates on an hourly basis, with rates ranging from $10 to $18 per hour, depending on the vehicle type. For example, a Honda Civic is priced at $10/hour, while a BMW 318i comes in at $15/hour. Importantly, our prices are all-inclusive; you won't face any additional charges for petrol or electricity.</div><br>
                            </li>
                            <li class="faq-list" onclick="toggleContent('answer8')"> How do I retrieve my payment receipts?
                                <div class="hidden faq-answer" id="answer8"><br>A detailed transaction receipt, along with your booking information, will be emailed to you upon payment.</div><br>
                            </li>
                            <li class="faq-list" onclick="toggleContent('answer9')"> What payment methods are accepted?
                                <div class="hidden faq-answer" id="answer9"><br>We accept both Visa and Mastercard.</div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="faq-body">
                    <a class="faq-subheader" id="faq-locations" onclick="toggleContent('faq-locations-content')">Locations & Availability</a>
                    <div class="faq-locations-content  " id="faq-locations-content">
                        <ul>
                            <li class="faq-list" onclick="toggleContent('answer10')"> Where can I pick up or drop off the cars?
                                <div class="hidden faq-answer" id="answer10"><br>Cars must be picked up and returned to the specific location you chose during booking. We have designated parking lots to ensure easy access for you and the next user.</div><br>
                            </li>
                            <li class="faq-list" onclick="toggleContent('answer11')"> Are cars available 24/7?
                                <div class="hidden faq-answer" id="answer11"><br>Absolutely! Our platform and car fleet are accessible 24/7 for your convenience.</div><br>
                            </li>
                            <li class="faq-list" onclick="toggleContent('answer12')"> What if I am unable to find a car near me?
                                <div class="hidden faq-answer" id="answer12"><br>You can submit a location request form on our site. We evaluate these requests for potential new locations. In the meantime, only the locations listed on our site are available.</div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="faq-body">
                    <a class="faq-subheader" id="vehicle" onclick="toggleContent('faq-vehicle-content')">Vehicle Usage & Maintenance</a>
                    <div class="faq-vehicle-content" id="faq-vehicle-content">
                        <ul>
                            <li class="faq-list" onclick="toggleContent('answer13')"> What if the vehicle has damage or is dirty when I start my trip?
                                <div class="hidden faq-answer" id="answer13"><br>Before starting your journey, inspect the car. If you find damages or cleanliness issues, snap a photo and email it to us. We'll guide you on the next steps, ensuring you have a pleasant experience. Refunds or adjustments will be made if necessary.</div><br>
                            </li>
                            <li class="faq-list" onclick="toggleContent('answer14')"> How does fueling or charging work?
                                <div class="hidden faq-answer" id="answer14"><br>Fuel and charging expenses are on us! Every car is equipped with a cash card for fuel and charging station payment</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="faq-query center">
                <form method="post" action="assets/php/mail.php" autocomplete="off">
                    <p class="faq-query-subheader">Your question is not here? Submit your request form below.</p>
                    <textarea class="faq-query-form" name="faq-query-form" id="faq-query-form"></textarea>
                    <input type="submit" class="submit-button" value="Submit">
                </form>
            </div>
        </div>
        <?php include "assets/html/footer.html"; ?>
    </div>
</body>

</html>