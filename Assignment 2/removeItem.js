function removeItem(productID) {
	alert("Got to js script");
	var productDiv = document.getElementById(productID);

	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xhr.status == 200) {
			var result = xhr.responseText;
			document.getElementById("total").value = result;
			productDiv.remove();
		}
	}
	xhr.open("POST", "removeItem.php");
	
	xhr.send(null);
}