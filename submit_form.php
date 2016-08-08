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
session_start();
header('Location: profile_created.php');
include("connect.php"); 

echo "<h1>Record Update!</h1><hr>";
echo "<i>Administrative Submission Record</i>";
echo "<h1>Personal Info</h1>";
echo $_POST["firstname"]."<br>";
echo $_POST["lastname"]."<br>";
echo $_POST["phone"]."<br>";
echo $_POST["city"]."<br>";
echo $_POST["state"]."<br>";
echo $_POST["country"]."<p>";

// P1, Personal Info
$p1="";
if(!empty($_POST['chk_group1'])) {
	// Counting number of checked checkboxes.
	$checked_count = count($_POST['chk_group1']);
	
	echo "You have selected following ".$checked_count." option(s): <br/>";
	// Loop to store and display values of individual checked checkbox.
	foreach($_POST['chk_group1'] as $selected) {
		echo "<p>".$selected ."</p>";
		$p1.=$selected."<br>";
	}
}

echo $_POST["rel"]."<p>";

// P2, Personal Info
$p2="";
if(!empty($_POST['chk_group2'])) {
	// Counting number of checked checkboxes.
	$checked_count = count($_POST['chk_group2']);
	
	echo "You have selected following ".$checked_count." option(s): <br/>";
	// Loop to store and display values of individual checked checkbox.
	foreach($_POST['chk_group2'] as $selected) {
		echo "<p>".$selected ."</p>";
		$p2.=$selected." ";
	}
}

// p3-13
echo $_POST["p3"]."<br>";
echo $_POST["p4"]."<br>";
echo $_POST["p5"]."<br>";
echo $_POST["p6"]."<br>";
echo $_POST["p7"]."<br>";
echo $_POST["p8"]."<br>";
echo $_POST["p9"]."<br>";
echo $_POST["p10"]."<br>";
echo $_POST["p11"]."<br>";
echo $_POST["p12"]."<br>";
echo $_POST["p13"]."<br>";

echo $_POST["vi"]."<br>";

// P14, Personal Info
$p14="";
if(!empty($_POST['chk_group3'])) {
	// Counting number of checked checkboxes.
	$checked_count = count($_POST['chk_group3']);
	
	echo "You have selected following ".$checked_count." option(s): <br/>";
	// Loop to store and display values of individual checked checkbox.
	foreach($_POST['chk_group3'] as $selected) {
		echo "<p>".$selected ."</p>";
		$p14.=$selected."<br>";
	}
}

echo $_POST["notes"];
$notes = addslashes($_POST["notes"]);

$g1=$_POST["g1"]." ".$_POST["g1b"];
$g2=$_POST["g2"]." ".$_POST["g2b"];
$g3=$_POST["g3"]." ".$_POST["g3b"];
$g4=$_POST["g4"]." ".$_POST["g4b"];
$g5=$_POST["g5"]." ".$_POST["g5b"];
$g6=$_POST["g6"]." ".$_POST["g6b"];
$g7=$_POST["g7"]." ".$_POST["g7b"];
$g8=$_POST["g8"]." ".$_POST["g8b"];
$g9=$_POST["g9"]." ".$_POST["g9b"];
$g10=$_POST["g10"]." ".$_POST["g10b"];
$g11=$_POST["g11"]." ".$_POST["g11b"];
$g12=$_POST["g12"]." ".$_POST["g12b"];
$g13=$_POST["g13"]." ".$_POST["g3b"];
$g14=$_POST["g14"]." ".$_POST["g14b"];
$g15=$_POST["g15"]." ".$_POST["g15b"];
$g16=$_POST["g16"]." ".$_POST["g16b"];
$g17=$_POST["g17"]." ".$_POST["g17b"];
$g18=$_POST["g18"]." ".$_POST["g18b"];
$g19=$_POST["g19"]." ".$_POST["g19b"];
$g20=$_POST["g20"]." ".$_POST["g20b"];
$g21=$_POST["g21"]." ".$_POST["g21b"];
$g22=$_POST["g22"]." ".$_POST["g22b"];
$g23=$_POST["g23"]." ".$_POST["g23b"];
$g24=$_POST["g24"]." ".$_POST["g24b"];

