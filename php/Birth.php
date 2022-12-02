<?php
include "connection.php";
// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS Birth(
    ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) ,
    Father_Name VARCHAR(20),
    Mother_name VARCHAR(30),
    Sex VARCHAR(10),
     DOB date,
     religion VARCHAR(20),
     Place_Of_Birth VARCHAR(30),
     Nationality VARCHAR(20)
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table Birth created successfully ";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }
    
 
 //insert
 $fname=$_POST['firstname'];
 $fathern=$_POST['fathername'];
 $mothern=$_POST['mothername'];
 $sex=$_POST['sex'];
 $dob=$_POST['dob'];
 $religion=$_POST['religion'];
 $pob=$_POST['pob'];
 $nationality=$_POST['nationality'];
 
 $sql="INSERT INTO Birth
 VALUES('ID','$fname','$fathern','$mothern','$sex','$dob','$religion','$pob','$nationality')";
 $result=mysqli_query($conn,$sql);
 if($result){
 echo "One Row is affected!!!";
 }
 
echo "<br><a href='../html/home.html#reg'>return back</a>";



?>