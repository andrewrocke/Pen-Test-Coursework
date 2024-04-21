<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<body>
<h1> Delete All Records </h1>
<button id="myBtn" onclick="javascript:window.location.href='/inputreviews.html'">Input</button>       
<button id="myBtn1" onclick="javascript:window.location.href='/showreviews.php'">Show Reviews</button><br> 

<!-- <button id="Delete" onclick="func_Delete()">Delete All</button> -->


<?php

$hostname = "localhost";
$username = "review_site";
$password =  "JxSLRkdutW";
$db = "reviews";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);
echo 'deleted';  
		$delquery = mysqli_query($dbconnect, "TRUNCATE TABLE user_review")
		or die (mysqli_error($dbconnect));
?>


</body>
</html>
