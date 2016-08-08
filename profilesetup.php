<!DOCTYPE html>
<html>
    
    <head> 
        <title>DJUp</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
		<link rel="stylesheet" type="text/css" href="base.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<style>
		#submit{
			padding: 6px;
			width: 90px;
			background-color: #FFFFFF;
			border: 1px solid;
			color: #4a79af;
		}
		</style>
<script>
$(document).ready(function(){
	$(".tab").hide();
	$("#personal_info").show();
	var time=500;
	
	function button_next(next_tab){
		console.log("NEXT: " + next_tab);
		$('#next').addClass(next_tab);
	}
	
    $(".personal_link").click(function(){
        $(".tab").fadeOut(time);
		$("#personal_info").fadeIn(time);
		button_next("gtitle_link");
    });
	
	$(".gtitle_link").click(function(){
        $(".tab").fadeOut(time);
		$("#gtitle").fadeIn(time);
		console.log("butt");
    });
	
	$(".stitle_link").click(function(){
        $(".tab").fadeOut(time);
		$("#stitle").fadeIn(time);
    });
	
	$(".mtitle_link").click(function(){
        $(".tab").fadeOut(time);
		$("#mtitle").fadeIn(time);
	});
	
	$(".putitle_link").click(function(){
        $(".tab").fadeOut(time);
		$("#putitle").fadeIn(time);
    });
	
});
</script>
<style>
#form_shell{
	width: 100%;
	background-color: #FFFFFF;
}

.tab{
	min-height: 400px;
	max-height: 400px;
	padding: 20px;
}

#personal_info{
	background-color: #FCF5DB;
}

#stitle{
	background-color: #DDF5D5;
}

#mtitle{
	background-color: #D5EDF5;
}

#gtitle{
	background-color: #F2DBD3;
}

#putitle{
	background-color: #FCF5DB;
}

