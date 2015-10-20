function checkLoginFields(form) {
	var username = form.username.value;
	var password = form.password.value;
	var nameLetters = /^[A-Za-z\s]+$/;

	if (nameLetters.test(username) == false) {
		alert("Please enter your username into the textbox.");
		return false;
	} else if (nameLetters.test(password) == false) {
		alert("Please enter your password into the textbox.");
		return false;
	}
}