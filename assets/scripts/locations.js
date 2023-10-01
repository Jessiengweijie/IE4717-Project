// locations.js
//   Note: This document does not work with IE8

// ********************************************************** //

function searchLocation() {
    const locationSelect = document.getElementById("car-location-filter");
    const selectedOption = locationSelect.value;
    let url = `cars.php?location_name=${selectedOption}`
    window.location.href = url;
}