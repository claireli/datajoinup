	<?php 
		include("includes/header.php");
		include("includes/footer.html");
	?>
<!DOCTYPE html>
<html>
    
    <head> 
        <title>DJUp</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
		<link rel="stylesheet" type="text/css" href="base.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<style>
	.button{
		padding: 6px;
		width: 190px;
		background-color: #FFFFFF;
		border: 1px solid;
		color: #4a79af;
	}

.inner_form{
	padding: 10px;
	align: center;
	margin: auto;
	width: 100%;
	background-color: #FFFFFF;
}

#photo{
	width: 200px;
	height: 200px;
}

#container{
	background-image: url("res/login.png");
	width: 100%;
}

#footer{
	z-index: 5;
}
</style>
   </head>

	<body>

	<div id="container">
	<h1>Data Join uP</h1> 
    <h2>Connecting Big People Behind Big Data</h2><p>
	<p>
	<?php
		
		if (!empty($_GET['error'])) {
			if($_GET['error']=="user"){
				echo "You have entered a username that doesn't exist!";
			}
			if($_GET['error']=="pass"){
				echo "Invalid password. Please try again!";
			}
		}
	
	?>
	
<form name="form" method="post" action="authenticate.php">
<table class='inner-form' align='center'><tr>
<td>Username</td><td>
<input type="text" name="user"></input></td></tr>
<tr><td>Password</td><td>
<input type="password" name="pass"></input></td></tr></table>
<p>
<input type="submit" value="Login" class='button'>
</form>
</div>