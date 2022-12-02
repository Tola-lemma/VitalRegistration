<?php
include "connection.php";
// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS Marriage(
    ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Husband_first_name VARCHAR(30) ,
    Husband_last_Name VARCHAR(30),
     Husband_DOB date,
     Husband_religion VARCHAR(20),
     Husband_Nationality VARCHAR(20),
    Wife_first_name VARCHAR(30) ,
    Wife_last_Name VARCHAR(30),
     Wife_DOB date,
     Wife_religion VARCHAR(20),
     Wife_Nationality VARCHAR(20),
     Date_of_Marriage date
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table Marriage created successfully ";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }
    
 
 //insert
 $Husband_fn=$_POST['Hfirstname'];
 $Husband_ln=$_POST['Hlastname'];
 $Husband_dob=$_POST['Hdob'];
 $Husband_religion=$_POST['Hreligion'];
 $Husband_nationality=$_POST['Hnationality'];

 $Wife_fn=$_POST['Wfirstname'];
 $Wife_ln=$_POST['Wlastname'];
 $Wife_dob=$_POST['Wdob'];
 $Wife_religion=$_POST['Wreligion'];
 $Wife_nationality=$_POST['Wnationality'];
 $DOM=$_POST['dom'];
 $sql="INSERT INTO marriage
 VALUES('ID','$Husband_fn','$Husband_ln','$Husband_dob','$Husband_religion','$Husband_nationality','$Wife_fn','$Wife_ln','$Wife_dob','$Wife_religion','$Wife_nationality','$DOM')";
 $result=mysqli_query($conn,$sql);
 if($result){
 echo "One Row is affected!!!";
 }
 echo "<br><a href='../html/home.html#reg'>return back</a>";
 ?>