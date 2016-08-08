<?php
include("connect.php");
$pass=false;


$sql = "SELECT * FROM members WHERE username='".$_POST["user"]."'";
$result = $conn->query($sql);

$salt = '$2a$07$R.gJb2U2N.FmZ4hPp1y2CN$';
//echo "<p>DATABASE: " . crypt("hello", $salt) . "<p>";


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		//echo "ENTERED: " . crypt($_POST["pass"], $salt);
		if($row["password"]==crypt($_POST["pass"], $salt)){
			echo "Password matches yeah!";
			$pass=true;
		}
		else{
			header('Location: return_user.php?error=pass');
			//echo "Invalid password!";
		}
		$profile_id=$row["id"];
	}
}
else{
	header('Location: return_user.php?error=user');
	//echo "You have entered a username that doesn't exist!";
}
echo $profile_id;
$name="";
//$profile_id
$sql2 = "SELECT first_name, last_name FROM dju_profile WHERE profile_id='".$profile_id."'";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		$name=$row["first_name"]." ".$row["last_name"];
	}
}


if($pass==true){
	session_start();
	echo "YOU HAVE PASSED, ".$name;
	// SET LOGGED IN SESSION!
	$_SESSION['logged']=true;
	$_SESSION['user_first_last'] = $name;
	$_SESSION['profile_id'] = $profile_id;
	
	print_r($_SESSION);
	header('Location: index.php');
}
else{
	echo "ACCESS DENIED";
}

// CHECK TO SEE IF ENABLED ON SERVER
/*if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) {
    echo "CRYPT_BLOWFISH is enabled!";
}
else {
    echo "CRYPT_BLOWFISH is not available";
}*/



?>