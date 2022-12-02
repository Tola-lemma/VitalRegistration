<?php
include "connection.php";

//totla retrival
//  $sql = "SELECT *FROM Death;";
//  $result = mysqli_query($conn, $sql);
 
//  echo "<table border=1 cellspacing='0' width='1000px' >";
//  echo "<tr align='center' bgcolor='yellow'><th>ID</th><th>Deasesed's  Name</th> <th>Deasesed's Father Name</th>
//  <th> Sex</th><th> Deasesed's date of birth</th><th> Deaseced's Nationality </th><th> Place Of Death </th><th> Date of Death Record </th><th width='100px'>Cause of Death</th>
//  </tr>";
//  while($row = mysqli_fetch_assoc($result)){
//  echo "<tr align='center'><td bgcolor='yellow'>$row[ID]</td><td> $row[DF_name] </td> <td> $row[DL_name] </td>
//  <td> $row[sex] </td><td> $row[DDOB] </td><td> $row[DNationality] </td><td> $row[DPlace_Of_Birth] </td><td> $row[Date_of_Death] </td><td> $row[Cause_OF_Death] </td>
//  </tr>";
//  }
 
//  echo "</table>";
$sql = "SELECT count(*) as numbers FROM Death;";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
   echo "The total number of Death: ".$row['numbers'];
   echo "<br><a href='../html/home.html#summary'>return back</a>";
?>