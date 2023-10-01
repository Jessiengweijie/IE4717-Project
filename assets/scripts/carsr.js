// carsr.js
//   event handlers
//   Note: This script does not work with IE8

// Get the DOM addresses of the elements and register 
//  the event handlers

var locationNode = document.getElementById("car-location-filter");
var nameNode = document.getElementById('car-name')
locationNode.addEventListener("change", locationFilter, false);
nameNode.addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
        event.preventDefault(); // Prevent the default form submission
        nameFilter(this.value); // Call nameFilter function with the input value
    }
});



