// Define validation rules
var nameRegex = /^[A-Za-z]+$/;
var nricRegex = /^[STFGM]\d{7}[A-Z]$/;
var mobileRegex = /^[89]\d{7}$/;
var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
var addressRegex = /^[\w\d\s\.,#\-]{10,}$/;
var bankaccRegex = /^\d{7,9}$/;

var surnameChecker = 0;
var firstnameChecker = 0;
var nricChecker = 0;
var dobChecker = 0;
var licenseChecker = 0;

var mobileChecker = 0;
var emailChecker = 0;
var languagesChecker = 0;

var addressChecker = 0;

var bankChecker = 0;
var bankaccChecker = 0;

function surnameChk(event) {
    // set checker to false
    surnameChecker = 0;

    // Get the target node of the event
    var surname = event.currentTarget;
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
        // set checker to true when pass regex
        surnameChecker = 1;
        surnameError.textContent = '';
    }
}

function firstnameChk(event) {
    // set checker to false
    firstnameChecker = 0;

    // Get the target node of the event
    var firstname = event.currentTarget;
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
        // set checker to true when pass regex
        firstnameChecker = 1;
        firstnameError.textContent = '';
    }
}

function nricChk(event) {
    // set checker to false
    nricChecker = 0;

    // Get the target node of the event
    var nric = event.currentTarget;
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
        // set checker to true when pass regex
        nricChecker = 1;
        nricError.textContent = '';
    }
}

function dobChk(event) {
    // set checker to false
    dobChecker = 0;

    // Get the target node of the event
    var dob = event.currentTarget;
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
    // set checker to false
    licenseChecker = 0;

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
        // set checker to true when pass regex
        licenseChecker = 1;
        licenseError.textContent = '';
    }
}

function mobileChk(event) {
    // set checker to false
    mobileChecker = 0;

    // Get the target node of the event
    var mobile = event.currentTarget;
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
        // set checker to true when pass regex
        mobileChecker = 1;
        mobileError.textContent = '';
    }
}

function emailChk(event) {
    // set checker to false
    emailChecker = 0;

    // Get the target node of the event
    var email = event.currentTarget;
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
        // set checker to true when pass regex
        emailChecker = 1;
        emailError.textContent = '';
    }
}

function languagesChk() {
    // set checker to false
    languagesChecker = 0;

    // Get the target node of the event
    var languages = document.querySelectorAll('input[name="languages[]"]:checked');
    var languagesError = document.getElementById("languagesError"); console.log(languages, languages.length)
    // Test
    if (languages.length === 0) {
        languagesError.textContent = "Please select at least one language.";
        return false;
    } else {
        // set checker to true when pass regex
        languagesChecker = 1;
        languagesError.textContent = '';
        return true;
    }
}


function addressChk(event) {
    // set checker to false
    addressChecker = 0;

    // Get the target node of the event
    var address = event.currentTarget;
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
        // set checker to true when pass regex
        addressChecker = 1;
        addressError.textContent = '';
    }
}

function bankChk() {
    // set checker to false
    bankChecker = 0;

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
        // set checker to true when pass regex
        bankChecker = 1;
        bankError.textContent = '';
    }
}

function bankaccChk(event) {
    // set checker to false
    bankaccChecker = 0;

    // Get the target node of the event
    var bankacc = event.currentTarget;
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
        // set checker to true when pass regex
        bankaccChecker = 1;
        bankaccError.textContent = '';
    }
}

function validateForm() {
    if (!surnameChecker) {
        alert("Invalid Surname, please enter a valid surname.");
        surname.focus();
        surname.select();
        return false;
    }
    if (!firstnameChecker) {
        alert("Invalid First name, please enter a valid first name.");
        firstname.focus();
        firstname.select();
        return false;
    }
    if (!nricChecker) {
        alert("Invalid NRIC, please enter a valid NRIC.");
        nric.focus();
        nric.select();
        return false;
    }
    if (!dobChecker) {
        alert("Invalid Date of birth, please enter a valid Date of birth.");
        dob.focus();
        dob.select();
        return false;
    }
    licenseChk();

    if (!mobileChecker) {
        alert("Invalid Mobile number, please enter a valid Mobile number.");
        mobile.focus();
        mobile.select();
        return false;
    }
    if (!emailChecker) {
        alert("Invalid Email, please enter a valid Email.");
        email.focus();
        email.select();
        return false;
    }
    if (!languagesChk()) {
        alert("Please select at least one language.");
        const multiselectContainer = document.getElementById("multiselectContainer");
        multiselectContainer.focus();
        return false;
    }
    if (!addressChecker) {
        alert("Invalid Address, please enter a valid address.");
        address.focus();
        address.select();
        return false;
    }
    bankChk();
    if (!bankaccChecker) {
        alert("Invalid Bank account number, please enter a valid Bank Account number.");
        bankacc.focus();
        bankacc.select();
        return false;
    }
    return true;
}

function convertToUppercase(input) {
    input.value = input.value.toUpperCase();
}

