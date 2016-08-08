<?php
include("../connect.php");
$pass=false;

echo "User entered username: ";
echo $_POST['user'];

echo "<p>";
echo "User entered password: ";
echo $_POST['pass'];

$sql = "SELECT * FROM DJU.admin WHERE user='".$_POST["user"]."'";
$result = $conn->query($sql);
var_dump($result);

	// PASSWORD HASHING!
	$salt = '$2a$07$R.gJb2U2N.FmZ4hPp1y2CN$';
	$hash_pass=crypt($_POST["pass"], $salt);
	echo $hash_pass;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		
		if($row['pass']==$hash_pass){
			$pass=true;
			echo "password matches";
		}
		else{
			echo "Error, authentication failed!";
		}
		
	}
}

	


if($pass==true){
	header('Location: admin_panel.php');
}
else{
	echo "ACCESS DENIED";
}

?>