.inner_form{
	padding: 10px;
}
</style>
   </head>

	<body>
	<?php 
		include("connect.php");
		include("includes/header.php");
		include("includes/footer.html");
		
		$arr=array();
		
		function print_year_range($start, $end, $input_option, $key_arr){
			$date_value=explode(" ",$key_arr[$input_option]);
			echo "<option>".$date_value[1]."</option>";
			
			for($x=$start; $x<$end; $x++){
				echo "<option>".$x."</option>";
			}
		}
		
		function print_months($input_option, $key_arr){
			
			//echo "<option>".$input_option."</option>";
			//echo "Find it inside of ";
			//var_dump($key_arr);
			
			$date_value=explode(" ",$key_arr[$input_option]);
			
			echo "<option>".$date_value[0]."</option>";
			echo "<option>January</option>       
			<option>February</option>       
			<option>March</option>       
			<option>April</option>       
			<option>May</option>       
			<option>June</option>       
			<option>July</option>       
			<option>August</option>       
			<option>September</option>       
			<option>October</option>       
			<option>November</option>       
			<option>December</option>";
		}
		
		$start=1987;
		// change to auto update to current year + 2
		$end=2018;
	
	?>
	<div id="container">
	<h1>Data JoinUp Profile Registration</h1> 
    <h2>Personal Information</h2><p>
	
	<table id="form_shell"><tr>
	<td width="20%" bgcolor="#FCF5DB"><span class="personal_link">Personal Information</span></td>
	<td width="20%" bgcolor="#F2DBD3"><span class="gtitle_link">Genomics</span></td>
	<td width="20%" bgcolor="#DDF5D5"><span class="stitle_link">Software</span></td>
	<td width="20%" bgcolor="#D5EDF5"><span class="mtitle_link">Machine Learning</span></td>
	<td width="20%" bgcolor="#FCF5DB"><span class="putitle_link">Publication History</span></td>
	</tr>
	<tr><td colspan='5'>
	<div class="form"><form action="submit_form.php" method="post">
	<div id="personal_info" class='tab'>
	
	<table align="center" class="inner-form">
	<div id='personal_info' class='tab'>
	<table>
	<tr>
	<td>
	<table><tr>
	<?php 
	//var_dump($_SESSION);
	//echo $_SESSION['user_first_last'];
	$str = $_SESSION['user_first_last'];
	$arr =  explode(" ", $str);
	$profile_id=$_SESSION['profile_id'];
	$sql = "SELECT * FROM dju_profile WHERE profile_id='".$profile_id."'";
	$result = $conn->query($sql);
	$profile = array();
	$profile=query_populate($result);
	
	$sql2 = "SELECT * FROM dju_gtitle WHERE profile_id='".$profile_id."'";
	$result2 = $conn->query($sql2);
	$genomics = array();
	$genomics=query_populate($result2);
	
	//var_dump($profile);
	
	?>
	
	<td>First name</td><td> 
	<input type="text" name="firstname" value="<?php echo $arr[0]; ?>"></td></tr><tr><td>
  	Last name</td><td> 
	<input type="text" name="lastname" value="<?php echo $arr[1]; ?>"></td></tr><tr><td>
  	Phone</td><td> 
	<input type="text" name="phone" value="<?php echo $profile['phone']; ?>"></td></tr><tr><td>
	City</td><td>
	<input type="text" name="city" value="<?php echo $profile['city']; ?>"></td></tr><tr><td>
	State </td><td>
	<select name="state">
	
	<option value="AL">AL</option>
	<option value="AK">AK</option>
	<option value="AZ">AZ</option>
	<option value="AR">AR</option>
	<option value="CA">CA</option>
	<option value="CO">CO</option>
	<option value="CT">CT</option>
	<option value="DE">DE</option>
	<option value="DC">DC</option>
	<option value="FL">FL</option>	
	<option value="GA">GA</option>
	<option value="HI">HI</option>
	<option value="ID">ID</option>
	<option value="IL">IL</option>
	<option value="IN">IN</option>
	<option value="IA">IA</option>
	<option value="KS">KS</option>
	<option value="KY">KY</option>
	<option value="LA">LA</option>
	<option value="ME">ME</option>
	<option value="MD">MD</option>
	<option value="MA">MA</option>
	<option value="MI">MI</option>
	<option value="MN">MN</option>
	<option value="MS">MS</option>
	<option value="MO">MO</option>
	<option value="MT">MT</option>
	<option value="NE">NE</option>
	<option value="NV">NV</option>
	<option value="NH">NH</option>
	<option value="NJ">NJ</option>
	<option value="NM">NM</option>
	<option value="NY">NY</option>
	<option value="NC">NC</option>
	<option value="ND">ND</option>
	<option value="OH">OH</option>
	<option value="OK">OK</option>
	<option value="OR">OR</option>
	<option value="PA">PA</option>
	<option value="RI">RI</option>
	<option value="SC">SC</option>
	<option value="SD">SD</option>
	<option value="TN">TN</option>
	<option value="TX">TX</option>
	<option value="UT">UT</option>
	<option value="VT">VT</option>
	<option value="VA">VA</option>
	<option value="WA">WA</option>
	<option value="WV">WV</option>
	<option value="WI">WI</option>
	<option value="WY">WY</option>
	</select>
	</td></tr><tr><td>
		
	Country</td><td>
	<input type="text" name="country" value="<?php echo $profile['country']; ?>"></td></tr><tr>
	<td>Rel
	</td><td>
	<select name="rel">
  	<option value="No">No</option>
  	<option value="Yes">Yes</option>
  	</select>
	</td></tr><tr>
	<td>

			<?php //echo $profile['P1']; 
		
		// Build default checkbox array, all empty
		$p1_arr = array(
			"Freelance" => 0,
			"Full-time/Direct hire" => 0
		);
		
		// Loop through and grab user's saved values
		$p1_saved = array_filter(explode("<br>", $profile['P1']));
		//$p2_saved = array_map('trim', $p2_saved);
		//var_dump($p2_saved);
	
		// Check for which of user's keys exist
		foreach($p1_saved as $current){
			if(array_key_exists($current, $p1_arr)){
				$p1_arr[$current]=1;
			}
		}
		//var_dump($p1_arr);
		// Display saved check results!
		
		echo "Work Type Desired<br>";
		foreach($p1_arr as $current_k => $current_v){
			//echo $current_k . " => " . $current_v;
			echo "<input type='checkbox' name='chk_group1[]' ";
			echo " value='".$current_k."' ";
			
			if($current_v==1){
				echo "checked";
			}
			
			echo "/>";
			echo $current_k;
			echo "<br />";
		}
		
	
	?>

	</td><td>
	

		<?php echo $profile['P2']; 
		
		// Build default checkbox array, all empty
		$p2_arr = array(
			"Bachelors" => 0,
			"Masters" => 0,
			"PhD" => 0,
			"2ndPhD" => 0,
			"MD" => 0,
			"MBA" => 0
		);
		
		// Loop through and grab user's saved values
		$p2_saved = array_filter(explode("<br>", $profile['P2']));
		$p2_saved = array_map('trim', $p2_saved);
		//var_dump($p2_saved);
	
		// Check for which of user's keys exist
		foreach($p2_saved as $current){
			if(array_key_exists($current, $p2_arr)){
				$p2_arr[$current]=1;
			}
		}
		
		// Display saved check results!
		
		echo "My Degrees<br>";
		foreach($p2_arr as $current_k => $current_v){
			//echo $current_k . " => " . $current_v;
			echo "<input type='checkbox' name='chk_group2[]' ";
			echo " value='".$current_k."' ";
			
			if($current_v==1){
				echo "checked";
			}
			
			echo "/>";
			echo $current_k;
			echo "<br />";
		}
		
	
	?>
	<!--	My Degrees<br>
	<input type="checkbox" name="chk_group2[]" value="Bachelors" />Bachelors<br />
	<input type="checkbox" name="chk_group2[]" value="Masters" />Masters<br />
	<input type="checkbox" name="chk_group2[]" value="PhD" />PhD<br />
	<input type="checkbox" name="chk_group2[]" value="2ndPhD" />2nd PhD<br />
	<input type="checkbox" name="chk_group2[]" value="MD" />MD<br />
	<input type="checkbox" name="chk_group2[]" value="MBA" />MBA<br />
		-->
	</td></tr></table>
	</td><td>
		<!-- new table.... omg -->
		<table><tr><td>

	Undergrad Inst</td><td>
	<input type="text" name="p3" value="<?php echo $profile['P3']; ?>"></td></tr><tr><td>
	Undergrad Name of Degree</td><td> 
	<input type="text" name="p4" value="<?php echo $profile['P4']; ?>"></td></tr><tr><td>
	Masters Graduate Inst</td><td>
	<input type="text" name="p5" value="<?php echo $profile['P5']; ?>"></td></tr><tr><td>
	Masters Graduate Name of Degree</td><td>
	<input type="text" name="p6" value="<?php echo $profile['P6']; ?>"></td></tr><tr><td>
	PhD Graduate Institution</td><td>
	<input type="text" name="p7" value="<?php echo $profile['P7']; ?>"></td></tr><tr><td>
	PhD Graduate Name of Degree</td><td>
	<input type="text" name="p8" value="<?php echo $profile['P8']; ?>"></td></tr><tr><td>
	2nd PhD Graduate Institution</td><td>
	<input type="text" name="p9" value="<?php echo $profile['P9']; ?>"></td></tr><tr><td>
	2nd PhD Graduate Name of Degree</td><td>
	<input type="text" name="p10" value="<?php echo $profile['P10']; ?>"></td></tr><tr><td>
	MD Institution</td><td> 
	<input type="text" name="p11" value="<?php echo $profile['P11']; ?>"></td></tr><tr><td>
	MD Name of Degree</td><td> 
	<input type="text" name="p12" value="<?php echo $profile['P12']; ?>"></td></tr><tr><td>
	MBA Institution</td><td>
	<input type="text" name="p13" value="<?php echo $profile['P13']; ?>"></td></tr><tr><td>
	</td>
	</tr></table>
	
	</td><td>
	<!-- another table... -->
		<table><tr><td>
	Vi
	<select name="vi">
  	<option value="U">None (U)</option>
  	<option value="G">Green Card</option>
  	<option value="HN">H1B Non-Profit</option>
  	<option value="HP">H1B For-Profit</option>
	<option value="OP">OPT</option>
	<option value="Other">Other</option>
	</select>
	<br>
	<!-- P14, P14A-J -->
	
	<?php echo $profile['P14']; 
		
		// Build default checkbox array, all empty
		$p14_arr = array(
			"Bioinformatics" => 0,
			"Machine Learning" => 0,
			"Research/Annotation" => 0,
			"Software Engineering" => 0,
			"Genomics" => 0,
			"Oncology" => 0,
			"NIPT" => 0,
			"CRISPR" => 0,
			"Biostatistics" => 0,
			"Cloud Computing" => 0
		);
		
		// Loop through and grab user's saved values
		$p14_saved = array_filter(explode("<br>", $profile['P14']));
		//var_dump($p14_saved);
	
		// Check for which of user's keys exist
		foreach($p14_saved as $current){
			if(array_key_exists($current, $p14_arr)){
				$p14_arr[$current]=1;
			}
		}
		
		// Display saved check results!
		
		echo "Technical Focus<br>";
		foreach($p14_arr as $current_k => $current_v){
			//echo $current_k . " => " . $current_v;
			echo "<input type='checkbox' name='chk_group3[]' ";
			echo " value='".$current_k."' ";
			
			if($current_v==1){
				echo "checked";
			}
			
			echo "/>";
			echo $current_k;
			echo "<br />";
		}
		
	
	?>
	
	Notes<br>	
	<textarea style=resize:none; cols=40 name="notes"><?php echo $profile['notes']; ?>
	</textarea>
	</td>
	</tr>
	</table> </div>
	</td>
	</tr></table>
	</div>
	</table>

