<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" />
<head>
	<title>The Practical Student</title>
	<meta charset="utf-8" />
	<link type="text/css" rel="stylesheet" href="style.css" />
	<script type="text/javascript" src="checkSearch.js"></script>
	<link rel="stylesheet" type="text/css" href="search-style.css">
</head>
<body>
	<header>
		<div id="Logo">
		</div>
		<nav>
			<div id="general-nav">
				<ul>
					<div id="float-left">
						<form action="search.php" method="get" onsubmit="return checkSearch(this)" name="search-box">
							<li><a href="index.php">Home</a></li>
							<div class="search-box">
								<input type="text" id="searchtext" name="searchtext" placeholder="Search for items" />
								<input type="submit" id="submit" value="Search" name="searchbutton" />
							</div>
						</form>
					</div>
					<div id="float-right">
						<li><a href="register.html">Register</a></li>
						<li id="sign-in"><a href="login.php">Sign In</a></li>
						<li><a href="">Cart</a></li>
						<li><a href="">Help</a></li>
					</div>
				</ul>
			</div>
			<div id="product-nav">
				<ul>
					<li><a href="">New Arrivals</a></li>
					<li><a href="search.php?searchtext=Notelook&searchbutton=Search">Notelooks</a></li>
					<li><a href="">Writing</a></li>
					<li><a href="">Backpacks</a></li>
					<li><a href="">Organization</a></li>
					<li><a href="search.php?searchtext=Planner&searchbutton=Search">Planners</a></li>
				</ul>
			</div>
		</nav>
	</header>

	<div id="content">
		<div id="results">
		<?php
			//get the search term
			$searchtext = $_GET["searchtext"];
			//clean it up
			$searchtext = trim($searchtext);
			$searchtext = stripcslashes($searchtext);
			$searchtext = htmlspecialchars($searchtext);
			
			$host = "localhost";
		    $user = "X32720502";
		    $password = "X32720502";
		    $dbc = mysql_pconnect($host, $user, $password);
		    $dbname = "X32720502";
		    mysql_select_db($dbname) or die("Cannot connect to database ".mysql_error());

		    //construct the query string
		    $query = "SELECT * FROM PRODUCTS WHERE Name LIKE '%".$searchtext."%';";
		    $result = mysql_query($query);

		    //query the database & print out 
		    if (mysql_num_rows($result) == 0) {
		    	print "Sorry, we don't have any products by that name.";
		    }
		    while ($row = mysql_fetch_array($result)) {
		        print "<div class=\"product-result col span-1-4\"><img src=\"".$row["PhotoReference"]."\" /><p><a href=\"display.php?Name=".$row["Name"]."\">".$row["Name"]."</a></p></div>";
		    }

		    mysql_free_result($result);
		    mysql_close();	
		?>
		</div>
	</div>

	<footer>
		<ul>
			<li><a href="about.html">About</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="http://practicalstudent.tumblr.com/">Follow</a></li>
		</ul>
	</footer>
</body>
</html>