// Define validation rules
var nameRegex = /^[A-Za-z]+$/;
var nricRegex = /^[STFGM]\d{7}[A-Z]$/;
var mobileRegex = /^[89]\d{7}$/;
var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
var addressRegex = /^[\w\d\s\.,#\-]{10,}$/;
var bankaccRegex = /^\d{7,9}$/;

// At least one digit (0-9):
var passwordRegex1 = /^(?=.*\d).+/;
// At least one lowercase letter (a-z):
var passwordRegex2 = /^(?=.*[a-z]).+/;
// At least one uppercase letter (A-Z):
var passwordRegex3 = /^(?=.*[A-Z]).+/;
// At least one special character (e.g., !, @, #, $, %, etc.):
var passwordRegex4 = /^(?=.*[!@#\$%\^&\*]).+/;
// Between 8 and 20 characters long:
var passwordRegex5 = /^.{8,20}$/;

function surnameChk(event) {
    if (event == 'check') {
        var surname = document.getElementById("surname");
    } else {
        // Get the target node of the event
        var surname = event.currentTarget;
    }

    var surnameError = document.getElementById("surnameError");

    // Test the Regex
    var pos = surname.value.search(nameRegex);

    if (pos != 0) {
        alert("The name you entered (" + surname.value +
            ") is not in the correct format. \n" +
            "Please ensure it follows this format: \n" +
            "- only alphabet characters. \n" +
            "- at least 1 character in length.");
        surnameError.textContent = "Invalid Surname";
        surname.focus();
        surname.select();
        return false;
    } else {
        surnameError.textContent = '';
        return true;
    }
}

function firstnameChk(event) {
    if (event == 'check') {
        var firstname = document.getElementById("firstname");
    } else {
        // Get the target node of the event
        var firstname = event.currentTarget;
    }

    var firstnameError = document.getElementById("firstnameError");

    // Test the Regex
    var pos = firstname.value.search(nameRegex);

    if (pos != 0) {
        alert("The name you entered (" + firstname.value +
            ") is not in the correct format. \n" +
            "Please ensure it follows this format: \n" +
            "- only alphabet characters. \n" +
            "- at least 1 character in length.");
        firstnameError.textContent = "Invalid First name";
        firstname.focus();
        firstname.select();
        return false;
    } else {
        firstnameError.textContent = '';
        return true;
    }
}

function nricChk(event) {
    if (event == 'check') {
        var nric = document.getElementById("nric");
    } else {
        // Get the target node of the event
        var nric = event.currentTarget;
    }

    var nricError = document.getElementById("nricError");

    // Test the Regex
    var pos = nric.value.search(nricRegex);

    if (pos != 0) {
        alert("The NRIC you entered (" + nric.value +
            ") is not in the correct format. \n" +
            "Please ensure it follows this format: \n" +
            "- Be in this form @xxxxxxx#. \n" +
            "- @ is a letter that can be 'S', 'T', 'F', 'G' or 'M'. \n" +
            "- xxxxxxx is a 7-digit serial number. \n" +
            "# is a checksum letter.");
        nricError.textContent = "Invalid NRIC";
        nric.focus();
        nric.select();
        return false;
    } else {
        nricError.textContent = '';
        return true;
    }
}

function dobChk(event) {
    if (event == 'check') {
        var dob = document.getElementById("dob");
    } else {
        // Get the target node of the event
        var dob = event.currentTarget;
    }

    var dateError = document.getElementById("dobError");

    // Get the selected date
    var selectedDate = new Date(dob.value);
    var today = new Date();

    // Calculate the minimum allowed birthdate (18 years ago from today)
    var minBirthdate = new Date();
    minBirthdate.setFullYear(minBirthdate.getFullYear() - 18);

    if (selectedDate < today) {
        if (selectedDate <= minBirthdate) {
            // set checker to true when pass regex
            dobChecker = 1;
            dateError.textContent = "";
            return true;
        } else {
            alert("You must be at least 18 years old to proceed.");
            dateError.textContent = "You must be at least 18 years old to proceed.";
            dob.focus();
            dob.select();
            return false;
        }
    } else {
        alert("Please choose a valid date of birth.");
        dateError.textContent = "Please choose a valid date of birth.";
        dob.focus();
        dob.select();
        return false;
    }

}

function licenseChk() {
    // Get the target node of the event
    var license = document.getElementById("license").value;
    var licenseError = document.getElementById("licenseError");

    // Test
    if (!license) {
        alert("Please select a License class");
        licenseError.textContent = "Please select a License class";
        license.focus();
        license.select();
        return false;
    } else {
        licenseError.textContent = '';
        return true;
    }
}

function mobileChk(event) {
    if (event == 'check') {
        var mobile = document.getElementById("mobile");
    } else {
        // Get the target node of the event
        var mobile = event.currentTarget;
    }

    var mobileError = document.getElementById("mobileError");

    // Test the Regex
    var pos = mobile.value.search(mobileRegex);

    if (pos != 0) {
        alert("The Mobile number you entered (" + mobile.value +
            ") is not in the correct format. \n" +
            "Please ensure it follows this format: \n" +
            "- Contain 8 digits. \n" +
            "- Start with 8 or 9.");
        mobileError.textContent = "Invalid Mobile number";
        mobile.focus();
        mobile.select();
        return false;
    } else {
        mobileError.textContent = '';
        return true;
    }
}

function emailChk(event) {
    if (event == 'check') {
        var email = document.getElementById("email");
    } else {
        // Get the target node of the event
        var email = event.currentTarget;
    }

    var emailError = document.getElementById("emailError");

    // Test the Regex
    var pos = email.value.search(emailRegex);

    if (pos != 0) {
        alert("The Email you entered (" + email.value +
            ") is not in the correct format. \n" +
            "Please ensure it follows this format: \n" +
            "- Be in this form username@mailserver.domain \n" +
            "- 'username' can include letters, numbers, '.', '_', and '-'.\n" +
            "- 'mailserver' can include letters, numbers, '.', and '-'.\n" +
            "- 'domain' must be at least 2 to 4 alphabetic characters.");
        emailError.textContent = "Invalid Email";
        email.focus();
        email.select();
        return false;
    } else {
        emailError.textContent = '';
        return true;
    }
}

function languagesChk() {
    // Get the target node of the event
    var languages = document.querySelectorAll('input[name="languages[]"]:checked');
    var languagesError = document.getElementById("languagesError");
    // Test
    if (languages.length === 0) {
        alert("Please select at least one language@@.");
        languagesError.textContent = "Please select at least one language@@@@@@@@@@@@.";
        const multiselectContainer = document.getElementById("multiselectContainer");
        multiselectContainer.focus();
        return false;
    } else {
        languagesError.textContent = '';
        return true;
    }
}


function addressChk(event) {
    if (event == 'check') {
        var address = document.getElementById("address");
    } else {
        // Get the target node of the event
        var address = event.currentTarget;
    }

    var addressError = document.getElementById("addressError");

    // Test the Regex
    var pos = address.value.search(addressRegex);

    if (pos != 0) {
        alert("The Address you entered (" + address.value +
            ") is not in the correct format. \n" +
            "Please ensure it follows this format: \n" +
            "- At least 10 characters long");
        addressError.textContent = "Invalid Address";
        address.focus();
        address.select();
        return false;
    } else {
        addressError.textContent = '';
        return true;
    }
}

function bankChk() {
    // Get the target node of the event
    var bank = document.getElementById("bank").value;
    var bankError = document.getElementById("bankError");

    // Test
    if (!bank) {
        alert("Please select a Bank");
        bankError.textContent = "Please select a Bank";
        bank.focus();
        bank.select();
        return false;
    } else {
        bankError.textContent = '';
        return true;
    }
}

function bankaccChk(event) {
    if (event == 'check') {
        var bankacc = document.getElementById("bankacc");
    } else {
        // Get the target node of the event
        var bankacc = event.currentTarget;
    }

    var bankaccError = document.getElementById("bankaccError");

    // Test the Regex
    var pos = bankacc.value.search(bankaccRegex);

    if (pos != 0) {
        alert("The Bank account number you entered (" + bankacc.value +
            ") is not in the correct format. \n" +
            "Please ensure it follows this format: \n" +
            "- contains 7 to 9 digits");
        bankaccError.textContent = "Invalid Bank account number";
        bankacc.focus();
        bankacc.select();
        return false;
    } else {
        bankaccError.textContent = '';
        return true;
    }
}

function passwordChk1(event) {
    const circleElement = document.getElementById('passwordRegex1');
    if (event == 'check') {
        var password = document.getElementById("password");
    } else {
        // Get the target node of the event
        var password = event.currentTarget;
    }

    // Test the Regex
    var pos = password.value.search(passwordRegex1);
    if (pos != 0) {

        circleElement.style.backgroundColor = 'red';
        return false;
    } else {
        circleElement.style.backgroundColor = 'green';
        return true;
    }
}

function passwordChk2(event) {
    const circleElement = document.getElementById('passwordRegex2');
    if (event == 'check') {
        var password = document.getElementById("password");
    } else {
        // Get the target node of the event
        var password = event.currentTarget;
    }

    // Test the Regex
    var pos = password.value.search(passwordRegex2);
    if (pos != 0) {

        circleElement.style.backgroundColor = 'red';
        return false;
    } else {
        circleElement.style.backgroundColor = 'green';
        return true;
    }
}

function passwordChk3(event) {
    const circleElement = document.getElementById('passwordRegex3');
    if (event == 'check') {
        var password = document.getElementById("password");
    } else {
        // Get the target node of the event
        var password = event.currentTarget;
    }

    // Test the Regex
    var pos = password.value.search(passwordRegex3);
    if (pos != 0) {

        circleElement.style.backgroundColor = 'red';
        return false;
    } else {
        circleElement.style.backgroundColor = 'green';
        return true;
    }
}

function passwordChk4(event) {
    const circleElement = document.getElementById('passwordRegex4');
    if (event == 'check') {
        var password = document.getElementById("password");
    } else {
        // Get the target node of the event
        var password = event.currentTarget;
    }

    // Test the Regex
    var pos = password.value.search(passwordRegex4);
    if (pos != 0) {

        circleElement.style.backgroundColor = 'red';
        return false;
    } else {
        circleElement.style.backgroundColor = 'green';
        return true;
    }
}

function passwordChk5(event) {
    const circleElement = document.getElementById('passwordRegex5');
    if (event == 'check') {
        var password = document.getElementById("password");
    } else {
        // Get the target node of the event
        var password = event.currentTarget;
    }

    // Test the Regex
    var pos = password.value.search(passwordRegex5);
    if (pos != 0) {
        circleElement.style.backgroundColor = 'red';
        return false;
    } else {
        circleElement.style.backgroundColor = 'green';
        return true;
    }
}

function passwordChk() {
    const passwordError = "The Password you entered (" + password.value +
        ") is not in the correct format. \n" +
        "Please ensure it follows this format: \n" +
        "- At least one number (0-9). \n" +
        "- At least one lowercase letter (a-z). \n" +
        "- At least one uppercase letter (A-Z). \n" +
        "- At least one special character (e.g., !, @, #, $, %, etc.). \n" +
        "- At least 8 and at most 20 characters long.";
    const passwordCheckFunctions = [passwordChk1, passwordChk2, passwordChk3, passwordChk4, passwordChk5];
    let allChecksPassed = true;

    for (const checkFunction of passwordCheckFunctions) {
        if (!checkFunction('check')) {
            allChecksPassed = false;
            break;
        }
    }

    if (!allChecksPassed) {
        alert(passwordError);
        password.focus();
        password.select();
        return false;
    } else {
        return true;
    }

}

function confirm_passwordChk() {
    var password = document.getElementById("password");
    var confirm_password = document.getElementById("confirm_password");
    var confirm_passwordError = document.getElementById("confirm_passwordError");

    // Test
    if (confirm_password.value !== password.value) { console.log(confirm_password.value,password.value)
        alert("Your passwords do not match.");
        confirm_passwordError.textContent = 'Your passwords do not match.';
        confirm_password.focus();
        confirm_password.select();
        return false;
    } else {
        confirm_passwordError.textContent = '';
        return true;
    }
}




function validateForm() {
    if (!surnameChk("check")) {
        return false;
    }
    if (!firstnameChk("check")) {
        return false;
    }
    if (!nricChk("check")) {
        return false;
    }
    if (!dobChk("check")) {
        return false;
    }
    if (!licenseChk()) {
        return false;
    }
    if (!mobileChk("check")) {
        return false;
    }
    if (!emailChk("check")) {
        return false;
    }
    if (!languagesChk()) {
        return false;
    }
    if (!addressChk("check")) {
        return false;
    }
    if (!bankChk()) {
        return false;
    }
    if (!bankaccChk("check")) {
        return false;
    }
    if (!passwordChk()) {
        return false;
    }
    if (!confirm_passwordChk()) {
        return false;
    }
    return true;
}

function convertToUppercase(input) {
    input.value = input.value.toUpperCase();
}

// Edit button
function toggleReadOnly() {
    const editContent = document.querySelectorAll('.edit');
    const originalContent = document.querySelectorAll('.original');

    if (toggleButton.value == 1) {
        toggleButton.textContent = "Enable Edit";
        editContent.forEach(function (element) {
            element.style.display = 'none';
        });
        originalContent.forEach(function (element) {
            element.style.display = 'block';
        });
        document.getElementById('submitButton').setAttribute('disabled', 'disabled');
        toggleButton.value = 0;
    } else {
        toggleButton.textContent = "Disable Edit";
        editContent.forEach(function (element) {
            element.style.display = 'block';
        });
        originalContent.forEach(function (element) {
            element.style.display = 'none';
        });
        document.getElementById('submitButton').removeAttribute('disabled');
        toggleButton.value = 1;
    }
}

