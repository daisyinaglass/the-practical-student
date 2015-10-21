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
	<link rel="stylesheet" type="text/css" href="about-style.css" />
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
		<div id="about-header">
			<div class="container">
				<h1>About</h1>
				<h1>Us</h1>
			</div>
		</div>
		<p>Our products are made to last an entire semester of college abuse and beyond. We use top-of-the-line technologies to make waterproof paper for our notebooks, sturdy bindings for the binders, and tear-resistant covers for books. We put in the work so that you can think about the material that you’re studying, not worrying about how long your notebook will last. </p>
		<p>Our products are suitable for a range of ages in education. Start off in middle school with our notebooks, locker decorations, and pencil cases. Once students get to high school, introduce them to our wide range of planners, binders, and calendars. College students will love to see page flags, task lists, and multi-subject Notelooks that we created. We’ve heard from students both in Australia and across the globe about how useful these waterproof notebooks are. Hear from some of our testimonials below!</p>
		<p>All of our products are handmade in Australia, providing jobs for those that want to help out students and make a difference. We’ve worked to increase transparency with our suppliers by publishing the different ones we work with. We believe this helps our customers trust that we have their best interests at heart while trying to make the world a better place. Our social commitment is to help those in need, and that includes the people who work for this company.</p>
		<p>We believe in helping the environment and keeping our products sustainable. That’s why we’ve worked to make sure our Notelook paper is made from recycled paper and that all parts of the notebook are decomposable. When a student no longer needs the information stored on the pages, the paper degrades gracefully into the soil to help another generation of trees become new Notelooks. We make sure that we follow sustainable farming and logging practices with our products from start to finish so that we can leave the world a better place than when we found it. Our customers are passionate about carbon footprints and saving the environment, and we strive every day with our suppliers to make sure that we reduce our impact on the environment. Part of this mission includes the packaging in which you receive all of your Practical Student supplies. We’ve made a pact with the Australian Packaging Covanent (APC) to help consider the lifecycle of products and to reduce the waste that poor packaging creates. Our customers know that we take out commitment to the environment very seriously, and we are always inventing new ways in which to reuse old things.</p>
		<p>This past year, we’ve developed the Pay-It-Forward system where those who have some pocket change can help pay for supplies for students who can’t afford the things they need. The students, in turn, write a sincere thank-you note to their sponsor, and will hopefully turn into sponsors themselves when they find themselves in a more stable financial position. In this way, we hope to have every student that needs quality tools be able to have them during their studies, regardless of their financial situation. </p>
		<p>To further help those in need, we run a blog with weekly DIY’s so that thrifty students can both customize and recreate the tools they need. These DIY’s sometimes include printable pages from real Practical Student products, such as planner pages or the To Do list. Although these DIY’s are not up to the caliber of Practical Student products, they are helpful for students who want to try to increase the lifespan of the products that they do have or want to try a product before purchasing the real Practical Student version. Plus, it gives crafty students ideas for gifts, projects, and activities to share with their friends. Who knew that becoming more organized could be so much fun!</p>
		<p>We are also committed to helping local schools in the area. We’ve partnered with both high schools and universities in the past to help students get the tools they need. For example, in 2013, we held a competition to see which university could get the most mentions on our social media campaign for promoting the Notelook. This campaign was designed not only to get students familiar with our products, but also to encourage them to make good spending choices and to invest in their education. When Murdoch University won, we went to the campus and held an all-day event with tips on studying, time management, and taking notes, as well as giving out free Notelooks and other products. Murdoch students have since become huge fans of our products and they make up a large portion of our customer base. We have also done scavenger hunts at local high schools to help students get pencil cases, bookbags, and other things they might need for the beginning of the school year. Looking forward, we hope to host more of these events at high schools and universities around Australia, and, eventually, the rest of the world.</p>
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