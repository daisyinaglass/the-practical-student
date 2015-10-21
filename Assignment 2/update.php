<?php
	function cleanData($text) {
		$text = trim($text);
		$text = stripslashes($text);
		$text = htmlspecialchars($text);
	}

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

	$host = "localhost";
    $user = "X32720502";
    $password = "X32720502";
    $dbc = mysql_pconnect($host, $user, $password);
    $dbname = "X32720502";
    mysql_select_db($dbname) or die("Cannot connect to database ".mysql_error());
	
	//construct the query string
    $query = "UPDATE USERS SET FirstName='".$firstname."', LastName='".$lastname."', Email='".$email."', AddressLine1='".$addressline1."', AddressLine2='".$addressline2."', City='".$city."', State='".$state."', Zip='".$zip."', Password='".$userpassword."' WHERE Username='".$username."';";

    echo $query;

    if(!mysql_query($query, $dbc)) {
    	die('Error: '.mysql_error());
    } else {
    	echo "<script>alert(\"Your info was updated in the database\")</script>";
    }

    echo "<script>window.location = 'index.php';</script>";

mysql_close(); 
?>