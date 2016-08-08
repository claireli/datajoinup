<?php
include("check.php");
?>
<!DOCTYPE html>
<html>
    
    <head> 
    <title>DJUp</title>
    <link rel="stylesheet" type="text/css" href="styles.css"/>
	<link rel="stylesheet" type="text/css" href="base.css">
	<style>
	
	.mini_grid{
		font-size: 14px;
		width: 100%;
		background-color: #f1f3f4;
	}
	
	#profile_photo{
		width: 300px;
		height: auto;
		border-radius: 25px;
	}
	
	#profile{
		background-color: #f1f3f4;
		width: 200px;
	}
	#software{
		background-color: #DDF5D5;
		width: 200px;
	}

	#machine{
		background-color: #D5EDF5;
		width: 200px;
	}

	#genomics{
		background-color: #F2DBD3;
		width: 200px;
	}

	#publications{
		background-color: #FCF5DB;
		width: 200px;
	}
	
	.list{
		width: 100%;
		display: inline-block;
		margin-top: 3px;
		height: 34px;
		font-size: 14px;
	}
	
	#block_profile{
		position: absolute;
		left: 0px;
		width: 100%;
		height: 500px;
		background-color: #000000;
		opacity: 0.7;
		z-index: 4;
	}
	
	#warning{
		position: relative;
		bottom: 0px;
		color: red;
		margin-top: 300px;
	}
	
	#edit_h2{
		color: red;
	}
	
	#full_listing{
		font-size: 13px;
		
	}
	
	#full_listing td{
		height: 24px;
	}
	</style>
	
	<script>
function footer(){
	console.log("hi");
	var container_size = document.getElementById('profile_table');
	var nav_size = document.getElementById('nav');
	var footer_size = document.getElementById('footer'); 
	var margin = 200;
	var total=container_size.clientHeight;
	total=total+footer_size.clientHeight+margin;

	console.log(total);
	console.log(container_size.clientHeight);
	//alert(myDiv.clientHeight);
	document.getElementById('footer').style.top=total+"px";
	
	//stretch overlay
	document.getElementById('block_profile').style.height=total+"px";
}
</script>
	
   </head>

    <body onload="footer();">
	
	<?php include("includes/header.php");?>
	<?php include("includes/footer.html");?>
	<?php include("connect.php"); ?>

	<div id="shell">
	<div id="container">

	<?php
$hide_skills=false;
//POPULATE PROFILE
$sql = "SELECT * FROM dju_profile WHERE profile_id='".$_GET['user_id']."'";
$result = $conn->query($sql);
$profile = array();
$profile=query_populate($result);

//var_dump($profile['profile_id']);
//var_dump($_SESSION['profile_id']);

$verified=false;
$logged_in=$_SESSION['profile_id'];
$current_user=$profile['profile_id'];
$lock=false;

if($profile['account_status']=='not_verified'){
	$verified=false;
}
else{
	$verified=true;
}

if($logged_in){
	if($verified && ($logged_in==$current_user)){
		echo "<a href='profilesetup.php'><h2 id='edit_h2'>Click Here to Edit/ Update Your Profile!</h2></a>";
	}
	if($verified && ($logged_in!=$current_user)){
		//echo "show the profile<br>";
		$lock=false;
	}
	if(!$verified && ($logged_in==$current_user)){
		echo "<h2>Warning your account is not verified!</h2><br>";
		echo "<div id='block_profile'><h2 id='warning'><a href='welcome.php'>In order to complete your profile, and be included in our database, you must have a verified account first. Check here for instruction
		on verification.</a></h2></div>";
	}
	if(!$verified && ($logged_in!=$current_user)){
		echo "404 Server Error<br>";
	}
}
else{
	
	if($verified){
		echo "<h2>In order to gain access to profiles, we would like to invite you to join our network!</h2><br>";
		echo "<div id='block_profile'><h2 id='warning'>In order to invited to our exclusive network, you just register a profile.</h2></div>";
		
		$hide_skills=true;
	}
	if(!$verified){
		echo "404 Server Error<br>";
	}

}



/*If (verified && (logged_in==current_user))
o	Show profile
o	Show option to edit profile
•	If (verified && (logged_in!=current_user))
o	Show profile
•	If (verified && (!logged_in))
o	Hide pieces of profile
•	If (!verified && (logged_in==current_user))
o	Warning your account is not verified!
•	If (!verified && (logged_in!=current_user))
o	404 Server Error
•	If (!verified && !logged_in)
o	404 Server Error
*/

