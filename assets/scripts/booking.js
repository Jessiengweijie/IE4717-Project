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

var checker = 0;

function toggleContent(view) {
    const hourlyContent = document.querySelector('.hourly');
    const dailyContent = document.querySelector('.daily');
    const hourlyButton = document.getElementById('hourly-button');
    const dailyButton = document.getElementById('daily-button');

    if (view === 'hourly') {
        hourlyContent.style.display = 'table-row';
        dailyContent.style.display = 'none';
        hourlyButton.classList.add('active');
        dailyButton.classList.remove('active');
        checker = 0;
    } else if (view === 'daily') {
        hourlyContent.style.display = 'none';
        dailyContent.style.display = 'table-row';
        hourlyButton.classList.remove('active');
        dailyButton.classList.add('active');
        checker = 1;
    }
    calculateFeeAndEndTime();
}

function calculateFeeAndEndTime() {
    const rentalRate = document.getElementById("rental-rate").value;
    const dateSelect = document.getElementById("booking-date");
    const durationSelect = document.getElementById("booking-duration");
    const durationSelectDay = document.getElementById("booking-duration-day");
    const feeDisplay = document.getElementById("booking-fee");
    const endDisplay = document.getElementById("booking-end");

    // Get the selected time and duration values
    const selectedDate = new Date(dateSelect.value);
    var selectedDuration = 0;
    if (checker == 0) {
        selectedDuration = durationSelect.value;
        document.getElementById("booking-duration-day").value = null;
    } else if (checker == 1) {
        selectedDuration = durationSelectDay.value * 24;
        document.getElementById("booking-duration").value = null;
    }


    // Calculate the end time
    const endTime = new Date(selectedDate.getTime() + selectedDuration * 60 * 60 * 1000);

    // Calculate the fee
    const fee = selectedDuration * rentalRate;

    // Display the calculated fee and end time only if all parameters are true
    if (dateChk('check') && selectedDuration) {
        document.getElementById("booking-fee-final").value = fee;
        // "YYYY-MM-DDTHH:MM" Format
        document.getElementById("booking-end-final").value = endTime.toISOString();
        feeDisplay.textContent = "$" + fee.toFixed(2); // Format as currency
        endDisplay.textContent = endTime;
    } else {
        // Clear form
        document.getElementById("booking-fee-final").value = null;
        document.getElementById("booking-end-final").value = null;
        feeDisplay.textContent = null;
        endDisplay.textContent = null;
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
    var hour = document.getElementById("booking-duration");
    var day = document.getElementById("booking-duration-day");
    if (!hour.value && !day.value) {
        alert("Please choose a duration.");
        if (checker == 0) {
            hour.focus();


        } else if (checker == 1) {
            day.focus();

        }
        return false;
    }
    if (!hour.value && day.value) {
        hour.removeAttribute("required");

    }
    if (hour.value && !day.value) {
        hour.removeAttribute("required");
    }
    return true;
}

