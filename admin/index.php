<style>
body{
	text-align: center;
	background-color: #c6dcf6;
	padding-top: 100px;
	font-family: 'Calibri';
	}
table{
	margin: auto;
}
h2{
	font-size: 30px;
	font-family: "Century Gothic";
}
#login{
	padding: 6px;
	width: 90px;
	background-color: #FFFFFF;
	border: 1px solid;
	color: #4a79af;
}
</style>

<img src="../logo.png"><p>
<form action="authenticate_admin.php" method="post">
<table><tr>
<td>Username</td><td>
<input type="text" name="user"></input></td></tr>
<tr><td>Password</td><td>
<input type="password" name="pass"></input></td></tr></table>
<p>
<input type="submit" value="Login" id="login">
</form>