//POPULATE GENOMICS
$sql = "SELECT * FROM dju_gtitle WHERE profile_id='".$_GET['user_id']."'";
$result = $conn->query($sql);
$genomics = array();
$genomics=query_populate($result);
$genomics=array_filter($genomics);

$result = array_filter(
    $genomics,
    function ($value) {
        return strlen($value) > 1;
    }
);

$genomics = $result;

$keys_g= array_keys($genomics);

//var_dump($genomics);

//POPULATE SOFTWARE
$sql = "SELECT * FROM dju_stitle WHERE profile_id='".$_GET['user_id']."'";
$result = $conn->query($sql);
$software = array();
$software=query_populate($result);
$software=array_filter($software);

$result = array_filter(
    $software,
    function ($value) {
        return strlen($value) > 1;
    }
);

$software = $result;

$keys_s = array_keys($software);
//var_dump($software);

//POPULATE MACHINE LEARNING
$sql = "SELECT * FROM dju_mtitle WHERE profile_id='".$_GET['user_id']."'";
$result = $conn->query($sql);
$machine = array();
$machine=query_populate($result);
$machine=array_filter($machine);

$result = array_filter(
    $machine,
    function ($value) {
        return strlen($value) > 1;
    }
);

$machine = $result;

//var_dump($machine);
$keys_m = array_keys($machine);


//PUBLICATIONS
$sql = "SELECT * FROM dju_putitle WHERE profile_id='".$_GET['user_id']."'";
$result = $conn->query($sql);
$publications = array();
$publications=query_populate($result);
$publications=array_filter($publications);

$result = array_filter(
    $publications,
    function ($value) {
        return strlen($value) > 1;
    }
);

$publications = $result;

//var_dump($publications);
$keys_p = array_keys($publications);

function print_goods($arr){
	foreach ($arr as &$value) {
		if($value!='' && $value!='--'){
			
			//echo "<span class='list' STYLE='background-color: ".$shade1."'>";
			echo "<span class='list'>";
			echo $value;
			echo "</span>";
			echo "<br>";
		}
		
	}
}

function key_search($key){
	
	$arr=array(
		"Perl"=>"S1",
		"Python"=>"S2",
		"C"=>"S3",
		"C++"=>"S4",
		"C#"=>"S5",
		"R"=>"S6",
		"Java"=>"S7",
		"Linux/Unix"=>"S8",
		"Matlab"=>"S9",
		"Groovy"=>"S10",
		"Gene Mapping"=>"S11",
		"Varient Calling"=>"S12",
		"Windows"=>"S13",
		"SQL"=>"S14",
		"Hadoop"=>"S15",
		"HTML"=>"S16",
		"PHP"=>"S17",
		"Ruby"=>"S18",
		"CSS"=>"S19",
		"Javascript"=>"S20",
		
		"Machine Learning"=>"M1",
		"Classification"=>"M2",
		"Regression"=>"M3",
		"Time to Event Modeling"=>"M4",
		"General"=>"M5",
		"Mixed/Fixed Effect Models"=>"M6",
		"Predictive Modeling"=>"M7",
		
		"Bioinformatics"=>"G1",
		"Industry"=>"G2",
		"NGS data"=>"G3",
		"DNAseq data"=>"G4",
		"RNAseq data"=>"G5",
		"Clinical Data"=>"G6",
		"Linkage Analysis"=>"G7",
		"Chip-Seq analysis"=>"G8",
		"Metagenomics"=>"G9",
		"Microbiome"=>"G10",
		"Micrarray data"=>"G11",
		"CRISPR"=>"G12",
		"16S"=>"G13",
		"ITS amplicon"=>"G14",
		"CLIA"=>"G15",
		"IVD"=>"G16",
		"Epigenetics"=>"G17",
		"qPCR"=>"G18",
		"HapMap"=>"G19",
		"dbSNP"=>"G20",
		"1000 genomes"=>"G21",
		"TCGA"=>"G22",
		"CGP"=>"G23",
		"DriverDB"=>"G24"
		//"MiSeq (or other ILMN)"=>"G25",
		//"HiSeq"=>"G26",
		//"Ion Torrent"=>"G27",
		//"Pac Bio"=>"G28",
		//"Affymetrix"=>"G29",
		//"Sanger"=>"G30"
		
	);
	
	return array_search($key,$arr);
}

