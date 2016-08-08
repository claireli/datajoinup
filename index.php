<?php
session_start();
var_dump($_SESSION);
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
			header('Location: welcome.php');
		}
	}
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
#inner_frame{
	position: relative;
	top: 100px;
	width: 100%;
}

#node1{
	background-color: #000000;
	opacity: 0.7;
	width: 270px;
	height: 300px;
}

#node2{
	background-color: #FFFFFF;
	opacity: 0.5;
	width: 270px;
	height: 300px;
}

#node3{
	background-color: #000000;
	opacity: 0.5;
	width: 270px;
	height: 300px;
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

.button{
	width: 250px;
}
</style>
   </head>

	<body>

	<div id="container">
	
	<table id='inner_frame'><tr>
	<td>
	<h1>Data Join uP</h1> 
    <h2>Connecting Big People Behind Big Data</h2><p>
	<p>

	
<form name="form" method="post" action="authenticate.php">
<table class='inner-form' align='center'><tr>
<td>Username</td><td>
<input type="text" name="user"></input></td></tr>
<tr><td>Password</td><td>
<input type="password" name="pass"></input></td></tr></table>
<p>
<div align='center'><input type="submit" value="Login" class='button'></div>
</form></td></tr></table>
</div>