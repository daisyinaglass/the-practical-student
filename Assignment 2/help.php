<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" />
<head>
	<title>The Practical Student</title>
	<meta charset="utf-8" />
	<link type="text/css" rel="stylesheet" href="style.css" />
	<link rel="stylesheet" type="text/css" href="about-style.css">
	<script type="text/javascript" src="checkSearch.js"></script>
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
		<h2>How do I use The Practical Student Website?</h2>
		<div style="width: 640px; height: 480px; margin: 10px auto; position: relative;"><iframe allowfullscreen frameborder="0" style="width:640px; height:480px" src="https://www.lucidchart.com/documents/embeddedchart/b969ce08-6175-47ec-90a5-1438f16f9b4b" id="S~lmRDRVbPJA"></iframe></div>
		<h3>FAQ</h3>
		<h4>Where am I?</h4>
		<p>You're on the help page of The Practical Student Website! You probably got here through our homepage, which you can find in the top left corner of the site.</p>
		<h4>How do I find products?</h4>
		<p>There are three ways to find our products online. First, you can search using the search bar next to the 'Home' link. We will find you all the products that have that term in their name or description. Second, you can use the targeted links below the search bar to search for products by category. You can also veiw all of the products that we sell through these links. Third, you can browse our homepage for special highlighted products. These products are often new or designed for the season, so be sure to check them out!</p>
		<h4>I found a product that looks interesting - how do I find out more?</h4>
		<p>When you search for a product, either through the search bar or by a category, you will be taken to a page with a grid of matching products. To view more details about a certain product, click on its name.</p>
		<h4>Why can't I add a product to my cart?</h4>
		<p>You must be a registered customer on our site in order to add products to your shopping cart and purchase them! To sign up, click on the 'Register' link in the top right of the screen.</p>
		<h4>I've registered, but I still cannot add items to my cart!</h4>
		<p>After signing up, you must log in. Click the 'Sign In' link in the top right of the screen.</p>
		<h4>How do I view items in my cart?</h4>
		<p>To see what items you've added to your cart, click on the 'Cart' link on the top right of the page.</p>
		<h4>How do I delete an item from my shopping cart?</h4>
		<p>To delete an item, click the 'Delete' button on the item you wish to remove. Note that this will remove all items of that particular product, so to add again you must go back to the search page.</p>
		<h4>How do I purchase my items?</h4>
		<p>After reviewing your cart, scroll to the bottom of the 'Cart' page and click the 'Order Now' button. You will be taken to a form to enter your shipping and payment information. Once the form is filled in correctly, you will be redirected to the homepage.</p>
		<h4>I got an alert saying that I'm ordering more items than you have in stock - is that okay?</h4>
		<p>Sometimes, we run low on our products. No worries! As soon as we have your product back in stock, we will notify you and ship the product to you.</p>
		<h4>Where can I change my info?</h4>
		<p>If you are logged in, click on the 'Sign In' page. You will be redirected to your profile. On your profile, there is a link to update your information. Note: you will have to re-enter your password to confirm the changes. You can create a new password by deleteing what is currently in the password box and entering the new password in said box, as well as in the confirm box. You cannot change your username.</p>
		<h4>My question is not here - what do I do?</h4>
		<p>If you have other questions, feel free to contact us at the 'Contact' link at the bottom of the page.</p>
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