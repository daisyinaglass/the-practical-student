function checkAddProduct(form) {
	var name = form.name.value;
	var price = form.price.value;
	var photoref = form.photoref.value;
	var description = form.description.value;

	var pricePat = /^\d{1,3}\.\d{2}$/;
	var photoPat = /^\w*\.[a-zA-Z]{3}$/;

	name = name.replace(/^\s+|\s+$/g,'');
	photoref = photoref.replace(/^\s+|\s+$/g,'');
	description = description.replace(/^\s+|\s+$/g,'');

	if (name.length == 0) {
		alert("Please enter a name into the name textbox");
		return false;
	} else if (!pricePat.test(price)) {
		alert("Please enter a price with two decimal places");
		return false;
	} else if (!photoPat.test(photoref)) {
		alert("Please enter a file name into the textbox");
		return false;
	}  else if (description.length == 0) {
		alert("Please enter a description of the product in the text area");
		return false;
	}
}