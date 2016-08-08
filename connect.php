<?php

$servername = "localhost";
$username = "root";
$password = "lettuce";
$dbname = "DJU";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

function query_populate($result){
	$new = array();
	//var_dump($result);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
				//var_dump($row);
				//echo count($row);
				
				foreach ($row as $k => $v) {
					$new[$k] = $v;
				}
		}
	}
	return $new;
}

?>