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
$uname=$_SESSION["uname"];
$bid=$_GET['bid'];
$sql2 = "SELECT phno,eid,name FROM users where uname='$uname'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    while($row2 = $result2->fetch_assoc()) {
$phno=$row2["phno"];
$eid=$row2["eid"];
$name=$row2["name"];
}
}
$sql3 = "SELECT bname FROM Library where bid=$bid";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
    while($row3 = $result3->fetch_assoc()) {
$bname=$row3["bname"];

}
}
   
$sql = "INSERT INTO orders (uname,name,bid,bname,phno,eid,doi,dateOfReturn)VALUES('$uname','$name', $bid,'$bname','$phno','$eid',NOW(),NOW() + INTERVAL 15 DAY)";
$sql1 = "UPDATE Library SET  availability= availability-1 WHERE  bid =$bid";
$sql2 = "UPDATE users SET  bud = bud-1 WHERE  uname ='$uname'";
if ($conn->query($sql) == TRUE && $conn->query($sql2) == TRUE && $conn->query($sql1) == TRUE)
header('Location: http://onlinelibraryportal.shreyasawant.com/myacc.php');
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>