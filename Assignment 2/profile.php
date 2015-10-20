<?php
include('session.php');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" />
<head>
	<title>The Practical Student</title>
	<meta charset="utf-8" />
	<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>

	<header>
		<div id="Logo">
		</div>
		<nav>
			<div id="general-nav">
				<ul>
					<div id="float-left">
						<li><a href="index.html">Home</a></li>
						<div class="search-box">
							<input type="text" id="searchtext" name="searchtext" placeholder="Search for items" />
							<input type="submit" value="Search" id="searchbutton" name="searchbutton" />
						</div>
					</div>
					<div id="float-right">
						<li><a href="">Register</a></li>
						<li id="sign-in"><a href="">Sign In</a></li>
						<li><a href="">Cart</a></li>
						<li><a href="">Help</a></li>
					</div>
				</ul>
			</div>
			<div id="product-nav">
				<ul>
					<li><a href="">New Arrivals</a></li>
					<li><a href="">Notelooks</a></li>
					<li><a href="">Writing</a></li>
					<li><a href="">Backpacks</a></li>
					<li><a href="">Organization</a></li>
					<li><a href="">Planners</a></li>
				</ul>
			</div>
		</nav>
	</header>

	<div id="content">
		<div id="profile">
			<p id="welcome">Welcome : <?php echo $login_session;?></p>
			<p id="logout"><a href="logout.php">Log Out</a></p>
		</div>
	</div>

	<footer>
		<ul>
			<li><a href="">About</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="">Follow</a></li>
		</ul>
	</footer>
</body>
</html>