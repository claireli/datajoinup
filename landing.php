<?php
include("check.php");
include("includes/header.php");
include("includes/footer.html");
include("connect.php"); ?>

<!DOCTYPE html>
<html>
<head> 
    <title>DJUp</title>
    <link rel="stylesheet" type="text/css" href="styles.css"/>
	<link rel="stylesheet" type="text/css" href="base.css">
	<link href='https://fonts.googleapis.com/css?family=Exo+2:400,400italic,500' rel='stylesheet' type='text/css'>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
	
	$(".grid_content2").hide();
	
    $(".grid_entry").hover(function(){
        // retrieve element of current mouseover
		//$("#div1").fadeToggle();
        //$("#div2").fadeToggle("slow");
        //alert(this.id);
		// unique id of the element from grid_content2
		//this.id  = entry_sdlfksdjf
		// we want to change it to content_sdflsdkf
		var fade_in = "#content_"+this.id;
		$(fade_in).fadeToggle(500);
    });
	$(".grid_entryb").hover(function(){
        // retrieve element of current mouseover
		//$("#div1").fadeToggle();
        //$("#div2").fadeToggle("slow");
        //alert(this.id);
		// unique id of the element from grid_content2
		//this.id  = entry_sdlfksdjf
		// we want to change it to content_sdflsdkf
		var fade_in = "#content_"+this.id;
		$(fade_in).fadeToggle(500);
    });
	
});
</script>
<style>
#highest_degree{
	font-size: 14px;
}

.tech_focus{
	font-size: 20px;
	font-family: 'Exo 2', san-serif;
}
</style>
</head>

<body>
<div id="shell">
<div id="container">
<h1>Recently Updated Profiles</h1>
<h2>Connecting big people, behind big data.</h2><p>
		
<?php
function get_degree($arr){
	if (empty($arr)) {
		// list is empty.
		$final="Bachelors";
	}
	else{
		$index=sizeof($arr);
		$final=$arr[$index-1];
	}
		
	return $final;
}

$begin=0;
$page=1;
$range=16;
if(isset($_GET['begin'])){
	//echo "You are on range ". $_GET['begin'];
	
	$begin=$_GET['begin'];
	
	// determine page
	if($begin!=0){
		if($begin==16){
			$page=2;
		}else{
			$page=$page % $range;
			$page=$page+1;
		}
	}
}

//echo "You are on page: ". $page;

$page_next=$page+1;
$page_previous=$page-1;



$sql = "SELECT * FROM dju_profile WHERE account_status='verified' LIMIT ".$begin.", ".$range."";
$result = $conn->query($sql);
$count = 0;
$color = 0;
//var_dump($result->num_rows);
$total_entries=$result->num_rows;

//COUNT ENTRIES
/*$sql_count = "SELECT COUNT(*) FROM dju_profile";
$result_count = $conn->query($sql_count);
$total_entries=0;
if ($result_count->num_rows > 0) {
    while($row = $result_count->fetch_assoc()) {
		//echo $row['COUNT(*)'];
		$total_entries=$row['COUNT(*)'];
	}
}*/


echo "<div id='grid' align='center'><table align='center'><tr>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<td>";
		
		$photo_url=$row['profile_pic'];
		
		if($row['profile_pic']==""){
			$photo_url="";
		}
		
		if($color%2==0){
			echo "<div class='grid_entry' id='".$row['profile_id']."'><div class='photo'><img src='".$photo_url."'></div><div class='grid_content'>";
		}
		else{
			echo "<div class='grid_entryb' id='".$row['profile_id']."'><div class='photo'><img src='".$photo_url."'></div><div class='grid_content'>";
		}
		// SHOULD SHOW P14A-P14J 
		//echo $row["profile_id"]."<p><i>".$row["PU1"]."</i><br><i>".$row["PU2"]."</i></div></td>";
		$user_id=substr($row["profile_id"], 0, 8);
		echo "<form action='member_profile.php' method='get'><input type='hidden' name='user_id' value='".$row["profile_id"]."' />";
		echo "<p><button class='barcode_title'>";
		
		$technical=$row['P14'];
		if(strlen($technical)==0){
			$technical=$row['notes'];
		}
		
		$arr = array_filter(explode(" ", $row['P2']));
		
		echo $user_id."<br><span id='highest_degree'>". get_degree($arr) ."</span></button></form></div><div class='grid_content2' id='content_".$row['profile_id']."'><p><span class='tech_focus'>".$technical."</span></div></div></td>";
		//var_dump(strlen($technical));
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

echo "</tr></table></div><p>";

	$count_next=$range;
	$count_previous=0;
if($page==1){
	$count_next=$range;
	$count_previous=0;
}
else{
	// 3* 16
	if((($page)*$range)<$total_entries){
		$count_next=($page)*$range;
	}
	
	// 1* 16
	if(($page-1)==1){
		$count_previous=($page-2)*$range;
	}else{
		$count_previous=($page-1)*$range;
	}
	
}

$url_next="landing.php?begin=".$count_next;
$url_previous="landing.php?begin=".$count_previous;

$conn->close();

?>
<input onClick="window.location.href='<?php echo $url_previous ?>'" type="submit" Value="<< Previous" class='pagination'>
<input type='submit' value='Page <?php echo $page ?>' class='pagination'>
<input onClick="window.location.href='<?php echo $url_next ?>'" type="submit" Value="Next >>" class='pagination'>



</div>


</div>		
<script>
//var container_size = document.getElementById('container');
var shell_size = document.getElementById('shell');
var grid_size = document.getElementById('grid');
var nav_size = document.getElementById('nav');
var footer_size = document.getElementById('footer'); 
var margin = 150;
var total=grid_size.clientHeight + nav_size.clientHeight + footer_size.clientHeight + margin;
console.log(total);
console.log(grid_size.clientHeight);
//alert(myDiv.clientHeight);
document.getElementById('footer').style.top=total+"px";
</script>
</body>
</html>