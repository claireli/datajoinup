<?php
include("connect.php");
//include("includes/restrict.php");
include("includes/header.php");
include("includes/footer.html");

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css"/>
<link rel="stylesheet" type="text/css" href="base.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<style>
	#letter{
		margin: auto;
		width: 50%;			
		z-index: 3;
	}
</style>
</head>
<body>
<div id="container">
<div id="letter">
<?php
		$profile_photo="";
		$profile_id=$_SESSION['profile_id'];
		$sql2 = "SELECT account_status, profile_pic FROM dju_profile WHERE profile_id='".$profile_id."'";
		$result = $conn->query($sql2);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				//$name=$row["first_name"]." ".$row["last_name"];
				$status=$row['account_status'];
				$profile_photo=$row['profile_pic'];
			}
		}

	if(!IsSet($_SESSION['logged']))
	{	
		echo "<h1>404 Server Error, this is a restricted members only page!</h1><p><br>";
		echo "<input type='submit' value='Login to Existing Account'><p>";
		echo "<input type='submit' value='Create Account & Profile'>";
	}
	else{
		if($status=="not_verified"){
			echo "<h2>Thank you for registering your profile with Data Join Up!</h2>
			<p>

			As stated before, one step remains prior to activating your account.
			To ensure user authenticity we will conduct a brief phone screen.
			<p> 
			Kindly allow 24-72 hours for our team to contact you.
			<p>
			Email us anytime with questions:<br>
			admin@datajoinup.com
			<p>
			Thanks!<br>
			Data Join Up";
		}
		else{
			
			//$profile_photo="res/profile/default.jpg";
			
			echo "<h1>Upload Profile Photo</h1><p><br>";
			echo "<table><tr><td><div class='grid_entry'><div class='photo'><img src='".$profile_photo."'></div><div class='grid_content'></div></div></td><td>";
			
			echo "<form action='upload_photo.php' method='post' enctype='multipart/form-data'>
			Select image to upload:
			<input type='hidden' name='user_file' value='".$profile_id."'>
			<input type='file' name='fileToUpload' id='fileToUpload'><p>
			<input type='submit' value='Upload Image' name='submit' class='menu_button1'>
			</form>";
			
		
			echo "</td></tr></table>";
		}
	}
?>

</div>
</div>
</body>
</html>