function month($x){
	
	$arr=array(

		"01"=>"January",
		"02"=>"February",
		"03"=>"March",
		"04"=>"April",
		"05"=>"May",
		"06"=>"June",
		"07"=>"July",
		"08"=>"August",
		"09"=>"September",
		"10"=>"October",
		"11"=>"November",
		"12"=>"December"
		
	);
	return array_search($x,$arr);
}

function date_calculator($start){
	
	$str = $start;
	$str = explode(" ",$str);
	
	if (!isset($month)) {
		$month="January";    
		$year=$str[0];
	}
	else{
		$month=$str[0];
		$year=$str[1];
	}
	
	
	// if there is only year and no month, check if set
	
	$start = $year . "-" . month($month) . "-01";
	
	
	$begin=date_create($start);
	// GET LIVE DATE
	$today=date_create("2016-06-25");
	
	//echo $start;
	//echo " to ";
	//echo "2016-06-25";
	
	
	$diff=date_diff($begin,$today);
	
	$final = $diff->format("%R%a");
	//echo $diff->format("%R%a days");
	
	$final = substr($final, 1);
	$days=(int)$final;
	
	$year_count=$days/365;
	
	echo round($year_count, 1)." yrs";
	
	}


function print_goods_profile($arr){
	foreach ($arr as &$value) {
		if($value!='' && $value!='--'){
			
			echo "<span>";
			echo $value;
			echo "</span>";
			echo "<br>";
		}
		
	}
}
$max=0;
function max_size($genomics, $machine, $software, $publications){
	$genomics_size= sizeof($genomics);
	$machine_size= sizeof($machine);
	$software_size= sizeof($software);
	$publications_size= sizeof($publications);
	//echo "<br>";
	$numbers = array($genomics_size, $machine_size, $software_size, $publications_size);
	sort($numbers);

	$arrlength = count($numbers);
	for($x = 0; $x < $arrlength; $x++) {
		//echo $numbers[$x];
		//echo "<br>";
	}
	//echo "Largest number: ";
	$max=$numbers[3];
	return $max;
}

		echo "<h1>";
		if($hide_skills){
			echo "<i>Name Hidden</i>";
		}
		else{
			echo $profile['first_name']." ".$profile['last_name'];
		}
		
		echo "</h1>";

		echo "<h2>";
		echo $profile['profile_id'];
		echo "</h2>";
		
		echo $profile['city'];
		echo ", ";
		echo $profile['state'];
		echo " - ";
		echo $profile['country'];
		
		echo "<table align='center' width='100%' id='profile_table'><tr><td colspan='2'>";
		
		echo "<table width='100%'><tr><td align='center'  width='33%'>";
		
		//var_dump($profile);
		echo "<u>Technical Focus</u>";
		echo "<br>";
		echo "<table class='mini_grid'><tr><td>";
		echo $profile['P14'];
		echo "</td></tr></table>";
		
		echo "<br>";
		
		echo "<u>Work Type Desired</u>";
		echo "<br>";
		echo "<table class='mini_grid'><tr><td>";
		echo $profile['P1'];
		echo "</td></tr></table>";
		
		echo "<br>";
		
		echo "<u>Notes</u>";
		echo "<br>";
		echo "<table class='mini_grid'><tr><td>";
		echo $profile['notes'];
		echo "</td></tr></table>";
		
		
		echo "</td>";
		echo "<td width='33%'  align='center'>";
		echo "<div class='grid_entry'><div class='photo'><img src='".$profile['profile_pic']."'></div><div class='grid_content'></div></div>";
		echo "</td><td width='33%' align='center'>";
		
		//print_goods_profile($profile);
		echo "<u>Education</u><br>";
		// TODO!! SORT P2 TO P13
		//echo $profile['P2'];
		$str = $profile['P2'];
		$arr=explode(" ",$str);
		$arr=array_filter($arr);
		//var_dump($arr);
		echo "<table class='mini_grid'>";
		if(isset($arr[0])){
			echo "<tr bgcolor='#ccccff'><td colspan='2'>";
			echo $profile['P3'];
			echo "</td></tr>";
			echo "<tr><td>";
			echo $arr[0];
			echo "</td><td>";
			// bachelors study
			echo $profile['P4'];
			echo "</td></tr>";
		}
		
		if(isset($arr[1])){
			echo "<tr bgcolor='#ccccff'><td colspan='2'>";
			echo $profile['P5'];
			echo "</td></tr>";
			echo "<tr><td>";
			echo $arr[1];
			echo "</td><td>";
			// bachelors study
			echo $profile['P6'];
			echo "</td></tr>";
		}
		
		if(isset($arr[2])){
			echo "<tr bgcolor='#ccccff'><td colspan='2'>";
			echo $profile['P7'];
			echo "</td></tr>";
			echo "<tr><td>";
			echo $arr[2];
			echo "</td><td>";
			// bachelors study
			echo $profile['P8'];
			echo "</td></tr>";
		}
		
		if(isset($arr[3])){
			echo "<tr bgcolor='#ccccff'><td colspan='2'>";
			echo $profile['P9'];
			echo "</td></tr>";
			echo "<tr><td>";
			echo $arr[3];
			echo "</td><td>";
			// bachelors study
			echo $profile['P10'];
			echo "</td></tr>";
		}
		
		if(isset($arr[4])){
			echo "<tr bgcolor='#ccccff'><td colspan='2'>";
			echo $profile['P11'];
			echo "</td></tr>";
			echo "<tr><td>";
			echo $arr[4];
			echo "</td><td>";
			// bachelors study
			echo $profile['P12'];
			echo "</td></tr>";
		}
		
		if(isset($arr[5])){
			echo "<tr bgcolor='#ccccff'><td colspan='2'>";
			echo $profile['P13'];
			echo "</td></tr>";
			echo "<tr><td>";
			echo $arr[5];
			echo "</td><td>";
			// bachelors study
			//echo $profile['P14'];
			echo "</td></tr>";
		}
		
		echo "</table>";
		
		echo "</td></tr></table> </td></tr><tr><td colspan='3'>";
		
		$max=max_size($genomics, $machine, $software, $publications);
		//var_dump($genomics);
		echo "<table width='100%' id='full_listing'><tr><td id='genomics' width='100px'><b>GENOMICS</b>";
		echo "</td>
		
		<td id='software' width='100px'><b>SOFTWARE</b></td>
		<td id='machine' width='100px'><b>MACHINE LEARNING</b></td>
		<td id='publications' width='100px'><b>PUBLICATIONS</b></td>
		</tr>";
		
		
			for($x = 1; $x < $max; $x++) {
			
			echo "<tr>";
			
					
			if (isset($keys_g[$x]) && strlen($genomics[$keys_g[$x]])>1){
				echo "<td bgcolor='#F2DBD3'>";
				if($keys_g[$x]=="Platforms"){
					echo "<u>Platforms</u><br>";
					echo $genomics['Platforms'];
					
				}
				else{
					if($hide_skills){
						echo "<i>Hidden</i>";
					}
					else{
					echo key_search($keys_g[$x]);
					}
					echo ", ";
					//echo $genomics[$keys_g[$x]];
					echo " (";
					echo date_calculator($genomics[$keys_g[$x]]);
					echo ")";
				}

			}
			else{
				echo "<td bgcolor='#FFFFFF'>";
			}
			echo "</td>";
			

			if (isset($keys_s[$x]) && strlen($software[$keys_s[$x]])>1){
				echo "<td bgcolor='#DDF5D5'>";
				
				if($hide_skills){
					echo "<i>Hidden</i>";
				}
				else{
					echo key_search($keys_s[$x]);
				}
				
				
				echo ", ";
				//echo $software[$keys_s[$x]];
				echo " (";
				echo date_calculator($software[$keys_s[$x]]);
				echo ")";			
			}
			else{
				echo "<td bgcolor='#FFFFFF'>";
			}
			echo "</td>";
			

			if (isset($keys_m[$x]) && strlen($machine[$keys_m[$x]])>1){
				echo "<td bgcolor='#D5EDF5'>";
				if($hide_skills){
					echo "<i>Hidden</i>";
				}
				else{
					echo key_search($keys_m[$x]);
				}
				echo ", ";
				//echo $machine[$keys_m[$x]];
				echo " (";
				echo date_calculator($machine[$keys_m[$x]]);
				echo ")";
			}
			else{
				echo "<td bgcolor='#FFFFFF'>";
			}
			echo "</td>";
			

			if (isset($keys_p[$x]) && strlen($publications[$keys_p[$x]])>1){
				echo "<td bgcolor='#FCF5DB'>";
				echo $publications[$keys_p[$x]];    
			}
			else{
				echo "<td bgcolor='#FFFFFF'>";
			}
			echo "</td>";
			
			echo "</tr>";
		
		
			}
		
		echo "</table>";


?>

</div></div></div>		
		
		
</body>
</html>