<?php
	//connect to the database
	$host = "localhost";
    $user = "X32720502";
    $password = "X32720502";
    $dbc = mysql_pconnect($host, $user, $password);
    $dbname = "X32720502";
    mysql_select_db($dbname) or die("Cannot connect to database ".mysql_error());

    session_start();
    //store session
    $user_check = $_SESSION['login_user'];

    $user_info = mysql_query("SELECT Username FROM USERS WHERE Username='$user_check'");
    //???
    $row = mysql_fetch_assoc($user_info);
    $login_session = $row['Username'];
    //if closing??
    if (!isset($login_session)) {
    	mysql_close();
    	header('Location: login.php');
    }
?>