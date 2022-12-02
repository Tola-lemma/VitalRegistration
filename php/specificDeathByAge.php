<?php
include "connection.php";
$age = $_POST['age'];
$dis = $_POST['disease'];
$sql = "SELECT count(*) as numbers FROM Death where ((year(Date_of_Death)-year(DDOB)) < $age) and (Cause_OF_Death like '%$dis')";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
   echo "The total number Death below $age year and by $dis disease is : ".$row['numbers'];
   echo "<br><a href='../html/home.html#summary'>return back</a>";

?>