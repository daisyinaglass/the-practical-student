<?php 
session_start();
$id = $_POST['productid'];
echo "<script>alert(\"Got the product's id\")</script>";
/*for ($i = 0; $i < count($_SESSION['cart']); $i++) {
	if($_SESSION['cart'][$i][0] == $id) {
		echo "<script>alert(\"Found match\");</script>"
		unset($_SESSION['cart'][$i]);
		break;
	}
}
$_SESSION['cart'] = array_values($_SESSION['cart']);*/
?>