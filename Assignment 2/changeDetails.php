<?php
include('session.php');
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
								<input type="text" id="searchtext" name="searchtext" placeholder="Search for items" />
								<input type="submit" id="submit" value="Search" name="searchbutton" />
							</div>
						</form>
					</div>
					<div id="float-right">
						<li><a href="register.html">Register</a></li>
						<li id="sign-in"><a href="login.php">Sign In</a></li>
						<li><a href="">Cart</a></li>
						<li><a href="help.html">Help</a></li>
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

		<?php 
			$host = "localhost";
		    $user = "X32720502";
		    $password = "X32720502";
		    $dbc = mysql_pconnect($host, $user, $password);
		    $dbname = "X32720502";
		    mysql_select_db($dbname) or die("Cannot connect to database ".mysql_error());

		    //construct the query string
		    $query = "SELECT * FROM USERS WHERE Username='".$login_session."';";
		    $result = mysql_query($query);
		
			while ($row = mysql_fetch_array($result)) {
				print "<form action=\"updateDatabase.php\" method=\"post\" onsubmit=\"return validateUpdate(this)\">
				<input type=\"text\" value=\"".$row['FirstName']."\" name=\"firstname\" id=\"firstname\" />
				<input type=\"text\" value=\"".$row['LastName']."\" name=\"lastname\" id=\"lastname\" />
				<input type=\"email\" value=\"".$row['Email']."\" name=\"email\" id=\"email\" />
				<input type=\"text\" value=\"".$row['Username']."\" name=\"username\" id=\"username\" />
				<input type=\"password\" value=\"".$row['Password']."\" name=\"password\" id=\"password\" />
				<input type=\"password\" value=\"\" name=\"confirmpassword\" id=\"confirmpassword\" />
				<!-- display current values inside of text boxes -->
				<input type=\"submit\" name=\"submit\" value=\"Update\" />
				</form>";
			}
		?>
	</div>

	<footer>
		<ul>
			<li><a href="about.html">About</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="http://practicalstudent.tumblr.com/">Follow</a></li>
		</ul>
	</footer>
</body>
</html>