# IE4717-Project
EE4717 Project Report

Design project group number: F32-DG12
Team members: ALESSANDRO BUDIDHARMA, NG WEI JIE JESSIE
Project Title: A Web Portal for Car Rentals
Summary of Project: 
Our proposed project (ConviGo) aims to develop a user-friendly web application for a car-sharing service, offering convenient services for individuals to rent vehicles. This innovative platform provides a flexible transportation solution that allows users to select cars that are available at their preferred location and rent them for short-term or full day. Users can choose from a wide range of cars, including standard, premium, sedans, SUVs, and electric vehicles, with transparent hourly pricing for easy comparison. Once the user has selected their desired location and car of preference, they can proceed to book it online and an electronic transaction of the details will be sent to their email. Furthermore, there will be a comprehensive FAQ section for users to check for commonly asked questions. And for more specific inquiries, contact information is readily accessible on the website as well. Overall, our website is designed with the primary goal of providing users with the simplest navigation and the greatest convenience when booking cars, hoping to save the hassle and give the user a seamless experience.
 
1. Application Requirements and Specifications
R1: Login
•	Implement a secure login system with username/email and password authentication.
•	If the user does not have an account, redirect to the sign-up page.
•	Users will be redirected here if they are not logged in.

R2: Sign-Up
•	Allow users to register for accounts, providing essential information.

R3: Sign-Up Confirmation
•	Display terms and conditions during the sign-up process for users to accept.
•	Include an option for users to choose their preferred method of receiving news or updates from ConviGo (e.g., email, SMS).

R4: Home 
•	Book Now button that leads to car page for car and location selection
•	Include search and navigation options to access other sections of the application.
•	Insert Instructions on how to use the application

R5: My Account 
•	Develop a user profile page where users can view and edit their personal information, including contact details and payment methods.

R6: About 
•	Create an "About Us" page with information about the car rental company.

R7: Location 
•	Develop a user-friendly location selection page to help users choose a specific rental location.
•	Include a feedback form that allows users to submit their feedback or inquiries to ConviGo's company email.

R8: Cars 
•	Display available cars in the selected location, categorized by types and models.
•	Implement a search bar to enable users to find specific cars quickly.
•	Allow users to filter cars by selecting a location to show availability.

R9: Car Information 
•	Create individual car pages that offer comprehensive information about each car, including images, specifications, and rental rates.
•	Include a location chooser option to select the pickup location for the chosen car.
•	Add a "Book Now" button on each car page to allow users to easily select that car for booking.

R10: Booking 
•	Displays chosen car specifications, pricing and selected location
•	Enable users to choose rental duration and make bookings.
•	Display pricing details based on the selected car and duration.
•	Display return date and time.

R11: FAQ 
•	Include a well-organized Frequently Asked Questions (FAQ) section with clear and concise answers to common queries.
•	Provide a request box for users to send queries via email if their question is not addressed in the FAQ section.


2. Functional Requirements and Specifications 
F1: Login
•	Develop a login page with input fields for email and password.
•	Implement server-side validation for authentication.
•	If the user is not logged in and tries to access restricted content, automatically redirect them to the login page.
•	Display appropriate error messages for incorrect login attempts.
•	Create a sign-up hyperlink to redirect to signup page.

F2: Sign-Up
•	Create a user registration form with fields for essential information, including name, email, password, and contact details.
•	Implement server-side validation to ensure data accuracy and security.
•	Create a next button which redirects to sign-up confirmation page only if all form parameters are valid.

F3: Sign-Up Confirmation
•	Display terms and conditions during the sign-up process, with a checkbox for users to accept.
•	Include an opt-in selection for users to choose their preferred method of receiving news or updates from ConviGo.
•	Store user preferences for communication in the database.
•	Prompt user for password and confirm password and check to see if password is valid using JavaScript Regular Expression password validation
•	Sign up button which encrypts and sends the password to Database for security if terms and conditions checkbox is checked and passwords are valid.
•	Redirect to home page if successful, prompts error if unsuccessful.

F4: Home Page
•	Create a visually appealing home page with a responsive design.
•	Implement a "Book Now" button that, when clicked, directs users to the car selection page.
•	Include a header navigation menu for easy access to other sections of the application.
•	Provide a footer with essential contacts
•	Display clear and concise instructions on how to use the application, visually on the homepage.
F5: My Account Page
•	Create a user profile page that displays user information, including name, contact details, and payment methods.
•	Provide options for users to edit and update their personal information.
•	Implement secure user authentication with session management to restrict access to the MyAccount page. Each logged-in user will have their own session, ensuring that they can only access and view their personal data, enhancing both security and privacy

F6: About Page
•	Develop an "About Us" page that contains company information, mission, and values.
•	Include images and descriptive text to engage users.

F7: Location Page
•	Create a location selection page with a list of available rental locations.
•	Develop a feedback form that collects user feedback and inquiries.
•	Implement server-side validation for form submissions and email functionality to send feedback to the company email address.

F8: Cars Page
•	Display available cars in the selected location, categorized by types and models.
•	Implement a search bar that allows users to search for specific cars by name or type.
•	Create a location search feature that filters available cars based on the selected location.
•	Create a side panel to filter cars based on category, type or brand.
•	Create a Book Now button below car display panel which redirects to booking page with chosen car.
•	Create a ‘?’ Icon on top right of car display panel which redirects to car information page with chosen car.

F9: Car Information Page
•	Design individual car pages that display detailed information about each car, including images, specifications, and rental rates.
•	Include a location chooser option on the car information page for users to select their pickup location.
•	Add a "Book Now" button that enables users to select the car for booking, onclick it will redirect to the booking page.

F10: Booking Page
•	Create a booking page that displays the chosen car's specifications, pricing, and the selected pickup location.
•	Implement a user-friendly interface for choosing the rental duration.
•	Calculate and display the pricing details based on the selected car and duration.
•	Show the return date and time for the booking.
•	Create a Book Now button to confirm all the details of booking and send to database, redirect to third party website for payment (not required)

F11: FAQ Page
•	Develop a well-organized Frequently Asked Questions (FAQ) page with categorized questions and clear answers.
•	Include a query form that allows users to submit queries via email if their question is not addressed in the FAQ section.
•	Implement server-side validation for form submissions and email functionality to send queries to the company email address.
