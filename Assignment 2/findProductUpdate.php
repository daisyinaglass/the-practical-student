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
	<link rel="stylesheet" type="text/css" href="form-style.css">
	<script type="text/javascript" src="checkAddProduct.js"></script>
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
		<?php 
			$productid = $_GET['productid'];
			
			$host = "localhost";
		    $user = "X32720502";
		    $password = "X32720502";
		    $dbc = mysql_pconnect($host, $user, $password);
		    $dbname = "X32720502";
		    mysql_select_db($dbname) or die("Cannot connect to database ".mysql_error());

		    //construct the query string
		    $query = "SELECT * FROM PRODUCTS WHERE ProductID='".$productid."';";
		    $result = mysql_query($query);

		    if (mysql_num_rows($result) == 0) {
		    	print "Product does not exist in database.";
		    } else {
				print "<div class=\"form-box\">";
				while ($row = mysql_fetch_array($result)) {
					print "<h1>Update Product</h1>
					<form id=\"updateproduct\" action=\"updateThisProduct.php\" method=\"post\" onsubmit=\"return checkAddProduct(this)\" >
						Name: <input type=\"text\" value=\"".$row['Name']."\" name=\"name\" id=\"name\" /><br />
						Price: <input type=\"text\" value=\"".$row['Price']."\" name=\"price\" id=\"price\" /><br />
						Photo file: <input type=\"text\" value=\"".substr($row['PhotoReference'], strpos($row['PhotoReference'], "/"))."\" name=\"photoref\" id=\"photoref\" /><br />
						Category: <input type=\"text\" value=\"".$row['Category']."\" name=\"category\" id=\"category\" /><br />
						Stock: <input type=\"text\" value=\"".$row['Stock']."\" name=\"stock\" id=\"stock\" /><br />
						Description: <textarea name=\"description\" id=\"description\">".$row['Description']."</textarea><br />
						<input type=\"hidden\" value=\"".$row['ProductID']."\" name=\"productid\" id=\"productid\" />
						<input type=\"submit\" value=\"Update\" />
					</form>";
				}
				print "</form>";
			}
			mysql_close();
		?>
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