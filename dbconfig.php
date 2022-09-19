
<?php

$conn = mysqli_connect("localhost", "test", "111", "jobseekersdemo");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

?>
 
<?php 
// Database configuration 
$dbHost     = "localhost"; 
$dbUsername = "test"; 
$dbPassword = "111"; 
$dbName     = "jobseekersdemo"; 
 
// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}