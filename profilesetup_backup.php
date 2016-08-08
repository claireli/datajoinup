<!DOCTYPE html>
<html>
    
    <head> 
        <title>DJUp</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
		<link rel="stylesheet" type="text/css" href="base.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#personal").click(function(){
        $("#div3").fadeIn(3000);
    });
	$("#personal").click(function(){
        $("#div3").fadeIn(3000);
    });
	
});
</script>
<style>
#form_shell{
	width: 100%;
	background-color: #FFFFFF;
}

.tab{
	min-height: 600px;
	padding: 20px;
}

#personal_info{
	background-color: #FCF5DB;
}

.inner_form{
	padding: 10px;
}
</style>
   </head>

	<body>
		<?php include("includes/header.html");?>
	<?php include("includes/footer.html");?>
	<div id="container">
	<h1>Data JoinUp Profile Registration</h1> 
    <h2>Personal Information</h2><p>
	
	<table id="form_shell"><tr>
	<td>Personal Information</td>
	<td>Gtitle</td>
	<td>Stitle</td>
	<td>Mtitle</td>
	<td>Putitle</td>
	</tr>
	<tr><td colspan='5'>
	<div class="form"><form action="submit_form.php" method="post">
	<div id="personal_info" class='tab'>
	
	<table align="center" class="inner-form"><tr><td>
	First name 
	<input type="text" name="firstname"><br>
  	Last name 
	<input type="text" name="lastname" style=margin-left:2px><br>
  	Email 
	<input type="text" name="email" style=margin-left:33px><br>
  	Phone 
	<input type="text" name="phone" style=margin-left:27px><br>
	City
	<input type="text" name="city" style=margin-left:44px><br>
	State 
	<select name="state" style=margin-left:35px>
	<option value="-">-</option>
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
	<br>
		
	Country
	<input type="text" name="country" style=margin-left:16px><br>
	
	P1<br>
	<input type="checkbox" name="chk_group1[]" value="P1A" />P1A<br/>
	<input type="checkbox" name="chk_group1[]" value="P1B" />P1B<br/>
	
	
	Rel
	<select name="rel">
  	<option value="No">No</option>
  	<option value="Yes">Yes</option>
  	</select><br>
	
		P2: <br>
	<input type="checkbox" name="chk_group2[]" value="P2A" />P2A<br />
	<input type="checkbox" name="chk_group2[]" value="P2B" />P2B<br />
	<input type="checkbox" name="chk_group2[]" value="P2C" />P2C<br />
	<input type="checkbox" name="chk_group2[]" value="P2D" />P2D<br />
	<input type="checkbox" name="chk_group2[]" value="P2E" />P2E<br />
	<input type="checkbox" name="chk_group2[]" value="P2F" />P2F<br />
		
	
	
	</td>
	<td>
	P3
	<input type="text" name="p3" style=margin-left:27px><br>
	P4 
	<input type="text" name="p4" style=margin-left:27px><br>
	P5
	<input type="text" name="p5" style=margin-left:27px><br>
	P6
	<input type="text" name="p6" style=margin-left:27px><br>
	P7 
	<input type="text" name="p7" style=margin-left:27px><br>
	P8
	<input type="text" name="p8" style=margin-left:27px><br>
	P9 
	<input type="text" name="p9" style=margin-left:27px><br>
	P10
	<input type="text" name="p10" style=margin-left:27px><br>
	P11 
	<input type="text" name="p11" style=margin-left:27px><br>
	P12 
	<input type="text" name="p12" style=margin-left:27px><br>
	P13
	<input type="text" name="p13" style=margin-left:27px><br>
	</td>
	<td>
		Vi: 
	<select name="vi">
  	<option value="U">None (U)</option>
  	<option value="G">Green Card</option>
  	<option value="HN">H1B Non-Profit</option>
  	<option value="HP">H1B For-Profit</option>
	<option value="OP">OPT</option>
	<option value="Other">Other</option>
	</select><br>
	
	<!-- P14, P14A-J -->
	Technical Focus: <br>	
	<input type="checkbox" name="chk_group3[]" value="Bioinformatics" />Bioinformatics<br />
	<input type="checkbox" name="chk_group3[]" value="Machine Learning" />Machine Learning<br />
	<input type="checkbox" name="chk_group3[]" value="Research/Annotation" />Research/Annotation<br />
	<input type="checkbox" name="chk_group3[]" value="Software Engineering" />Software Engineering<br />
	<input type="checkbox" name="chk_group3[]" value="Genomics" />Genomics<br />
	<input type="checkbox" name="chk_group3[]" value="Oncology" />Oncology<br />
	<input type="checkbox" name="chk_group3[]" value="NIPT" />NIPT<br />
	<input type="checkbox" name="chk_group3[]" value="CRISPR" />CRISPR<br />
	<input type="checkbox" name="chk_group3[]" value="Biostatistics" />Biostatistics<br />
	<input type="checkbox" name="chk_group3[]" value="Cloud Computing" />Cloud Computing<br />
	
	Notes<br>	
	<textarea style=resize:none; cols=50 name="notes">
	</textarea>
	</td>
	</tr>
	</table> 


