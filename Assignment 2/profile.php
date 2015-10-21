<?php
session_start();
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
		<div id="profile">
			<p id="welcome">Welcome : <?php echo $login_session;?></p>
			<p id="changeDetails"><a href="changeDetails.php">Change Details</a></p>
			<?php 
			//if the user is a staff member, include a link to add a product
			//get info from database
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
		    	if ($row['StaffMember'] === 'Y') {
		    		echo "<p id=\"addProduct\"><a href=\"addProduct.php\">Add Product</a></p>";
		    		echo "<p id=\"deleteProduct\"><a href=\"deleteProduct.php\">Delete Product</a></p>";
		    		echo "<p id=\"updateProduct\"><a href=\"updateProduct.php\">Update Product</a></p>";
		    		echo "<p id=\"viewUser\"><a href=\"viewUser.php\">View User Account</a></p>";
		    		echo "<p id=\"addStaff\"><a href=\"addStaff.php\">Add Staff Account</a></p>";
		    	}
		    }
			mysql_close();
			?>
			<p id="logout"><a href="logout.php">Log Out</a></p>
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