echo "<h1>Gtitle</h1>";

echo $g1;
echo $g2;
echo $g3;
echo $g4;
echo $g5;
echo $g6;
echo $g7;
echo $g8;
echo $g9;
echo $g10;
echo $g11;
echo $g12;
echo $g13;
echo $g14;
echo $g15;
echo $g16;
echo $g17;
echo $g18;
echo $g19;
echo $g20;
echo $g21;
echo $g22;
echo $g23;
echo $g24;

// Platforms, Gtitle
$platforms="";
if(!empty($_POST['chk_group4'])) {
	// Counting number of checked checkboxes.
	$checked_count = count($_POST['chk_group4']);
	
	echo "You have selected following ".$checked_count." option(s): <br/>";
	// Loop to store and display values of individual checked checkbox.
	foreach($_POST['chk_group4'] as $selected) {
		echo "<p>".$selected ."</p>";
		$platforms.=$selected."<br>";
	}
}

$s1=$_POST["s1"]." ".$_POST["s1b"];
$s2=$_POST["s2"]." ".$_POST["s2b"];
$s3=$_POST["s3"]." ".$_POST["s3b"];
$s4=$_POST["s4"]." ".$_POST["s4b"];
$s5=$_POST["s5"]." ".$_POST["s5b"];
$s6=$_POST["s6"]." ".$_POST["s6b"];
$s7=$_POST["s7"]." ".$_POST["s7b"];
$s8=$_POST["s8"]." ".$_POST["s8b"];
$s9=$_POST["s9"]." ".$_POST["s9b"];
$s10=$_POST["s10"]." ".$_POST["s10b"];
$s11=$_POST["s11"]." ".$_POST["s11b"];
$s12=$_POST["s12"]." ".$_POST["s12b"];
$s13=$_POST["s13"]." ".$_POST["s3b"];
$s14=$_POST["s14"]." ".$_POST["s14b"];
$s15=$_POST["s15"]." ".$_POST["s15b"];
$s16=$_POST["s16"]." ".$_POST["s16b"];
$s17=$_POST["s17"]." ".$_POST["s17b"];
$s18=$_POST["s18"]." ".$_POST["s18b"];
$s19=$_POST["s19"]." ".$_POST["s19b"];
$s20=$_POST["s20"]." ".$_POST["s20b"];

echo "<h1>Stitle</h1>";
echo $s1;
echo $s2;
echo $s3;
echo $s4;
echo $s5;
echo $s6;
echo $s7;
echo $s8;
echo $s9;
echo $s10;
echo $s11;
echo $s12;
echo $s13;
echo $s14;
echo $s15;
echo $s16;
echo $s17;
echo $s18;
echo $s19;
echo $s20;

$m1=$_POST["m1"]." ".$_POST["m1b"];
$m2=$_POST["m2"]." ".$_POST["m2b"];
$m3=$_POST["m3"]." ".$_POST["m3b"];
$m4=$_POST["m4"]." ".$_POST["m4b"];
$m5=$_POST["m5"]." ".$_POST["m5b"];
$m6=$_POST["m6"]." ".$_POST["m6b"];
$m7=$_POST["m7"]." ".$_POST["m7b"];

$pu1=$_POST["pu1"];
$pu2=$_POST["pu2"];
$pu3=$_POST["pu3"];

echo "<h1>Mtitle</h1>";
echo $m1;
echo $m2;
echo $m3;
echo $m4;
echo $m5;
echo $m6;
echo $m7;

echo $pu1;
echo $pu2;
echo $pu3;

echo "<hr>";

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

$profile_id=$_SESSION['profile_id'];

//$uuid=uuidv4();
//$uuid=str_replace("{","",$uuid);
//$uuid=str_replace("}","",$uuid);