<!-- SOFTWARE -->

<?php
	$sql_software = "SELECT * FROM dju_stitle WHERE profile_id='".$profile_id."'";
	$result_software = $conn->query($sql_software);
	$arr_software = array();
	
	if ($result_software->num_rows > 0) {
		while($row = $result_software->fetch_assoc()) {
				//var_dump($row);
				//echo count($row);
				
				foreach ($row as $k => $v) {
					$arr_software[$k] = $v;
				}
		}
	}
	
	//$machine = array();
	//$machine=query_populate($result);
	
	//var_dump($arr_software);
	
	//echo array_search("M1", $arr_machine);
?>	
	
	
<div id="stitle" class="tab">
<table align="center"><tr><td>
<table><tr><td>
Perl</td><td>
  	<select name="s1">
    
<?php print_months("S1", $arr_software); ?>       
    </select>  
  	<select name="s1b">
	
<?php print_year_range($start, $end, "S1", $arr_software); ?>

	</select> </br>
</td></tr><tr><td>
Python</td><td>
  	<select name="s2"> 
    
<?php print_months("S2", $arr_software); ?>       
    </select>  
  	<select name="s2b">
	
<?php print_year_range($start, $end, "S2", $arr_software); ?>
	</select> </br>
</td></tr><tr><td>
C</td><td>
  	<select name="s3"> 
    
