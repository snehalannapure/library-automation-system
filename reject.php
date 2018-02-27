<?php
session_start();
$servername = "localhost:3306";
$dbname = "shreyasa_sslibrary";
// Create connection
$conn = new mysqli($servername,  $_SESSION["uname"], $_SESSION["pwd"], $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$lid=$_GET['lid'];
$sql = "UPDATE  loan SET  lstatus = 'Rejected' WHERE lid =$lid";
if ($conn->query($sql) === TRUE)
header('Location:http://onlinelibraryportal.shreyasawant.com/loan.php');
?>