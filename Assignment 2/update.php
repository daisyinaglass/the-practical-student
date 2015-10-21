<?php
	function cleanData($text) {
		$text = trim($text);
		$text = stripcslashes($text);
		$text = htmlspecialchars($text);
	}
	$host = "localhost";
    $user = "X32720502";
    $password = "X32720502";
    $dbc = mysql_pconnect($host, $user, $password);
    $dbname = "X32720502";
    mysql_select_db($dbname) or die("Cannot connect to database ".mysql_error());

    if (isset($_POST['submit'])) {
		//get the variables and clean them
		$username = $_POST['username'];
		$userpassword = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$addressline1 = $_POST['addressline1'];
		$addressline2 = $_POST['addressline2'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];

		cleanData($username);
		cleanData($userpassword);
		cleanData($firstname);
		cleanData($lastname);
		cleanData($email);
		cleanData($addressline1);
		cleanData($addressline2);
		cleanData($city);
		cleanData($state);
		cleanData($zip);
	
    	//construct the query string
	    $query = "";

	    if(!mysql_query($query, $dbc)) {
	    	die('Error: '.mysql_error());
	    } else {
	    	echo "<script>alert(\"Your info was updated in the database\")</script>";
	    }

	    echo "<script>window.location = 'index.php';</script>";

	    mysql_free_result($result);
	    mysql_close();
	}
?>