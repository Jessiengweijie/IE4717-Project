// Define validation rules
var nameRegex = /^[A-Za-z].*$/;
var nricRegex = /^[A-Z]\d{7}[A-Z]$/; // Replace with the appropriate regex for your region
var dateRegex = /^\d{4}-\d{2}-\d{2}$/; // Adjust as needed for your date format
var licenseRegex = /^[a-zA-Z0-9_]+$/; // Modify to match your license pattern
var mobileRegex = /^[0-9]{8}$/; // Adjust based on your mobile number format
var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;



function surnameChk(event) {console.log('check')

    // Get the target node of the event

    var surname = event.currentTarget;
    var surnameError = document.getElementById("surnameError");

    // Test the format of the input name 

    var pos = surname.value.search(nameRegex);


    if (pos != 0) {
        alert("The name you entered (" + surname.value +
            ") is not in the correct form. \n" +
            "The correct form should: \n" +
            "- contains alphabet characters and character spaces. \n" +
            "- at least 3 characters in length.");
        surnameError.textContent = "Invalid surname";
        myName.focus();
        myName.select();
        return false;
    } else {
        surnameError.textContent = '';
    }
}











function validateForm() {


    // Get form inputs
    var surname = document.forms["signupForm"]["surname"].value;
    var firstname = document.forms["signupForm"]["firstname"].value;
    var nric = document.forms["signupForm"]["nric"].value;
    var date = document.forms["signupForm"]["date"].value;
    var license = document.forms["signupForm"]["license"].value;
    var mobile = document.forms["signupForm"]["mobile"].value;
    var email = document.forms["signupForm"]["email"].value;
    var languages = document.forms["signupForm"]["languages[]"];
    var address = document.forms["signupForm"]["address"].value;
    var bank = document.forms["signupForm"]["bank"].value;
    var bankacc = document.forms["signupForm"]["bankacc"].value;
    console.log('check', surname, firstname, nric, date);
    return false;

    // Define validation rules
    var usernameRegex = /^[a-zA-Z0-9_]+$/;
    var nricRegex = /^[A-Z]\d{7}[A-Z]$/; // Replace with the appropriate regex for your region
    var dateRegex = /^\d{4}-\d{2}-\d{2}$/; // Adjust as needed for your date format
    var licenseRegex = /^[a-zA-Z0-9_]+$/; // Modify to match your license pattern
    var mobileRegex = /^[0-9]{8}$/; // Adjust based on your mobile number format
    var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    // Check surname
    if (!surname) {
        alert("Surname is required.");
        return false;
    }

    // Check firstname
    if (!firstname) {
        alert("First name is required.");
        return false;
    }

    // Check NRIC
    if (!nric) {
        alert("NRIC is required.");
        return false;
    } else {
        if (!nric.match(nricRegex)) {
            alert("NRIC is invalid.");
            return false;
        }
    }


    // Check date
    if (!date) {
        alert("Date is required.");
        return false;
    } else {
        if (!date.match(dateRegex)) {
            alert("Date is invalid.");
            return false;
        }
    }

    // Check license
    if (!license) {
        alert("License is required.");
        return false;
    } else {
        if (!license.match(licenseRegex)) {
            alert("License is invalid.");
            return false;
        }
    }

    // Check mobile
    if (!mobile) {
        alert("Mobile is required.");
        return false;
    } else {
        if (!mobile.match(mobileRegex)) {
            alert("Mobile number is invalid.");
            return false;
        }
    }

    // Check email
    if (!email) {
        alert("Email is required.");
        return false;
    } else {
        if (!email.match(emailRegex)) {
            alert("Email is invalid.");
            return false;
        }
    }

    // Check languages
    var selectedLanguages = [];
    for (var i = 0; i < languages.length; i++) {
        if (languages[i].checked) {
            selectedLanguages.push(languages[i].value);
        }
    }
    if (selectedLanguages.length === 0) {
        alert("Language is required.");
        return false;
    }

    // Check address
    if (!address) {
        alert("Address is required.");
        return false;
    }

    // Check bank
    if (!bank) {
        alert("Bank is required.");
        return false;
    }

    // Check bank account
    if (!bankacc) {
        alert("Bank account is required.");
        return false;
    }

}