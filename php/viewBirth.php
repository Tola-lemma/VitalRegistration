<?php
include "connection.php";

//totla retrival
//  $sql = "SELECT *FROM Birth;";
//  $result = mysqli_query($conn, $sql);
 
//  echo "<table border=1 cellspacing='0' width='900px' >";
//  echo "<tr align='center' bgcolor='yellow'><th>ID</th><th> First Name </th> <th>Father Name</th>
//  <th> Mother Name </th><th> Sex</th><th> DOB</th><th> Religion </th><th> Place_Of_Birth </th><th> Nationality </th>
//  </tr>";
//  while($row = mysqli_fetch_assoc($result)){
//  echo "<tr align='center'><td bgcolor='yellow'>$row[ID]</td><td> $row[first_name] </td> <td> $row[Father_Name] </td>
//  <td> $row[Mother_name] </td><td> $row[Sex] </td><td> $row[DOB] </td><td> $row[religion] </td><td> $row[Place_Of_Birth] </td><td> $row[Nationality] </td>
//  </tr>";
//  }
 
//  echo "</table>";

 //number of birth
 $sql = "SELECT count(*) as numbers FROM Birth;";
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($result);
  echo "The number Birth are: ".$row['numbers'];
  echo "<br><a href='../html/home.html#summary'>return back</a>";
?>