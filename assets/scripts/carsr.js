// carsr.js
//   event handlers
//   Note: This script does not work with IE8

// Get the DOM addresses of the elements and register 
//  the event handlers

var locationNode = document.getElementById("car-location-filter");
locationNode.addEventListener("change", locationFilter, false);

