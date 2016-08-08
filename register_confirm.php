<?php 

include("connect.php"); 

echo $_POST["email"];
echo $_POST["first"];
echo $_POST["last"];
echo $_POST["pass1"];
echo $_POST["pass2"];

$pass_test=false;
$email_test=false;
$go_back=false;
$pass_test_key="false";
$email_test_key="false";

// CHECK DOES EMAIL EXIST?
$sql = "SELECT * FROM members WHERE username='".$_POST["email"]."'";
$result = $conn->query($sql);
var_dump($result);

// WTF why does it only work with quotes?
// NOTES TO SELF, investigate....

if ($result->num_rows==null) {
		echo "email is okay";
		$email_test=true;
		$email_test_key="true";
}
else{
	echo "email already exists";
	$email_test=false;
	$email_test_key="false";
}
	
// CHECK DO PASSWORDS MATCH
if($_POST["pass1"]==$_POST["pass2"]){
	// okay
	$pass_test=true;
	$pass_test_key="true";
	// check if empty string
	if($_POST['pass1']==""){
		// it's empty mofoooo
		$pass_test=false;
		$pass_test_key="empty";
	}
}

// if both tests pass
	//jump to another page


if(!$pass_test){
	//go back
	echo "pass don't match";
	$go_back=true;
}
else{
	$pass_test_key="true";
}

if(!$email_test){
	//go back
	echo "email don't match";

	$go_back=true;
}
else{
	$email_test_key="true";
}

if(!$go_back){


	echo "<h1>Record Update!</h1><hr>";
	echo "<i>Administrative Submission Record</i>";
	echo "<h1>Personal Info</h1>";
	echo $_POST["email"];
	echo $_POST["first"];
	
	$name = $_POST["first"]." ".$_POST["first"];
	
	echo $_POST["last"];
	echo $_POST["pass1"];
	echo $_POST["pass2"];

	function uuidv4()
	{
		// use this method for servers with PHP5 and below
		//return com_create_guid();
		
		// use this method for servers with PHP7 installed
		/*return implode('-', [
			bin2hex(random_bytes(4)),
			bin2hex(random_bytes(2)),
			bin2hex(chr((ord(random_bytes(1)) & 0x0F) | 0x40)) . bin2hex(random_bytes(1)),
			bin2hex(chr((ord(random_bytes(1)) & 0x3F) | 0x80)) . bin2hex(random_bytes(1)),
			bin2hex(random_bytes(6))
		]);*/
		$chars = md5(uniqid(mt_rand(), true));
    $uuid  = substr($chars,0,8) . '-';
    $uuid .= substr($chars,8,4) . '-';
    $uuid .= substr($chars,12,4) . '-';
    $uuid .= substr($chars,16,4) . '-';
    $uuid .= substr($chars,20,12);
    return $prefix . $uuid;
	}
	
	if (function_exists('com_create_guid') === true)
    {
        echo "Yes";
        $guid = com_create_guid();
        echo $guid;
    }
	else{
		echo "Nope !";
	}
	
	$uuid=uuidv4();
	$uuid=str_replace("{","",$uuid);
	$uuid=str_replace("}","",$uuid);
	echo $uuid;
	
	// PASSWORD HASHING!
	$salt = '$2a$07$R.gJb2U2N.FmZ4hPp1y2CN$';
	$hash_pass=crypt($_POST["pass1"], $salt);

	echo "GENERATED THE FOLLOWING UUID: ".$uuid;
	$sql="INSERT INTO `DJU`.`dju_profile` (`profile_id`, `first_name`, `last_name`, `account_status`) 
	VALUES ('".$uuid."', '".$_POST["first"]."', '".$_POST["last"]."', 'not_verified');";

	$sql2="INSERT INTO `DJU`.`members` (`id`, `username`, `password`) 
	VALUES ('".$uuid."', '".$_POST["email"]."', '".$hash_pass."');";
	
	$sql3="INSERT INTO `DJU`.`dju_gtitle` (`profile_id`) 
	VALUES ('".$uuid."');";
	
	$sql4="INSERT INTO `DJU`.`dju_mtitle` (`profile_id`) 
	VALUES ('".$uuid."');";
	
	$sql5="INSERT INTO `DJU`.`dju_putitle` (`profile_id`) 
	VALUES ('".$uuid."');";
	
	$sql6="INSERT INTO `DJU`.`dju_stitle` (`profile_id`) 
	VALUES ('".$uuid."');";

	if ($conn->query($sql) === TRUE) {
		echo "New PROFILE record created successfully<br>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	if ($conn->query($sql2) === TRUE) {
		echo "New MEMBER record created successfully<br>";
	} else {
		echo "Error: " . $sql2 . "<br>" . $conn->error;
	}
	
	if ($conn->query($sql3) === TRUE) {
		echo "New PROFILE record created successfully<br>";
	} else {
		echo "Error: " . $sql3 . "<br>" . $conn->error;
	}

	if ($conn->query($sql4) === TRUE) {
		echo "New MEMBER record created successfully<br>";
	} else {
		echo "Error: " . $sql4 . "<br>" . $conn->error;
	}
	
		if ($conn->query($sql5) === TRUE) {
		echo "New PROFILE record created successfully<br>";
	} else {
		echo "Error: " . $sql5 . "<br>" . $conn->error;
	}

	if ($conn->query($sql6) === TRUE) {
		echo "New MEMBER record created successfully<br>";
	} else {
		echo "Error: " . $sql6 . "<br>" . $conn->error;
	}
	
	//proceed! :)
	session_start();
	$name = $_POST["first"]." ".$_POST["last"];
	$_SESSION['logged']=true;
	$_SESSION['user_first_last'] = $name;
	$_SESSION['profile_id'] = $uuid;
	header('Location: welcome.php');
}
else{
	// jump back to register_new_user.php, 
	//pass $_POST as GET, and which didn't pass
	header("Location: register_new_user.php?pass=".$pass_test_key."&email_ok=".$email_test_key."&first=".$_POST['first']."&last=".$_POST['last']."&email=".$_POST['email']."");
}



?>