<?php print_months("S3", $arr_software); ?>       
    </select>  
  	<select name="s3b">
	
<?php print_year_range($start, $end, "S3", $arr_software); ?>
	</select> </br>

</td></tr><tr><td>
C++</td><td>
  	<select name="s4"> 
    
<?php print_months("S4", $arr_software); ?>       
    </select>  
  	<select name="s4b">
	
<?php print_year_range($start, $end, "S4", $arr_software); ?>
	</select> </br>
</td></tr><tr><td>
C#</td><td>
  	<select id="month_start" name="s5"> 
    
<?php print_months("S5", $arr_software); ?>       
    </select>  
  	<select id="year_start" name="s5b">
	
<?php print_year_range($start, $end, "S5", $arr_software); ?>
	</select> </br>
</td></tr><tr><td>
R</td><td>
  	<select id="month_start" name="s6"> 
    
<?php print_months("S6", $arr_software); ?>       
    </select>  
  	<select id="year_start" name="s6b">
	
<?php print_year_range($start, $end, "S6", $arr_software); ?>
	</select> </br>
</td></tr><tr><td>
Java</td><td>
  	<select id="month_start" name="s7"> 
    
<?php print_months("S7", $arr_software); ?>       
    </select>  
  	<select id="year_start" name="s7b">
	
<?php print_year_range($start, $end, "S7", $arr_software); ?>
	</select> </br>
</td></tr><tr><td>
Linux/ Unix</td><td>
  	<select id="month_start" name="s8"> 
    
<?php print_months("S8", $arr_software); ?>       
    </select>  
  	<select id="year_start" name="s8b">
	
<?php print_year_range($start, $end, "S8", $arr_software); ?>
	</select> </br>
</td></tr><tr><td>
Matlab</td><td>
  	<select id="month_start" name="s9"> 
    
<?php print_months("S9", $arr_software); ?>       
    </select>  
  	<select id="year_start" name="s9b">
	
<?php print_year_range($start, $end, "S9", $arr_software); ?>
	</select> </br>
</td></tr><tr><td>
Groovy</td><td>
  	<select id="month_start" name="s10"> 
    
<?php print_months("S10", $arr_software); ?>       
    </select>   
  	<select id="year_start" name="s10b">
	
<?php print_year_range($start, $end, "S10", $arr_software); ?>
	</select> </br>

</td></tr><tr><td>
Gene Mapping</td><td>
  	<select id="month_start" name="s11"> 
    
<?php print_months("S11", $arr_software); ?>       
    </select>  
  	<select id="year_start" name="s11b">
	
<?php print_year_range($start, $end, "S11", $arr_software); ?>
	</select> </br>
