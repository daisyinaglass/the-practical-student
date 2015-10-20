<?php
	$today = date("d-m-Y H:i:s");
	setcookie('lastaccess', $today);
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
							<li><a href="index.html">Home</a></li>
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
		<a href="style.css" id="jumbo-link">
			<div id="jumbo">
				<div class="container">
					<h2>Introducing</h2>
					<h1>The Notelook</h1>
					<p>The perfect notebook for the practical student</p>
				</div>
			</div>
		</a>
		<div id="welcome">
			<p>The Practical Student aims to help students organize their life by providing them with high-quality, durable products at a competitive price point. We have a large focus on paper products such as our famous Notelook notebook and customized planners. We also carry many types of sheet packs designed to help students focus in on certain areas of their lives and keep them organized.</p>
			<p>There is more in the Practical Student shop than just paper products, though. We sell pen and highlighter packs for use inside the Notelooks and planners, as well as study tools like timers and whiteboards. We also have backpacks, totes, and shoulder bags designed to carry heavy laptops and textbooks without injuring students. Everything you could ever need to be a Practical Student, we’ve got it here!
			</p>
		</div>
		<div id="products-special">
			<div class="row group" id="paper-products">
				<h1>Paper Products</h1>
				<div class="col span-1-3">
					<img src="images/planner.jpg">
					<h2>Large Weekly Planner</h2>
					<p>Perfect for organizing all of your classes, meetings, and fun!</p>
				</div>
				<div class="col span-1-3">
					<img src="images/college-app.jpg">
					<h2>College Application Worksheet</h2>
					<p>Still not sure where you want to go? We'll help you find the school that's right for <i>you</i>!</p>
				</div>
				<div class="col span-1-3">
					<img src="images/budget.jpg">
					<h2>Budget Sheet</h2>
					<p>Being a college student is synonymous with living on Ramen and peanut butter. Make it easier on yourself by tracking your finances with our handy sheets.</p>
				</div>
			</div>
			<div class="row group">
				<h1>Writing Utensils</h1>
				<div class="col span-1-2">
					<img src="images/highlighter.jpg">
					<h2>Pastel Highlighter Set</h2>
					<p>Spring has sprung! Give your notes some life with our fantastic highlighter pens.</p>
				</div>
				<div class="col span-1-2">
					<img src="images/pens.jpg">
					<h2>Gel Pen Set</h2>
					<p>Perfect for class, and in enough colors to make taking notes a pleasure rather than a chore.</p>
					<!-- <p>You're looking in your bag for your favorite pen, but all you find is... ugh, one of those cheap ones from orientation. Grab our set of easy-flowing, fast-drying pens and never be without your lucky pen again!</p> -->
				</div>
			</div>
			<div class="row group">
				<h1>Keep Organized</h1>
				<div class="col span-1-4">
					<img src="images/desk-organizer.jpg">
					<h2>Desktop Organizer</h2>
					<p>We all need a study space. Keep yours neat and clean with this organizer.</p>
				</div>
				<div class="col span-1-4">
					<img src="images/college-degree-worksheet.jpg">
					<h2>College Degree Worksheets</h2>
					<p>Make sure you graduate on time! Plan your college years here so that you don't miss a thing.</p>
				</div>
				<div class="col span-1-4">
					<img src="images/whiteboard.jpg">
					<h2>Whiteboard Set</h2>
					<p>Drilling vocabulary, planning meals, keeping motivated... whatever you need to change regularly, our whiteboard set can handle it!</p>
				</div>
				<div class="col span-1-4">
					<img src="images/binder.jpg">
					<h2>Binders</h2>
					<p>There's only so much you can keep in a trapper before it starts falling apart, so use one of our high-quality binders instead.</p>
				</div>
			</div>
		</div>
		<div id="story">
			<div class="container">
				<p>What started in a college grad's garage has turned into something beyond our wildest dreams. Find out how we got started and how we plan to move forward <a href="">here!</a></p>
			</div>
		</div>
		<div id="testimonials">
			<div class="row group">
				<div class="col span-1-2">
					<div class="testimonial" id="testimonial1">
						<p>“I’ve used my Notelook every day for class for the past six months, and it’s been incredible! All of my notes are as neat and pristine as the day I took them. This has been the best purchase decision of my life!” <span class="attribute">–Sally Henderson, college freshman</span></p>
					</div>
				</div>
				<div class="col span-1-2">
					<div class="testimonial" id="testimonial2">
						<p>“I got my daughter one of your planners, and she’s been on fire ever since! The way you incorporate the goals helps her young mind to dream big and believe that she can achieve anything! Thank you thank you THANK YOU!!” <span class="attribute">–Ellen Campos, mother</span></p>
					</div>
				</div>
			</div>
			<div class="row group">
				<div class="col span-1-2">
					<div class="testimonial" id="testimonial3">
						<p>“I always thought that I would be THAT student… you know, the one who always lost everything, who couldn’t keep their notes together. Well, I want to let you know that your Notelook has completely changed my school year! I used to lose all of my notebooks after a couple months, but having all of my classes in one neat notebook makes it so much easier to keep track of everything! You guys are awesome!!” <span class="attribute">–Jake McBriggin, high school senior</span></p>
					</div>
				</div>
				<div class="col span-1-2">
					<div class="testimonial" id="testimonial4">
						<p>“I used to never be able to get my students to keep their notes organized. Now, they take their Notelook everywhere they go!” <span class="attribute">–Karen Jones, high school English teacher</span></p>
					</div>
				</div>
			</div>
		</div>

		<div id="pay-it-forward">
			<div id="title">
				<h1>Pay-It-Forward</h1>
			</div>
			<div class="container">
				<p>We do our best to make sure every student has what they need in order to succeed in school, no matter their financial situation. That's why we have the Pay-It-Forward program, where those with a little more can help those who have a little less. <span><a href="">Click to find out more!</a></span></p>
			</div>
		</div>
	</div>

	<footer>
		<ul>
			<li><a href="about.html">About</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="http://practicalstudent.tumblr.com/">Follow</a></li>
		</ul>
	</footer>
	<?php 
		$lastaccess = $_COOKIE['lastaccess'];
		if ($lastaccess) {
			echo "<script>alert(\"Welcome back to The Practical Student Shop!\");</script>";
		} else {
			echo "<script>alert(\"Welcome to The Practical Student Shop!\");</script>";
		}
	?>
</body>
</html>