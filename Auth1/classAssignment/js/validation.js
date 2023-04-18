function validateName(name) {
	var pattern = /^[A-Za-z.-]+$/;
	return pattern.test(name);
}

function validateEmail(email) {
    var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
    return pattern.test(email);
}

function validateMobileNumber(mobile_number) {
    var pattern = /^\d{10,11}$/;
    return pattern.test(mobile_number);
}

function validateHomeNumber(home_number) {
    var pattern = /^\d{10,11}$/;
    return pattern.test(home_number);
}

function validateMatricNumber(matric_number) {
    var pattern = /^\d{7}$/;
    return pattern.test(matric_number);
}

function validatecurrentAddress(current_address) {
	var pattern = /^[A-Za-z0-9\s,'-./]+$/;
	return pattern.test(current_address);
}

function validatehomeAddress(home_address) {
	var pattern = /^[A-Za-z0-9\s,'-./]+$/;
	return pattern.test(home_address);
}

function validateInput() {
    var name = document.forms["registration_form"]["name"].value;
    var matric_number = document.forms["registration_form"]["matric_number"].value;
    var current_address = document.forms["registration_form"]["current_address"].value;
    var home_address = document.forms["registration_form"]["home_address"].value;
    var email = document.forms["registration_form"]["email"].value;
    var mobile_number = document.forms["registration_form"]["mobile_number"].value;
    var home_number = document.forms["registration_form"]["home_number"].value;

	if (name == "" || matric_number == "" || current_address == "" || home_address == "" || email == "" || mobile_number == "" || home_number == "") {
        alert("Please fill in all the required fields.");
        return false;
    }

    if (!validateName(name)) {
		alert("Please fill in a proper name.");
		return false;
	}

    if (!validateEmail(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    if (!validateMobileNumber(mobile_number)) {
        alert("Mobile Number must be 10 to 11 digits only.");
        return false;
    }

    if (!validateHomeNumber(home_number)) {
        alert("Home Number must be 10 to 11 digits only.");
        return false;
    }

    if (!validateMatricNumber(matric_number)) {
        alert("Matric Number must be 7 digits only.");
        return false;
    }

    if (!validateAddress(current_address)) {
        alert("Current Address can only contain letters, digits, and these special characters: ,'-. /");
        return false;
    }

    if (!validateAddress(home_address)) {
        alert("Home Address can only contain letters, digits, and these special characters: ,'-. /");
        return false;
    }

    return true;
}