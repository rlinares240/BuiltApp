

window.onsubmit = validateForm;

function isNumber(varCheck) {
	if (String(parseInt(varCheck)) !== varCheck) {
		return false;
	}
	return true;
}

function validateForm() {

	/* Retrieving values */
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
	var weight = document.getElementById("weight").value;
	var feet = document.getElementById("feet").value;
	var inches = document.getElementById("inches").value;

	/* Validating Phone Number */
	var invalidMessages = "";
	if (!isNumber(weight)) {
		invalidMessages +="Enter a number for your weight.\n";
	}
	

	/* Validating password length */
	if (password.length > 15) {
		invalidMessages +="Your password must be less than 15 characters.\n";
	}



	/* Validating that forms complete */
	if (name.length < 1 || password.length < 1 || email.length < 1 || feet.length < 1 || inches.length < 1){
		invalidMessages +="You must fill out all the fields.";
	}



	/* Display Ivalid Message if any invalid input provided.*/
	if (invalidMessages === "") {
		if (window.confirm("Do you want to submit the registration?")) {
			return true;
		} else {
			return false;
		}
	} else {
		alert(invalidMessages);
		return false;
	}
}