function validateUpdate(form) {
	alert("Got to validate script");
	var username = form.username.value;
	var password = form.password.value;
	var confirmpassword = form.confirmpassword.value;
	username = username.replace(/^\s+|\s+$/g,'');
	password = password.replace(/^\s+|\s+$/g,'');
	confirmpassword = confirmpassword.replace(/^\s+|\s+$/g,'');

	if (username.length < 1) {
		alert("Please enter your username into the textbox.");
		return false;
	} else if (password.length < 1) {
		alert("Please enter your password into the textbox.");
		return false;
	} else if (password !== confirmpassword) {
		alert("Passwords do not match Please enter your old password to confirm OR Re-enter your new password.");
		return false;
	}
}