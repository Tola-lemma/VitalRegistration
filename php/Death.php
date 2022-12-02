<?php
include "connection.php";
// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS Death(
    ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    DF_name VARCHAR(30) ,
    DL_name VARCHAR(30),
    sex VARCHAR(8),
    DDOB date,
    DNationality VARCHAR(30),
    DPlace_Of_Birth VARCHAR(30),
    Date_of_Death date,
    Cause_OF_Death VARCHAR(50)
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table Death created successfully ";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }
    
 
 //insert
 $DfName=$_POST['dname'];
 $fdname=$_POST['fdname'];
 $sex=$_POST['dsex'];
 $ddate=$_POST['ddate'];
 $dnation=$_POST['dnation'];
 $dplace=$_POST['dplace'];
 $ddr=$_POST['ddr'];
 $cause=$_POST['txtArea'];
 $sql="INSERT INTO Death
 VALUES('ID','$DfName',' $fdname',' $sex','$ddate','$dnation','$dplace','$ddr','$cause')";
 $result=mysqli_query($conn,$sql);
 if($result){
 echo "One Row is affected!!!";
 }
 echo "<br><a href='../html/home.html#reg'>return back</a>";
 ?>
 