<?php
// Set auth for page
$authRequired = 0;
include "assets/php/dbconnect.php";
include "assets/php/check_login.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up Confirmation</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
</head>

<body>
    <div id="wrapper">
        <header>
            <a href="/ConviGo" style="text-decoration: none; color: inherit;">
                <h1 class="logo">ConviGo
                    <img src="assets/images/Logo/finallogo.png" height="40px" width="40px" alt="ConviGo_Logo" style="margin-left: 5px;">
                </h1>
            </a>

            <nav class="navbar">
                <b>
                    <a href="about.php">About</a> &nbsp;
                    <a href="cars.php">Cars</a> &nbsp;
                    <a href="locations.php">Locations</a> &nbsp;
                    <a href="faqs.php">FAQs</a> &nbsp;
                    <?php
                    if ($loggedInUserID) {
                        echo "<a href='my_account.php'>My Account</a>";
                        echo "<a href='assets/php/logout.php'>Log Out</a>";
                    } else {
                        echo "<a href='signup.php'>Sign Up</a>";
                        echo "<a href='/ConviGo'>Login</a>";
                    }
                    ?>
                </b>
            </nav>
        </header>
        <div class="account">
            <div class="center">
                <p class="signup-header">You're almost there!</p>
                <p class="signup-subheader">Please review the terms and conditions below.</p>
            </div>
            <div class="signup-confirmation">
                <div class="signup-box-scroll">
                    (Updated 7th July 2023)
                    Thank you for booking with Tribecar.

                    Tribecar Pte. Ltd. is a company incorporated in Singapore with the company registration number
                    201605563H and its registered address at 51 Ubi Avenue 1 #03-30 Paya Ubi Industrial Park Singapore
                    408933 ("Tribecar", "we", or "us"). Tribecar is the owner and operator of https://www.tribecar.com
                    and any of its subdomains or subpages (the "Website"), and all services provided by Tribecar via the
                    Website (the "Services"). The Services provided by Tribecar include but are not limited to (i) the
                    provision of an online platform for car rental operators and hirers to facilitate the rental of cars
                    by the hirers for both leisure and commercial usage. For the avoidance of doubt, the Vehicles that
                    are rented out to the Hirers may or may not be owned by Tribecar, and may be the property of the
                    relevant car rental operators ("Tribecar Partners") who have authorised Tribecar to utilise such
                    Vehicles for the provision of the Services

                    This page stipulates the terms and conditions (this "Agreement") between Tribecar and you as a
                    member of our Website and/or user of our Services ("Hirer" and/or "you"). Please read this Agreement
                    carefully before using the Services and Website as, by accessing and registering as a member on our
                    Website, and/or using the Services provided by Tribecar, you acknowledge that you have read,
                    understood, and unconditionally agree to be bound, without any limitation or qualification, by the
                    terms and conditions contained in this Agreement. For avoidance of doubt, you are bound by this
                    Agreement and the other requirements of Tribecar once you register to be a member of our Website and
                    this applies even if your account has yet to be approved and marked active by Tribecar.

                    We may need to make changes to this Agreement from time to time. We may unilaterally change the
                    terms of this Agreement and we shall send you a notification of the same. You acknowledge that it is
                    your responsibility to check the notification and/or the updated Agreement upon such notifications
                    or during creation of new bookings or commencement of your Rental Period. You further agree that
                    your continued use of the Website and Services following the changes to this Agreement indicates
                    your acceptance of any such changes to this Agreement. In case of dispute, Tribecar reserves the
                    right of final decision on the interpretation of the terms and conditions in this Agreement.

                    It is hereby agreed between Tribecar and the Hirer as follows:


                    HIRER COVENANTS
                    The Hirer and the Authorised Driver(s) (as defined in Clause 1(e)) MUST be between 18 – 65 years old
                    and shall be either:-
                    an individual holding an employment pass with at least 6 months of validity, holding on to a valid
                    International Driving License (printed in romanised characters) with a valid credit card, OR
                    a Singaporean holding a valid Singapore Driving Licence for it's classification of vehicles (class
                    2B/2A/2/3A/3) with a valid debit or credit card.
                    The Hirer will be required to have at least 2 years of driving experience. In the event that the
                    Hirer has less than 2 years of driving experience, the Hirer shall be subject to additional
                    membership approval requirements and/or additional terms and conditions relating to the use of the
                    Services.

                    Under the applicable traffic laws in Singapore, if the Hirer is non-Singaporean, he may only use his
                    International Driving Licence for up to 1 year (from the time of his arrival) in Singapore, after
                    which he must obtain a Singapore Driving Licence. For insurance purposes, if a Hirer has both an
                    International Driving Licence and a Singapore Driving Licence, we will only count the years of
                    driving experience from the date of issue of the Singapore Driving Licence.

                    If the Hirer is younger than 23 years old AND/OR has less than 2 years driving experience (as
                    indicated on their Singapore driving licence), he shall also be classified as a "New Driver(s)" and
                    be subject to the additional membership approval requirements and/or such additional terms and
                    conditions as may be set out by Tribecar in this Agreement.
                    In the event where the Hirer possesses more than 1 class of driving licence, the Hirer will be
                    classified as a New Driver if one of the driving licences had been obtained for less than 2 years.
                    If the Hirer wishes to forgo the New Driver status for the above scenario, the Hirer should sign-up
                    manually to only register the driving licence obtained for more than 2 years instead of signing up
                    using SingPass to avoid being classified as a New Driver.
                    The Hirer is to provide a coloured scanned copy of his/her original identity card, driving license
                    and proof of residence upon registration. The hirer may also be requested to complete a video
                    conference with the employees of Tribecar to verify the details of the hirer. The Hirer also may be
                    requested to provide a Selfie of themselves together with their identification document. A
                    screenshot will be saved to keep a record of such video conference and/or Selfie. The Hirer may also
                    be requested to submit a Selfie in front of the vehicle before the booking to prove the driver is
                    the Hirer.
                    The Hirer and/or the Authorised Driver(s) must not be an individual who is or has been a declared
                    (or undeclared or discharged or undischarged) bankrupt and/or an individual who is being charged for
                    bankruptcy. If the Hirer and/or the Authorised Driver(s) attempts to (i) register for a membership
                    with Tribecar, (ii) tries to maintain a suspended/active membership with Tribecar, and/or (iii)
                    continues to use the Services provided by Tribecar, he or she will be reported to relevant
                    authorities for attempting or actively maintaining a contractual relationship without prior approval
                    by the relevant authorities. Additionally, if an individual who has a membership with Tribecar is
                    subsequently found to be a declared (or undeclared or discharged or undischarged) bankrupt, Tribecar
                    shall be entitled to unilaterally, without notification, terminate the relationship and/or any
                    agreement with the aforesaid Hirer, including the right to forfeit any amount due to the Hirer which
                    is held by Tribecar. For avoidance of doubt, Tribecar does not permit or accept any Hirer that is or
                    has been a declared/undeclared/discharged/undischarged bankrupt. Furthermore, if the
                    Hirer/Authorised Driver/individual operates Tribecar's vehicles (the "Vehicles" and each, a
                    "Vehicle") (with or without Tribecar's permission), he/she shall not be entitled to any insurance
                    coverage whatsoever.
                    The Hirer may add up to 2 additional named drivers ("Authorised Drivers") for his booking if he
                    checks on "Additional Driver (s)" under the optional add-ons before completion of the booking and
                    agrees to pay an additional surcharge as listed. The addition of such Authorised Drivers as a named
                    driver of the Vehicle shall be subject to Tribecar’s sole and absolute discretion. Authorised
                    Drivers must be with the Account Holder during the booking at all times for the insurance to be
                    valid. Authorised Drivers are not allowed to drive the rented vehicle without the Account Holder's
                    presence.
                    The Hirer agrees not to:
                    make or permit to be made any repairs or adjustments to be made to the Vehicle without prior
                    immediate notification to Tribecar of the extent of the damages to the Vehicle and approval by
                    Tribecar for ratification;
                    remove or deface any identification marks or plates affixed to the Vehicle;
                    fit any accessories to or to modify the Vehicle in any way without the consent of Tribecar; and
                    use or permit the Vehicle to be used or operated in a manner contrary to the applicable laws in
                    Singapore.
                    If the Hirer is a New Driver, the Hirer hereby acknowledges and agrees that he/she will be subject
                    to the following additional terms and conditions:-
                    For the period which the Hirer remains a New Driver, the Hirer shall only be permitted to make
                    bookings and/or drive Vehicles as permitted and listed/made available for use by New Drivers. For
                    the avoidance of doubt, in relation to the use of the Services while the hirer remains a New Driver,
                    the Hirer shall not be permitted to make bookings and/or drive any other classes of Vehicles which
                    are not expressly permitted by Tribecar
                    The Hirer is wholly responsible for the security of his membership and account with Tribecar. The
                    Hirer must use a strong password for his login account and guard the use of his account against
                    unauthorised usage. As it is possible to gain access to Hirer's Tribecar membership or account
                    through the Hirer's email or computing device such as smartphone, the Hirer must also exercise
                    necessary care to protect these access points against unauthorised access and usage as well. If
                    Tribecar suffers a loss due to the Hirer's action or inaction to guard the use of his account by
                    unauthorized users for any and all reasons, the Hirer shall be wholly responsible for the losses
                    suffered by Tribecar. If the Hirer suspects his account is compromised, he must inform Tribecar
                    immediately but such notice do not absolve Hirer's responsible to any and all losses of Tribecar.
                    Tribecar explicitly disallows the sale/subsale/resale (or "Resale" in general) of the Hirer's
                    Tribecar membership. Resale is explicitly not permitted and insurance coverage is not provided for
                    all unauthorised drivers and users. Commercially, the Hirer agrees that resale for profit,
                    convenience or gains is not permitted by Tribecar. In the event that the Hirer perform a (partial or
                    whole) resale of membership or account, Tribecar has the right to recover all losses (such as
                    damages and accidents cost) and all gains (such as profit from subletting and loss of membership
                    fees) from the Hirer and doing so at his costs (such as legal fees and administrative costs).

                    USE OF VEHICLE
                    The Hirer may use the Vehicle for business, social, domestic and leisure purposes. However, the
                    Hirer agrees that the Vehicle shall not be used, and the Hirer shall not permit the Vehicle to be
                    used for the following purposes:
                    for any purposes for which the Vehicle is not expressly designed for, as shall be determined at
                    Tribecar's sole and absolute discretion (e.g. as a crash test car);
                    for any driving tuition, sub-leasing, towing, racing, pace-making;
                    for competing in any form of motor sport; or
                    for any illegal purposes whatsoever. For instance, transportation of of illegal goods and cargo such
                    as cigarettes, undeclared goods, human trafficking are not permitted by Tribecar.
                    Whilst a Vehicle is in the Hirer's possession, the Hirer acknowledges and agrees that he/she will be
                    held fully responsible for any, but not limited to, vehicular accident, damages, lose, fire or theft
                    caused to that Vehicle.
                    The Hirer shall be responsible for the fuel, Electronic Road Pricing (ERP) and parking charges and
                    Traffic fines arising from the use of the Vehicle provided by Tribecar during the Rental Period
                    (defined in Clause 2(n)).
                    The Hirer acknowledges and agrees that the Vehicles are strictly for use in SINGAPORE AND WEST
                    MALAYSIA (i.e. Peninsular Malaysia). For the avoidance of doubt, reference to West Malaysia for the
                    purposes of this Clause 2, shall refer to the following states in Malaysia [Kuala Lumpur, Johor
                    Bahru, Malacca, Negeri Sembilan, Putrajaya, Selangor, Pahang (up to {the latitude of} Kuantan but
                    not any higher or further)]. The Hirer acknowledges and agrees that any unauthorised use of the
                    Vehicles in other countries and/or other authorised parts of Malaysia will result in the suspension
                    of membership.
                    The Hirer acknowledges and agrees that smoking (or vaping or electronic cigarette) in the Vehicles
                    and/or bring pets onboard shall NOT be allowed in the Vehicles. The Hirer hereby acknowledges and
                    agrees to bear all the costs and expenses that will be incurred for engaging professional services
                    for the removal of any resultant stain in the Vehicle which is attributable to any of restricted
                    acts of the Hirer as set out in this Clause 2(e).
                    If the Hirer causes any inconvenience to other hirers and/or Tribecar, and/or damage to Tribecar's
                    cars or other vehicles or properties, and/or fines/charges/penalties/fees which are attributable to
                    the Hirer's action, the Hirer shall be liable and shall indemnify and/or reimburse Tribecar for any
                    and all claims (including third party claims), actions, proceedings, demands, liabilities, losses,
                    damages, costs (including legal costs on an indemnity basis) and expenses of whatever nature,
                    arising directly out of or in connection the acts or omissions of the Hirer.
                    Without the prior written consent of Tribecar, the Hirer shall not make or permit to be made any
                    mechanical or other modifications, any alterations, additions, or repairs to the Vehicle, or fit any
                    towing equipment or other accessories or non-standard tyres. In the event of any such modification,
                    alteration, addition or repair (whether with or without the consent of Tribecar), any additional or
                    modified part of the Vehicle shall be deemed to become part of the Vehicle and shall belong to
                    Tribecar, without prejudice to any rights or remedies accruing to Tribecar under this Agreement.
                    The Hirer shall not:
                    Remove or interfere with any identification marks or plates affixed to the Vehicle;
                    deface the paintwork or bodywork of the Vehicle or add or erect any painting, sign-writing,
                    lettering or advertising to or on the Vehicle, or attempt to do so or permit the same to be done;
                    use or permit the Vehicle to be used or operated in a manner contrary to any law or regulation of
                    Singapore; or
                    sell, assign, mortgage, let on hire or otherwise dispose of or part with possession or control of
                    the Vehicle or assign its rights under this Agreement or attempt to do so. In the event that the
                    Hirer loses possession or control of the Vehicle, the Hirer shall take all necessary steps at the
                    Hirer's own expense to recover possession and control of the Vehicle for such reasonable duration as
                    Tribecar may at its sole and absolute discretion determine
                    The Hirer shall return the Vehicle to Tribecar together with all tyres, tools, accessories and
                    equipment, in as good order and condition (reasonable wear and tear excepted) as the state of the
                    Vehicle was upon collection by the Hirer from Tribecar.
                    The Hirer shall ensure that the Vehicle shall not at any time during the Rental Period be driven by
                    any person other than by the Hirer or an Authorised Driver and shall procure that the Authorised
                    Driver complies with the terms and conditions of this Agreement as if an original party hereto. The
                    Hirer hereby acknowledges and agrees that it shall be solely responsible to Tribecar for any
                    non-compliance by the Authorised Driver with the terms and conditions of this Agreement and that the
                    Hirer shall indemnify Tribecar for any and all claims (including third party claims), actions,
                    proceedings, demands, liabilities, losses, damages, costs (including legal costs on an indemnity
                    basis) and expenses of whatever nature, arising directly out of or in connection the acts or
                    omissions of the Authorised Driver.
                    The Hirer shall bear all costs of repair and rectification for any damage to the Vehicle resulting
                    from negligence or improper use of the Vehicle by the Hirer or Authorised Driver.
                    In the event of any breach of this Agreement by the Hirer or Authorised Driver, the Hirer shall pay
                    Tribecar on demand all losses and damages suffered by Tribecar (including all legal costs and
                    expenses incurred for and on behalf of Tribecar for the enforcement of any provision in this
                    Agreement, on a full indemnity basis) in connection with such breach, including any loss or damage
                    arising from the loss of use or loss of or damage to the Vehicle for any reason whatsoever.
                    The Hirer shall indemnify Tribecar in full against any and all claims, actions, proceedings,
                    damages, losses, liabilities (including any loss of revenue, loss of profits or indirect damages),
                    costs and expenses (including legal fees and expenses on a full indemnity basis) that may be brought
                    against, suffered or incurred by Tribecar in connection with any use of the Vehicle, which are not
                    otherwise covered by the insurance policy(ies) taken out by Tribecar.
                    The Hirer is only authorised to use the Vehicle during the period of his/her (fully paid for)
                    reservation (in accordance with Clause 3) ("Rental Period"). This use may be reasonably extended by
                    a booking extension made via the Website. If the Hirer continues to use/operate the vehicle beyond
                    the end of his/her reservation, he/she shall be charged late fees (in accordance with the Penalty
                    Charges pursuant to Clause 11). However, should the use/operation of the vehicle extend beyond the
                    end of the reservation by 2 hours or more, the use/operation of the vehicle by the Hirer shall no
                    longer be authorised or permitted by Tribecar. In which case, insurance coverage and any potential
                    insurance claims due to accidents during this unauthorised/unpermitted use will be denied.
                    Furthermore, Tribecar may at its sole and absolute discretion report such unauthorised/unpermitted
                    use/operation of the vehicle to the police as a theft of Tribecar's Vehicle.
                    The Hirer use of the "End Trip" function shall mark the end of his/her reservation. The specific
                    timing of the "End Trip" function may be set before or after the actual end of the Hirer's
                    reservation. Once the "End Trip" function is used, the Hirer shall no longer be authorised/permitted
                    to use/operate the Vehicle (unless separate permission if sought by the Hirer and given by
                    Tribecar).
                    Due to recent availability of the option for multi-day rental in Tribecar's system, Tribecar may be
                    required to perform scheduled car washes differently, at its convenience. Accordingly, if the
                    Hirer's rented Vehicle is found to be parked at the designated parking lot ("Pick Up Location")
                    during a Hirer's Rental Period, the Hirer hereby acknowledges and agrees that he/she shall be deemed
                    to have pre-authorised Tribecar to clean the exterior the Vehicle and, if time permits, clean the
                    interior of the relevant Vehicle
                    The Vehicle and its equipment within or part of it (e.g. In-Car Camera, Tribecar Onboard Computer,
                    USB Charger, etc) may be protected with anti-tampering device and systems (e.g. anti-tampering
                    stickers). If damaged by the direct/indirect action of the Hirer, the Hirer may be liable for
                    penalties, damages and fines as may be reasonably determined by Tribecar at its discretion. At the
                    discretion of Tribecar, legal action may be sought against the Hirer in protecting the physical
                    properties and intellectual properties of Tribecar. Furthermore, if the tampering leads to removal
                    of critical information, e.g. removal of storage/memory for in-car memory, the Hirer's account will
                    be suspended (possibly termination as well, as determined solely by Tribecar), all future booking
                    removed without refund, and all insurance coverage (for past, present or future bookings) provided
                    by Tribecar to the Hirer will be immediately revoked.
                    Tribecar takes a very strong stance against Hirers that sublets Tribecar's Vehicles. Subletting is
                    explicitly not permitted and insurance coverage is not provided for all unauthorised drivers and
                    users. Under the Traffic Law, both the Hirer and the unauthorised driver will be subjected to fines
                    and penalties. Commercially, the Hirer agrees that subletting for profit, convenience or gains is
                    not permitted by Tribecar. In the event that the Hirer perform subletting or resale, Tribecar has
                    the right to recover all losses (such as damages and accidents cost) and all gains (such as profit
                    from subletting and loss of membership fees) from the Hirer and doing so at his costs (such as legal
                    fees and administrative costs).
                    Tribecar shall not be held liable for any items lost or misplaced by the Hirer. All items left
                    behind - such as Lost and Found items - by the Hirer will be disposed / donated / auctioned off
                    after 30 calendar days with no compensation or reimbursement to the Hirer.

                    DUTIES OF THE HIRER DURING RENTAL PERIOD
                    The Hirer shall take proper care of his/her rented Vehicle and drive the Vehicle in observation of
                    all traffic laws and regulations and in the event of any breach thereof, the Hirer shall pay all
                    fines and penalties which may be incurred, and answer all traffic summonses, including all notices
                    and inquiries in connection therewith. In particular, the Hirer shall ensure that during the
                    relevant Rental Period, the Vehicle:

                    (a) shall not be overloaded;
                    (b) has sufficient fuel, water and tire pressure at all times; and
                    (c) is properly parked and locked when not in use, and at the end of the Rental Period.
                    The Hirer shall further be responsible for fuel, and all Electronic Road Pricing charges, parking
                    charges, and toll fees arising from the use of the Vehicle and pay off all traffic summonses,
                    including all notices and inquiries in connection therewith via the AXS after 5 working days from
                    the relevant Rental by the Hirer. If any traffic summons, including all notices and inquiries are
                    sent to Tribecar, Tribecar will charge an administrative charge of S$10.80 deductible via the
                    Hirer's e-wallet with Tribecar. For the purposes of this Agreement, "e-wallet" shall refer to the
                    Hirer's digital wallet with Tribecar used for transactions made on the Website.

                    When hiring Car Club by Tribecar category vehicles(Car Club Prime MPV (Fuel-Included), Car Club
                    Prime Sedan (Fuel-Included), Car Club Select MPV (Fuel-Included), Car Club Select SUV
                    (Fuel-Included) and Car Club Select Sedan (Fuel-Included)), the Hirer shall ensure sufficient fuel
                    (more than ¼ tank) upon return or at the end of the trip.

                    The Hirer shall be required to comply with all the instructions provided by Tribecar (whether on an
                    ad hoc basis or otherwise), including instructions provided by the employees or appointed personnel
                    of Tribecar. Such instructions shall include without limitation to instructions from Tribecar to
                    request that the Hirer ceases any actions that may endanger or damage the Vehicles or such other
                    assets or property within the purview of Tribecar. In the event where the Hirer fails to comply with
                    any instruction provided by Tribecar, Tribecar shall be entitled to fine the Hirer a minimum penalty
                    of S$108.00 for administration or such additional amount as Tribecar may reasonably stipulate
                    depending on the quantum of the damages, costs and expenses incurred by Tribecar as a result of the
                    Hirer’s non-compliance with Tribecar’s instructions. In the event of such non-compliance by the
                    Hirer, Tribecar may also stipulate that the use of the Vehicle (including valid bookings) will be
                    forfeited and withdrawn with no reimbursement to the Hirer.

                    In order to combat insurance fraud and unauthorised usage of Tribecar Vehicles, the Hirer may be
                    requested to perform on demand Hirer verification by Tribecar. This may involve the Hirer taking a
                    Selfie in front of the Vehicle before, during and/or after the booking. If the Hirer fails to do as
                    instructed, the Hirer's account may be suspended for investigation and the Hirer is considered to
                    have failed to comply with Tribecar instructions.


                    VEHICLE RESERVATION / DEPOSIT / PAYMENT
                    The Hirer hereby acknowledges and agrees that:

                    Any reservation of a Vehicle by the Hirer shall be made in advance of the Hirer's intended Rental
                    Period ("Rental").
                    The Hirer shall only be entitled to reserve one (1) Vehicle within the same date and time period.
                    The priority for the use of a Vehicle shall be on a first reserved, first served basis.
                    The Hirer shall upon registration of an account with Tribecar pay to Tribecar the following amounts
                    as security:-.
                    a deposit of S$100.00 (payment to be by way of credit/debit card) for Singapore Citizen;
                    a deposit of S$500.00 (S$100.00 payment by way of credit/debit card and $400.00 by local bank
                    transfer only) for a Hirer who is not a Singapore citizen (i.e. an individual holding an employment
                    pass with at least 6 months of validity);
                    In relation to a New Driver who has previously paid the additional deposit of S$100.00 to Tribecar,
                    in the event that such Hirer is no longer considered to be a New Driver (as determined by Tribecar)
                    at the point of his/her termination of this Agreement and/or his/her account with Tribecar, Tribecar
                    shall convert such additional deposit into credits amounting to S$100.00 in the Hirer’s e-wallet.
                    Similarly, if the Hirer has signed up as a New Driver under Singpass registration with more than 1
                    class of driving licence and decided to forgone one of his/her class, Tribecar shall convert such
                    additional deposit into credits amounting to S$100.00 in the Hirer’s e-wallet. In the event that the
                    Hirer is still a New Driver at the point of his/her termination of this Agreement and/or his/her
                    account with Tribecar, he/she shall receive a full refund of the additional deposit of S$100.00, in
                    cash.
                    Tribecar is a GST Registered company. All rentals and services are GST inclusive during checkout
                    which will be borne by the Hirer.
                    The relevant amount of credits in the Hirer's e-wallet will be deducted upon confirmation of
                    booking.
                    All reimbursements, refunds, compensations, adjustments by Tribecar to the Hirer shall be paid out
                    only to the Hirer's e-wallet and not as cash or cash equivalent.
                    Tribecar reserves the right to cancel all future bookings if the Hirer's e-wallet will run into
                    negative balance as a result of such future bookings.
                    In the event where there are no future bookings to offset the negative balance, membership will be
                    suspended until such date where the Hirer has topped up his/her e-wallet such that his/her e-wallet
                    no longer has a negative balance.
                    In the event of a negative e-wallet balance without future bookings and the balance stays negative
                    for 72 hours or more, Tribecar will charge the Hirer's credit/debit card, together with an
                    additional admin fee (according to our Payment Gateway Fee; see 4L) at a minimum of $1, to zero the
                    e-wallet balance.
                    The Hirer shall only be able to top-up the credits in his/her e-wallet by way of credit credit/debit
                    card.
                    Hirer will be required to pay a Payment Gateway Fee for all top-ups made to the e-wallet. The top-up
                    amount will be as follows. Please seek the advice from Tribecar in relation to the applicable
                    Payment Gateway Fees for top-ups above S$200.
                    Top Up Amount Payment Gateway Fee How much you will get in e-wallet
                    $20 $1 $19
                    $50 $1 $49
                    $100 $2 $98
                    $200 $3 $197
                    For Car Club by Tribecar category vehicles, the Hirer will be subjected to a mileage charge. The
                    mileage charges are described in the rates page on the Tribecar service.

                    The following penalties will be imposed if the hirer has committed the following:
                    Failure to refuel when fuel is less than ¼ tank (First Offense, for Car Club by Tribecar category)
                    $37.80
                    Failure to refuel when fuel is less than ¼ tank (Second Offense onwards for Car Club by Tribecar
                    category) $70.20
                    Lost or damaged fleet card (Reported during booking) $32.40
                    Lost or damaged fleet card (Did not report) $108.00
                    Misuse of fleet card (i.e. use of fleet card for refuel when no booking was made) $540.00
                    Without prejudice to Tribecar's other rights, Tribecar shall be entitled to forfeit and/or retain
                    any part of the Hirer's Deposit in the event that the Hirer breaches, fails or neglects to pay any
                    sums or charges due to or owing to Tribecar. For instance, late fees, damages caused, accident
                    excess, penalty fees and etc.
                    The Deposit will be fully refunded, interest-free only when the Hirer has cancelled his/her account
                    with Tribecar and such Hirer has fully discharged his/her obligations stated in the Agreement. Such
                    refund shall be made within a period of up to 45 working days upon the Hirer’s fulfilment of the
                    aforesaid conditions precedent in this Clause 4(l).
                    The Hirer acknowledges and agrees that Deposit may not be used to set off any part of any relevant
                    rental fee due and owing from the Hirer to Tribecar.
                    The Hirer's account will be automatically closed after the account remains inactive for a period of
                    24 consecutive months. For the avoidance of doubt, the first dormancy check will be carried out in
                    February 2019. A Hirer (or the Hirer's e-Wallet) is considered inactive if he/she has not made a
                    booking for the last twenty-four (24) consecutive calendar months. To be able to make a booking, the
                    Hirer shall ensure that his/her e-Wallet does not have a negative balance. After making a booking,
                    the Hirer's account will be deemed to be active for another twenty-four (24) months.
                    Tribecar do not guarantee the specific make or model of the vehicle that is reserved by the Hirer.
                    The vehicle that is available on pickup may differ from the vehicle reserved by the hirer but will
                    be similar in category, class, cost, sitting capacity or size. Tribecar shall make the sole
                    determination in what constitutes a similar vehicle.
                    Rental of cars by the hirers can be for both leisure and commercial usage. For Grab purposes, Hirers
                    are advised to download and check the validity of the documents required (Log card (Vehicle
                    Registration Details), Certificate of Insurance, PHV Decal) at least 1 day in advance and upload
                    them to Grab's App for updating of the car plate. Bookings will not be refunded by Tribecar for any
                    delay in uploading or approval from any ride-hailing companies.
                    Some Vehicles on the Tribecar platform may not be available for use for ride-hailing purposes. These
                    Vehicles do not have the Private Hire decal and do not have the appropriate Z10 insurance (only
                    R10). Specifically, the Opel Corsa (Standard Sedan), Opel Crossland (Standard SUV), COE cars and all
                    Vehicles under the Super Economy Category and Mercedez-Benz.

                    VEHICLE COLLECTION
                    On or prior to the commencement of the Hirer's Rental Period, as the Hirer is in the process of
                    collecting the relevant Vehicle:

                    Upon the commencement of the Hirer's Rental Period, the Hirer shall be provided a checklist setting
                    out the condition of the Vehicle ("Vehicle Checklist"). Such Vehicle Checklist may be found in the
                    glove compartment of a Vehicle or a digital version of such Vehicle Checklist may be provided to the
                    Hirer. The Hirer shall inspect the exterior and interior of the Vehicle against the Vehicle
                    Checklist for any dent, scratches during collection.
                    The Hirer shall report to Tribecar any apparent defects found in relation to the Vehicle which is
                    not listed under the original condition of the Vehicle as set out in the Vehicle Checklist, before
                    leaving the designated parking lot which the Vehicle had been parked at the start of the Rental
                    Period. If no report is made by the Hirer, the Hirer acknowledges and agrees that the prevailing
                    condition of the Vehicle will be deemed to be aligned with previous condition as it was handed over.
                    To make a report to Tribecar, the Hirer shall to take such photos of the Vehicle as is necessary to
                    reflect any defects and/or discrepancies in the prevailing condition of the Vehicle vis-a-vis the
                    original condition of the Vehicle and send such photos as evidence of such defects or discrepancies
                    to support@tribecar.com before leaving the designated parking lot which the Vehicle had been parked
                    at the start of the Rental Period.
                    The Hirer shall be required to check if fuel light of the Vehicle lights up UPON IGNITION of the
                    Vehicle's engine and the Hirer shall report any issues with the starting of the Vehicle with
                    photographic evidence of fuel light within 15 minutes upon collection of the Vehicle.
                    The Hirer shall be required to check for the presence of the fuel card in Car Club by Tribecar
                    vehicles and the hirer shall report the issue to Tribecar if the fuel card is found to be missing.
                    If the hirer is found to fail to report the missing fuel card, the hirer will be subjected to a
                    $108.00 fuel card replacement fee.
                    The Hirer's Rental will start exactly at the start of the relevant Rental Period which the Hirer had
                    booked and not based on the time which the Vehicle is unlocked by the Hirer.
                    Any early collection of the Vehicle up to thirty (30) minutes prior to start time of the Hirer's
                    Rental Period without any additional costs will be permitted, but will not be guaranteed and shall
                    be subject to the availability of the relevant Vehicle, as shall be determined by Tribecar at its
                    discretion.
                    At start of the Rental Period or whilst the Hirer is in the midst of collecting the Vehicle, if the
                    Hirer does not confirm that there is any damage to the Vehicle or issues with the Hirer's Rental via
                    the Website (or via official support channels such as email), the Hirer acknowledges and agrees that
                    Tribecar shall be entitled to presume that there is no damage to the Vehicle or issues with the
                    Hirer's booking. This is particularly relevant to situations where the Hirer fails to complete the
                    Start Trip process on the Website properly or otherwise.
                    The Hirer’s Rental shall be considered to have been fulfilled/used in full upon the conclusion of
                    the Hirer’s Rental Period. Therefore, even if the Hirer had not utilised the Vehicle during the
                    relevant Rental Period, OR, if he/she had utilised the Vehicle for a fraction of the Rental Period,
                    there shall be no refund or partial refund of the any portion of the fees paid by the Hirer for the
                    relevant Rental.
                    If the Hirer collects the car later than start of the Rental Period and due to breakdown of the
                    Vehicle he is not able to use the Vehicle, he shall be entitled for the refund of the balance of the
                    booking via the e-Wallet. This is of particular importance in cases where Hirers books the Vehicle
                    for extended period of time and significant amount of time has lapsed before he/she attempts to
                    collect the Vehicle.
                    If the Hirer is unable to Start Trip for any reason (e.g. due to low Vehicle battery), the Hirer
                    must call in to the emergency hotline for assistance and reporting. If the Hirer fails to call in
                    and only emailed in of such occurrence, the Hirer may not be able to obtain a partial or a full
                    refund of his booking due to the delay / non-call reporting. The Tribecar staff will endeavour to
                    provide a replacement Vehicle for such issue.

                    VEHICLE RETURN
                    At the end of the Hirer's Rental Period, as the Hirer is in the process of returning the relevant
                    Vehicle:

                    The Hirer shall be required to return the Vehicle in the same condition as it was provided to Hirer
                    at the start of the Rental and the Hirer shall be responsible for any repair or refurbishment costs
                    for any new defects found to be caused by Hirer. The aforementioned costs shall be added to the
                    costs of the Hirer's Rental, subject to conditions.
                    The Hirer shall be required to refuel the Vehicle using unleaded RON 95 / 98 or V Power. For
                    Vehicles in the Standard or Premium categories, the Hirer is required to refuel such Vehicles using
                    unleaded RON 95 and above (RON 98 or V Power). For Vehicles that uses Diesel, the Hirer shall be
                    required to refuel such Vehicles using Diesel (Euro5 or better).
                    In the event that the Hirer were to be found to have returned a Vehicle in a condition whereby the
                    fuel light lights up upon the subsequent ignition of the Vehicle's engine, he/she hereby
                    acknowledges that Tribecar shall be entitled to deduct S$50.00 from his/her e-wallet as penalty for
                    his/her failure in refuelling the Vehicle. The Hirer may provide any form/type of document (for
                    example: photos, videos, receipts, timestamps) as evidence to appeal for the charge/s.
                    For Vehicles that is on the full tank return policy, if the Hirer returns the Vehicle with less than
                    a full tank of fuel, Tribecar may at its sole and absolute discretion levy a "Fuel Top-up Charge",
                    being (i) a sum of $37.80 in fuel fees per 1/8th of the tank or part thereof, or (ii) such amount of
                    fuel fees per 1/8th of the tank or part thereof, as shall be determined based on the following
                    formula:-
                    Maximum Fuel Tank Capacity
                    8 x Prevailing Fuel Rate (S$ 11) x2

                    For the purposes of this Agreement:-
                    "Maximum Fuel Tank Capacity" shall refer to the maximum capacity of the relevant Vehicle’s fuel
                    tank.
                    "Prevailing Fuel Rate" shall refer to the prevailing per litre price of the petrol required for a
                    certain Vehicle.

                    For Car Club by Tribecar category vehicles, if the hirer returns the vehicle with less than ¼ tank
                    of fuel, the hirer will be subjected to a $37.80 "Fuel Top-up Charge".
                    For electric vehicles, if the hirer returns with a charge at or below 50%, the Tribecar reserved
                    fuel penalty applies. If the hirer returns with a percentage of less than 15% and the vehicle breaks
                    down, the hirer will be charged $64.80 for 2-way towing to the charging station and an extra $19.44
                    for time charge (for traveling time and charging time of 30 minutes from 30 - 70%).
                    The Hirer shall be required to end the Rental on or prior to the end of the Rental Period which was
                    booked by the Hirer and the Hirer shall be required to return the Vehicle to its designated parking
                    lot before the end of the Hirer's Rental Period. The Rental shall only be deemed to have ended: (i)
                    at the end of the Hirer’s Rental Period, or (ii) after the Hirer has clicked on "End Trip" button on
                    the Website, whichever is later.
                    The Hirer hereby acknowledges and agrees that late return penalties will be imposed by Tribecar if
                    the Hirer does not end his/her Rental successfully prior to the end of his/her Rental Period.
                    Accordingly, the Hirer should allocate approximately 10 - 15 minutes in advance to return the
                    Vehicle to its designated parking lot and end the Rental before the conclusion of the Rental Period
                    that he/she had booked.
                    For each fifteen (15) minute block (or part thereof) which the Hirer has returned the Vehicle late,
                    the Hirer acknowledges and agrees that he/she will incur a late return penalty of S$10.80 (or the
                    relevant peak or festive rate for that hour, whichever is higher). The subsequent Hirer of the
                    relevant Vehicle (if affected by the late return of the Vehicle) will be rewarded with S$5.40 (or
                    50% of the late fees paid by the previous hirer, whichever is higher) in credits as compensation.
                    Compensation is limited to the first hour of late fees.
                    Tribecar will not be responsible for loss of or damage to the Hirer's personal belongings and the
                    contents therein (including any valuables, even if Tribecar has been advised on such contents)
                    during the storage of such personal belongings in the Vehicle or while removing such personal
                    belongings from the Vehicle and the Hirer hereby agrees to release Tribecar from any liability in
                    respect thereof.
                    The Hirer shall return the Vehicle to the Pick Up Location upon the termination of this Agreement
                    (i.e. when the Hirer cancels his/her account with Tribecar). In the event where the Hirer fails to
                    return the Vehicle to the Pick Up Location (i) when the Hirer cancels his/her account with Tribecar,
                    or (ii) after a 2 hours period after the end of his/her Rental Period (for any reason
                    whatsoever),Tribecar shall be entitled to repossess the Vehicle at the Hirer's expense at any time
                    without giving him prior notice and the Hirer hereby irrevocably authorizes Tribecar or its
                    representatives to enter into any premises where the Vehicle is kept to repossess the same without
                    being liable to any action or proceeding at the suit of the Hirer or any person(s) claiming under or
                    through him. The steps that Tribecar may take to repossess the Vehicle include, but are not limited
                    to, entering the Vehicle with its spare key, towing the Vehicle, and/or relying on third party
                    vehicle repossession services.
                    In the event that the Vehicle is repossessed by Tribecar under this Agreement:
                    The Parties hereby agree that Tribecar will not be liable for the loss of any personal belongings of
                    the Hirer in the course of repossession; and
                    The Hirer will remain liable for any damage to the Vehicle at the point of repossession.
                    At the end of the booking or during the return of the car, if the Hirer does not confirm that there
                    are damages on the car or issues with the Hirer's Rental booking via the Website (or via official
                    support channels such as email), the Hirer hereby acknowledges and agrees that Tribecar shall be
                    entitled to presume that the Hirer will be responsible to any damages found later on the car and
                    that the Hirer will be responsible for issues with the Hirer's Rental booking. This is particularly
                    relevant to situations where the Hirer fails to complete the End Trip process on the Website
                    properly or otherwise.
                    The Hirer must ensure the Vehicle (e.g. cars, motorcycles) is properly locked and secured after
                    Ending Trip. If it is not secured, the Hirer must make a report of it within 5 minutes of the
                    incident by Email or Call. If the Vehicle is misused or stolen, the Hirer that did not secure the
                    Vehicle may be liable for damages suffered by Tribecar.
                    The Hirer must exercise every caution when returning the vehicle during End Trip so that the next
                    customer or Tribecar or vendor may retrieve the Vehicle in the condition that is the same as it was
                    when the Hirer Started Trip. For clarity, the Vehicle must not be damaged or changed due to the
                    final parking position of the Hirer. The Hirer agrees to return the Vehicle to the designated
                    parking position (as indicated by the Tribecar system) unless instructed by the Tribecar. It is
                    wholly the responsibility of the hirer to ensure that the final parking position to be free of
                    hazards (such as Fire, Flood and Falling Risks) and be free of compliance issues from the government
                    (such as Breaching Parking Regulations, Breaching Traffic Act and Town Council Acts). If the Hirer
                    fail to exercise caution in returning the Vehicle, the Hirer may be liable for damages caused by
                    his/her improper choice of parking position. For example, Hirer choosing to park near a pile of
                    debris (designed parking location or otherwise) and the debris falls on to the Vehicle. As another
                    example, Hirer choosing to park a Tribecar Motorcycle (designed parking location or otherwise)
                    beside a sinkhole.
                    If the Hirer neglects to End Trip and the Tribecar has to End Trip on behalf of the Hirer, a service
                    fee of $10.80 (or 1 hour of the peak hour rate, whichever is higher), will be levied to the Hirer.
                    Hirers may only use the Tribecar system to End Trip to lock and secure the Vehicle. Hirers may not
                    use any other methods to secure the vehicle (e.g. using the car alarm remote, car central locking,
                    steering bar locks, etc.) when ending their Rental Period. If there are costs incurred to restore
                    the use of the vehicle (e.g. requiring the use of spare key to unlock the Vehicle by a Tribecar
                    staff), said cost will be levied on the hirer that did not comply.
                    With the introduction of the item retrieval function, Hirers may gain access to the Vehicle after
                    the Trip has ended. Thus, the validity of the previously uploaded End Trip photos may be affected.
                    Customers are encouraged to resend their ETP if they so prefer. Also, Hirers are not allowed to
                    operate or drive the Vehicle after regaining access to the Vehicle while using this function.
                    Additional administrative fees may apply if the Hirer is in breach of this clause.

                    BREAKDOWN
                    The Hirer acknowledges and agrees that in the event that a Vehicle has broken down, Tribecar will
                    endeavour to provide a replacement vehicle of similar class (in accordance to Clause 4(p)) to
                    replace the Vehicle and if Tribecar is unable to procure a replacement vehicle, all subsequent
                    confirmed bookings which are scheduled within the next 12 hours of the Vehicle breakdown may be
                    cancelled, and the affected Hirers whose confirmed bookings have been cancelled shall receive a full
                    refund of the rental fees in relation to such cancelled bookings.
                    The Hirer acknowledges and agrees that in the event that a Vehicle has broken down, Tribecar will
                    endeavour to provide a replacement vehicle to replace the Vehicle and if Tribecar is unable to
                    procure a replacement vehicle, all subsequent confirmed bookings which are scheduled within the next
                    12 hours of the Vehicle breakdown may be cancelled, and the affected Hirers whose confirmed bookings
                    have been cancelled shall receive a full refund of the rental fees in relation to such cancelled
                    bookings.
                    If the Vehicle that the Hirer rented is met with an accident, the Hirer shall be required to inform
                    Tribecar immediately. The Hirer acknowledges and agrees that he/she shall not make any repairs or
                    permit any repairs to be made to the Vehicle without Tribecar's approval. If the Hirer is found
                    towing and/or repairing the rented Vehicle at any workshop unauthorized by Tribecar, Tribecar shall
                    be entitled to impose such relevant penalty on the Hirer (in accordance with the Penalty Charges
                    pursuant to Clause 11).
                    The maintenance of the vehicle will be borne by Tribecar. Notwithstanding the above, the Hirer shall
                    be required to take note of the Vehicle's engine temperature, The Hirer hereby acknowledges and
                    agrees that the Hirer shall fully indemnify Tribecar and/or bear all the costs and expenses which
                    will be incurred to repair of the Vehicle in the event of any overheating of the Vehicle's engine
                    which is attributable to the Hirer's acts, omissions and/or negligence. If there are any issues with
                    the Vehicle due to wear and tear and/or a Vehicle breakdown, the Hirer shall report such issues to
                    Tribecar immediately and seek Tribecar's advice/permission before proceeding to fix such issues with
                    the Vehicle.
                    Tribecar shall provide 24-Hours breakdown and emergency service at no extra cost to the Hirer if the
                    Vehicle suffers a breakdown or is involved in an accident. To utilise Tribecar's breakdown and
                    emergency service, the Hirer will need to press the "Need Help" - Emergency Button on the Website
                    during their Rental to call Tribecar's contact center.
                    The Hirer acknowledges and agrees that the following scenarios would not constitute a breakdown of
                    the Vehicle (i) where the Vehicle's keys are locked inside the Vehicle, (ii) where the steering
                    wheel is locked, (iii) where a punctured tyres needs to be changed and (iv) where the stalling of
                    the Vehicle is caused by empty fuel tank. The Hirer hereby acknowledges and agrees to pay Tribecar
                    the relevant fees amounting to S$54.00 as and when the 24-hour breakdown and emergency service is
                    found to have been deployed by the Hirer for the aforesaid scenarios which are not deemed to
                    constitute a breakdown of the Vehicle.
                    The Hirer must ensure that the Vehicle has reasonable amount of fuel, engine oil, auto-transmission
                    oil, radiator water at all times. The Hirer acknowledges and agrees that his/her failure to perform
                    such checks may result in damage to the Vehicle and Tribecar reserves its right to demand for
                    compensation from the Hirer for any damage to the Vehicle which is attributable to the acts,
                    omission and/or negligence of the Hirer.
                    In the event that the Vehicle breaks down and is unable to move, hit on the 'Breakdown Button' on
                    Hirer's account page and a tow service will be engaged.
                    The Hirer acknowledges and agrees that he/she will be responsible for any damage, cost or expenses
                    relating to the breakdown of a Vehicle which is due to the Hirer act, omission and/or negligence
                    which results in the the wrong type of fuel being pumped into the Vehicle.
                    If the Hirer meets with an accident (e.g. collision with another car, causes damage to the hired
                    car, etc) and fails to report it within 24 hours to Tribecar's designated reporting center, his
                    purchased additional insurance product (e.g. CDW, PAI) will be automatically voided without a refund
                    The Hirer’s account may be temporarily suspended pending the investigation outcome of the breakdown
                    or accident. For avoidance of doubt, the Hirer may not be provided access or means to make another
                    booking for another Vehicle.

                    ACCIDENT AND INSURANCE
                    The Parties acknowledge that the relevant owners of the Vehicles (i.e. Tribecar Partners who have
                    authorised Tribecar to utilise such Vehicles for the provision of the Services) shall have insured
                    the Vehicles against: all third party risks and liabilities (up to SGD 500,000 coverage for property
                    damage unless otherwise additionally provided); loss or theft to the Vehicle; and damage to the
                    Vehicle, subject to the Non-waivable Excess, as set out in the table below:
                    OWN DAMAGE EXCESS PER ACCIDENT
                    Location 1000cc to 2500cc Audi A3, Toyota Veilfire/Alphard
                    & Nissan Elgrand 1000cc to 2500cc
                    (New Driver)
                    Singapore S$3,240 S$4,860 S$5,400
                    Malaysia S$6,480 No coverage* S$5,400
                    Singapore (with CDW) S$1,620 S$3,780 S$4,320
                    Singapore (with TribeShield) S$3,240
                    (Claimable excess from $2,700, subject to a minimum charge of $540) S$4,860
                    (Claimable excess of $3,240, subject to a minimum charge of $540) S$5,400
                    (Claimable excess of $4,860, subject to a minimum charge of $540)
                    Malaysia (with TribeShield) Not available, coming soon. Not available, coming soon. Not available,
                    coming soon.
                    3rd PARTIES EXCESS PER ACCIDENT
                    Location 1000cc to 2500cc Audi A3, Toyota Veilfire/Alphard
                    & Nissan Elgrand 1000cc to 2500cc
                    (New Driver)
                    Singapore S$3,240 S$4,860 S$5,400
                    Malaysia S$6,480 No coverage* Not available
                    Singapore (with CDW) S$1,620 S$3,780 S$4,320
                    Singapore (with TribeShield) S$3,240
                    (Claimable excess from $2,700
                    with a minimum charge of $540) S$4,860
                    (Claimable excess of $3,240^) S$5,400
                    (Claimable excess of $4,860^)
                    Malaysia (with TribeShield) Not available, coming soon. Not available, coming soon. Not available,
                    coming soon.
                    ^ Subjected to a minimum co-insurance charge of $540

                    In the event of an accident, the Hirers shall:
                    obtain vehicle registration numbers, names, NRIC and addresses, telephone number of the parties
                    involved and of witness;
                    not admit fault or liability;
                    not abandoning the Vehicle without adequate provision for safeguarding and securing the same;
                    notify Tribecar immediately;
                    make a police report if any party suffers injury; and
                    not make private settlement with any third party without permission of Tribecar.
                    If the Hirer fails to obtain the necessary information in clause 8(b), CDW will be voided
                    immediately regardless of status of purchase of the CDW. Additionally, Tribecar, the owners of the
                    hired Vehicle, and the insurer may exercise their right to repudiate any claims in their
                    professional capacity as they deem appropriate.
                    CDW or Collision Damage Waiver, may be offered to the Hirer as a means to reduce the Non-waivable
                    Excess collectable when the Hirer meets with an accident. The reduced Non-waivable Excess is listed
                    in table 8a. CDW does not apply for accidents when the vehicle is written off or treated as total
                    loss (e.g. beyond economical repair).
                    Tribecar may provide an exception to Hirer Covenant at Tribecar's discretion but insurance excess
                    per party per accident will be doubled.
                    The excess amount must be paid to Tribecar or its appointed representative, without demand, within
                    48 hours from the accident date/time regardless of which party is at fault. Tribecar will determine
                    at its sole discretion when to refund the collected excess amount if at all applicable.
                    PAI add-on is not available for New Drivers and certain Vehicles. You will be given the option to
                    purchase PAI if it is available for the Vehicle.
                    CDW add-on for the Super Economy category is only available for select Vehicles. You will be given
                    the option to purchase CDW if it is available for the Vehicle. Should you purchase CDW for the Super
                    Economy category, you must give us the first rights to negotiate private settlement with the third
                    party. If the private settlement is unsuccessful then can you file a claim with the insurer.
                    Insurance for Vehicles under the Super Economy DO NOT COVER UNNAMED DRIVERS. If you allow anyone to
                    drive the car without permission, you will NOT have insurance coverage whatsoever. The Vehicles are
                    also not permitted for use as PHV usage such as Grab or Gojek.
                    The Hirer must report any and all car accident (whether severe or minor), within 24 hours of its
                    occurrence. In the event that the Hirer fails to report an accident within the stipulated timeframe,
                    the relevant insurance company may repudiate the case and all claims will be reported directly
                    against Hirer regardless of whether CDW is purchased. Furthermore, the Hirer will be liable for all
                    repairs and losses for the hired Vehicle.
                    In order to perform the accident reporting, the Hirer must book the Vehicle involved in the accident
                    and travel to the reporting center with the said Vehicle for reporting. The driver that was driving
                    during the accident must also be present during the accident reporting. If for any reason the
                    Vehicle is not in operational condition, Tribecar will engage a towing service at the cost of the
                    Hirer to bring the Vehicle to the reporting center.
                    When an accident involving the Hirer occurs, regardless of own damage or 3rd party vehicle, the
                    Hirer pre-authorizes Tribecar to deduct the insurance excess amount (if any) from their credit card/
                    debit card/ e-wallet / bank account regardless of the insurance outcome. Tribecar will refund (if
                    any) the balance of insurance excess amount, less the cost of the accident, when the details of the
                    accident are finalized.
                    Insurance excess only covers the bodywork of the vehicle and Hirer will be liable for the loss of
                    use subject to duration required for repair.
                    Tribecar will not be responsible for any incidental costs, e.g. reimbursement of taxi fares etc, due
                    to vehicle breakdown / accident.
                    When there is an accident, the Hirer is required to pay for the Loss of Rental from the time of
                    accident (or from the end of the original booking, whichever is later) until the time the car is
                    repaired and returned to the designated parking location of the Vehicle.
                    All Hirer solely pre-authorises Tribecar and its vendor and the subcontractors of the vendors (the
                    Pre-authorised Parties), including but not limited to Roset Limousine Services Pte Ltd, to handle
                    and be in-charge of all personal accident injury claim arising from any accident involving the
                    Vehicle that was booked by the Hirer. The Hirer also instructs the Pre-authorised Parties to appoint
                    a solicitor(s) and instruct them as the Pre-authorised Parties deem fit to aid the Hirer in recovery
                    of all damages pertaining to the Hirer's personal accident injury claim and property damage claims.
                    The Hirer shall take note that in an event that a settlement cannot be established with the relevant
                    third parties of the accident, an accident claim may be escalated to court in which only one Writ of
                    Summons will be issued which consist of the Hirer's personal accident injuries claim and Hirer's
                    property damage claims. The hirer also agree to fully indemnify the Pre-authorised Parties that in
                    the event that Hirer breached the obligation as stated in this clause (e.g. appoints another party
                    to handle claims by the Hirer, sends Writ of Summons independently), and in said event the Hirer
                    shall bear all legal costs and expenses incurred and/or consequential losses to the Pre-authorised
                    Parties.
                    In case of write-off or total loss of vehicle (e.g. beyond economical repair), the Non-waivable
                    Excess for Tribecar's Vehicle (for cars, 1st Party or Own Damage) will be set to S$6,480. This
                    amount is not reducible by CDW, PAI or any additional product purchased on Tribecar.
                    Insurance coverage is voided and/or withdrawn immediately without notice if the Hirer or the
                    Authorised Driver/Rider performs or commits or aid in committing acts that are not covered or
                    permitted by Tribecar or its vehicle providers' insurers (as mentioned in 2a). This may include
                    drink-driving, racing, speeding, subletting, providing unauthorised driving tuition, transporting
                    illegal goods (such as cigarettes or human trafficking) and etc.. Without insurance coverage, the
                    hirer will not be able to file an insurance claim if an accident were to happen.
                    If the hirer fails to file and complete the necessary accident reporting (a valid filing receipt by
                    GIA must be obtained to signify successful reporting) or fails to make in full the insurance excess,
                    his or her insurance coverage may be denied.
                    Insurance coverage (specifically third party risks and liabilities, loss or theft to the Vehicle,
                    and damage to the Vehicle) are supplied solely by the providers or owners of the Vehicle. Tribecar
                    does not explicitly provide insurance coverage to the Hirer.

                    PERSONAL ACCIDENT INSURANCE
                    The Hirer hereby acknowledges and agrees that:-
                    In order to enjoy the benefits provided by the Personal Accident Insurance (PAI), the hirer must
                    have paid for this add-on during the creation of the Rental booking.
                    The Hirer must provide a police report in addition to the usual GIA report for all accidents
                    including personal injuries.
                    The Hirer must inform and come down to Tribecar's appointed workshop for all insurance claims.
                    The above PAI insurance plan covers both the Hirer and the Authorised Drivers up to 65 years old.
                    Claims reimbursement will be made within 60 days from date of document submission and the Hirer
                    hereby acknowledges and agrees that the payment of such claim reimbursement will be ultimately
                    subject to the approval of the relevant insurance provider.
                    The Hirer shall be responsible to provide the following documents to facilitate a claim under the
                    PAI:
                    Death Claim: Death certificate, autopsy report, coroner's findings
                    Permanent Disability Claim: Medical Report
                    Temporary Disability Claim: Medical leave certificates
                    Medical Expenses Claim:
                    Original medical bills & receipt
                    Copy of NRIC / Work Permit (if applicable)
                    A copy of inpatient discharge summary.
                    Any other documents/receipts that may be requested by the Insurer from time to time.
                    Motorcycles (or any two-wheeled) vehicles are explicitly excluded from Personal Accident Insurance
                    (PAI) plans.
                    For commercial vehicles, the driver is covered by PAI only when he/she is driving the vehicle. It
                    excludes injuries from loading, unloading, deliveries, etc.
                    Territorial limit of the coverage is anywhere in Singapore and West Malaysia in direct connection
                    with the use of the Vehicle whilst driving on the road.
                    Suppression of material facts or misstatements when filling a claim may lead to the claim being
                    denied.
                    Tribecar will undertake such reasonable endeavours to process and submit the Hirer's PAI claim to
                    the insurer but will NOT be held liable or responsible for any delays and claim rejection fully or
                    partially by the Insurer and thereby reserve their rights to discontinue or terminate this Insurance
                    scheme at any time without prior notice.

                    PARKING AND TRAFFIC OFFENSES
                    Should the Vehicle rented by the Hirer be involved in any traffic offence during the period, the
                    Hirer agrees to be liable for any issues with the vehicle that arise under the Hirer's care and
                    agree to pay all fines and any amount government or semi-government authorities shall levy or
                    impose.
                    The Hirer shall ensure that he/she has a valid driving license during Rental Period and that he/shes
                    complies with the Road Traffic Act. (Cap. 276).
                    If the Hirer fails to make payment for smart parking at gantry-less car parks, the Hirer will be
                    charged the parking amount together with an additional administrative fee of $21.60.

                    PRICING / CANCELLATION POLICY / PENALTY CHARGES
                    All rates are quoted in Singapore dollars and is inclusive of 8% GST (Goods and Services Tax) which
                    will be borne by the Hirer.
                    Rental is calculated on an hourly basis. The minimum Rental Period which a Hirer may book is one
                    hour.
                    Cost/fees/surcharges of the rental/booking shall follow the listed rates. However, bookings that
                    spans peak festive period or high demand period may carry a surcharge or have a different rate.
                    Furthermore, due to extensions/adjustments/cancellations/alterations, booking rates/charges may be
                    calculated differently. As such, the system and Tribecar's determination of the cost of the
                    rental/booking shall be final.
                    In cases where there is electronic pricing errors, e.g. when rental/prices/surcharges deviates and
                    is lower by more than 20% of usual rates/market rates, Tribecar shall have to right to cancel and
                    refund bookings made under erroneous rates and refuse to honour the erroneous rates without any
                    compensation. If the booking has commenced or has been completed before the discovery of the error,
                    Tribecar shall have the right to recover the difference in rental due to the error.
                    When the Hirer is liable to Tribecar for penalty charge(s), late fee(s), and/or any charges or fees
                    owed to Tribecar, the Hirer hereby acknowledges and agrees that Tribecar shall be authorised to
                    deduct such outstanding amounts due and owing to Tribecar from the Hirer's credit card/ debit card/
                    e-wallet/ bank account.
                    All disputes with regards to invoicing, pricing, rental, booking, membership, fees, charges,
                    penalties, contracts must be raised within 7 calendar days of issuance, delivery, communication by
                    Tribecar (whichever is earlier). Otherwise, the dispute request will not be entertained or reviewed.
                    (Until further notice, Auth Hold for Audi A3 is waived.) For certain classes of car categories (e.g.
                    Audi A3 in Premium Sedan and Mini Cooper in Special Drive), the Hirer will be requested to approve
                    an authorisation hold of S$200.00 by Tribecar. This authorisation hold will reduce the Hirers credit
                    card's credit limit but a charge will not be captured unless there is/are outstanding fee(s) due to
                    Tribecar. It may be held for the length of the Hirer's Rental Period or for 7 days, whichever
                    duration is longer. The Hirer may also be requested to re-do the authorisation if the authorisation
                    has lapsed. This authorisation charge is tied to the Hirer's account and may be used to offset any
                    charge(s) due to Tribecar for any booking/penalties/other charges. If the Hirer is unable to
                    complete the authorisation hold, there will be no refund or partial refund for the booking. This is
                    so even if the booking was utilized partially or not utilised at all.
                    If the previous Hirer is late according to the scenario below, the current hirer may cancel the
                    booking and receive a full refund on his/her booking.

                    Duration of booking Minimum waiting time before full refund on cancellation
                    1 – 2 hours 5 mins
                    3 – 23 hours 15 mins
                    More than or equals to 24 hours 45 mins
                    For avoidance of doubt, the current Hirer will not be entitled to receive a share of the relevant
                    late fees (i.e. to be charged on the previous Hirer) if he opts to cancel and refund his booking.
                    The current Hirer will only be entitled to receive a share of the relevant late fees (i.e. to be
                    charged on the previous Hirer) if the current Hirer proceeds with his booking.

                    Hirer is responsible for ensuring their account with their private hirer service provider (e.g.
                    Grab) is updated. In the event of any discrepancies between the Hirer's account with Tribecar and
                    the Hirer’s account with their private hirer service provider, Tribecar will at its best effort to
                    assist the Hirer, but Tribecar will not have any obligations to provide the Hirer any refunds.
                    Tribecar will at its best effort basis put up an online announcement or email Hirers to inform on
                    any changes to this Agreement and/or the terms and conditions for the use of the Website and
                    Services.
                    Tribecar will have the right to cancel any of the Hirer's booking/s for any of the following
                    reasons: (i) for any dispute with Tribecar relating to any pricing discrepancy; (ii) the Hirer
                    abusing the Tribecar Website and/or system; or (iii) the Hirer not complying with the terms and
                    conditions stated by Tribecar in this Agreement.
                    The up to date penalty fees and charges may be found in the FAQs of the website:
                    https://help.tribecar.com/
                    In the best interests of the community and the business, the Hirer hereby acknowledges and agrees
                    that Tribecar has the right to unilaterally cancel, or amend bookings, on behalf of the Hirer for
                    reasons other than set out in Clauses 4(h), 11(d) and 11(k), provided always that:-
                    Tribecar shall provide to the Hirer notification (e.g. email, SMS or call) at the earliest
                    opportunity notice of such cancellation and/or amendments to the Hirer’s bookings; and
                    Tribecar shall reimburse the Hirer the full amount of the booking fees paid by the Hirer for the
                    relevant Rental Period in respect of (1) a booking cancelled by Tribecar in accordance with this
                    Clause 11(m), or (2) a booking amended by Tribecar in accordance with this Clause 11(m) which the
                    Hirer subsequently cancels at any time prior to the Rental Period. For the avoidance of doubt, the
                    reimbursement by the Tribecar under this Clause 11 (m)(ii) shall only be by way credits into his/her
                    e-wallet, and no reimbursement shall be paid in cash to the Hirer.
                    In light of Tribecar’s right to cancel or amend the Hirer’s bookings in accordance with this Clause
                    11(m), the Hirer hereby acknowledges and agrees that the onus shall be on the Hirer to check if
                    there are any cancellation or amendments to the Hirer’s bookings within twenty-four (24) hours prior
                    to the relevant Rental Period. In the event that the Hirer does not wish to proceed with a booking
                    which has been amended by Tribecar in accordance with this Clause 11(m), such Hirer may cancel such
                    amended booking at any time prior to the start of the relevant Rental Period and the Hirer will be
                    entitled to a full reimbursement of the relevant booking fees to their e-wallet in accordance with
                    Clause 11(m)(ii). If the Hirer does not cancel such amended booking before the start of the relevant
                    Rental Period, the Hirer hereby acknowledges and agrees that he/she shall be deemed to have accepted
                    the amendment of the relevant booking by Tribecar and the Hirer will not be entitled to any
                    reimbursements for such booking amended by Tribecar.
                    The Hirer’s account may be temporarily suspended pending the investigation of the potentially
                    deleterious actions by the Hirer. Including but not limited to Hirer's action such as entering
                    Malaysia without permission, unauthorised use of vehicle, abusing behaviour of Hirer towards staff
                    of Tribecar, Hirer being non-compliant to safety orders by Tribecar, use of non-approved petrol
                    grades, abandoning car during breakdown or for any reason, subjected subletting, disputes with Hirer
                    in rental or booking, refusing to make payment for damages caused to Tribecar Vehicles, Hirer
                    subject to police investigation and etc. Hirer may email in for appeal to uplift the suspension.

                    TERMINATION OF AGREEMENT
                    Tribecar reserves the right to terminate the Agreement if the Hirer breaches any provisions in this
                    Agreement; or do or allow to be done any act or thing which in the opinion of Tribecar may
                    jeopardize Tribecar's rights to the Vehicle and the safety of the Vehicle, Tribecar's property and
                    staff, and the public.
                    In view of public safety and the safety of Tribecar's Vehicle, property and staff, if the Hirer has
                    12 or more demerit points (under the DIPS program by the Traffic Police), or if the hirer has been
                    blacklisted by other firms (affiliated or otherwise) for any reason whatsoever, Tribecar reserves
                    the right to terminate the Agreement.
                    For avoidance of doubt, if the e-Wallet is negative (i.e., the Hirer owes Tribecar payment), and if
                    the money owed is the same or more than the security deposit paid by the Hirer, Tribecar may first
                    deduct the amount owed by the Hirer from the security deposit and close the member's account and/or
                    terminate this agreement without notice.
                    Prior to the termination of this Agreement, the Hirer has to close his/her account by sending notice
                    to Tribecar. The Hirer has to do so by filling up the termination form and mailing it over to
                    Tribecar. All balances in the e-Wallet will not be returned and the Hirer are encouraged to exhaust
                    them first prior to the account closure.
                    If Tribecar exercises the right to terminate the Agreement, Tribecar will fully refund the Security
                    Deposit and the balance of his e-Wallet (including any future booking that will be refunded as
                    credit to the e-wallet first) to the hirer via a cheque or such other manner of payment which
                    Tribecar may reasonably decide at its absolute discretion. This refund only occurs if there is no
                    outstanding amount due to Tribecar and if Tribecar has no outstanding or ongoing unresolved issues
                    with the Hirer.
                    In exercising its right to terminate a Hirer's account, Tribecar may immediately suspend the account
                    of the Hirer and suspend all future bookings made by the Hirer. Tribecar will also send the hirer an
                    notification (via phone call/SMS/letter/email) of the suspension.
                    If the Hirer did not make any bookings prior to his account termination, Hirer will be charged an
                    administrative fee of S$5.40 from Hirer's deposit.
                    If the Hirer’s age is outside of the stipulated permitted age range, his account will be
                    automatically suspended, all insurance coverage will be withdrawn and his or her account will be
                    terminated by Tribecar in accordance with Clause 12(e)
                    Upon the termination of this Agreement, the Hirer agrees to pay Tribecar
                    All arrears of the Rental and all other sums accrued and unpaid at the date of termination;
                    Cost of all repairs required at the date of termination;

                    BOOKING SITE USE
                    This booking engine may contain links to resources located on servers or websites operated by
                    parties other than Tribecar. If the Hirer uses these links, he/she leaves this booking engine (i.e
                    this Website). Such hyperlinks are provided for his/her reference and convenience only. The
                    inclusion of hyperlinks on this booking engine to other websites or servers does not imply any
                    endorsement of the material on such websites or servers (including but not limited to material
                    relating to travel information or services) or any association with their operators. Tribecar does
                    not control and is not responsible for such websites or the servers or the parties operating such
                    websites or servers and accordingly Tribecar accepts no responsibility or liability for any material
                    contained on those servers or websites, or the accuracy or legality of information contained on
                    other websites or servers. Hirer is advised to use his/her own discretion when communicating and
                    utilising services from these other websites or servers. If Hirer decides to access any of the third
                    party websites linked to this booking engine (i.e. this Website), he/she is doing so entirely at
                    his/her own risk.
                    Permitted use. You are not permitted to use this website other than for the following, private,
                    non-commercial purposes:

                    viewing this website;
                    making bookings;
                    reviewing/changing bookings;
                    checking vehicle and rates information;
                    performing online Start-Trip and End-Trip using your approved account;
                    transferring to other websites through links provided on this website;
                    checking your own account details;
                    making use of other facilities that may be provided on the website.
                    The use of automated systems or software to extract data from this website or www.tribecar.com for
                    commercial purposes (e.g. ‘screen scraping’) is prohibited unless the third party has directly
                    concluded a written licence agreement with Tribecar in which permits it access to any and all
                    information on Tribecar's public or private websites (or web services) such as vehicle locations,
                    pricing details, vehicle availability, and etc.

                    The user of the website and of the service permanently and irrevocably agrees to provide full rights
                    of any information (excluding always personal information) that they may have uploaded or keyed into
                    the system to Tribecar or Tribecar's managed or controlled system (e.g. Facebook Page, Facebook
                    Messages, WhatsApp, Google Forms). This may include photos uploaded into the system during Start
                    Trip, survey results, creative and artistic submissions provided by the user of the website. With
                    the rights provided by the user, Tribecar may reproduce, resell, control, create derivatives of,
                    distribute the uploaded information for profit or otherwise without providing compensation to the
                    user and do so in private or public spaces for private or public purposes.


                    PERSONAL DATA PROTECTION POLICY
                    This Personal Data Protection Policy notice for personal data ("Notice") is issued to all our valued
                    customers and guests (Collectively known as "Hirers") of Tribecar, pursuant to the statutory
                    requirements of the Personal Data Protection Act 2012 ("PDPA").
                    Tribecar takes it responsibilities under Singapore's PDPA seriously. Tribecar also recognizes the
                    importance of the personal data Hirers have entrusted to the Company and understands its
                    responsibility to properly manage, protect and process your personal data of the Hirers.
                    During your course of dealing with Tribecar, Tribecar may have, and / or will collect, use, disclose
                    and process Hirers’ personal data for purposes, including, communicating; providing services,
                    responding to your enquiries or complaints, provide you with information and/or updates on products,
                    services and/or promotions offered by Tribecar and/or its associated and its subsidiary companies or
                    any selected third parties and other purposes required to operate and maintain business as set out
                    in Tribecar’s Personal Data Protection Policy (collectively referred to as "Purposes").
                    In order to conduct Tribecar’s business operations more smoothly, Tribecar may also be disclosing
                    the personal data provided by Hirers to Tribecar’s third party service providers, agents and/or
                    Tribecar’s affiliates and/or subsidiary companies or related corporations, and/or other third
                    parties whether sited in Singapore or outside of Singapore, for one or more of the above-stated
                    Purposes. Such third party service providers, agents and/or affiliates or related corporations
                    and/or other third parties would be processing your personal data either on Tribecar’s behalf or
                    otherwise, for one or more of the above-stated Purposes.
                    It is necessary for Tribecar to collect and to retain your personal data. If Hirer do not provide
                    Tribecar with your personal data, or do not consent with this Notice or our Personal Data Protection
                    Policy, Tribecar will not be able to effectively provide products and/or services to Hirer, if at
                    all. We are committed to ensuring that your personal data is stored securely. Tribecar have the
                    right to request for access to, to request for a copy of and to request to update or correct Hirer
                    personal data held by Tribecar. Hirer have the right at any time to request us to limit the
                    processing and use of his/her personal data. (For example, requesting Tribecar and/or its subsidiary
                    companies to stop sending Hirer any marketing and promotional materials or contacting Hirer for
                    marketing purposes).
                    Hirer’s written request should be email to: support@tribecar.com and reply to sender to unsubscribe
                    for future updates / promotions.
                    By submitting your personal data to us, Hirer consent to Tribecar collecting, using, disclosing and
                    processing your personal data in accordance with this Notice. Tribecar will also take it that all
                    personal data provided by Hirer is accurate and complete, and that none of it is misleading or out
                    of date. Hirer will promptly update us in the event of any change to his/her personal data.
                    In some circumstances, Hirer may have provided personal data relating to other individuals (such as
                    his/her spouse, family members or other third party including minors). The Hirer must represent and
                    warrant that his/her is authorised to provide his/her personal data to Tribecar and Hirer have
                    obtained the consent to the collection, use, disclosure and processing of their Personal Data in
                    accordance with this Notice.
                    In accordance with new privacy regulations in Singapore, Tribecar wishes to inform you that Tribecar
                    is retaining the use of full NRIC (identification number) for its serial number and photo-format. As
                    a service provider for a regulated service, Tribecar needs to collect, use and provide your full
                    NRIC for the following reasons (non-exhaustive): providing assistance to law enforcement for
                    anti-terroism investigations and crime investigations (SPF), ensuring high fidelify of
                    identification of users of e-Wallet (MAS), providing driver details for both reported and unreported
                    accidents (GIA), and providing driver details for parking and traffic offences (TP).

                    MALAYSIA USE
                    The Hirer accepts and agrees to be bounded by the conditions in this section before using the
                    Vehicle for entry into Malaysia. Vehicle usage in Malaysia is only applicable in West Malaysia up to
                    and/or no further than Kuala Lumpur, Malaysia.
                    Hirer intending for entry into Malaysia has to indicate on checkbox for Malaysia usage prior to
                    booking confirmation. If Hirer did not opt for Malaysia usage, vehicles are not allowed into
                    Malaysia. Hirer will not be compensated for any partial use between Singapore and Malaysia during
                    booking period.
                    Only selected vehicles under the category Economy Sedan and Economy MPV are allowed for Malaysia
                    Usage.
                    Hirer has to make a minimum booking of 24 hours to enter into Malaysia and agrees to pay an
                    additional 30% surcharge on top of rental fees.
                    Extension will not be allowed for Malaysia use and late fee applies if the hirer returns the Vehicle
                    beyond the booking time.
                    The Hirer will be requested to approve an authorization hold of S$200.00 by Tribecar during the
                    "Start Trip" process. The authorization hold will reduce the Hirers debit/credit card's credit card
                    limit but a charge will not be captured unless there is/are outstanding fee(s) due to Tribecar. It
                    may be held for the length of the Hirer's booking or for at least seven (7) days. If the Hirer is
                    unable to complete the authorization hold, there will be no refund or partial refund for the
                    booking. This is so even if the booking was utilized partially or not utilized at all. Any
                    cancellation or amendment will be subject to existing cancellation and amendment policy.
                    Hirer shall abide by all Singapore Immigration regulations and Malaysia government's regulations and
                    be responsible for all Traffic Police and Court summons and fines. All unsettled traffic offenses or
                    fines committed by hirer during the period will be charged to the hirer in full with additional
                    administrative charges incurred.
                    Hirer will be responsible for any incidental damages / cost incurred during booking in Malaysia,
                    inclusive and not limited to outstanding traffic fines, breakdown, battery, tyres, towing fee, and
                    any loss, damage, costs and expenses arising from the breakdown of the vehicle.
                    In the event of an accident, insurance excess for Malaysia use will be doubled own damage excess and
                    third party excess (per accident basis, inclusive of 8% GST, see 8a). For insurance excess for New
                    Drivers, see 8a. PAI is not available for New Drivers.
                    Hirer shall also obtain vehicle registration number, names and address of the parties involved.
                    Hirer shall not abandon the Vehicle without any adequate provision for safeguarding in the event of
                    an accident.
                    Hirer is to make a police report and will be liable for any cost incurred if the Vehicle is loss or
                    stolen.
                    Hirer is allowed to make simple rectification work, with prior approval from Tribecar, such as
                    punctured tyres, flat battery and faulty air-conditioning system in the event of breakdown and all
                    cost will be borne by Hirer. Tribecar will also not be liable or responsible for any monetary
                    compensation incurred by hirer for the rectification work
                    If the Hirer enters into Malaysia with a Vehicle without informing Tribecar, Tribecar shall be
                    entitled to levy the Hirer a penalty fee of S$432 and/or immediately terminate such Hirer’s account
                    and such Hirer’s security deposit of S$100 will not be refunded. Hirers who wish to re-apply for an
                    account with Tribecar would need to have settled all outstanding fees / fines from prior membership
                    period with Tribecar.
                    Selected vehicles under the category Economy Sedan and Economy MPV are allowed entry into Malaysia
                    (up to West Malaysia and/or no further than Kuala Lumpur, Malaysia). Please select the option "Entry
                    to Malaysia" under Optional Add-Ons when making your booking.

                    Requirements:
                    Minimum 24 hours (booking duration)
                    30% surcharge on top of rental fees
                    Pre-authorisation hold of S$200

                    Note: Adding the option of Entry to Malaysia while extending your trip is not permitted.
                    Kindly note as well that you are not allowed to rent vehicle(s) for Malaysia use if you are a New
                    Driver.

                    MOTORCYCLE RENTAL
                    The Hirer and the Authorised Rider(s) MUST have a valid Class 2B/2A/2 License to be eligible for the
                    rental and use of the relevant class of Motorcycles which such Rider is permitted to ride pursuant
                    to the applicable license that he/she holds. For the avoidance of doubt, the Hirer acknowledges and
                    agrees that he/she and the Authorised Rider(s) shall not make any bookings with Tribecar for any
                    particular class of Motorcycle and/or ride any particular class of Motorcycle to which he/she does
                    not have the applicable license to ride.
                    Where applicable in this Agreement, for the purpose of this Clause 16, the terms "Driver", "Hirer"
                    may be used interchangeably with the term "Rider". Similarly, "Driving", "Operating" may be used
                    interchangeably with the term "Riding". Lastly, terms such as "Bike", "Scooter", "Vehicle" may be
                    used interchangeably with the term "Motorcycle". In cases where the terms are unclear, Tribecar
                    shall have sole discretion in the final determination on the usage of these terms.
                    Petrol policy for Motorcycles differs from petrol policy for cars. The Rider must fill up with
                    petrol that is grade RON 95 or higher and return the Motorcycle with a full tank of petrol at the
                    end of each booking before the conclusion of the Rental Period.
                    Motorcycle helmet (or safety headgear), gloves, or such other rider's safety apparel will not be
                    provided with the booking. The Rider shall be required to bring along his/her own safety equipment.
                    The Rider will not be able to start the Motorcycle once the trip is ended. For safety reasons, the
                    Rider is advised not to use the End Trip function while on the move or when the Motorcycle is away
                    from the designated parking.
                    The Rider is responsible for checking the conditions of the Chain and the Sprocket of the motorcycle
                    (if applicable to the model) before riding the motorcycle. If the motorbike breakdown due to the
                    chain comes loose or breaks during the rental, the Rider shall be responsible for the cost of tow
                    and all repair costs (including Sprocket replacement if applicable). There shall be two trips for
                    the tow, one from the breakdown point to the appointed workshop and another from the appointed
                    workshop back to the designed parking location.
                    All the motorcycles are equipped with an IU, as required by the government. This IU is constantly
                    powered and drains the battery within the motorcycle. It is the responsibility of the Rider to
                    run/ride the bike for at least 20 mins every 3 days to ensure the battery within the motorcycle does
                    not drain completely which damages the motorcycle.
                    The insurance policy for Motorcycles provides for commercial usage. The Rider may use the
                    Motorcycles for deliveries and/or logistics services but NOT for the provision of passenger-carrying
                    service. E.g., HonestBee / Deliveroo / NTUC / RedMart / PizzaHut / McDonalds / Road Bull / Riverwood
                    / GrabFood / Go-jek (Logistics/Services), etc but not Grab / Go-Gek (passenger carrying).
                    The insurance coverage for Motorcycles is as follows:
                    Own Damage Excess per Accident
                    Location Class 2B/2A/2 Class 2B/2A/2 (New Driver)*
                    Singapore Book Value of Vehicle / Cost of Similar Replacement / $2,160 (whichever higher) Book Value
                    of Vehicle / Cost of Similar Replacement / $3,240 (whichever higher)
                    Malaysia No Coverage
                    Singapore (With CDW) Book Value of Vehicle / Cost of Similar Replacement / $1,836 (whichever higher)
                    Book Value of Vehicle / Cost of Similar Replacement / $2,700 (whichever higher)
                    Singapore (With TribeShield) Book Value of Vehicle / Cost of Similar Replacement / $2,160 (whichever
                    higher)

                    (Claimable excess capped at $1,620, subject to adjustments due to actual payment and a minimum
                    charge of $540) Book Value of Vehicle / Cost of Similar Replacement / $3,240 (whichever higher)

                    (Claimable excess capped at $2,700, subject to adjustments due to actual payment and a minimum
                    charge of $540)
                    3rd Parties Excess per Accident
                    Location Class 2B/2A/2 Class 2B/2A/2 (New Driver)*
                    Singapore $2,160 $3,240
                    Malaysia No Coverage
                    Singapore (With CDW) $1,836 $2,700
                    Singapore (With TribeShield) $2,160

                    (Claimable excess capped at $1,620, subject to adjustments due to actual payment and a minimum
                    charge of $540) $3,240

                    (Claimable excess capped at $2,700, subject to adjustments due to actual payment and a minimum
                    charge of $540)*Selected Motorcycles only. Not all Motorcycles are available to New Drivers.
                    The stated insurance excess only applies to authorised Riders with a valid Class 2B/2A/2 driving
                    licence (based on passed date of the relevant riding class's Traffic Police riding test or the
                    issuance of licence by Traffic Police for the relevant riding class, whichever is more recent).
                    To the extent that is permitted by the law, for the purpose of accident/insurance claims, the Rider
                    and his/her pillion shall be treated as one party (i.e. 1st party) as they are related parties. For
                    avoidance of doubt, the pillion is not treated as a 3rd party in any accident/insurance claims.
                    The Rider shall not take on passengers (pillion or otherwise) for reward or hire.
                    The stated insurance excess excludes loss of use for downtime of the Motorcycle.
                    Motorcycles have significantly shorter service mileage than cars and are typically between 1,000km
                    to 2,000 km per service. It is not uncommon to come near or cross the servicing mileage during a
                    Hirer's booking. The Hirer agrees to bring the motorcycle to Tribecar's authorised workshops before
                    the motorcycle exceeds 200 km in mileage from the servicing mileage as indicated in your booking
                    email or on the sticker found under the motorcycle seat. The servicing takes about 15 minutes and
                    the Hirer will be reimbursed with 1-day of rental to the Hirer's booking. The Hirer may be liable
                    for repair costs if he or she fails to service the bike in time and there is damage to the
                    motorcycle.
                    The authorised workshops for motorcycle servicing are:
                    Heng Motor (Changi) - 471, Changi Road, Singapore 419889 - Mon to Fri 930am to 630pm & Sat 930am to
                    530pm (Excluding PH)
                    Heng Motor (Toh Guan) - 36, Toh Guan Rd East, #01-33, Singapore 608580 - Mon to Fri 930am to 630pm &
                    Sat 930am to 530pm (Excluding PH)

                    COMMERCIAL VEHICLE RENTAL
                    For vehicles with 4WD (4 Wheel Drive or All Wheel Drive), Hirer shall only 4WD to 2WD (vice-verse)
                    when the vehicle is stationary while on level ground. If Hirer does otherwise, then they shall be
                    fully liable for damages to the gearbox.
                    Pickup Trucks (such as Mitsubishi L200 Double-cab) may not be used to carry passengers in the cargo
                    area.
                    Pickup Trucks (such as Mitsubishi L200 Double-cab) may not be used by Engineering or Surveying Firms
                    (or by those in service of these firms or purposes). If the Hirer does so without permission, any
                    additional wear and tear and grooming required will be charged towards said hirer. Special
                    authorisation by Tribecar is required if the vehicle is to be used by said prohibited firms and
                    purposes.
                    For certain classes of vehicles, e.g. Fiat Doblo, Nissan NV100, etc, there are cargo dividers/seats
                    installed in the rear cargo area. There is no insurance coverage for the cargo or individual(s)
                    using those spaces. If purchased or added, the Personal Accident Insurance option shall solely apply
                    to the driver of the vehicle. The Hirer indemnifies Tribecar against all losses, claims,
                    compensation, direct or indirect from the use of the space/cargo dividers and seats in the rear
                    cargo area.
                    To the maximum extent that is permitted by the law, for the purpose of accident/insurance claims,
                    the Hirer and his/her passenger(s) shall be treated as one party (i.e. 1st party) as they are
                    related parties. For avoidance of doubt, the passenger(s) is/are not treated as a 3rd party in any
                    accident/insurance claims.

                    FUEL INCLUDED RENTALS
                    Car Club by Tribecar category Vehicles have fuel included in the reservation and Hirers are charged
                    based on the reservation period (time-based) and the fuel used (distance-based mileage). As of 7
                    July 2023 1200 Hours, the mileage fee is at SGD $0.39 for every kilometer travelled for Car Club
                    Select Category and SGD $0.49 for every kilometer traveled for Car Club Prime Category.

                    The Hirer is only allowed to use the fleet card provided in the Car Club by Tribecar Category
                    vehicles only when the hirer has a booking for this category and only for the booked / reserved
                    vehicle. Any use other than for refueling the booked Car Club by Tribecar category Vehicles is
                    considered misuse.

                    The Hirer will not be required to pay for fuel top-up at fuel stations as Tribecar provides prepaid
                    petrol cards in the reserved vehicle. In the event that the Hirer is required to make a pre-payment
                    for fuel, the Hirer will be responsible to provide the fuel top-up receipt to Tribecar for
                    verification before the reimbursement is processed.

                    Upon retrieval of Car Club by Tribecar Category Vehicles from fuel stations, the Hirer is
                    responsible to ensure the barricade is placed back at the vehicle lots to ensure no other vehicles
                    are parked at the reserved lots. If the barricades are found to be misplaced or damaged, the hirer
                    will be subjected to a penalty based on damage excess.

                    The Hirer may be requested to perform an authorisation hold on their credit card (proportionate to
                    the length of their booking) for the purpose of prepayment of mileage charges. The Hirer may also be
                    requested to make payment for the mileage charges that have accrued during their booking, before the
                    end of their booking.

                    Tribecar reserves the right to terminate the reservation/booking or the account of the Hirer, and/or
                    to recover the Vehicle, before the end of their reservation/booking to recover mileage charges
                    accrued during the lapsed periods of the reservation/booking.


                    TRIBECAR'S SUBSCRIPTION PLAN
                    Private Hirer Vehicle (PHV) rentals and trial members without deposit will not be eligible for the
                    subscription plan.
                    Under the subscription plan, hirers will be able to use any available vehicle for 2 hours every
                    weekday (Mon 0000 - Fri 1700 hours) subject to blackout periods. Hirers will also not be able to
                    make bookings under the subscription plan during eve of public holidays and public holidays.
                    Additionally, bookings cannot be split into two 1 hour bookings.
                    Hirers will only be able to book up to 2 hours in advance under the subscription plan. Bookings for
                    more than 2 hours will revert back to normal booking rates.
                    Add-ons such as CDW and PAI are not covered under the subscription plan. However, hirers may choose
                    to purchase these add-ons for each booking under the subscription plan.
                    The subscription plan will automatically renew at the end of the applicable subscription period
                    unless the hirer cancels the subscription plan before the end of the then-current subscription
                    period. The cancellation will take effect the day after the last day of the current subscription
                    period. Tribecar does not provide refunds or credits for any partial subscription periods.
                    Tribecar reserves the right to determine the eligibility of signups/ cessation of the subscription
                    program / change the price for the subscription plan from time to time. Price changes will take
                    effect at the start of the next subscription period following the date of the price change. Subject
                    to applicable law, the hirer accepts the new price by continuing to use the subscription plan after
                    the price change takes effect. If the hirer does not agree with a price change, the hirer has the
                    right to reject the change by unsubscribing from the subscription plan prior to the price change
                    going into effect.
                    There is a hard cap on rentals of SGD $21.60 per hour discount/waiver for the Subscription service.

                    TRIBESHIELD
                    TribeShield is a motor excess rider that provides the Hirer the ability to claim reimbursement on
                    the motor excess that they have paid during an accident in a Tribecar Vehicle. It does not decrease
                    the rental excess liability of the Hirer. The Hirer must always pay for the stated rental excess
                    described in this Terms and Conditions.
                    TribeShield provides for the Hirer to claim up to limits stated in the accident excess table above
                    but subject to a minimum charge of $540.00 per section of rental excess. The claim may be less than
                    the maximum allowed but the Hirer must always pay $540.00 per section of rental excess in an
                    accident.
                    TribeShield is applicable for purchase by all Tribecar Hirers including New Drivers.
                    TribeShield is only applicable for the following scenarios
                    An accident happens, primary insurance is involved and pay-out is required,
                    any other scenarios as approved by Tribecar.
                    Other than the approved scenarios above, TribeShield is not applicable to minor damages costing
                    below the rental excess payable OR incidents not involving the primary insurance.
                    Hirer must select and pay for TribeShield before the collection of the Vehicle in order to be
                    enrolled under TribeShield. The hirer is also responsible to check that the TribeShield add-on has
                    been purchased successfully on Tribecar's system. Tribecar will not entertain claims where the Hirer
                    claims that the addon was purchased but the addon was not recorded in the system.
                    In an event of an accident where the Hirer would like to make a claim for this policy, the Hirer
                    must inform Tribecar of this intention to file this claim during accident reporting by written
                    medium such as email. The Hirer must also go to Tribecar’s appointed workshop for accident
                    reporting. GIA report with full rental excess payment must be made before Hirer is eligible for the
                    claim. The claim may be denied or subject to Tribecar's approval if there is a late filing.
                    The Hirer must include with their claim the following documents - GIA Report, receipt of excess
                    payment made to workshop, screenshot of booking details, workshop invoice showing damage accessed
                    and amount, NRIC and driver license, coloured photo of damaged AND repaired car, TribeShield claims
                    form and insurance discharge voucher if they are claiming against the third party. The list is not
                    exhaustive and is subject to Tribecar's advisory given during Hirer's claim.
                    Tribecar, vehicle owner, workshop, and its affiliates will do their best to provide details and
                    documentation and facilitate the claim process but a successful claim is subject to final approval.
                    In the event that the claim is unsuccessful for any reason, not limited to documentation being
                    complete, the aforementioned parties will not be held liable.
                    If there is an intention to commit fraud under this claim, Hirer may be prosecuted under the penal
                    code and be charged with an administrative and processing fee of 20 times the claim amount by
                    Tribecar. Hirers are strongly warned against colluding with any party, including the Vehicle Owner,
                    to make false claims. If fraud is suspected, claims will be rejected by Tribecar.
                    Tribecar management reserves the right to make changes to TribeShield without any prior notice.
                    Any violation of the traffic or criminal act, not limited to drink driving or speeding, are grounds
                    for rejecting a claim under TribeShield.
                    Hirer must ensure all information provided is accurate and Hirer fully discloses all important facts
                    of the accident in order to submit for this claim. The claim will be rejected if Hirer withheld
                    information or provided inaccurate information regarding the accident.
                    The disbursement for successful claims under this addon is determined solely by Tribecar. It
                    typically follows the disbursement time frame of the primary insurance policy. This time frame is
                    not controlled by Tribecar and Tribecar does not have control of the successful disbursement time
                    frame.
                    Hirer is binded and agrees to the full policy wording of the motor excess rider addon provided by
                    Tribecar.
                    In case of disputes arising out of or in connection with these terms, Tribecar reserves the right of
                    final decision.

                    TRIBETRAVELS
                    TribeTravels bundle add-ons of attraction tickets and packages to vehicle rental, as well as ‘a la
                    carte’ tickets, are available to members of Tribecar only.
                    Attraction tickets and packages sold via the bundle add-ons are only available to Singapore
                    Citizens, Permanent Residents and holders of valid employment/dependent passes or work permits.
                    Attraction tickets and packages may be purchased on the Tribecar platform when added-on to vehicle
                    rental as a bundle, or as ‘a la carte’ tickets (currently only available on website). The hirer will
                    receive an acknowledgement of the booking whereby once confirmed, they will receive their booking
                    confirmation of vehicle rental and attraction tickets/packages separately by email, typically within
                    the hour but may take up to 3 days for some exclusive attractions/packages.
                    Certain attractions listed under ‘a la carte’ tickets may not be available under bundle add-ons, due
                    to certain requirements for the different attractions.
                    Hirers shall comply with the following when making a booking for the bundle add-on of attraction
                    tickets and packages to vehicle rental:
                    Only single attractions/packages are available for booking at this point.
                    Minimum number of vehicle rental hours required for the bundle add-on is 1 hour for local booking,
                    24 hours for Malaysia booking.
                    Minimum number of attraction tickets required for the bundle add-on of attractions is 1 attraction
                    ticket.
                    Minimum number of pax required for the bundle add-on of packages varies for each package, and will
                    be stated in the respective description.
                    Hirers acknowledge the following when making a booking for the bundle add-on of packages to vehicle
                    rental:
                    Package bookings with hotel/resort rooms are subjected to availability.
                    Requests with regards to rooms, such as room categories and room type, are not guaranteed and based
                    on availability.
                    Package bookings at the point of reservation are not confirmed till full payment has been received
                    from hirers by attractions/package destinations/third-party service providers via Tribecar. Hirers
                    may make payment with the credits in their e-wallet, and any remaining amount required may be made
                    via a payment link in the invoice by email.
                    Hirers agree to the prices stated at the time of booking, before proceeding to make payment via
                    e-wallet (bundle add-ons) or credit/debit card (‘a la carte’ tickets).
                    Each bundle add-on will result in a different price and the discount varies according to the number
                    of hours/days or tickets/pax/package selected. The price will be displayed on the booking page based
                    on the selected quantity.
                    The total price is inclusive of GST, as reflected in the cart and during payment.
                    Discount for bundle add-ons do not apply if bookings for vehicle rental and attraction
                    tickets/packages are made separately. Attraction tickets/packages must be added on during booking of
                    vehicle rental, for stated discount to be valid.
                    Voucher discounts and subscription still applies, but only for the vehicle rental portion. In the
                    case whereby the value of the voucher discount is greater than the value of the discount from bundle
                    add-on, the discount with the greater value will be applied.
                    Vouchers/promo codes are only valid for vehicle bookings and cannot be used for purchases of
                    attraction tickets.
                    Unsuccessful bookings may be due to urgent sales closure by the attractions/package destinations,
                    technical issues with travel interconnect systems, and etc. There is no cancellation charge and a
                    full refund will be returned to the e-wallet.
                    Admission into the attractions/package destinations is subjected to the rules and regulations, as
                    well as the operating hours and any closure dates of each attraction.
                    Hirers shall provide the documents or information as required by the respective attractions policies
                    policies of attraction/package destination.
                    Hirers are encouraged to plan their visits according to the operating hours and any closure dates of
                    the respective attractions/package destinations, which is stated on their website if available.
                    Hirers shall ensure that the booking of date and timeslot as required for the respective
                    attractions/package destinations are made accurately at least 24 hours in advance to secure the
                    preferred date/time for their visit.
                    Tribecar shall not be held responsible or liable if any preferred date and timeslot had been fully
                    booked on the website of the attraction/package destination. Hirers are to ensure that they have
                    checked the availability before making the purchase for the bundle add-on.
                    Terms for Malaysia use in Clause 15 shall remain in place for any TribeTravels Malaysia-related
                    bookings.
                    The attractions/package destinations/third-party service providers have the right to accept or
                    reject the attraction tickets or package confirmation if found to have been acquired through
                    unauthorised means.
                    Attraction tickets sold and confirmed packages are non-refundable, non-exchangeable and
                    non-transferrable.
                    Tribecar is not responsible for lost, damaged or stolen attraction tickets/package confirmation.
                    No reselling of tickets/packages is allowed and for any occurrence, the attractions/package
                    destinations/third-party service providers or Tribecar reserves the right to invalidate the
                    ticket/package confirmation without refund.
                    Amendments to bookings are not allowed. Hirers shall ensure that all booking details are correct
                    before proceeding to make payment.
                    Depending on the terms and conditions of each attraction, any pre-booked date of visit may or may
                    not be amended if holders of the attraction tickets are unable to visit on the selected date. Hirers
                    understand that amendments (if allowed) may require reaching out to the attractions directly.
                    Any request for amendment depends on the availability and may require further charges depending on
                    the nature of the changes required (e.g. number of rooms, change in room categories, etc.)
                    Prices stated on the platform may be subjected to changes due to the revision of prices by the
                    attractions/package destinations/third-party service providers. Tribecar reserves the right to amend
                    these prices without notice.
                    The terms and conditions, as well as the different steps to use or redeem the tickets, vary for each
                    attraction/package. More information can be found in the details for each attraction/package during
                    booking, or in the ticket/package confirmation email once the booking has been confirmed.
                    If hirers are found to use the attraction tickets/package confirmation in ways that are against the
                    law, Tribecar and the respective attractions/package destinations/third-party service providers
                    reserve the right to cancel the transaction without refund.
                    Any additional personal information collected from hirers will solely be used for the purpose of
                    bookings with our third-party service providers or directly with the attractions/package
                    destinations, whenever required.
                    Hirers acknowledge and agree that they are solely responsible for the accuracy and content of any
                    personal information provided to Tribecar, for usage in booking and payment processes. Tribecar
                    shall not be held responsible or liable for any unsuccessful bookings resulting from any inaccurate
                    or incomplete information provided by the hirer.
                    Tribecar shall not be held responsible or liable for any disclosure of personal data by the
                    attractions/package destinations/third-party service providers.
                    Tribecar shall not be held responsible or liable for any service disruption resulting from that of
                    attractions/package destinations/third-party service providers.
                    There may be links to other sites from the attraction/package details provided by third-party
                    service providers. Tribecar does not have control over the information in these links and hence
                    shall not be held responsible or liable for them.
                    Hirers shall contact the respective attractions/package destinations directly for enquiries or
                    feedback relating to the attraction/package destinations itself.
                    The management reserves the right to make the final decision should dispute arise, or amend the
                    terms and conditions without prior notice.
                    Attraction tickets and packages are sold under Tribecar Ventures Pte. Ltd. with the company
                    registration number 202106974N, and as a licensed Travel Agent of the Singapore Tourism Board with
                    licence number TA03422.

                    DISCLAIMER OF WARRANTIES
                    The Services and all related components thereof provided by Tribecar are on "an is, as available
                    basis". To the fullest extent permitted under applicable laws, Tribecar expressly disclaims all
                    warranties, representation or endorsements whatsoever, whether express or implied (including,
                    without limitation warranties of title or non-infringement, or the implied warranties of
                    merchantability or fitness for a particular purpose), in relation to the Services, and any
                    information or services related to the Services.
                    For the avoidance of doubt, Tribecar does not represent or warrant that:
                    the Website and the Services will meet your requirements or will always be accessible;
                    the Website and the Services will be uninterrupted, timely, secure, error-free or free from computer
                    virus or other invasive or damaging code;
                    the results that may be obtained from the use of the Website and/or the Services will be accurate or
                    reliable; and
                    the quality of the Services and/or information purchased or obtained by you through the Website will
                    meet your expectations;
                    Tribecar does not warrant that the use of the Website and/or the Services will be uninterrupted or
                    error free. Amongst other things, the operation and availability of the systems used for accessing
                    the Website and/or the Services, the computer networks and the Internet, can be unpredictable and
                    may from time to time interfere with or prevent access to the Website and/or the Services. Tribecar
                    shall not in any way be responsible for any such interference that prevents your access or use of
                    the Website and/or the Services.
                    Under no circumstances will Tribecar be liable for any loss or damage caused by your reliance on the
                    information relating to and/or your use of our Website and Services. It is your responsibility to
                    evaluate the accuracy, completeness or usefulness of any information, opinion, advice or other
                    content available through the Website and our Services.

                    ACCEPTED RISK RELATING TO THE USE OF SERVICES
                    During the Rental Period, the Hirer is deemed to have sole control and possession of the Vehicle or
                    Motorcycle. Accordingly, subject to Clause 8, 9 and 16, the Hirer hereby acknowledges and agrees
                    that the Hirer alone shall be liable during the Rental Period for all risks, claims, costs, damages,
                    expenses and losses arising out of or in connection with their use of the Vehicle or Motorcycle,
                    including, without limitation to, accidents, third party injuries, property damages, theft,
                    vandalism, fines or traffic offences ("Accepted Risk").
                    If an Accepted Risk arises, subject to the other relevant provisions in this Agreement, the Hirer
                    hereby acknowledges and agrees to take all action that may be required by him/her under the
                    applicable law, including the filing of police reports and other relevant reports within the
                    required time, and all other reasonable action to mitigate the losses relating to such Accepted
                    Risk.
                    If an Accepted Risk arises, the Hirer shall immediately notify Tribecar, and comply with Tribecar’s
                    reasonable instructions and the other relevant provisions in this Agreement.
                    The Hirer hereby acknowledges and agrees to indemnify and hold Tribecar and its officers, directors,
                    employees and agents harmless from any claims, damages, losses, liabilities, and all costs and
                    expenses of defense, including but not limited to legal fees, arising out of or in connection the
                    following:-
                    any Accepted Risk;
                    a claim by any Authorised Driver(s) or third parties in relation to the Hirer’s and/or Authorised
                    Driver’s use of the Vehicles or Motorcycle.
                    The Hirer acknowledges that he/she is aware of the relevant insurance coverage in relation to the
                    use of the Vehicles and/or Motorcycles and that he/she shall have complied with the relevant terms
                    and conditions relating to such insurance coverage in the event that he/she intends to rely on such
                    insurance coverage

                    INDEMNITY AND LIMITATION OF LIABILITY
                    Indemnity for breaches of this Agreement: The Hirer shall indemnify and hold the Tribecar and its
                    officers, directors, employees and agents harmless from and against all reasonable costs, expenses
                    or damages that Tribecar may suffer or incur, arising out of or in connection with the Hirer’s
                    breach of this Agreement, including the costs of repair, repossession or recovery, except to the
                    extent caused by Tribecar’s own default or negligence.
                    The Hirer acknowledges and agrees that the use of the Vehicles and Motorcycles involves the risks of
                    death, injury and property damage, and the Hirer accepts all such risks arising our of or in
                    connection with the use of the Vehicles and Motorcycles
                    To the fullest extent permitted under applicable laws, save in respect of death or personal injury
                    caused by the negligence of Tribecar, Tribecar shall not be liable to the Hirer, the Authorised
                    Driver(s) or any other person or entity for any direct, indirect, special, incidental, consequential
                    or exemplary damages (including, but not limited to, damages for loss of profits, loss of data, loss
                    of use or costs of obtaining substitute services) arising out of the use, inability to use
                    (including without limitation due to any cancellations or amendments of bookings by Tribecar under
                    Clause 11), unauthorised access to or use or misuse of the Services, whether based upon warranty,
                    contract, tort (including negligence), or otherwise, even if Tribecar has been advised of the
                    possibility of such damages or losses.
                    To the fullest extent permitted under applicable laws, save in respect of death or personal injury
                    caused by the negligence of Tribecar, the Hirer unconditionally releases and discharges Tribecar
                    from all claims and liability, under contract, tort, negligence, equity, statute or otherwise, which
                    the Hirer now have or may have in the future, arising out of or in connection with the Hirer’s
                    and/or Authorised Drivers’ use of the Vehicles or Motorcycles ("Relevant Claim"). To the extent that
                    the Hirer has a Relevant Claim against Tribecar, the Hirer unconditionally and forever waives such
                    Relevant Claim, and the Hirer hereby undertakes not to take any action or proceeds in connection
                    with such Relevant Claim.
                    Notwithstanding the above, to the fullest extent permitted under the applicable laws, Tribecar’s
                    aggregate liability for all claims arising from this Agreement (if any) to a relevant Hirer shall
                    not exceed (i) the aggregate amount which the relevant Hirer had paid to Tribecar in relation to the
                    use of the Services, Vehicles and/or Motorcycles, or (ii) S$100, whichever is lower.

                    CONTRACT (RIGHTS OF THIRD PARTIES) ACT
                    Each of the Tribecar Partners who is not a party to this Agreement shall be entitled to the benefit
                    of Tribecar’s rights under the relevant terms of this Agreement, which shall include without
                    limitation to the provisions relating to accident repair, insurance matters, refurbishment,
                    cleaning, processing rentals and all car related matters. Such Tribecar Partners shall be entitled
                    to enforce the aforesaid provisions as if they were a party to this Agreement. Save as otherwise
                    expressly provided in this Agreement, no person who is not a party to this Agreement may enforce or
                    is entitled to the benefit of any provision of this Agreement.
                    The consent of the Tribecar Partners shall not be required for any amendment to, termination, or
                    rescission of this Agreement.
                    Tribecar and its affiliates or subsidiary companies recognises and appreciates the importance of
                    responsible use of personal data collected on this booking engine and membership system. Therefore,
                    Tribecar takes great care with personal information, taking steps to keep it secure and ensure it is
                    used only for our legitimate business purposes. Any information which is provided by you to Tribecar
                    will be treated in accordance with any data privacy related legislation as may be adopted in
                    Singapore from time to time.

                    For us to process a booking for you, we require some information from you. This includes your name,
                    your phone number, email address, identification number, driving license particulars, date of birth
                    and proof of residence. Also, we may require your credit or debit card details so we can guarantee
                    your rental vehicle when you pay your rental amount and/or deposit. You consent to Tribecar holding
                    your personal data for the purposes of facilitating vehicle rental on this booking engine and to
                    disclosing your personal data to a rental vehicle provider, insurance provider, workshop of the
                    vehicle provider and their affiliates when you book a rental vehicle from that rental vehicle
                    provider using this booking engine.

                    Update 13th Aug 2019 - In accordance with new privacy regulations in Singapore, Tribecar wishes to
                    inform you that Tribecar is retaining the use of full NRIC (identification number). As the service
                    provider for a regulated service, Tribecar needs provide your full NRIC for the following reasons
                    (non-exhaustive): providing assistance to law enforcement for anti-terroism investigations and crime
                    investigations (SPF), ensuring high fidelify of identification of users of e-Wallet (MAS), providing
                    driver details for both reported and unreported accidents (GIA), and providing driver details for
                    parking and traffic offences (TP).

                    You should be aware that where you link to another website from this booking engine, that Tribecar
                    has no control over that other web site. Accordingly, Tribecar cannot guarantee that the controller
                    of that web site will respect your privacy in the same manner as Tribecar.

                    You may refuse to accept cookies by activating the setting on your browser which allows you to
                    refuse the setting of cookies. However, if you select this setting you may be unable to access
                    certain parts of the Website. Unless you have adjusted your browser setting so that it will refuse
                    cookies, the system will issue cookies when you log on to the Website.

                    We will use your email address and phone number for sending you a confirmation of your bookings or
                    to contact you for any reason directly linked to your booking, or occasionally to inform you of new
                    features and marketing campaigns on the booking engine. We will use your phone number to contact you
                    if there is a concern with your booking or account. Upon every signup, a welcome SMS may be sent to
                    your phone number. From time to time, you may also receive SMS pertaining to your booking or
                    account. Please be reminded that you MUST officially notify us at support@tribecar.com if you do not
                    want to receive any promotional messages from Tribecar and its affiliates and subsidiary companies.
                    In the event you do receive promotional messages, please reply to the sender and request your
                    contact number to be removed from their mailing list. You have the right to request a copy of the
                    information which we hold about you (for which we may charge you a small fee) and to have
                    inaccuracies in the information corrected. As part of compliance, we will retain your data post
                    account closure for as long as it is still required by the local laws and regulations.

                    On occasions, we may supply statistics about our customers to third-parties such as insurance
                    providers, rental vehicle providers or other agents. These statistics never contain personal
                    identifying information

                    TRIBECAR, ITS DIRECTORS, EMPLOYEES, SERVANTS AND AGENTS, AFFILIATES, SUBSIDIARIES OR OTHER
                    REPRESENTATIVES AND THEIR RESPECTIVE PARENT AND SUBSIDIARY COMPANIES SHALL NOT BE LIABLE IN RESPECT
                    OF ANY CLAIMS, EMERGENCIES, DEMANDS, CAUSES OF ACTION, DAMAGES, LOSSES, EXPENSES INCLUDING WITHOUT
                    LIMITATION, REASONABLE ATTORNEY FEES AND COSTS OF PROCEEDINGS ARISING OUT OF OR IN CONNECTION WITH
                    THE USE AND/OR DISSEMINATION OF PERSONAL INFORMATION RELATING TO YOU IN ACCORDANCE WITH THIS PRIVACY
                    POLICY AND YOUR CONSENT.

                    Tribecar reserves the right in its sole discretion to amend this Privacy and Security Statement at
                    any time and you should regularly check this privacy policy for any amendments. Any questions,
                    feedback to us at support@tribecar.com.
                    <!-- Add your terms and conditions text here -->
                </div>

                <div class="signup-box">
                    <label class="checkbox-label">
                        <input type="checkbox" id="accept-terms-checkbox">
                        <div class="signup-box" style="width: 95%;">
                            I have read both the Terms and Conditions and Privacy Policy. I further request for and
                            consent to Tribecar Pte Ltd and its affiliated and subsidiaries (collectively, the "Owner"),
                            their agents, and their authorized service providers collecting, using, disclosing and/or
                            processing my personal data (including my Singapore telephone numbers which I may provide to
                            Tribecar Pte Ltd from time to time), and sharing such personal data with the Owner's
                            business partners, marketing partners, the co-brand partner (as may be applicable, depending
                            on the product or service which I have applied for) and their authorized service providers
                            in order to order to send me marketing and promotional material or information about
                            products and services as well as advertisements, promotions and events, conduct consumer or
                            market research and identify products and services which may be relevant to me ("Promotional
                            Purposes").
                        </div>
                    </label>
                    <div class="signup-information">
                        <div class="signup-contact">
                            <p>Please send me marketing and promotional materials via the following mode(s):</p>
                            <label class="checkbox-label">
                                <input type="checkbox" id="">
                                <div style="margin-left: 5px;">
                                    Text Message
                                </div>
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" id="">
                                <div style="margin-left: 5px;">
                                    Phone Call
                                </div>
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" id="">
                                <div style="margin-left: 5px;">
                                    Email
                                </div>
                            </label>
                        </div>
                        <div class="signup-password">
                            <div class="left-password-section">
                                <p>Please choose a strong password.</p>
                                <input class="login-input" type="password" name="password" id="password" required placeholder="Password">
                                <input class="login-input" type="password" name="password" id="confirm_password" required placeholder="Confirm Password">
                            </div>
                            <div class="right-password-section">
                                <p>Your password should be</p>
                                <ul>
                                    <li><span class="circle red"></span>One number (0-9)</li>
                                    <li><span class="circle red"></span>Between 8 and 20 characters long.</li>
                                    <li><span class="circle red"></span>One lowercase letter (a-z)</li>
                                    <li><span class="circle red"></span>One uppercase letter (A-Z)</li>
                                    <li><span class="circle red"></span>One special character (e.g., !, @, #, $, %, etc.)</li>
                                </ul>
                            </div>
                        </div>


                    </div>

                    <input type="submit" class="save-button" disabled value="Sign up!">

                </div>

            </div>
        </div>

        <footer>
            <div class="footer-container">
                <div class="footer-left">
                    <h2 class="underline">Contact Us</h2>
                    <p>Email: ConviGo@localhost</p>
                    <p>Contact: +65 9876 5432</p>
                </div>
                <div class="footer-right">
                    <h2 class="underline">Register for our newsletter</h2>
                    <p>Get the latest news about ConviGo</p>
                    <form method="post" action="assets/php/show_post.php">
                        <input type="email" name="email" id="email" required placeholder="your email here" style="padding: 5px 15px; border-radius: 5px;">
                        <input class="subscribe-button" type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
            Copyright &copy; 2023 ConviGo. All Rights Reserved.
            <br />
            <br />
        </footer>
    </div>
</body>

</html>