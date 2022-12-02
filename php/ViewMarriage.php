<?php
include "connection.php";

//total retrieval
// $sql = "SELECT *FROM Marriage;";
//  $result = mysqli_query($conn, $sql);
 
//  echo "<table border=1 cellspacing='0' width='1200px' >";
//  echo "<tr align='center' bgcolor='yellow'><th>ID</th><th> Husband First Name </th> <th>Husband last Name</th>
//  <th> Husband Date of Birth </th><th> Husband's Religion</th><th> Husband's Nationality</th> 
//  <th> Wife First Name </th> <th>Wife last Name</th>
//  <th> Wife Date of Birth </th><th>Wife's Religion</th><th> Wife's Nationality</th><th>Date of thier Marriage</th>
//  </tr>";
//  while($row = mysqli_fetch_assoc($result)){
//  echo "<tr align='center'><td bgcolor='yellow'>$row[ID]</td><td> $row[Husband_first_name] </td> <td> $row[Husband_last_Name] </td>
//  <td> $row[Husband_DOB] </td><td> $row[Husband_religion] </td><td> $row[Husband_Nationality] </td><td> $row[Wife_first_name] </td> <td> $row[Wife_last_Name] </td>
//  <td> $row[Wife_DOB] </td><td> $row[Wife_religion] </td><td> $row[Wife_Nationality] </td><td> $row[Date_of_Marriage] </td>
//  </tr>";
//  }
 
//  echo "</table>";


 //number of birth
 $sql = "SELECT count(*) as numbers FROM Marriage;";
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($result);
  echo "The total number of Marriage who registered legally are: ".$row['numbers'];
  echo "<br>";
  
  echo "<br><a href='../html/home.html#summary'>return back</a>";
?>

