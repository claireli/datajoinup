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
	.highlight{
		background-color: #6d8ca9;
		color: #FFFFFF;
	}
	</style>
	<script>
	
	function add_field_gen(){
		var gen = document.getElementById("genomics").value;
		alert(gen);
		plus(gen);
	}
	function add_field_software(){
		var soft = document.getElementById("software").value;
		alert(soft);
		plus(soft);
	}
	function add_field_machine(){
		var machine = document.getElementById("machine").value;
		alert(machine);
		plus(machine);
	}
	
	function plus(add){
		var div = document.getElementById('search_fields');
		if(add!=""){
		div.innerHTML = div.innerHTML + "<br><tr><td><span class='search_option'>" + add + "</span>&nbsp;"+"<select name='"+ add +"'>"+"<option value='volvo'>1 year experience</option>"+"<option value='volvo'>2 year experience</option>"+"<option value='volvo'>3 year experience</option>"+"<option value='volvo'>4 year experience</option>"+"<option value='volvo'>5 year experience</option>"+"<option value='volvo'>6 year experience</option>"+"<option value='volvo'>7 year experience</option>"+"<option value='volvo'>8 year experience</option>"+"<option value='volvo'>9 year experience</option>"+"<option value='volvo'>10 year experience</option>"+"</select>";
		}
	}
	
	function pull_down(){
		
	}
	</script>
   </head>

    <body>

	<?php include("includes/header.php");?>
	<?php include("includes/footer.html");?>
	<?php include("connect.php"); ?>

<div id="shell">
<div id="container">
		
<?php

$search_box= array();

function searchAllDB($search){
    global $conn;

    $out = "";

    $sql = "show tables";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($r = $result->fetch_array()){
            $table = $r[0];
            $out .= $table.";";
            $sql_search = "select * from ".$table." where ";
            $sql_search_fields = Array();
            $sql2 = "SHOW COLUMNS FROM ".$table;
            $result2 = $conn->query($sql2);
            if($result2->num_rows > 0){
                while($r2 = $result2->fetch_array()){
                    $colum = $r2[0];
					//echo $colum;
                    $sql_search_fields[] = $colum." like('%".$search."%')";
                }
				
                $result2->close();
            }
            $sql_search .= implode(" OR ", $sql_search_fields);
            //echo $sql_search;
			$result3 = $conn->query($sql_search);
            //$out .= $result3->num_rows."\n";
            
			if($result3->num_rows > 0){
				
				while($r3 = $result3->fetch_array()){
                    $colum = $r3[0];
					
					// MATCHING USERS
					//echo "<p>".$colum;
					array_push($GLOBALS['search_box'], $colum);

                    //$sql_search_fields[] = $colum." like('%".$search."%')";
                }
				
				//var_dump($result3);
                $result3->close();
            }
        }
        $result->close();
    }

    //return $out;
}



