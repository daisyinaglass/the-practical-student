function validateOrder(form) {
	alert("Got to script");
	var name = form.name.value;
	var addressline1 = form.addressline1.value;
	var addressline2 = form.addressline2.value;
	var city = form.city.value;
	var state = form.state.value;
	var zip = form.zip.value;
	var cardholder = form.cardholder.value;
	var creditcard = form.creditcard.value;
	var cvv = form.cvv.value;
	var exp = form.exp.value;

	var letters = /^[A-Za-z\s]+$/;
	var addrLetters = /^[A-Za-z0-9\s]+$/;
	var numbers = /^[0-9]+$/;
	var expDate = /^[0-9]{2}\/[0-9]{2}$/;
	
	if (letters.test(name) == false) {
		alert("Please enter your name into the textbox.");
		return false;
	} else if (addrLetters.test(addressline1) == false){
		alert("Please enter address into the textbox.");
		return false;
	} else if (letters.test(city) == false){
		alert("Please enter city into the textbox.");
		return false;
	} else if (letters.test(state) == false){
		alert("Please enter state into the textbox.");
		return false;
	} else if (numbers.test(zip) == false){
		alert("Please enter zip code into the textbox.");
		return false;
	} else if (letters.test(cardholder) == false){
		alert("Please enter cardholder into the textbox.");
		return false;
	} else if (creditcard.length != 16 || numbers.test(creditcard) == false){
		alert("Please enter valid credit card number into the textbox.");
		return false;
	} else if (cvv.length != 3 || numbers.test(cvv) == false){
		alert("Please enter cvv into the textbox.");
		return false;
	} else if (expDate.test(exp) == false){
		alert("Please enter an expiration date DD/MM into the textbox.");
		return false;
	}
}