</td></tr><tr><td>
Varient Calling</td><td>
  	<select id="month_start" name="s12"> 
    
<?php print_months("S12", $arr_software); ?>       
    </select> 
  	<select id="year_start" name="s12b">
	
<?php print_year_range($start, $end, "S12", $arr_software); ?>
	</select> </br>

</td></tr><tr><td>
Windows</td><td>
  	<select id="month_start" name="s13"> 
    
<?php print_months("S13", $arr_software); ?>       
    </select>   
  	<select id="year_start" name="s13b">
	
<?php print_year_range($start, $end, "S13", $arr_software); ?>
	</select> </br>
</td></tr><tr><td>
SQL</td><td>
  	<select id="month_start" 
          name="s14"> 
    
<?php print_months("S14", $arr_software); ?>       
    </select>   
  	<select id="year_start" 
name="s14b">
	
<?php print_year_range($start, $end, "S14", $arr_software); ?>
	</select> </br>
</td></tr><tr><td>
Hadoop</td><td>
  	<select id="month_start" 
          name="s15"> 
    
<?php print_months("S15", $arr_software); ?>       
    </select>  
  	 
  	<select id="year_start" 
name="s15b">
	
<?php print_year_range($start, $end, "S15", $arr_software); ?>
	</select> </br>
</td></tr></table>

</td><td>

<table><tr><td>
HTML</td><td>
  	<select id="month_start" 
          name="s16"> 
    
<?php print_months("S16", $arr_software); ?>       
    </select>  
  	 
  	<select id="year_start" 
name="s16b">
	
<?php print_year_range($start, $end, "S16", $arr_software); ?>
	</select> </br>
</td></tr><tr><td>
PHP</td><td>
  	<select id="month_start" 
          name="s17"> 
    
<?php print_months("S17", $arr_software); ?>       
    </select>  
  	 
  	<select id="year_start" 
name="s17b">
	
<?php print_year_range($start, $end, "S17", $arr_software); ?>
	</select> </br>
</td></tr><tr><td>
Ruby</td><td>
  	<select id="month_start" 
          name="s18"> 
    
<?php print_months("S18", $arr_software); ?>       
    </select>  
  	 
  	<select id="year_start" 
name="s18b">
	
<?php print_year_range($start, $end, "S18", $arr_software); ?>
	</select> </br>
</td></tr><tr><td>
CSS</td><td>
  	<select id="month_start" name="s19"> 
    
<?php print_months("S19", $arr_software); ?>       
    </select>  
  	 
  	<select id="year_start" name="s19b">
	
<?php print_year_range($start, $end, "S19", $arr_software); ?>
	</select> </br>

</td></tr><tr><td>
Javascript</td><td>
  	<select id="month_start" name="s20"> 
    
<?php print_months("S20", $arr_software); ?>       
    </select>  	 
  	<select id="year_start" name="s20b">
	
<?php print_year_range($start, $end, "S20", $arr_software); ?>
	</select> </br>
</td></tr></table>
</td></tr></table>
</div>


<!-- 
////////////////////////////////////
		GENOMICS 
////////////////////////////////////
-->


<?php
	$sql_genomics = "SELECT * FROM dju_gtitle WHERE profile_id='".$profile_id."'";
	$result_genomics = $conn->query($sql_genomics);
	$arr_genomics = array();
	
	if ($result_genomics->num_rows > 0) {
		while($row = $result_genomics->fetch_assoc()) {
				//var_dump($row);
				//echo count($row);
				
				foreach ($row as $k => $v) {
					$arr_genomics[$k] = $v;
				}
		}
	}
	
	//$machine = array();
	//$machine=query_populate($result);
	
	//var_dump($arr_genomics);
	
	//echo array_search("M1", $arr_machine);
?>

<div id="gtitle" class="tab">
<table align="center"><tr><td>	

<table><tr><td>
Bioinformatics</td><td>
  	<select name="g1">
    
<?php print_months("G1", $arr_genomics); ?>       
    </select>  
  	<select name="g1b">
	
<?php print_year_range($start, $end, "G1", $arr_genomics); ?>
	</select> </br>
</td></tr><tr><td>
Industry</td><td>
  	<select name="g2"> 
    
<?php print_months("G2", $arr_genomics); ?>       
    </select>  
  	<select name="g2b">
	
<?php print_year_range($start, $end, "G2", $arr_genomics); ?>
	</select> </br>
</td></tr><tr><td>
NGS data</td><td>
  	<select name="g3"> 
    
