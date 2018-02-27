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
$lufrom=$_SESSION["uname"];
$luto=$_SESSION["luto"];
$lamt=$_POST['lamt'];
$sql = "INSERT INTO loan (lid,lufrom,luto,lamt,ldate,lstatus)VALUES(NULL,'$lufrom','$luto', $lamt,NOW(),'Not Approved')";
if ($conn->query($sql) == TRUE)
header('Location: http://onlinelibraryportal.shreyasawant.com/loan.php');
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>