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
	<script type="text/javascript">
		function validateForm() {
			var email = document.contactform.email.value;
			var pattern = /\S+@+\S+.\S+/;
			if (document.contactform.contactname.value == "") {
				alert("Please provide a name!");
				return false;
			} else if (pattern.test(email) == false) {
				alert("Please enter a valid email address.");
				return false;
			} else if (document.contactform.message.value == "") {
				alert("Please enter your message!");
				return false;
			} else {
				alert("Thank you for sending an email!")
				return true;
			}
		}
	</script>
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
			<h1>Contact Us!</h1>
			<p>Phone: <a href="tel:61-123-456-789">+61 123 456 789</a></p>
			<p>Email: <a href="mailto:thepracticalstudent@gmail.com">thepracticalstudent@gmail.com</a></p>
			<form name="contactform" action="" method="post" onsubmit="return validateForm(this)">
				Name: <br />
				<input type="text" name="contactname" />
				<br />
				Email: <br />
				<input type="text" name="email" />
				<br />
				Message <br />
				<textarea name="message" rows="10" cols="50"></textarea>
				<br />
				<input type="submit" name="send" value="Send" />
				<br />
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