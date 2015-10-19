function checkRegistration(form) {
	var firstname = form.firstname.value;
	var lastname = form.lastname.value;
	var email = form.email.value;
	var username = form.username.value;
	var password = form.password.value;
	var confirmpassword = form.confirmpassword.value;

	var nameLetters = /^[A-Za-z\s]+$/;
	var emailLetters = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/ig;

	if (nameLetters.test(firstname) == false) {
		alert("Please enter your first name into the textbox.");
		return false;
	} else if (nameLetters.test(lastname) == false) {
		alert("Please enter your last name into the textbox.");
		return false;
	} else if (emailLetters.test(email) == false) {
		alert("Please enter a valid email.");
		return false;
	} else if (username.length < 7 || username.length > 25) {
		alert("Please create a username that is between 8 and 25 characters.");
		return false;
	} else if (password.length < 7) {
		alert("Password must be at least 8 characters.");
		return false;
	} else if (password !== confirmpassword) {
		alert("Passwords do not match.");
		return false;
	} 
}