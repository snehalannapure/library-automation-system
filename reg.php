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
$name=$_POST['name'];
$eid=$_POST['eid'];
$phno=$_POST['phno'];
$uname=$_SESSION["uname"];
$sql = "INSERT INTO users (uname,name,eid,phno)VALUES('$uname','$name','$eid','$phno')";

if ($conn->query($sql) === TRUE) {
header('Location:http://onlinelibraryportal.shreyasawant.com/home.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>