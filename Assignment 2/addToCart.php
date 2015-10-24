<?php 
session_start();

$quantity = $_POST['quantity'];
$productid = $_POST['productid'];

$productid = trim($productid);
$productid = stripcslashes($productid);
$productid = htmlspecialchars($productid);
$quantity = trim($quantity);
$quantity = stripcslashes($quantity);
$quantity = htmlspecialchars($quantity);

$host = "localhost";
$user = "X32720502";
$password = "X32720502";
$dbc = mysql_pconnect($host, $user, $password);
$dbname = "X32720502";
mysql_select_db($dbname) or die("Cannot connect to database ".mysql_error());

//construct the query string
$query = "SELECT * FROM PRODUCTS WHERE ProductID='".$productid."';";
$result = mysql_query($query);

//query the database & print out 
if (!$result) {
	echo "<script>Error with adding to cart</script>";
} else {
	$found = false;
	while ($row = mysql_fetch_array($result)) {
		//if already exists in cart, add to it
		for ($i = 0; $i < count($_SESSION['cart']); $i++) {
			if($_SESSION['cart'][$i][0] == $productid) {
				echo "<script>Found match; adding more to cart</script>";
				$_SESSION['cart'][$i][1] += $quantity;
				$found = true;
				break;
			}
		}
		//otherwise, create a new array element
		if ($found == false) {
			$product = array($productid, $quantity);
			$_SESSION['cart'][] = $product;
		}
		
    }

	/*foreach($_SESSION['cart'] as $row => $innerArray){
		foreach($innerArray as $innerRow => $value){
			echo $value . "<br/>";
		}
	}*/
	echo "<script>window.history.back()</script>";
}



mysql_free_result($result);
mysql_close();	
?>