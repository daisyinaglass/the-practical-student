<?php
	session_start();
	//if we are logging out, destroy the session, head back to index page
	if (session_destroy()) {
		header("Location: index.php");
	}
?>