// CHECK GET URL
if(isset($_GET['type']) && !empty($_GET['type'])){
    //echo "App = ".$_GET['type'];
	// ADVANCED SEARCH
	echo "<form action='runsearch.php' method='post'>";
	echo "<h1>Advanced Search</h1><p>";
	echo "<br><table id='adv_search_container' align='center'><tr><td colspan='3'><div id='search_fields'>";
	
	echo "Start by selecting fields below that you are interested in.";
	
	echo "<p>Keyword (Optional): <input type='text'>";
	
	echo "</div></td></tr>";
	
	echo "<tr>";
	
	echo "<td>";
	echo "Genomics<p>";
	echo "<select name='genomics' id='genomics'>
	<option> </option>
	<option>Bioinformatics</option>
<option>Industry</option>
<option>NGS data</option>
<option>DNAseq data</option>
<option>RNAseq data</option>
<option>Clinical Data</option>
<option>Linkage Analysis</option>
<option>Chip-Seq analysis</option>
<option>Metagenomics</option>
<option>Microbiome</option>
<option>Micrarray data</option>
<option>CRISPR</option>
<option>16S</option>
<option>ITS amplicon</option>
<option>CLIA</option>
<option>IVD</option>
<option>Epigenetics</option>
<option>qPCR</option>
<option>HapMap</option>
<option>dbSNP</option>
<option>1000 genomes</option>
<option>TCGA</option>
<option>CGP</option>
<option>DriverDB</option>
<option>MiSeq (or other ILMN)</option>
<option>HiSeq</option>
<option>Ion Torrent</option>
<option>Pac Bio</option>
<option>Affymetrix</option>
<option>Sanger</option>
	</select>";
	echo "<br><button type='button' class='go' onclick='add_field_gen()'>Add Field</button>";
	echo "</td>";
	
	echo "<td>";
	echo "Software Skills<p>";
	echo "<select name='software' id='software'>
	<option> </option>
	<option>Perl</option>

	<option>Python</option>
<option>C</option>
<option>C++</option>
<option>C#</option>
<option>R</option>
<option>Java</option>
<option>Linux/Unix</option>
<option>Matlab</option>
<option>Groovy</option>
<option>Gene Mapping</option>
<option>Varient Calling</option>
<option>Windows</option>
<option>SQL</option>
<option>Hadoop</option>
<option>HTML</option>
<option>PHP</option>
<option>Ruby</option>
<option>CSS</option>
<option>JavaScript</option></select>";
echo "<br><button type='button' class='go' onclick='add_field_software()'>Add Field</button>";
	echo "</td>";
	
	echo "<td>";
	echo "Machine Learning<p>";
	echo "<select name='machine_learning' id='machine'>
	<option> </option>
<option>Machine Learning</option>	
<option>Classification</option>	
<option>Regression</option>	
<option>Time to Event Modeling</option>	
<option>General</option>
<option>Mixed/Fixed Effect Models</option>
<option>Predictive Modeling</option>
</select>";
echo "<br><button type='button' class=	'go' onclick='add_field_machine()'>Add Field</button>";
	echo "</td>";
	
	echo "</tr></table>";
	echo "<p>";
	
	echo "<input type='submit' class='go' value='Search'></form>";

	
} else {
    // DISPLAY SEARCH RESULTS
$pieces=explode(" ",$_GET['query']);

foreach ($pieces as &$value) {
	//echo $value;
	//echo "<p>";
    echo searchAllDB($value);
}
echo "<h1>Search Query: " . $_GET['query'] . "</h1>
<h2>Advanced Search Options</h2><p>";
	
$search_box = array_unique($search_box);
$size=sizeof($search_box);
echo "<h2>Your search returned ".$size." results.</h2><p>";

//var_dump($search_box);
echo "<table width='60%' align='center'>";
foreach ($search_box as $value) {
	
	$photo_url="";
	$location="";
	$sql="SELECT profile_pic, city, state, notes FROM dju_profile WHERE profile_id='".$value."'";
	
	$result = $conn->query($sql);
    //var_dump($result);
	 
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$photo_url=$row['profile_pic'];
			//$location=$row['city'].", ".$row['state'];
			$notes=$row['notes'];
		}
	}
	
    echo "<tr class='highlight'><td colspan='2'>";
	echo $value ."<br></td></tr><tr height='100px'>";
	echo "<td><div class='grid_entry' ><div class='photo'>";
	echo "<img src='";
	echo $photo_url;
	echo "'>";
	echo "</div></div>";
	echo"</td><td>".$notes."</td></tr>";
}
echo "</table>";

echo "</tr></table></div>";
}




$conn->close();
?>  
	


</div>


</div>		
<script>
var container_size = document.getElementById('container');
var nav_size = document.getElementById('nav');
var footer_size = document.getElementById('footer'); 
var margin = 100;
var total=container_size.clientHeight + nav_size.clientHeight + footer_size.clientHeight + margin;
console.log(total);
console.log(container_size.clientHeight);
//alert(myDiv.clientHeight);
document.getElementById('footer').style.top=total+"px";
</script>
</body>
</html>