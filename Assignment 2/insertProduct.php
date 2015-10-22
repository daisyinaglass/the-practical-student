<?php 
	function cleanData($text) {
		$text = trim($text);
		$text = stripcslashes($text);
		$text = htmlspecialchars($text);
	}

	$name = $_POST["name"];
	$price = number_format(floatval($_POST["price"]), 2);
	$photoref = $_POST["photoref"];
	$description = $_POST["description"];
	$category = $_POST["category"];

	cleanData($name);
	cleanData($price);
	cleanData($photoref);
	cleanData($description);
	cleanData($category);

	$host = "localhost";
    $user = "X32720502";
    $password = "X32720502";
    $dbc = mysql_pconnect($host, $user, $password);
    $dbname = "X32720502";
    mysql_select_db($dbname) or die("Cannot connect to database ".mysql_error());

    $query = "INSERT INTO PRODUCTS (Name, Price, Category, PhotoReference, Description) VALUES ('".$name."', '".$price."', '".$category."', 'images/".$photoref."', '".$description."');";

    if(!mysql_query($query, $dbc)) {
    	die('Error: '.mysql_error());
    } else {
    	echo "<script>alert(\"Product info was added to the database\")</script>";
    }

    echo "<script>window.location = 'profile.php';</script>";

    mysql_close();	
?>