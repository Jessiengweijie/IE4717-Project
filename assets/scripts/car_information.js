// car_information.js
//   Note: This document does not work with IE8

// ********************************************************** //

function generateInfo() {
    // Get the URL search parameters
    const urlParams = new URLSearchParams(window.location.search);

    // Retrieve the 'location' parameter
    const locationParam = urlParams.get('location_name');

    // Retrieve the 'car' parameter
    const carParam = urlParams.get('car_id');

    // Set location dropdown
    if (locationParam) {
        document.getElementById('preset-options').value = locationParam
    }
    else {
        document.getElementById('preset-options').value = '';
    }

}

function bookNow() {
     // Get the URL search parameters
     const urlParams = new URLSearchParams(window.location.search);
 
     // Retrieve the 'car' parameter
     const carParam = urlParams.get('car_id');
    
    const dropdown = document.getElementById("preset-options");
    const selectedOption = dropdown.value;
    const selectedCar = carParam;

    if (!selectedOption) {
        alert('Please choose a location');
        return false
    }
    else {
        // Construct the URL with the selectedOption parameter
        const bookingUrl = `booking.php?location_name=${selectedOption}&car_id=${selectedCar}`;

        // Redirect to the constructed URL
        window.location.href = bookingUrl;
    }
}
