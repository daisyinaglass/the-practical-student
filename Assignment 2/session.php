<?php
	//connect to the database
	$host = "localhost";
    $user = "X32720502";
    $password = "X32720502";
    $dbc = mysql_pconnect($host, $user, $password);
    $dbname = "X32720502";
    mysql_select_db($dbname) or die("Cannot connect to database ".mysql_error());

    session_start();
    //store the session variable - the username
    $user_check = $_SESSION['login_user'];

    $user_info = mysql_query("SELECT Username FROM USERS WHERE Username='".$user_check."';");
    //makes the result an associative array
    $row = mysql_fetch_assoc($user_info);
    //grab whatever value is stored in 'Username'
    $login_session = $row['Username'];
    //if the user is not logged in, make sure close guest session and 
    //go to login page
    if (!isset($login_session)) {
    	mysql_close();
    	header('Location: login.php');
    }
?>