<?php print_months("G3", $arr_genomics); ?>       
    </select>  
  	<select name="g3b">
	
<?php print_year_range($start, $end, "G3", $arr_genomics); ?>
	</select> </br>
</td></tr><tr><td>
DNAseq data</td><td>
  	<select name="g4"> 
    
<?php print_months("G4", $arr_genomics); ?>       
    </select>  
  	<select name="g4b">
	
<?php print_year_range($start, $end, "G4", $arr_genomics); ?>
	</select> </br>
</td></tr><tr><td>
RNAseq data</td><td>
  	<select id="month_start" name="g5"> 
    
<?php print_months("G5", $arr_genomics); ?>       
    </select>  
  	<select id="year_start" name="g5b">
	
<?php print_year_range($start, $end, "G5", $arr_genomics); ?>
	</select> </br>
</td></tr><tr><td>
Clinical Data</td><td>
  	<select id="month_start" name="g6"> 
    
<?php print_months("G6", $arr_genomics); ?>       
    </select>  
  	<select id="year_start" name="g6b">
	
<?php print_year_range($start, $end, "G6", $arr_genomics); ?>
	</select> </br>
</td></tr><tr><td>
Linkage Analysis</td><td>
  	<select id="month_start" name="g7"> 
    
<?php print_months("G7", $arr_genomics); ?>       
    </select>  
  	<select id="year_start" name="g7b">
	
<?php print_year_range($start, $end, "G7", $arr_genomics); ?>
	</select> </br>
</td></tr><tr><td>
Chip-Seq analysis
</td><td>
  	<select id="month_start" name="g8"> 
    
<?php print_months("G8", $arr_genomics); ?>       
    </select>  
  	<select id="year_start" name="g8b">
	
<?php print_year_range($start, $end, "G8", $arr_genomics); ?>
	</select> </br>
</td></tr><tr><td>
Metagenomics</td><td>
  	<select id="month_start" name="g9"> 
    
<?php print_months("G9", $arr_genomics); ?>       
    </select>  
  	<select id="year_start" name="g9b">
	
<?php print_year_range($start, $end, "G9", $arr_genomics); ?>
	</select> </br>
</td></tr><tr><td>
Microbiome</td><td>
  	<select id="month_start" name="g10"> 
    
<?php print_months("G10", $arr_genomics); ?>       
    </select>   
  	<select id="year_start" name="g10b">
	
<?php print_year_range($start, $end, "G10", $arr_genomics); ?>
	</select> </br>
</td></tr><tr><td>
Microarray data</td><td>
  	<select id="month_start" name="g11"> 
    
<?php print_months("G11", $arr_genomics); ?>       
    </select>  
  	<select id="year_start" name="g11b">
	
<?php print_year_range($start, $end, "G11", $arr_genomics); ?>
	</select> </br>
</td></tr><tr><td>
CRISPR</td><td>
  	<select id="month_start" name="g12"> 
    
<?php print_months("G12", $arr_genomics); ?>       
    </select> 
  	<select id="year_start" name="g12b">
	
<?php print_year_range($start, $end, "G12", $arr_genomics); ?>
	</select> </br>
</td></tr><tr><td>
16S</td><td>
  	<select id="month_start" name="g13"> 
    
<?php print_months("G13", $arr_genomics); ?>       
    </select>   
  	<select id="year_start" name="g13b">
	
<?php print_year_range($start, $end, "G13", $arr_genomics); ?>
	</select> </br>
</td></tr><tr><td>
ITS amplicon</td><td>
  	<select id="month_start" 
          name="g14"> 
    
<?php print_months("G14", $arr_genomics); ?>       
    </select>   
  	<select id="year_start" 
name="g14b">
	
<?php print_year_range($start, $end, "G14", $arr_genomics); ?>
	</select> </br>
</td></tr><tr><td>
CLIA</td><td>
  	<select id="month_start" 
          name="g15"> 
    
<?php print_months("G15", $arr_genomics); ?>     
    </select>  
  	 
  	<select id="year_start" 
name="g15b">
	
<?php print_year_range($start, $end, "G15", $arr_genomics); ?>
	</select> </br>

</td></tr></table>

</td><td>

<table><tr><td>
IVD</td><td>
  	<select id="month_start" 
          name="g16"> 
    
<?php print_months("G16", $arr_genomics); ?>     
    </select>  
  	 
  	<select id="year_start" 
name="g16b">
	
<?php print_year_range($start, $end, "G16", $arr_genomics); ?>
	</select> </br>
