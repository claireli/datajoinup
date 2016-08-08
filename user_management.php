<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DJU";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

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
		echo "<form action='member_profile.php' method='get'><input type='hidden' name='user_id' value='".$row["profile_id"]."' />";
		echo "<button>";
		
		echo $row["profile_id"]."</button></form><p><i>".$row["P14"]."</i></div></td>";
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