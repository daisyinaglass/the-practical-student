<?php 
session_start();

$id = $_GET['productID'];
$total = $_GET['total'];

$host = "localhost";
$user = "X32720502";
$password = "X32720502";
$dbc = mysql_pconnect($host, $user, $password);
$dbname = "X32720502";
mysql_select_db($dbname) or die("Cannot connect to database ".mysql_error());

//construct the query string
$query = "SELECT * FROM PRODUCTS WHERE ProductID=".$id.";";
$result = mysql_query($query);


//echo "Got the product's id: ".$id;
while ($row = mysql_fetch_array($result)) {
	for ($i = 0; $i < count($_SESSION['cart']); $i++) {
		if($_SESSION['cart'][$i][0]) {
			//echo "Found match";
			$total = $total - ($_SESSION['cart'][$i][1] * $row['Price']);
			unset($_SESSION['cart'][$i]);
			print number_format($total,2);
			
			break;
		}
	}
}
$_SESSION['cart'] = array_values($_SESSION['cart']);
mysql_free_result($result);
mysql_close();	
?>