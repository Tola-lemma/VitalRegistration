<?php
$servername = "localhost:7657";
$username = "username";
$password = "password";
$dbname = "Vital_Registration";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());}
?>