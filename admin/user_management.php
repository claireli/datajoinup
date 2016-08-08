<style>
body{
	text-align: center;
	background-color: #c6dcf6;
	padding-top: 10px;
	font-family: 'Calibri';
	}
table{
	margin: auto;
}

td{
	padding: 10px;
}

tr{
	min-height: 30px;
}

h1{
	font-size: 30px;
	font-family: "Century Gothic";
	font-weight: 100;
}

.button{
	padding: 6px;
	background-color: #FFFFFF;
	border: 1px solid;
	color: #4a79af;
}

a{
    text-decoration: none;
}

.a{
	background-color: #FFFFFF;

}

.b{
	background-color: #a3adb8;
}

</style>
<img src="../logo.png">
<h1>User Account Management</h1>

<div align="center"><i>Viewing All Accounts By Chronological Order (Modification)</i><p>
<select name="mode">
<option value='view_all'>View All Accounts</option>
<option value='view_all'>View All Unverified Accounts</option>
<option value='view_all'>View All Suspended Accounts</option>
<option value='sort_search'>Search For Account</option>
<option value='filter_time'>Filter By Time Range</option>
</select>

<?php
include("../connect.php");

$sql = "SELECT * FROM dju_profile";
$result = $conn->query($sql);
$count = 0;
$color = 0;
echo "<form action='modify_user.php' method='post'>";
echo "<div id='grid' align='center'><table align='center' border='0' width='700px'><tr>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
		
		if($color%2==0){
			echo "<tr class='a'><td>";
		}
		else{
			echo "<tr class='b'><td>";
		}
		// SHOULD SHOW P14A-P14J 
		//echo $row["profile_id"]."<p><i>".$row["PU1"]."</i><br><i>".$row["PU2"]."</i></div></td>";
		
		echo $row["profile_id"]."<p><i>".$row["first_name"]." ".$row["last_name"]."</i></div></td>";
		$count++;
		//if($count==4){
			echo "<td>";
			echo "Status: ";
			if($row["account_status"]=="not_verified"){
				echo "<font color='red'>Not Verified</font>";
							echo "<br>";
			echo "<select name='".$row["profile_id"]."_change'><option value='none'>No Action</option>";
			echo "<option value='verify'>Verify Account</option>";
  
			echo "<option value='suspend'>Suspend Account</option><option value='delete'>Delete Account</option></select></td></tr><tr>";
			}
			if($row["account_status"]=="verified"){
				echo "<font color='#78f78a'>Verified</font>";
							echo "<br>";
			echo "<select name='".$row["profile_id"]."_change'><option value='none'>No Action</option>";
  
			echo "<option value='suspend'>Suspend Account</option><option value='delete'>Delete Account</option></select></td></tr><tr>";
			}
			
			if($row["account_status"]=="suspended"){
				echo "<font color='#dd24b4'>Suspended</font>";
							echo "<br>";
			echo "<select name='".$row["profile_id"]."_change'><option value='none'>No Action</option>";
  
			echo "<option value='unsuspend'>Unsuspend Account</option><option value='delete'>Delete Account</option></select></td></tr><tr>";
			}

			$count=0;
			$color++;
		//	}
	}
} 
else{
     echo "0 results";
}


echo "</tr></table></div>";

$conn->close();
?>  
<p><div align='center'>
<input type="submit" value="Modify Accounts" class='button'></div>
</form>
</div>