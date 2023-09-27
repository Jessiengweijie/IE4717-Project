
function dropdown() {
    const dropdown = document.getElementById("preset-options");
    const selectedOption = dropdown.value;
    if (!selectedOption) {
        alert('Please choose a location');
        return false
    }
    else {
        // Construct the URL with the selectedOption parameter
        const url = `booking.html?location=${selectedOption}`;

        // Redirect to the constructed URL
        window.location.href = url;
    }
    console.log(dropdown, selectedOption, 'test');
}
