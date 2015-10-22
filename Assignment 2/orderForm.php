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
	<link rel="stylesheet" type="text/css" href="form-style.css" />
	<script type="text/javascript" src="validateOrder.js"></script>
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
		<div class="form-box">
			<form action="sendOrder.php" method="post" onsubmit=" return validateOrder(this)">
				<div id="shipping">
					<h1>Shipping</h1>
					<input type="text" placeholder="Name" name="name" id="name" /><br />
					<input type="text" placeholder="Address Line 1" name="addressline1" id="addressline1" /><br />
					<input type="text" placeholder="Address Line 2" name="addressline2" id="addressline2" /><br />
					<input type="text" placeholder="City" name="city" id="city" /><br />
					<input type="text" placeholder="State" name="state" id="state" /><br />
					<input type="text" placeholder="Zipcode" name="zip" id="zip" /><br />
				</div>
				<div id="payment">
					<h1>Payment</h1>
					<input type="text" placeholder="Name on card" name="cardholder" id="cardholder" /><br />
					<input type="text" placeholder="Credit Card Number" name="creditcard" id="creditcard" /><br />
					<input type="text" placeholder="CVV" name="cvv" id="cvv" /><br />
					<input type="text" placeholder="Expiration date" name="exp" id="exp" /><br />
				</div>
				<input type="submit" value="Submit" name="submit" />
			</form>
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