</td></tr><tr><td>
Epigenetics</td><td>
  	<select id="month_start" name="g17"> 
    
<?php print_months("G17", $arr_genomics); ?>       
    </select>  
  	 
  	<select id="year_start" name="g17b">
	
<?php print_year_range($start, $end, "G17", $arr_genomics); ?>
	</select> </br>
</td></tr><tr><td>
qPCR
</td><td>
  	<select id="month_start" 
          name="g18"> 
    
<?php print_months("G18", $arr_genomics); ?>       
    </select>  
  	 
  	<select id="year_start" 
name="g18b">
	
<?php print_year_range($start, $end, "G18", $arr_genomics); ?>
	</select> </br>
	
</td></tr><tr><td>
HapMap
</td><td>
  	<select id="month_start" 
          name="g19"> 
    
<?php print_months("G19", $arr_genomics); ?>       
    </select>  
  	 
  	<select id="year_start" 
name="g19b">
	
<?php print_year_range($start, $end, "G19", $arr_genomics); ?>
	</select> </br>

</td></tr><tr><td>
dbSNP
</td><td>
  	<select id="month_start" name="g20"> 
    
<?php print_months("G20", $arr_genomics); ?>       
    </select>  
  	 
  	<select id="year_start" name="g20b">
	
<?php print_year_range($start, $end, "G20", $arr_genomics); ?>
	</select> </br>

</td></tr><tr><td>
1000 genomes
</td><td>
  	<select id="month_start" 
          name="g21"> 
    
<?php print_months("G21", $arr_genomics); ?>       
    </select>  
  	 
  	<select id="year_start" 
name="g21b">
	
<?php print_year_range($start, $end, "G21", $arr_genomics); ?>
	</select> </br>
</td></tr><tr><td>
TCGA
</td><td>
  	<select id="month_start" 
          name="g22"> 
    
<?php print_months("G22", $arr_genomics); ?>       
    </select>  
  	 
  	<select id="year_start" 
name="g22b">
	
<?php print_year_range($start, $end, "G22", $arr_genomics); ?>
	</select> </br>

</td></tr><tr><td>	
CGP
</td><td>
  	<select id="month_start" name="g23"> 
    
<?php print_months("G23",$arr_genomics); ?>       
    </select>  
  	 
  	<select id="year_start" name="g23b">
	
<?php print_year_range($start, $end, "G23", $arr_genomics); ?>
	</select> </br>
</td></tr><tr><td>
DriverDB
</td><td>
  	<select id="month_start" name="g24"> 
    
<?php print_months("G24",$arr_genomics); ?>       
    </select>  
  	 
  	<select id="year_start" name="g24b">
	

<?php print_year_range($start, $end, "G24", $arr_genomics); ?>
	</select> </br>
</td></tr><tr><td colspan='2'>
	
	
			<?php //echo $genomics['Platforms']; 
		
		// Build default checkbox array, all empty
		$platform_arr = array(
			"MiSeq" => 0,
			"HiSeq" => 0,
			"Ion Torrent" => 0,
			"Pac Bio" => 0,
			"Affymetrix" => 0,
			"Sanger" => 0
		);
		
		// Loop through and grab user's saved values
		$platform_saved = array_filter(explode("<br>", $genomics['Platforms']));
		$platform_saved = array_map('trim', $platform_saved);
		//var_dump($p2_saved);
	
		// Check for which of user's keys exist
		foreach($platform_saved as $current){
			if(array_key_exists($current, $platform_arr)){
				$platform_arr[$current]=1;
			}
		}
		
		// Display saved check results!
		
		echo "Platforms<br>";
		foreach($platform_arr as $current_k => $current_v){
			//echo $current_k . " => " . $current_v;
			echo "<input type='checkbox' name='chk_group4[]' ";
			echo " value='".$current_k."' ";
			
			if($current_v==1){
				echo "checked";
			}
			
			echo "/>";
			echo $current_k;
			echo "<br />";
		}
		
	
	?>
	<!--
	<input type="checkbox" name="chk_group4[]" value="MiSeq" />MiSeq (or other ILMN)<br />
	<input type="checkbox" name="chk_group4[]" value="HiSeq" />HiSeq<br />
	<input type="checkbox" name="chk_group4[]" value="Ion Torrent" />Ion Torrent<br />
	<input type="checkbox" name="chk_group4[]" value="Pac Bio" />Pac Bio<br />
	<input type="checkbox" name="chk_group4[]" value="Affymetrix" />Affymetrix<br />
	<input type="checkbox" name="chk_group4[]" value="Sanger" />Sanger<br />-->
