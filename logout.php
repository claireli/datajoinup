<?php
	session_start();

	$_SESSION['user_first_last'] = "Guest";
	$_SESSION['logged']=false;
	var_dump($_SESSION);
	session_destroy();
	header("location: return_user.php");
?>