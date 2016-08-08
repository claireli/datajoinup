<!DOCTYPE html>
<html>
    
    <head> 
    <title>DJUp</title>
    <link rel="stylesheet" type="text/css" href="styles.css"/>
	<link rel="stylesheet" type="text/css" href="base.css">

   </head>

    <body>

	<?php include("includes/header.php");?>
	<?php include("includes/footer.html");?>
	<?php include("connect.php"); ?>


<div id="shell">
<div id="container">
<h1>Welcome to Data Join Up!</h1>
<h2>Connecting big people, behind big data.</h2><p>
		

 
Where we precisely connect big data experts with highly specific projects.
<br>
Hundreds of technical parameters are neatly consolidated to paint a high resolution picture of who you are and what you do.
<br> 
It's all very simple...You spoke and we listened!
<p>
1. Varieties of big data experts have been interviewed<br>
2. You requested guesswork be eliminated in pairing you with projects<br>
3. We neatly consolidated your requests<br>
4. No marketing, No fluff<p>

We hope to provide you with:<br>
-          Freelance data projects @ negotiable hourly rates<br>
-          Informational meetups<br>
-          Career opportunities<br>
-          Networking<br>
-          And any other suggestions you bring<p>
 
A sincere THANK YOU to all you:<br>
coders, programmers, computational scientists, algorithm developers, machine learning experts, and more!
<p>
<b>You, the human element, are the 1 consistent variable in all algorithms.</b>
 
Please Join up!
 
<h2>Yours truly,
Data Join Up Team</h2>


</div>


</div>		
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