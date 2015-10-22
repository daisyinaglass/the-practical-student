<?php 
session_start();

$quantity = $_POST['quantity'];
$productid = $_POST['productid'];

echo $quantity . $productid;

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
	while ($row = mysql_fetch_array($result)) {
		$product = array($productid, $quantity);
		$_SESSION['cart'][] = $product;
    }

	foreach($_SESSION['cart'] as $row => $innerArray){
		foreach($innerArray as $innerRow => $value){
			echo $value . "<br/>";
		}
	}
}



mysql_free_result($result);
mysql_close();	
?>