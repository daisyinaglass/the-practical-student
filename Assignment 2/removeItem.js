function removeItem(productID) {
	//alert("Got to js script");
	var productDiv = document.getElementById(productID);
	var total = document.getElementById("total").value;
	var productID = productID;
	//alert("Product ID is: "+productID);

	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xhr.status == 200) {
			var result = xhr.responseText;
			document.getElementById("total").value = result;
			productDiv.remove();
		}
	}
	xhr.open("GET", "removeItem.php?productID="+productID+"&total="+total);
	
	xhr.send(null);
}