<!-- Stitle -->
<fieldset style=background-color:#DDF5D5;>
	<p style=font-size:20px>Stitle</p>
	<p style=font-size:15px> ??: </p>
	
S1
  	<select name="s1">
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select name="s1b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

S2 
  	<select name="s2"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select name="s2b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

S3 
  	<select name="s3"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select name="s3b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>


S4
  	<select name="s4"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select name="s4b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

S5
  	<select id="month_start" name="s5"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select id="year_start" name="s5b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

S6
  	<select id="month_start" name="s6"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select id="year_start" name="s6b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

S7
  	<select id="month_start" name="s7"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select id="year_start" name="s7b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

S8
  	<select id="month_start" name="s8"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select id="year_start" name="s8b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

S9
  	<select id="month_start" name="s9"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select id="year_start" name="s9b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

S10
  	<select id="month_start" name="s10"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>   
  	<select id="year_start" name="s10b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>


S11
  	<select id="month_start" name="s11"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select id="year_start" name="s11b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

S12
  	<select id="month_start" name="s12"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select> 
  	<select id="year_start" name="s12b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>


S13
  	<select id="month_start" name="s13"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>   
  	<select id="year_start" name="s13b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

S14
  	<select id="month_start" 
          name="s14"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>   
  	<select id="year_start" 
name="s14b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

S15
  	<select id="month_start" 
          name="s15"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	 
  	<select id="year_start" 
name="s15b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>


S16
  	<select id="month_start" 
          name="s16"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	 
  	<select id="year_start" 
name="s16b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

S17
  	<select id="month_start" 
          name="s17"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	 
  	<select id="year_start" 
name="s17b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

S18
  	<select id="month_start" 
          name="s18"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	 
  	<select id="year_start" 
name="s18b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

S19
  	<select id="month_start" name="s19"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	 
  	<select id="year_start" name="s19b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>


S20
  	<select id="month_start" name="s20"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  	 
  	<select id="year_start" name="s20b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

</fieldset>

<!-- Mtitle -->
<fieldset style=background-color:#D5EDF5;>
	<p style=font-size:20px>Mtitle</p>
	<p style=font-size:15px> ??: </p>

M1
  	<select name="m1">
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select name="m1b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

M2 
  	<select name="m2"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select name="m2b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

M3 
  	<select name="m3"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select name="m3b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>


M4
  	<select name="m4"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select name="m4b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

M5
  	<select id="month_start" name="m5"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select id="year_start" name="m5b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

M6
  	<select id="month_start" name="m6"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select id="year_start" name="m6b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

M7
  	<select id="month_start" name="m7"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select id="year_start" name="m7b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

</fieldset>

