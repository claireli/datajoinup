<style>
body{
	font-family: 'Verdana';
	text-align: center;
}

h1{
	font-size: 12px;
}
</style>

<?php

//header('Location: profile_created.php');
include("connect.php");
echo "Connected successfully";

echo "<h1>Record Update!</h1><hr>";
echo "<i>Administrative Submission Record</i>";
echo "<h1>Personal Info</h1>";
echo $_POST["firstname"]."<br>";
echo $_POST["lastname"]."<br>";
echo $_POST["email"]."<br>";
echo $_POST["phone"]."<br>";
echo $_POST["city"]."<br>";
echo $_POST["state"]."<br>";
echo $_POST["country"]."<p>";

function uuidv4()
{
	// use this method for servers with PHP5 and below
	return com_create_guid();
	
	// use this method for servers with PHP7 installed
    /*return implode('-', [
        bin2hex(random_bytes(4)),
        bin2hex(random_bytes(2)),
        bin2hex(chr((ord(random_bytes(1)) & 0x0F) | 0x40)) . bin2hex(random_bytes(1)),
        bin2hex(chr((ord(random_bytes(1)) & 0x3F) | 0x80)) . bin2hex(random_bytes(1)),
        bin2hex(random_bytes(6))
    ]);*/
}

$uuid=uuidv4();
$uuid=str_replace("{","",$uuid);
$uuid=str_replace("}","",$uuid);

echo "GENERATED THE FOLLOWING UUID: ".$uuid;
$sql="INSERT INTO `dju`.`dju_profile` (`profile_id`, `first_name`, `last_name`, `email`, `account_status`) 
VALUES ('".$uuid."', '".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["email"]."', 'not_verified');";

$sql2="INSERT INTO `dju`.`members` (`id`, `username`, `password`) 
VALUES ('".$uuid."', '".$_POST["email"]."', '".$_POST["lastname"]."');";

if ($conn->query($sql2) === TRUE) {
    echo "New MEMBER record created successfully<br>";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

if (!mysqli_query($conn,$sql2))
{
  echo("Error description: " . mysqli_error($con));
}
else{
	echo "query 2 worked";
}

if ($conn->query($sql) === TRUE) {
    echo "New PROFILE record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>