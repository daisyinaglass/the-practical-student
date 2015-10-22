<?php 
session_start();
//assign search text to global variable
$_SESSION['prevsearch'] = $_GET["searchtext"];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" />
<head>
	<title>The Practical Student</title>
	<meta charset="utf-8" />
	<link type="text/css" rel="stylesheet" href="style.css" />
	<script type="text/javascript" src="checkSearch.js"></script>
	<link rel="stylesheet" type="text/css" href="cart-style.css">
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
					<li><a href="search.php?searchtext=&searchbutton=Search">All Products</a></li>
					<li><a href="search.php?searchtext=notelook">Notelooks</a></li>
					<li><a href="search.php?searchtext=writing">Writing</a></li>
					<li><a href="search.php?searchtext=bag">Backpacks</a></li>
					<li><a href="search.php?searchtext=organization">Organization</a></li>
					<li><a href="search.php?searchtext=planner">Planners</a></li>
				</ul>
			</div>
		</nav>
	</header>

	<div id="content">
		<div id="results">
		<?php
			//get the global array 'cart'
			$cart = $_SESSION['cart'];
			
			$host = "localhost";
		    $user = "X32720502";
		    $password = "X32720502";
		    $dbc = mysql_pconnect($host, $user, $password);
		    $dbname = "X32720502";
		    mysql_select_db($dbname) or die("Cannot connect to database ".mysql_error());

		    foreach($_SESSION['cart'] as $row => $innerArray){
				$productid = $innerArray[0];
				$qty = $innerArray[1];
				//echo $productid;
				//echo $qty;
				$query = "SELECT * FROM PRODUCTS WHERE ProductID='".$productid."';";
				//echo $query;
				$result = mysql_query($query);
				//echo "Created result";
				//query the database & print out 
			    if (mysql_num_rows($result) == 0) {
			    	print "Cart empty. Go shop our store!";
			    } else {
			    	while ($prodrow = mysql_fetch_array($result)) {
			    		print "
			    		<div class=\"cart-item \">
							<div class=\"img-div\">
								<img src=\"images/".$prodrow["PhotoReference"]."\" />
							</div>
							<div class=\"info\">
								<h1>".$prodrow["Name"]."</h1>
								<p>Individual Price: $".$prodrow["Price"].", Quantity: ".$qty."</p>
								<p>Sub-total: $".number_format(floatval($prodrow["Price"]*$qty), 2)."</p>
								<button type=\"button\" >Remove</button>
							</div>
						</div>";
			    	}
			    }
			}
		    print "<input type=\"text\" name=\"total\"/>";


		    mysql_free_result($result);
		    mysql_close();	
		?>
		</div>
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