//echo "GENERATED THE FOLLOWING UUID: ".$uuid;

$sql="UPDATE `DJU`.`dju_profile` SET 
`first_name` = '" .$_POST["firstname"]. "',
`last_name` = '" .$_POST["lastname"]. "',
`phone` = '" .$_POST["phone"]. "',
`city` = '" .$_POST["city"]. "',
`state` = '" .$_POST["state"]. "',
`country` = '" .$_POST["country"]. "',

`P1` = '" .$p1. "',   
`Rel` = '" .$_POST["rel"]. "',
`P2` = '" .$p2. "',
`P3` = '" .$_POST["p3"]. "',
`P4` = '" .$_POST["p4"]. "',
`P5` = '" .$_POST["p5"]. "',
`P6` = '" .$_POST["p6"]. "',
`P7` = '" .$_POST["p7"]. "',
`P8` = '" .$_POST["p8"]. "',
`P9` = '" .$_POST["p9"]. "',
`P10` = '" .$_POST["p10"]. "',
`P11` = '" .$_POST["p11"]. "',
`P12` = '" .$_POST["p12"]. "',
`P13` = '" .$_POST["p13"]. "',
`vi` = '" .$_POST["vi"]. "',
`P14` = '" .$p14. "',
`notes` = '" .$notes. "'

WHERE profile_id = '".$profile_id."';";

/*$sql="INSERT INTO `dju`.`dju_profile` (`profile_id`, `first_name`, `last_name`, `phone`, `city`, `state`, `country`, 
`P1`, `Rel`, `P2`, `P3`, `P4`, `P5`, `P6`, `P7`, `P8`, `P9`, `P10`, `P11`, `P12`, `P13`, `vi`, `P14`, `notes`, `account_status`) 
VALUES ('".$uuid."', '".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["phone"]."', '".$_POST["city"]."', '".$_POST["state"]."', 
'".$_POST["country"]."', '".$p1."', '".$_POST["rel"]."', '".$p2."', '".$_POST["p3"]."', '".$_POST["p4"]."', '".$_POST["p5"]."', '".$_POST["p6"]."', '".$_POST["p7"]."', 
'".$_POST["p8"]."', '".$_POST["p9"]."', '".$_POST["p10"]."', '".$_POST["p11"]."', '".$_POST["p12"]."', '".$_POST["p13"]."', '".$_POST["vi"]."', '".$p14."', '".$notes."', 'not_verified');"; 
*/

$sql2="UPDATE `DJU`.`dju_gtitle` SET 
`G1` = '" .$g1. "',   
`G2` = '" .$g2. "',
`G3` = '" .$g3. "',
`G4` = '" .$g4. "',
`G5` = '" .$g5. "',
`G6` = '" .$g6. "',
`G7` = '" .$g7. "',
`G8` = '" .$g8. "',
`G9` = '" .$g9. "',
`G10` = '" .$g10. "',
`G11` = '" .$g11. "',
`G12` = '" .$g12. "',
`G13` = '" .$g13. "',
`G14` = '" .$g14. "',
`G15` = '" .$g15. "',
`G16` = '" .$g16. "',
`G17` = '" .$g17. "',
`G18` = '" .$g18. "',
`G19` = '" .$g19. "',
`G20` = '" .$g20. "',
`G21` = '" .$g21. "',
`G22` = '" .$g22. "',
`G23` = '" .$g23. "',
`G24` = '" .$g24. "',
`Platforms` = '" .$platforms. "'

WHERE profile_id = '".$profile_id."';";

