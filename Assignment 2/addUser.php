<?php
	function cleanData($text) {
		$text = trim($text);
		$text = stripcslashes($text);
		$text = htmlspecialchars($text);
	}
	//get the data sent over
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$username = $_POST["username"];
	$userpassword = $_POST["password"];
	//clean it up
	cleanData($firstname);
	cleanData($lastname);
	cleanData($email);
	cleanData($username);
	cleanData($userpassword);
	
	$host = "localhost";
    $user = "X32720502";
    $password = "X32720502";
    $dbc = mysql_pconnect($host, $user, $password);
    $dbname = "X32720502";
    mysql_select_db($dbname) or die("Cannot connect to database ".mysql_error());

    //construct the query string
    $query = "INSERT INTO USERS VALUES ('".$username."', '".$userpassword."', '".$firstname."', '".$lastname."', '".$email."');";
    
    if(!mysql_query($query, $dbc)) {
    	die('Error: '.mysql_error());
    }
    echo "<script>alert(\"Your info was added to the database\")</script>";

    mysql_free_result($result);
    mysql_close();	
?>