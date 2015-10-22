<?php
session_start();

$cart = $_SESSION['cart'];
//connect to database
$host = "localhost";
$user = "X32720502";
$password = "X32720502";
$dbc = mysql_pconnect($host, $user, $password);
$dbname = "X32720502";
mysql_select_db($dbname) or die("Cannot connect to database ".mysql_error());

foreach($_SESSION['cart'] as $row => $innerArray){
	$productid = $innerArray[0];
	$qty = $innerArray[1];

	//construct the query string
	$query = "SELECT Stock FROM PRODUCTS WHERE ProductID='".$productid."';";
	$result = mysql_query($query);

	while ($row = mysql_fetch_array($result)) {
		echo $row['Stock'];
	}
	//update how many of product are left
		//if user exceeds amount, write alert
}
	//write thank you
?>