/*
$sql2="INSERT INTO `dju`.`dju_gtitle` (`profile_id`, `G1`, `G2`, `G3`, `G4`, `G5`, `G6`, `G7`, `G8`, `G9`, `G10`, `G11`, `G12`, `G13`, `G14`, `G15`, `G16`, `G17`, `G18`, `G19`, `G20`, `G21`, 
`G22`, `G23`, `G24`, `Platforms`) VALUES ('".$uuid."', '".$g1."', '".$g2."', '".$g3."', '".$g4."', '".$g5."', '".$g6."', '".$g7."', '".$g8."', '".$g9."', '".$g10."', '".$g11."', '".$g12."', 
'".$g13."', '".$g14."', '".$g15."', '".$g16."', '".$g17."', '".$g18."', '".$g19."', '".$g20."', '".$g21."', '".$g22."', '".$g23."', '".$g24."', '".$platforms."');";


*/

$sql3="UPDATE `DJU`.`dju_stitle` SET 
`S1` = '" .$s1. "',   
`S2` = '" .$s2. "',
`S3` = '" .$s3. "',
`S4` = '" .$s4. "',
`S5` = '" .$s5. "',
`S6` = '" .$s6. "',
`S7` = '" .$s7. "',
`S8` = '" .$s8. "',
`S9` = '" .$s9. "',
`S10` = '" .$s10. "',
`S11` = '" .$s11. "',
`S12` = '" .$s12. "',
`S13` = '" .$s13. "',
`S14` = '" .$s14. "',
`S15` = '" .$s15. "',
`S16` = '" .$s16. "',
`S17` = '" .$s17. "',
`S18` = '" .$s18. "',
`S19` = '" .$s19. "',
`S20` = '" .$s20. "'

WHERE profile_id = '".$profile_id."';";


/*
$sql3="INSERT INTO `dju`.`dju_stitle` (`profile_id`, `S1`, `S2`, `S3`, `S4`, `S5`, `S6`, `S7`, `S8`, `S9`, `S10`, `S11`, `S12`, `S13`, `S14`, `S15`, `S16`, `S17`, `S18`, `S19`, `S20`) 
VALUES ('".$uuid."', '".$s1."', '".$s2."', '".$s3."', '".$s4."', '".$s5."', '".$s6."', '".$s7."', '".$s8."', '".$s9."', '".$s10."', '".$s11."', '".$s12."', '".$s13."', 
'".$s14."', '".$s15."', '".$s16."', '".$s17."', '".$s18."', '".$s19."', '".$s20."');";
*/

/*
$sql4="INSERT INTO `dju`.`dju_mtitle` (`profile_id`, `M1`, `M2`, `M3`, `M4`, `M5`, `M6`, `M7`) VALUES ('".$uuid."', '".$m1."', '".$m2."', '".$m3."', '".$m4."', '".$m5."', '".$m6."', '".$m7."');";

$sql5="INSERT INTO `dju`.`dju_putitle` (`profile_id`, `PU1`, `PU2`, `PU3`) VALUES ('".$uuid."', '".$pu1."', '".$pu2."', '".$pu3."');";*/

$sql4="UPDATE `DJU`.`dju_mtitle` SET 
`M1` = '" .$m1. "',   
`M2` = '" .$m2. "',
`M3` = '" .$m3. "',
`M4` = '" .$m4. "',
`M5` = '" .$m5. "',
`M6` = '" .$m6. "',
`M7` = '" .$m7. "'

WHERE profile_id = '".$profile_id."';";

$sql5="UPDATE `DJU`.`dju_putitle` SET 
`PU1` = '" .$pu1. "',   
`PU2` = '" .$pu2. "',
`PU3` = '" .$pu3. "'

WHERE profile_id = '".$profile_id."';";


if ($conn->query($sql) === TRUE) {
    echo "New PROFILE record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
    echo "New G_TITLE record created successfully<br>";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

if ($conn->query($sql3) === TRUE) {
    echo "New S_TITLE record created successfully<br>";
} else {
    echo "Error: " . $sql3 . "<br>" . $conn->error;
}

if ($conn->query($sql4) === TRUE) {
    echo "New M_TITLE record created successfully<br>";
} else {
    echo "Error: " . $sql4 . "<br>" . $conn->error;
}

if ($conn->query($sql5) === TRUE) {
    echo "New PU_TITLE record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>