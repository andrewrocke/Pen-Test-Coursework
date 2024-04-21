<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<body>
<h1> Database Table </h1>
<button id="myBtn" onclick="javascript:window.location.href='input/inputreviews.html'">Input</button>       
<button id="myBtn1" onclick="javascript:window.location.href='delete/deletereviews.php'">Delete</button>      

<?php

$hostname = "localhost";
$username = "review_site";
$password =  "JxSLRkdutW";
$db = "reviews";
//echo 'connect';

$dbconnect=mysqli_connect($hostname,$username,$password,$db);
//echo 'after connect';

if ($dbconnect->connect_error) {
 echo 'failed';
  die("Database connection failed: " . $dbconnect->connect_error);
}
//echo 'end php';
?>

<table border="1" align="center">
<tr>
  <td>Reviewer Name</td>
  <td>Stars</td>
  <td>Details</td>
</tr>

<?php
//echo 'before 2nd query';
$query = mysqli_query($dbconnect, "SELECT * FROM user_review")
or die (mysqli_error($dbconnect));
//echo 'not dead';
$i=0;
while ($row = mysqli_fetch_array($query)) {
 // echo 'in loop';
 //$i=$i+1;
//echo $i; 
 echo
   "<tr>
    <td>{$row['reviewer_name']}</td>
    <td>{$row['star_rating']}</td>
    <td>{$row['details']}</td>
    </tr>\n";


}
//echo 'end table';
?>
</table>



</body>
</html>
