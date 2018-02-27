<?php
$servername = "localhost:3306";
$dbname = "shreyasa_Library";
$uname="shreyasa_test1";
$pwd="Shreyasa_Test1506";
$conn = new mysqli($servername,  $uname, $pwd, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$auth=$_POST['auth'];
$tit=$_POST['tit'];
$desc=$_POST['desc'];


$sql = "INSERT INTO prework (auth,tit,desc)VALUES('$auth','$tit','$desc')";
if ($conn->query($sql) == TRUE)
header('Location:http://www.shreyasawant.com/');
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>