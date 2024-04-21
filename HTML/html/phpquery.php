<?php

$reviewer_name = $_POST["reviewer_name"];


$servername = "localhost";
$username = "review_site";
$password = "JxSLRkdutW";
$db = "reviews";

$conn = mysqli_connect($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql="SELECT reviewer_name, star_rating, details FROM user_review WHERE reviewer_name='$reviewer_name'"; 
echo "sql: ".$sql."<br><br>";
$query = mysqli_query($conn,$sql);

if ($query == TRUE){
   $i=0;
   while($row = mysqli_fetch_array($query, MYSQLI_BOTH)) 
   {

      echo "i ".$i." result:".$row["reviewer_name"].".".$row["star_rating"].".".$row["details"]."<br>";
      $i=$i+1;
      //echo $row;
   }
}else{
    echo "<br>must be false<br>"; 
    echo "query error".$query->error."sql".$sql;
}
$conn->close();

?>