</td></tr>

</td></tr></table>
	
	</td></tr></table>
	</div>

<!-- Mtitle -->
<?php
	$sql_machine = "SELECT * FROM dju_mtitle WHERE profile_id='".$profile_id."'";
	$result_machine = $conn->query($sql_machine);
	$arr_machine = array();
	
	if ($result_machine->num_rows > 0) {
		while($row = $result_machine->fetch_assoc()) {
				//var_dump($row);
				//echo count($row);
				
				foreach ($row as $k => $v) {
					$arr_machine[$k] = $v;
				}
		}
	}
	
	//$machine = array();
	//$machine=query_populate($result);
	
	//var_dump($arr_machine);
	
	//echo array_search("M1", $arr_machine);
?>

<div id="mtitle" class="tab">
<table align="center"><tr><td>
Machine Learning</td><td>	
  	<select name="m1">
    
<?php print_months("M1", $arr_machine); ?>       
    </select>  
	

  	<select name="m1b">
	
	
	<?php 
	print_year_range($start, $end, "M1", $arr_machine); ?>

	</select> </br>
</td></tr><tr><td>
Classification</td><td>	 
  	<select name="m2"> 
    
<?php print_months("M2", $arr_machine); ?>       
    </select>  
  	<select name="m2b">
	
<?php print_year_range($start, $end, "M2", $arr_machine); ?>
	</select> </br>
</td></tr><tr><td>
Regression</td><td>	
  	<select name="m3"> 
    
<?php print_months("M3", $arr_machine); ?>       
    </select>  
  	<select name="m3b">
	
<?php print_year_range($start, $end, "M3", $arr_machine); ?>
	</select> </br>

</td></tr><tr><td>
Time to Event Modeling</td><td>	
  	<select name="m4"> 
    
<?php print_months("M4", $arr_machine); ?>       
    </select>  
  	<select name="m4b">
	
<?php print_year_range($start, $end, "M4", $arr_machine); ?>
	</select> </br>
</td></tr><tr><td>
General</td><td>	
  	<select id="month_start" name="m5"> 
    
<?php print_months("M5", $arr_machine); ?>       
    </select>  
  	<select id="year_start" name="m5b">
	
<?php print_year_range($start, $end, "M5", $arr_machine); ?>
	</select> </br>
</td></tr><tr><td>
Mixed/Fixed Effect Models</td><td>
  	<select id="month_start" name="m6"> 
    
<?php print_months("M6", $arr_machine); ?>       
    </select>  
  	<select id="year_start" name="m6b">
	
<?php print_year_range($start, $end, "M6", $arr_machine); ?>
	</select> </br>
</td></tr><tr><td>
	
Predictive Modeling</td><td>	
  	<select id="month_start" name="m7"> 
    
<?php print_months("M7", $arr_machine); ?>       
    </select>  
  	<select id="year_start" name="m7b">
	
<?php print_year_range($start, $end, "M7", $arr_machine); ?>
	</select> </br>
</td></tr></table>
</div>

<!-- Putitle -->
	<?php 
	$sql = "SELECT * FROM dju_putitle WHERE profile_id='".$profile_id."'";
	$result = $conn->query($sql);
	$publications = array();
	$publications=query_populate($result);
	
	//var_dump($publications);
	
	?>	
<div id="putitle" class="tab">
<table align="center"><tr><td>
	Publication</td><td><input type="text" name="pu1" value="<?php if (isset($publications["PU1"])) { echo $publications['PU1']; } ?>"></td></tr><tr><td>
  	Citations</td><td><input type="text" name="pu2" value="<?php if (isset($publications["PU2"])) { echo $publications['PU2']; } ?>"></td></tr><tr><td>
  	Link to Publications</td><td><input type="text" name="pu3" value="<?php if (isset($publications["PU3"])) { echo $publications['PU3']; } ?>"></td></tr></table>
		
</div>

<input type="submit" value="Submit" id="submit">
</form>	
</form>

<script>
var container_size = document.getElementById('container');
var nav_size = document.getElementById('nav');
var footer_size = document.getElementById('footer'); 
var margin = 100;
var total=container_size.clientHeight + nav_size.clientHeight;
console.log(total);
console.log(container_size.clientHeight);
//alert(myDiv.clientHeight);
document.getElementById('footer').style.top=total+"px";
</script>
	
</body>	
	
</html>