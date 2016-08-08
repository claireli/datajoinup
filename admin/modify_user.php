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
<style>
#warning{
	min-width: 700px;
	border: solid 0px;
	margin: 10px;
	padding: 10px;
}

.user_update{
	min-width: 700px;
	border: solid 0px;
	margin: 10px;
	padding: 10px;
}

.a{
	height: 50px;
	background-color: #a3adb8;
}

.b{
	height: 50px;
	background-color: #FFFFFF;
}
body{
	text-align: center;
}
</style>


<?php 	
include("../connect.php");
	$count=0;
	$delete_user_list = array();

	function delete_warning($delete_user_list){
		echo "<div id='warning'>Warning: You are about to delete the following accounts? Do you wish to proceed?";
		var_dump($delete_user_list);
		echo "<input type='button' value='Yes, Delete These'>";
		echo "<input type='button' value='Cancel Deletion'></div>";
		
	}
	function mod_account($user, $action){
		$sql="";
		$user=substr($user, 0, -7);
		
		if ($action=="verify"){
			$sql="UPDATE dju_profile
			SET account_status='verified'
			WHERE profile_id='".$user."';";
			if ($GLOBALS['conn'] ->query($sql) === TRUE) {
				if($GLOBALS['count']%2==0){
					echo "<tr class='a'>";
				}
				else{
					echo "<tr class='b'>";
				}
				$GLOBALS['count']++;
				echo "<td><span class='user_update'>".$user." updated to verified.</span>&nbsp;</td></tr>";
			}
			else {
				echo "Error updating record: " . $conn->error;
			}
		}
		if ($action=="suspend"){
			$sql="UPDATE dju_profile
			SET account_status='suspended'
			WHERE profile_id='".$user."';";
			if ($GLOBALS['conn'] ->query($sql) === TRUE) {
				if($GLOBALS['count']%2==0){
					echo "<tr class='a'>";
				}
				else{
					echo "<tr class='b'>";
				}
				$GLOBALS['count']++;
				echo "<td><span class='user_update'>".$user." updated to suspended.</span>&nbsp;</td></tr>";
			}
			else {
				echo "Error updating record: " . $conn->error;
			}
		}
		
		if ($action=="unsuspend"){
			$sql="UPDATE dju_profile
			SET account_status='not_verified'
			WHERE profile_id='".$user."';";
			if ($GLOBALS['conn'] ->query($sql) === TRUE) {
				if($GLOBALS['count']%2==0){
					echo "<tr class='a'>";
				}
				else{
					echo "<tr class='b'>";
				}
				$GLOBALS['count']++;
				echo "<td><span class='user_update'>".$user." no longer suspended.</span>&nbsp;</td></tr>";
			}
			else {
				echo "Error updating record: " . $conn->error;
			}
		}
		
		if ($action=="delete"){
			array_push($GLOBALS['delete_user_list'], $user);
		}
		
		
	}
	echo "<div align='center'><table id='grid'>";
	foreach ($_POST as $key => $value) {
        /*echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";*/
		
		mod_account($key, $value);
		
    }; 
	if($GLOBALS['count']%2==0){
		echo "<tr class='a'>";
	}
	else{
		echo "<tr class='b'>";
	}
	echo "<td>";
	delete_warning($delete_user_list);
	echo "</td></tr>";
	echo "</table></div>";
	?>
	</table>