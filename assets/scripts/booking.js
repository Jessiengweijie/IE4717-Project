// booking.js
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
        // Select the <p> element by its ID
        const locationInfoElement = document.getElementById('location-info');

        // Set the content of the <p> element to the 'locationParam' value
        locationInfoElement.textContent = locationParam;
    }
    else {
        // Kick back to choose location in case code breaks
        alert('You have not selected a location, please select a location.');
        window.location.href = 'cars.php';
    }

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
    const durationSelect = document.getElementById("booking-duration");
    const feeDisplay = document.getElementById("booking-fee");
    const endDisplay = document.getElementById("booking-end");

    // Get the selected time and duration values
    const selectedDate = new Date(dateSelect.value); console.log(dateSelect.value)
    const selectedDuration = durationSelect.value;

    // Calculate the end time
    const endTime = new Date(selectedDate.getTime() + selectedDuration * 60 * 60 * 1000);

    // Calculate the fee
    const fee = selectedDuration * rentalRate;

    // Display the calculated fee and end time only if all 3 parameters are true
    if (dateChk('check') && selectedDuration) {
        document.getElementById("booking-fee-final").value = fee;
        // "YYYY-MM-DDTHH:MM" Format
        document.getElementById("booking-end-final").value = endTime.toISOString(); console.log(endTime.toISOString())
        feeDisplay.textContent = "$" + fee.toFixed(2); // Format as currency
        endDisplay.textContent = endTime;
    }
}

function dateChk(event) {
    if (event == 'check') {
        var date = document.getElementById("booking-date");
    } else {
        // Get the target node of the event
        var date = event.currentTarget;
    }

    var today = new Date();
    var dateError = document.getElementById("dateError");

    // Get the selected date
    var dateselect = new Date(date.value);
    console.log(dateselect.getTime(), today.getTime(),dateselect,today)
    // Check if selected date is greater than or equal to the current time
    if (dateselect >= today) {
        dateError.textContent = "";
        return true;
    } else {
        alert("Please choose a future date.");
        dateError.textContent = "Please choose a future date.";
        date.focus();
        date.select();
        return false;
    }
}

function validateForm() {
    if (!dateChk("check")) {
        return false;
    }
    return true;
}

