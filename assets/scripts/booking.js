// booking.js
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
        // Select the <p> element by its ID
        const locationInfoElement = document.getElementById('location-info');

        // Set the content of the <p> element to the 'locationParam' value
        locationInfoElement.textContent = locationParam;
    }
    else {
        // Kick back to choose location in case code breaks
        alert('You have not selected a location, please select a location.');
        window.location.href = 'cars.html';
    }

    const rentalRate = 12;
    document.getElementById("rental-rate").value = rentalRate;
    const container = document.getElementById("rental-rate"); // Replace with the actual container ID

    // Create a price template element
    const priceTemplate = document.createElement("p");
    priceTemplate.className = "rental-rate";
    // Generate the HTML structure for the parameters
    priceTemplate.innerHTML = `
   <p>$${rentalRate} per hour</p>
    `;

    // Append the price template to the container
    container.appendChild(priceTemplate);


    console.log('Location:', locationParam);
    console.log('Car:', carParam,);
}



function toggleContent(view) {
    const hourlyContent = document.querySelector('.hourly');
    const dailyContent = document.querySelector('.daily');
    const hourlyButton = document.getElementById('hourly-button');
    const dailyButton = document.getElementById('daily-button');

    if (view === 'hourly') {
        hourlyContent.style.display = 'block';
        dailyContent.style.display = 'none';
        hourlyButton.classList.add('active');
        dailyButton.classList.remove('active');
    } else if (view === 'daily') {
        hourlyContent.style.display = 'none';
        dailyContent.style.display = 'block';
        hourlyButton.classList.remove('active');
        dailyButton.classList.add('active');
    }
}

function calculateFeeAndEndTime() {
    const rentalRate = document.getElementById("rental-rate").value;
    const dateSelect = document.getElementById("booking-date");
    const timeSelect = document.getElementById("booking-time");
    const durationSelect = document.getElementById("booking-duration");
    const feeDisplay = document.getElementById("booking-fee");
    const endDisplay = document.getElementById("booking-end");

    // Get the selected time and duration values
    const selectedDate = dateSelect.value;
    const selectedTime = timeSelect.value;
    const selectedDuration = durationSelect.value;

    // Split the date into its components
    const [year, month, day] = selectedDate.split("-");

    // Calculate the end time based on the selected time and duration
    const [hours, minutes] = selectedTime.split(":");
    const endTime = new Date(year, month - 1, day, parseInt(hours), parseInt(minutes));
    endTime.setHours(endTime.getHours() + parseInt(selectedDuration));

    // Calculate the fee
    const fee = selectedDuration * rentalRate;

    // Format the date and time components separately
    const endDay = endTime.getDate().toString().padStart(2, "0");
    const endMonth = (endTime.getMonth() + 1).toString().padStart(2, "0");
    const endYear = endTime.getFullYear().toString().slice(2);
    const endHours = endTime.getHours().toString().padStart(2, "0");
    const endMinutes = endTime.getMinutes().toString().padStart(2, "0");

    // Combine the formatted components into the desired format
    const formattedEndTime = `${endDay}/${endMonth}/${endYear} ${endHours}:${endMinutes}`;


    // Display the calculated fee and end time only if all 3 parameters are true
    if (selectedDate && selectedTime && selectedDuration) {
        document.getElementById("booking-fee-final").value = fee;
        document.getElementById("booking-end-final").value = formattedEndTime;
        document.getElementById("rental-rate-final").value = rentalRate;

        feeDisplay.textContent = "$" + fee.toFixed(2); // Format as currency
        endDisplay.textContent = formattedEndTime;
    }

}

function bookNow() {
    // Get the URL search parameters
    const urlParams = new URLSearchParams(window.location.search);

    // Retrieve the 'location' parameter
    const locationParam = urlParams.get('location');

    // Retrieve the 'car' parameter
    const carParam = urlParams.get('car');

    // Set the location and car
    document.getElementById("booking-location").value = locationParam;
    document.getElementById("booking-car").value = carParam;

    console.log(locationParam, carParam)
}
