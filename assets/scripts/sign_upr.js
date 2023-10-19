const selectedItems = document.getElementById('selectedItems');
const options = document.querySelectorAll('.multiselect-options input[type="checkbox"]');
const resetButton = document.getElementById('resetButton');
const toggleButton = document.getElementById("toggleButton");
const editableFields = document.querySelectorAll(".editable");

options.forEach(option => {
    option.addEventListener('change', () => {
        if (option.checked) {
            const tag = document.createElement('div');
            tag.className = 'selected-item';
            tag.textContent = option.parentElement.textContent.trim();
            selectedItems.appendChild(tag);
        } else {
            const tags = selectedItems.getElementsByClassName('selected-item');
            for (const tag of tags) {
                if (tag.textContent === option.parentElement.textContent.trim()) {
                    selectedItems.removeChild(tag);
                }
            }
        }
    });
});

// Function to check checkboxes on load
function checkCheckboxes() {
    options.forEach(option => {
        if (option.checked) {
            const tag = document.createElement('div');
            tag.className = 'selected-item';
            tag.textContent = option.parentElement.textContent.trim();
            selectedItems.appendChild(tag);
        }
    });
}

// Check checkboxes on page load
window.addEventListener('load', checkCheckboxes);
if (resetButton) {
    resetButton.addEventListener('click', () => {
        // Clear all child elements from the selectedItems container
        while (selectedItems.firstChild) {
            selectedItems.removeChild(selectedItems.firstChild);
        }
    });
}

if (toggleButton) {
    toggleButton.addEventListener("click", toggleReadOnly);
}

//***********************************************************************************************************************************//
// Form validation
var surnameNode = document.getElementById("surname");
var firstnameNode = document.getElementById("firstname");
var nricNode = document.getElementById("nric");
var dateNode = document.getElementById("dob");
var licenseNode = document.getElementById("license");
var mobileNode = document.getElementById("mobile");
var emailNode = document.getElementById("email");
var languagesNode = document.querySelectorAll('input[name="languages[]"]');
var addressNode = document.getElementById("address");
var bankNode = document.getElementById("bank");
var bankaccNode = document.getElementById("bankacc");

surnameNode.addEventListener("change", surnameChk, false);
firstnameNode.addEventListener("change", firstnameChk, false);
nricNode.addEventListener("change", nricChk, false);
dateNode.addEventListener("change", dobChk, false);
licenseNode.addEventListener("change", licenseChk, false);
mobileNode.addEventListener("change", mobileChk, false);
emailNode.addEventListener("change", emailChk, false);
languagesNode.forEach(function (checkbox) {
    checkbox.addEventListener("change", languagesChk, false);
});
addressNode.addEventListener("change", addressChk, false);
bankNode.addEventListener("change", bankChk, false);
bankaccNode.addEventListener("change", bankaccChk, false);

//***********************************************************************************************************************************//

