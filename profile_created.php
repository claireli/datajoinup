<!DOCTYPE html>
<html>
    
    <head> 
        <title>DJUp</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
		<link rel="stylesheet" type="text/css" href="base.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script>
		function continue() {
			var id="<?php echo $_SESSION['profile_id'];?>";
			window.location = "member_profile.php?user_id="+id;
		}
		</script>
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
	width: 700px;
	align: center;
	margin: auto;
}

#photo{
	width: 200px;
	height: 200px;
}
</style>
   </head>

	<body>
	<?php 
		include("includes/header.php");
		include("connect.php");
		include("includes/footer.html");
		
		$profile_id=$_SESSION['profile_id'];
		$profile_photo="";
		echo $profile_id;
		$sql2 = "SELECT profile_pic FROM dju_profile WHERE profile_id='".$profile_id."'";
		$result = $conn->query($sql2);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				//$name=$row["first_name"]." ".$row["last_name"];
				//$status=$row['account_status'];
				$profile_photo=$row['profile_pic'];
				
				//echo $profile_photo;
			}
		}
		
	?>
	<div id="container">
	<h1>Data JoinUp Profile Created</h1> 
    <h2><?php echo $_SESSION['profile_id'];?></h2><p>
	<table class='inner_form'><tr><td><a href='photo.php'>
	
	<?php echo "<div class='grid_entry'><div class='photo'><img src='".$profile_photo."'></div><div class='grid_content'></div></div> "; ?>
	</a></td><td>
	Hello, <?php echo $_SESSION['user_first_last'];?>!<p>
	Would you like to upload an optional profile photo? It will help put a name to a face in our directory of industry experts. 
	<input type='submit' id='submit' value='Upload Profile Photo' class='button'></td></tr></table><br>
	<input type='submit' class='button' value='Continue to Profile' onClick=''continue()'>
	