// car_information.js
//   Note: This document does not work with IE8

// ********************************************************** //
// The event handler function for the location dropdown

function generateInfo() {
    // Get the URL search parameters
    const urlParams = new URLSearchParams(window.location.search);

    // Retrieve the 'location' parameter
    const locationParam = urlParams.get('location');

    // Retrieve the 'car' parameter
    const carParam = urlParams.get('car');

    // Set location dropdown
    if (locationParam) {
        document.getElementById('preset-options').value = locationParam
    }

    console.log('Location:', locationParam);
    console.log('Car:', carParam);

}

function bookNow() {
     // Get the URL search parameters
     const urlParams = new URLSearchParams(window.location.search);
 
     // Retrieve the 'car' parameter
     const carParam = urlParams.get('car');
    
    const dropdown = document.getElementById("preset-options");
    const selectedOption = dropdown.value;
    const selectedCar = carParam;

    if (!selectedOption) {
        alert('Please choose a location');
        return false
    }
    else {
        // Construct the URL with the selectedOption parameter
        const bookingUrl = `booking.php?location=${selectedOption}&car=${selectedCar}`;

        // Redirect to the constructed URL
        window.location.href = bookingUrl;
    }
}
