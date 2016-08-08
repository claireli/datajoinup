<?php
include("check.php");
?>
<!DOCTYPE html>
<html>
    
    <head> 
    <title>DJUp</title>
    <link rel="stylesheet" type="text/css" href="styles.css"/>
	<link rel="stylesheet" type="text/css" href="base.css">

   </head>

    <body>

	<?php include("includes/header.php");?>
	<?php include("includes/footer.html");?>
	<?php include("includes/connect.php"); ?>


<div id="shell">
<div id="container">
<h1>News & Updates</h1>
<h2>Connecting big people, behind big data.</h2><p>
		
<?php


$sql = "SELECT * FROM dju_profile";
$result = $conn->query($sql);
$count = 0;
$color = 0;
echo "<div id='grid' align='center'><table align='center'><tr>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<td>";
		
		if($color%2==0){
			echo "<div class='grid_entry'>";
		}
		else{
			echo "<div class='grid_entryb'>";
		}
		// SHOULD SHOW P14A-P14J 
		//echo $row["profile_id"]."<p><i>".$row["PU1"]."</i><br><i>".$row["PU2"]."</i></div></td>";
		$user_id=substr($row["profile_id"], 0, 8);
		echo "<form action='member_profile.php' method='get'><input type='hidden' name='user_id' value='".$row["profile_id"]."' />";
		echo "<button>";
		
		echo $user_id."</button></form><p><i>".$row["P14"]."</i></div></td>";
		$count++;
		$color++;
		if($count==4){
			echo "</tr><tr>";
			$count=0;
			$color--;
		}
	}
} 
else{
     echo "0 results";
}


echo "</tr></table></div>";

$conn->close();
?>  
	


</div>


</div>		
<script>
var container_size = document.getElementById('container');
var nav_size = document.getElementById('nav');
var footer_size = document.getElementById('footer'); 
var margin = 100;
var total=container_size.clientHeight + nav_size.clientHeight + footer_size.clientHeight + margin;
console.log(total);
console.log(container_size.clientHeight);
//alert(myDiv.clientHeight);
document.getElementById('footer').style.top=total+"px";
</script>
</body>
</html>