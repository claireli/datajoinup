<?php
    if(!IsSet($_SESSION['logged_in']))
    {	
		$_SESSION['logged_in'] = "Guest";
        header("location: return_user.php?message=Invalid user");
    }	
?>