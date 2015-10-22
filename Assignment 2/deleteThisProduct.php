<?php 
	function cleanData($text) {
		$text = trim($text);
		$text = stripcslashes($text);
		$text = htmlspecialchars($text);
	}

	$productid = $_POST["productid"];

	cleanData($productid);

	$host = "localhost";
    $user = "X32720502";
    $password = "X32720502";
    $dbc = mysql_pconnect($host, $user, $password);
    $dbname = "X32720502";
    mysql_select_db($dbname) or die("Cannot connect to database ".mysql_error());

    $query = "DELETE FROM PRODUCTS WHERE ProductID = '".$productid."';";

    if(!mysql_query($query, $dbc)) {
    	die('Error: '.mysql_error());
    } else {
    	echo "<script>alert(\"Product was deleted from the database\")</script>";
    }

    echo "<script>window.location = 'profile.php';</script>";

    mysql_close();	
?>