<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" />
<head>
	<title>The Practical Student</title>
	<meta charset="utf-8" />
	<link type="text/css" rel="stylesheet" href="style.css" />
	<script type="text/javascript" src="checkSearch.js"></script>
	<link rel="stylesheet" type="text/css" href="display-style.css" />
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
								<input type="text" id="searchtext" name="searchtext" value="<?php echo $_SESSION['prevsearch'];?>" />
								<input type="submit" id="submit" value="Search" name="searchbutton" />
							</div>
						</form>
					</div>
					<div id="float-right">
						<li><a href="register.php">Register</a></li>
						<li id="sign-in"><a href="login.php">Sign In</a></li>
						<li><a href="cart.php">Cart</a></li>
						<li><a href="help.php">Help</a></li>
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
			$name = $_GET["Name"];
			//clean it up
			$name = trim($name);
			$name = stripcslashes($name);
			$name = htmlspecialchars($name);
			
			$host = "localhost";
		    $user = "X32720502";
		    $password = "X32720502";
		    $dbc = mysql_pconnect($host, $user, $password);
		    $dbname = "X32720502";
		    mysql_select_db($dbname) or die("Cannot connect to database ".mysql_error());

		    //construct the query string
		    $query = "SELECT * FROM PRODUCTS WHERE Name='".$name."';";
		    $result = mysql_query($query);

		    //query the database & print out 
		    if (mysql_num_rows($result) == 0) {
		    	print "Sorry, we no longer have that product.";
		    }
		    while ($row = mysql_fetch_array($result)) {
		        print "<div class=\"product-info\">
		        <div class=\"product-photo\">
		        <img src=\"".$row["PhotoReference"]."\">
		        </div>
		        <div class=\"product-container\">
		        <div class=\"product-description\">
		        <h1>".$row["Name"]."</h1>
		        <p>".$row["Description"]."</p>
		        </div>
		        <div class=\"product-order\">
		        <p>$".$row["Price"]."</p>
		        <form action=\"addToCart.php\" method=\"post\">
		        <select>";
		        for ($i = 1; $i <= 15; $i++) {
		        	print "<option value=".$i.">".$i."</option>";
		        }
		        print "</select>
		        <input type=\"submit\" value=\"Order Now\" />
		        <!-- Check if logged in; if is, take to order form, otherwise, prompt to log in -->
		        </form>
		        </div>
		        </div>
		        </div>";
		    }

		    mysql_free_result($result);
		    mysql_close();	
		?>
		</div>
	</div>

	<footer>
		<ul>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="http://practicalstudent.tumblr.com/">Follow</a></li>
		</ul>
	</footer>
</body>
</html>