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
						<li><a href="register.html">Register</a></li>
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
		<h1>Help!</h1>
		<h2>How do I use The Practical Student Website?</h2>
		<p>Welcome to our shop!</p>
		<p>When a customer first arrives at the online store, they are greeted by a personal message from the Practical Student team. The customer is invited to browse around the store, and they’ll be notified of the mailing list that they can sign up for. Signing up for the mailing list means that customers will be the first to know about sales, special offers, and when new shipments arrive. Signup is free and customers can opt out at any time.</p>
		<p>From the homepage, the customer can browse through the site in a variety of ways. The first way to browse is through the search box if the customer has a product in mind that they would like to view. The website will take the search and return any products that contain the search in their title or description. </p>
		<p>A second way to browse is through different sections of items highlighted on the screen. Customers can, for example, select the Pencil section to view all types of pencil cases, or they can select the Planner tab to view all of the planners. This way, customers are able to look through all sorts of items without having a clear idea of what they are looking for. </p>
		<p>A third way to search is to view our packages designed to help save students time and give them a small discount for buying a few products at once. These packages change from time to time since they are always updated with our latest products in house, but all items can be purchased separately as well. </p>
		<p>Finally, students can search by price within any of these views, so as to help those on a tight budget find the cheapest items that will work for them.</p>
		<p>All of these searches result in a grid of products that have the name, picture, and price of each product listed. When a customer wants to get a closer look at a product, they can click on it to be taken to that product’s specific page. This page contains multiple, larger views of the product along with its description, price, and reviews. From either view, customers can add products to their cart. Suggestions are also included at the bottom of the individual views of products so that customers can find similar or complimentary items. 
		<p>When going to pay for items, customers first review what they have in their cart. They are able to remove products here and get a general idea of the total from the calculated sum of the products as well as view the expected arrival date. There is a small section for customers to add their zip code so that they can see how much shipping will cost. After reviewing the items in their cart, customers will be taken to a page where they can enter their shipping and billing information along with their credit card or PayPal information. After the server validates these values, the customer is given a receipt, a tracking number, and a message thanking them for their business. Customers can opt to have their receipt forwarded to them by email or printed from this page. </p>
		<p>When customers create a profile, they are able to perform more actions on the website such as placing an item on a wish list, saving their bank information, and reviewing products. Their purchases are also tracked so that suggestions can be made at the beginning of the semester with products that they bought previously. This helps remind customers of what they may need and encourages customers to buy special discounted packages. Returns are also made easy with a registered account. If a registered customer doesn’t love a product, they can send it back for free, no questions asked, for 7 days after the purchase has been received. Registered customers can also track their receipts in case they lose their copy. From time to time, registered customers will be invited to special members-only sales. They will be given a special coupon code to enter at checkout that will only work for those with profiles.</p>
		<p>If a customer wants to become part of the Pay-It-Forward program, they must create a profile. If the customer is a student who would like to receive donated products, they must prove their enrollment with a transcript uploaded to their profile. They will then select the products they would like to receive. From there, they will take a pledge to write a generous thank-you note to their patron when products are received. To make sure that students follow through, the student must enter their bank account information and a fee will be charged to their account should they not write the note after they receive the products. The note is conducted completely online and a time limit of 30 days is given for students to write to their patron before the charge is applied. Multiple reminder emails will be sent to the student to ensure that they do not forget to thank their generous donors!</p>
		<p>If a customer would like to help sponsor a student, they also must create a profile. In the profile, there is a section for indicating that the donor would like to become part of the Pay-It-Forward program. A donor is able to purchase any of the products online through their normal portal, only when it comes time to enter address information, they can instead click a box that indicates that it’s for the Pay-It-Forward program. A pop-up box will follow to make sure that the donor knows what the program is and how it works. If they complete the purchase, their email will be tagged to the purchased products so that the student who receives them will be able to write the thank you note. The donor and student do not exchange names or email addresses because this information is hidden from their view. This is to help protect the privacy of each person and to provide security for minors. In their profile, donors will receive a notification that there is a thank you note waiting for them. All notes remain in the donor profiles so that they can be looked back on in the future.</p>

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