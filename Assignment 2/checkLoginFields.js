function checkLoginFields(form) {
	var username = form.username.value;
	var password = form.password.value;
	username = username.replace(/^\s+|\s+$/g,'');
	password = password.replace(/^\s+|\s+$/g,'');

	if (username.length < 1) {
		alert("Please enter your username into the textbox.");
		return false;
	} else if (password.length < 1) {
		alert("Please enter your password into the textbox.");
		return false;
	}
}