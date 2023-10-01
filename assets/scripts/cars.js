// cars.js
//   Note: This document does not work with IE8

// ********************************************************** //
// The event handler function for the location dropdown

// Get the URL search parameters
const urlParams = new URLSearchParams(window.location.search);

// Retrieve the URL parameters
const locationParam = urlParams.get('location_name');
const nameParam = urlParams.get('car_name');
const carCategoryParam = urlParams.get('category');
const carTypeParam = urlParams.get('type');
const carBrandParam = urlParams.get('brand');
const carNameParam = urlParams.get('car_name');

function locationFilter() {
    const locationSelect = document.getElementById("car-location-filter");
    const selectedOption = locationSelect.value;
    filter(selectedOption, carCategoryParam, carTypeParam, carBrandParam, carNameParam);
}

function categoryFilter(event) {
    let category = event.target.value;
    // If the clicked radio button is checked, uncheck it
    if (carCategoryParam == category) {
        category = '';
    }
    filter(locationParam, nameParam, category, carTypeParam, carBrandParam, carNameParam);
}

function typeFilter(event) {
    let type = event.target.value;
    // If the clicked radio button is checked, uncheck it
    if (carTypeParam == type) {
        type = '';
    }
    filter(locationParam, nameParam, carCategoryParam, type, carBrandParam, carNameParam);
}

function brandFilter(event) {
    let brand = event.target.value;
    // If the clicked radio button is checked, uncheck it
    if (carBrandParam == brand) {
        brand = '';
    }
    filter(locationParam, nameParam, carCategoryParam, carTypeParam, brand, carNameParam);
}

function reset() {
    filter(null);
}

function filter(location, name, category, type, brand) {
    // Construct the URL with the selected value
    let url = 'cars.php?';

    if (location) {
        url += `location_name=${location}&`;
    }

    if (name) {
        url += `car_name=${name}&`;
    }

    if (category) {
        url += `category=${category}&`;
    }

    if (type) {
        url += `type=${type}&`;
    }

    if (brand) {
        url += `brand=${brand}&`;
    }

    // Remove the trailing '&' character, if any
    if (url.endsWith('&')) {
        url = url.slice(0, -1);
    }

    // Navigate to the URL
    console.log(url)
    window.location.href = url;
}

function inquiry(selectedCar) {
    const locationSelect = document.getElementById("car-location-filter");
    const selectedOption = locationSelect.value;

    // Construct the URL with parameters
    const carInfoUrl = `car_information.php?location_name=${selectedOption}&car_id=${selectedCar}`;

    // Redirect to the constructed URL
    window.location.href = carInfoUrl;
}

function bookNow(selectedCar) {
    const locationSelect = document.getElementById("car-location-filter");
    const selectedOption = locationSelect.value;

    if (!selectedOption) {
        alert('Please choose a location');
        return false
    }
    else {
        // Construct the URL with parameters
        const bookingUrl = `booking.php?location_name=${selectedOption}&car_id=${selectedCar}`;

        // Redirect to the constructed URL
        window.location.href = bookingUrl;
    }
}

