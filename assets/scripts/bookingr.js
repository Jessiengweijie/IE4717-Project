// bookingr.js
//   event handlers
//   Note: This script does not work with IE8

// Get the DOM addresses of the elements and register 
//  the event handlers
var todaySGT = new Date();
const sgtOffset = 8 * 60; // SGT offset in minutes (UTC+8)
todaySGT.setMinutes(todaySGT.getMinutes() + sgtOffset); // Adjust the time to SGT

// Call the generateInfo() function when the page is loaded
document.addEventListener("DOMContentLoaded", function () {
    generateInfo();
    // set min input to today
    datetimeInput.setAttribute("min", todaySGT.toISOString().slice(0, 16));
});

// Add event listeners to the select elements
const datetimeInput = document.getElementById("booking-date");
const durationSelect = document.getElementById("booking-duration");

datetimeInput.addEventListener("change", calculateFeeAndEndTime);
durationSelect.addEventListener("change", calculateFeeAndEndTime);
