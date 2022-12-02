<?php
include "connection.php";
$year = $_POST['year'];
$sql = "SELECT count(*) as numbers FROM Marriage where Date_of_Marriage > $year;";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
   echo "The total number of Married since $year is : ".$row['numbers'];
  echo "<br>";
  echo "<br><a href='../html/home.html#summary'>return back</a>";
?>