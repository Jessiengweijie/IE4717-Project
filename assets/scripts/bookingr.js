// bookingr.js
//   event handlers
//   Note: This script does not work with IE8

// Get the DOM addresses of the elements and register 
//  the event handlers

// Call the generateInfo() function when the page is loaded
document.addEventListener("DOMContentLoaded", function () {
    generateInfo();
});

 // Add event listeners to the select elements
 const dateSelect = document.getElementById("booking-date");
 const timeSelect = document.getElementById("booking-time");
 const durationSelect = document.getElementById("booking-duration");

 dateSelect.addEventListener("change", calculateFeeAndEndTime);
 timeSelect.addEventListener("change", calculateFeeAndEndTime);
 durationSelect.addEventListener("change", calculateFeeAndEndTime);