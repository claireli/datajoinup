<?php
	
	if(IsSet($_SESSION['logged']))
	{	
		if($_SESSION['logged']==false){
		//header("location: 404.php");
	}
	else{
			//echo $_SESSION['user_first_last']; // store session data
			//header("location: return_user.php?message=Invalid user");	
		}
	}

?>