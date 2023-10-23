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
var usernameNode = document.getElementById("username");
var passwordNode = document.getElementById("password");
var confirm_passwordNode = document.getElementById("confirm_password");


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

if (usernameNode) {
    usernameNode.addEventListener("change", usernameChk, false);
}

if (passwordNode) {
    // Create an array of your password check functions
    const passwordCheckFunctions = [passwordChk1, passwordChk2, passwordChk3, passwordChk4, passwordChk5];
    // Add the event listener for each function in the array
    passwordCheckFunctions.forEach(function (checkFunction) {
        passwordNode.addEventListener("input", checkFunction, false);
    });
    confirm_passwordNode.addEventListener("change", confirm_passwordChk, false);
}


//***********************************************************************************************************************************//

if (passwordNode) {
    const passwordInput = document.getElementById('password');
    const passwordInput2 = document.getElementById('confirm_password');
    const showPasswordButton = document.getElementById('showPassword');

    showPasswordButton.addEventListener('click', function () {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordInput2.type = 'text';
            showPasswordButton.textContent = 'Hide Password';
        } else {
            passwordInput.type = 'password';
            passwordInput2.type = 'password';
            showPasswordButton.textContent = 'Show Password';
        }
    });
}