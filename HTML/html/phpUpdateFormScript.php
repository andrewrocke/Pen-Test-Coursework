<?php

$reviewer_name = $_POST["reviewer_name"];
$stars = $_POST["stars"];
$details = $_POST["details"];



$servername = "localhost";
$username = "review_site";
$password = "JxSLRkdutW";
$db = "reviews";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO user_review (reviewer_name, star_rating, details) VALUES ('$reviewer_name','$stars','$details')";

if ($conn->query($sql) === TRUE) {
	echo "Record created";} else
{	
echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>
