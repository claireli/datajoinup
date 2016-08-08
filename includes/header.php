<?php
session_start();
?>

<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<style>

#nav a{
	font-size: 20px;
}

#nav_container{
	position: absolute;
	bottom: 0px;
	vertical-align: bottom;
}

#nav_container td{
	vertical-align: bottom;
}


form{
	margin-bottom: 0px;
}

#logo{
	
	margin-bottom: -10px;
	
}

#logged_in{
	color: #FFFFFF;
}

#logged_in:hover{
	font-weight: bold;
	cursor: pointer;
	color: #FFFFFF;
}

.dropdown{
	position: absolute;
	top: 75px;
	right: 0px;
	z-index: 5;
}

.dropdown td:hover{
	background-color: #77aef4;
	color: #FFFFFF;
	font-weight: bold;
	cursor: pointer;
}

#login_drop{
	padding: 10px;
	background-color: #c3cedc;
	width: 200px;
}

#register_drop{
	padding: 10px;
	background-color: #c3cedc;
	width: 200px;
}
</style>
<script>
function adv_search(){
	window.location = "search.php?type=advanced";
}
</script>			
<script>
$(document).ready(function(){
    
	$(".dropdown").hide();
	
	//var login_test=false;
	var login_test = "<?php
	if(!IsSet($_SESSION['logged']))
    {	
		echo "false";
    }
	else{
		if($_SESSION['logged']==false){
			echo "false";
		}
		else{
			echo "true";
		}
		
	}?>";
	console.log(login_test);
	
	$("#logged_in").click(function(){
        if(login_test=="true"){
			console.log("the log in menu");
			$("#dropdown_logged_in").slideToggle("slow");
		}
		if(login_test=="false"){
			console.log("the log out menu");
			$("#dropdown_logged_out").slideToggle("slow");
		}
    });
	
});
</script>

</head>
<body>

<div id="nav">
<table id="nav_container"><tr>
<td><a href="index.php"><img src="logo.png" id="logo"></a></td>
<td><a href="index.php">Home</a></td>
<td><a href="landing.php">Network</a></td>
<td><a href="about.php">About</a></td>
<!--<td><a href="contact.php">Contact</a></td>-->
<td align='right'>
		<p>
		<form action="search.php" method="get">
		<input type="text" id="search" size="25px" name="query" value="Search Profiles">
		
		<input type="submit" value="Go" class="go"><button type="button" onclick="adv_search()" class="go">Advanced Search</button></form>
		</td>
		
		<td width="250px"><i><div align='right'><span id="logged_in">Welcome, 
		<?php 
		
		    if(IsSet($_SESSION['logged']))
			{	
				if($_SESSION['logged']==false){
					echo "Guest";
				}
				else{
					echo $_SESSION['user_first_last']; // store session data
					//header("location: return_user.php?message=Invalid user");	
				}

			}
			else{
				echo "Guest";
			} ?></span></div></i></td></tr></table>
		</div>
		
		</div>
		
		<table id="dropdown_logged_in" class='dropdown'>
		<tr><td id="login_drop"><a href="logout.php">Logout of DJU</a></td></tr><tr>
		<td id="register_drop"><a href="<?php 
			if(IsSet($_SESSION['logged']))
			{	
				echo 'member_profile.php?user_id='.$_SESSION['profile_id'];

			}
		
		 ?>">My Profile</a></td></tr>
		</table>
		<table id="dropdown_logged_out" class='dropdown'>
		<tr><td id="login_drop"><a href="return_user.php">Login (Returning User)</a></td></tr><tr>
		<td id="register_drop"><a href="register_new_user.php">Register (New User)</a></td></tr>
		</table>
	
</body>
</html>