// cars.js
//   Note: This document does not work with IE8

// ********************************************************** //
// The event handler function for the location dropdown

function dropdown() {
    const dropdown = document.getElementById("car-location-filter");
    const selectedOption = dropdown.value;
    if (!selectedOption) {
        alert('Please choose a location');
        return false
    }
    else {
        alert('you have chosen the location: ' + selectedOption + '.')
    }
    console.log(dropdown, selectedOption, 'test');
}

function generateCarData() {
    const carData = [
        {
            name: "Tesla Model 3",
            type: "Premium - Electric",
            imageUrl: "assets/images/Cars/Brands/Tesla/Electric/Tesla_Model3.png",
            infoLink: "car_information.html",
        },
        {
            name: "BMW 318i",
            type: "Premium - Sedan",
            imageUrl: "assets/images/Cars/Brands/BMW/Sedan/BMW_318i.png",
            infoLink: "car_information.html",
        },
        {
            name: "Audi Q3",
            type: "Premium - SUV",
            imageUrl: "assets/images/Cars/Brands/Audi/SUV/Audi_Q3.png",
            infoLink: "car_information.html",
        },
        {
            name: "Tesla Model 3",
            type: "Premium - Electric",
            imageUrl: "assets/images/Cars/Brands/Tesla/Electric/Tesla_Model3.png",
            infoLink: "car_information.html",
        },
        {
            name: "Tesla Model 3",
            type: "Premium - Electric",
            imageUrl: "assets/images/Cars/Brands/Tesla/Electric/Tesla_Model3.png",
            infoLink: "car_information.html",
        },
        {
            name: "Tesla Model 3",
            type: "Premium - Electric",
            imageUrl: "assets/images/Cars/Brands/Tesla/Electric/Tesla_Model3.png",
            infoLink: "car_information.html",
        },
        {
            name: "Tesla Model 3",
            type: "Premium - Electric",
            imageUrl: "assets/images/Cars/Brands/Tesla/Electric/Tesla_Model3.png",
            infoLink: "car_information.html",
        },
        {
            name: "Tesla Model 3",
            type: "Premium - Electric",
            imageUrl: "assets/images/Cars/Brands/Tesla/Electric/Tesla_Model3.png",
            infoLink: "car_information.html",
        },
        // Add more car objects as needed
    ];

    // Assuming you have a container element where you want to append the car templates
    const container = document.getElementById("car-container"); // Replace with the actual container ID

    // Loop through the car data array
    carData.forEach((car) => {
        // Create a car template element
        const carTemplate = document.createElement("div");
        carTemplate.className = "car-template";

        // Generate the HTML structure for the car template
        carTemplate.innerHTML = `
        <div class="car-body">
            <div class="car-name">
                <span>${car.name}</span>
                <a style="cursor: pointer;" onclick="inquiry('${car.name}');">
                    <img src="assets/images/Icons/questionmark-icon.png" height="16px" width="16px" alt="Question Mark">
                    <!-- image retrieved from https://www.flaticon.com/search?word=question -->
                </a>
            </div>
            <div class="car-type">
                ${car.type}
            </div>
            <div class="car-image">
                <img src="${car.imageUrl}" height="auto" width="100%" alt="${car.name}">
            </div>
        </div>
        <a class="center book-now-button" style="cursor: pointer;" onclick="bookNow('${car.name}');">Book Now</a>
    `;

        // Append the car template to the container
        container.appendChild(carTemplate);
    });


}

function inquiry(selectedCar) {
    const dropdown = document.getElementById("car-location-filter");
    const selectedOption = dropdown.value;

    // Construct the URL with parameters
    const carInfoUrl = `car_information.html?location=${selectedOption}&car=${selectedCar}`;

    // Redirect to the constructed URL
    window.location.href = carInfoUrl;
}

function bookNow(selectedCar) {
    const dropdown = document.getElementById("car-location-filter");
    const selectedOption = dropdown.value;

    if (!selectedOption) {
        alert('Please choose a location');
        return false
    }
    else {
        // Construct the URL with parameters
        const bookingUrl = `booking.php?location=${selectedOption}&car=${selectedCar}`;

        // Redirect to the constructed URL
        window.location.href = bookingUrl;
    }
}

