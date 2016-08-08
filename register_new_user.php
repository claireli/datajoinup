<?php
include("check.php");
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

#float{
	background-color: #FFFFFF;
	padding: 10px;
	opacity: 0.8;
}

#float{
	background-color: #FFFFFF;
	padding: 10px;
	opacity: 0.8;	
}

#photo{
	width: 200px;
	height: 200px;
}

#container{
	background-image: url("res/register.jpg");
	width: 100%;
}

#footer{
	z-index: 5;
}
</style>
   </head>

	<body>
	<?php 
		include("includes/header.php");
		include("includes/footer.html");
	
	?>
	<div id="container">
	
	<div id="float">
	<div id="float2">
	<h1>Data Join uP</h1> 
    <h2>New User Registration</h2><p>
	
	<?php 
	if (!empty($_GET['pass'])) {
		if($_GET['pass']=="false"){
			
			echo "Warning, your passwords do not match. Please try again.<br>";
		}
		if($_GET['pass']=="empty"){
			
			echo "Warning, you have entered an empty password.<br>";
		}
	}
	if (!empty($_GET['email'])) {
		if($_GET['email_ok']=="false"){
			echo "Warning, this email already exists in our system. Please try again.";
		}
	}	
	?>
	
	<p>
<form action="register_confirm.php" method="post">
<table class='inner-form' align='center'>
<tr><td>First Name</td><td>

<input type="text" name="first" value="
<?php 
	if (!empty($_GET['first'])) {
	echo $_GET['first'];
}
	?>">
</input>
</td></tr>
<tr><td>Last Name</td><td>
<input type="text" name="last" value="
<?php 
	if (!empty($_GET['last'])) {
	echo $_GET['last'];
}
	?>"></td></tr>
<tr><td>Email</td><td>
<input type="text" name="email" value="
<?php 
	if (!empty($_GET['email'])) {
	echo $_GET['email'];
}
	?>"></td></tr>
<tr><td>Password</td><td>
<input type="password" name="pass1"></input></td></tr>
<tr><td>Verify Password</td><td>
<input type="password" name="pass2"></input></td></tr>
</table>
<p>
<input type="submit" value="Register" class='button'>
</form>
</div>
</div>
</div>