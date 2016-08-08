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
<script type="text/javascript">
function landing() {
window.location = "landing.php";
}
function search() {
window.location = "search.php";
}
function account() {
window.location = "account_info.php";
}
function profile() {
window.location = "profilesetup.php";
}
function photo() {
window.location = "photo.php";
}
</script>
<style>
	#letter{
		margin: auto;
		width: 50%;			
		z-index: 3;
	}
	
	.menu_button1{
		cursor: pointer;
	}
	
	.menu_button1: hover{
		color: #FFFFFF;
		font-weight: bold;
		border: 2px;
	}

</style>
</head>
<body>
<div id="container">
<div id="letter">
<?php	
		
		$profile_id=$_SESSION['profile_id'];
		$sql2 = "SELECT account_status FROM dju_profile WHERE profile_id='".$profile_id."'";
		$result = $conn->query($sql2);
		//var_dump($result);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				//$name=$row["first_name"]." ".$row["last_name"];
				$status=$row['account_status'];
				//var_dump($row);
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
			
			$sql = "SELECT * FROM dju_profile WHERE profile_id='".$profile_id."'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				
				while($row = $result->fetch_assoc()) {
					//$name=$row["first_name"]." ".$row["last_name"];
						//echo $row['profile_pic'];
					if($row['profile_pic']==null){
						//echo "null";
						$profile_photo="res/profile/default.jpg";
					}
					else{
						$profile_photo=$row['profile_pic'];
					}

				}
			}
			else{
				echo "noting here";
			}
			
			
			
			echo "<h1>Account Portal	</h1><p><br>";
			echo "<table><tr><td><a href='photo.php'>";
			//"<img src='".$profile_photo."' class='profile_photo'></a></td><td>";
			
			echo "<div class='grid_entry'><div class='photo'><img src='".$profile_photo."'></div><div class='grid_content'>";
			
			
			echo "</div></a></td><td>";
			
			echo "<input type='button' value='View Exclusive Network Profiles' class='menu_button1' onClick='landing()'><p>";
			echo "<input type='button' value='Dynamic Network Search' class='menu_button1' onClick='search()'><p>";
			echo "<input type='button' value='My Account Information' class='menu_button1' onClick='account()'><p>";
			echo "<input type='button' value='Edit My Profile' class='menu_button1' onClick='profile()'><p>";
			echo "<input type='button' value='Update Profile Photo' class='menu_button1' onClick='photo()'><p>";
			echo "</td></tr></table>";
		}
	}
?>

</div>
</div>
</body>
</html>