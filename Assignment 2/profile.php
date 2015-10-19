<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" />
<head>
	<title>The Practical Student</title>
	<meta charset="utf-8" />
	<link type="text/css" rel="stylesheet" href="style.css" />
	<meta>
</head>
<body>
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
		$password = $_POST["password"];
		//clean it up
		cleanData($firstname);
		cleanData($lastname);
		cleanData($email);
		cleanData($username);
		cleanData($password);
		
		$host = "localhost";
	    $user = "X32720502";
	    $password = "X32720502";
	    $dbc = mysql_pconnect($host, $user, $password);
	    $dbname = "X32720502";
	    mysql_select_db($dbname) or die("Cannot connect to database ".mysql_error());

	    //construct the query string
	    $query = "INSERT INTO USERS VALUES ('".$username."', '".$password."', '".$firstname."', '".$lastname."', '".$email."');";
	    
	    if(!mysql_query($query, $dbc)) {
	    	die('Error: '.mysql_error());
	    }
	    echo "<script>alert(\"Your info was added to the database\")</script>";

	    mysql_free_result($result);
	    mysql_close();	
	?>
	<header>
		<div id="Logo">
		</div>
		<nav>
			<div id="general-nav">
				<ul>
					<div id="float-left">
						<li><a href="index.html">Home</a></li>
						<div class="search-box">
							<input type="text" id="searchtext" name="searchtext" placeholder="Search for items" />
							<input type="submit" value="Search" id="searchbutton" name="searchbutton" />
						</div>
					</div>
					<div id="float-right">
						<li><a href="">Register</a></li>
						<li id="sign-in"><a href="">Sign In</a></li>
						<li><a href="">Cart</a></li>
						<li><a href="">Help</a></li>
					</div>
				</ul>
			</div>
			<div id="product-nav">
				<ul>
					<li><a href="">New Arrivals</a></li>
					<li><a href="">Notelooks</a></li>
					<li><a href="">Writing</a></li>
					<li><a href="">Backpacks</a></li>
					<li><a href="">Organization</a></li>
					<li><a href="">Planners</a></li>
				</ul>
			</div>
		</nav>
	</header>

	<div id="content">

	</div>

	<footer>
		<ul>
			<li><a href="">About</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="">Follow</a></li>
		</ul>
	</footer>
</body>
</html>