<!-- Putitle -->	
<fieldset style=background-color:#FCF5DB;>
	<p style=font-size:20px>Putitle</p>
		
	Pu1 <input type="text" name="pu1" style=margin-left:36px><br>
  	Pu2<input type="text" name="pu2" style=margin-left:57px><br>
  	Pu3 <input type="text" name="pu3"><br>
		
</fieldset>
<!-- Gtitle -->	
<fieldset style=background-color:#F2DBD3;>
	<p style=font-size:20px>
	Gtitle</p>
	<p style=font-size:15px> 
	??:</p>
	
G1
  	<select name="g1">
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select name="g1b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

G2 
  	<select name="g2"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select name="g2b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

G3 
  	<select name="g3"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select name="g3b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>


G4
  	<select name="g4"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select name="g4b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

G5
  	<select id="month_start" name="g5"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select id="year_start" name="g5b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

G6
  	<select id="month_start" name="g6"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select id="year_start" name="g6b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

G7
  	<select id="month_start" name="g7"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select id="year_start" name="g7b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

G8
  	<select id="month_start" name="g8"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select id="year_start" name="g8b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

G9
  	<select id="month_start" name="g9"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select id="year_start" name="g9b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

G10
  	<select id="month_start" name="g10"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>   
  	<select id="year_start" name="g10b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>


G11
  	<select id="month_start" name="g11"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	<select id="year_start" name="g11b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

G12
  	<select id="month_start" name="g12"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select> 
  	<select id="year_start" name="g12b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>


G13
  	<select id="month_start" name="g13"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>   
  	<select id="year_start" name="g13b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

G14
  	<select id="month_start" 
          name="g14"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>   
  	<select id="year_start" 
name="g14b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

G15
  	<select id="month_start" 
          name="g15"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	 
  	<select id="year_start" 
name="g15b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>


G16
  	<select id="month_start" 
          name="g16"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	 
  	<select id="year_start" 
name="g16b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

G17
  	<select id="month_start" name="g17"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	 
  	<select id="year_start" name="g17b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

G18
  	<select id="month_start" 
          name="g18"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	 
  	<select id="year_start" 
name="g18b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

G19
  	<select id="month_start" 
          name="g19"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	 
  	<select id="year_start" 
name="g19b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>


G20
  	<select id="month_start" name="g20"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	 
  	<select id="year_start" name="g20b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>


G21
  	<select id="month_start" 
          name="g21"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	 
  	<select id="year_start" 
name="g21b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

G22
  	<select id="month_start" 
          name="g22"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	 
  	<select id="year_start" 
name="g22b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

	
	
G23
  	<select id="month_start" name="g23"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	 
  	<select id="year_start" name="g23b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

G24
  	<select id="month_start" name="g24"> 
    <option>-</option>
	<option>January</option>       
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
    <option>December</option>       
    </select>  
  	 
  	<select id="year_start" name="g24b">
	<option>-</option>
    <option>1987</option>
	<option>1988</option>
	<option>1989</option>
	<option>1990</option>
	<option>1991</option>
	<option>1992</option>
	<option>1993</option>
	<option>1994</option>
	<option>1995</option>
	<option>1996</option>
	<option>1997</option>	
	<option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
    <option>2002</option>       
    <option>2003</option>       
    <option>2004</option>       
    <option>2005</option>       
    <option>2006</option>       
    <option>2007</option>
	<option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>
	</select> </br>

	Platforms <br>
	<input type="checkbox" name="chk_group4[]" value="G25" />G25<br />
	<input type="checkbox" name="chk_group4[]" value="G26" />G26<br />
	<input type="checkbox" name="chk_group4[]" value="G27" />G27<br />
	<input type="checkbox" name="chk_group4[]" value="G28" />G28<br />
	<input type="checkbox" name="chk_group4[]" value="G29" />G29<br />
	<input type="checkbox" name="chk_group4[]" value="G30" />G30<br />


	</fieldset>
<input type="submit" value="Submit"; style=margin-left:10px;margin-top:50px;padding:10px>
</form>	
</form>

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