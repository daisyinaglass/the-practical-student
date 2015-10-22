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
	$query = "SELECT * FROM PRODUCTS WHERE ProductID='".$productid."';";
	$result = mysql_query($query);
	//print mysql_num_rows($result);

	//if user exceeds amount, write alert
	while ($row = mysql_fetch_array($result)) {
		if (($row['Stock'] - $qty) < 0) {
			$extra = $qty - $row['Stock'];
			echo "<script>alert(\"We've run out of ".$row['Name']."!Please allow two weeks for restocking and the shipment of your other ".$extra." ".$row['Name'].".\");</script>";
			$newStock = 0;
		} else {
			$newStock = $row['Stock'] - $qty;
			//echo "<script>alert(\"Thank you!\");</script>";
		}
		//update how many of product are left
		$update = mysql_query("UPDATE PRODUCTS SET Stock='".$newStock."' WHERE ProductID='".$productid."';");
	}
	
		
}
	$_SESSION['cart'] = array();
	echo "<script>alert(\"Thank you for shopping with us!\");</script>";
	echo "<script>window.location = 'index.php';</script>";

    mysql_close();	
?>