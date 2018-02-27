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
$sql = "SELECT name FROM users Where uname='$uname'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $_SESSION["name"]=$row["name"];}}
else
header('Location: http://onlinelibraryportal.shreyasawant.com/register.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Loan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
div.header{
    padding-top: 10px;
    padding-right: 10px;
    padding-bottom: 80px;
    padding-left: 10px;
}
</style>
<BODY>
<div class="header" style="background-color:#286090;">
<div class="col-md-12">
<div class="col-md-3"><div style="text-align:justify;font-size: 35px;color:#f5f5f5 ;">Library Portal<br></div><div style="text-align:justify;font-size: 20px;color:#f5f5f5 ;">Hello
<?php

$servername = "localhost:3306";
$dbname = "shreyasa_sslibrary";

// Create connection
$conn = new mysqli($servername, $_SESSION["uname"],$_SESSION["pwd"], $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  
else
{

echo $_SESSION["name"]."!";
}
?>


</div></div>
<div class="col-md-6"></div>
<div class="col-md-3"><div style="text-align:right;font-size: 20px;"><br><a href="/logout.php"><button type="button" class="btn btn-default">Logout</button></a>
</div>
</div>
</div>
</div><br><br><br>
 
       <div class="col-md-3">
           <ul class="nav nav-pills nav-stacked">
       <li><a href="/home.php">My Account</a></li>
        <li><a href="/librarynew.php">Book Catalog</a></li>
        <li><a href="/cart.php">Cart</a></li>
          <li class="active"><a href="/loan.php">Loan</a></li>
        <li><a href="/about.php">About</a></li><br><br>
      </ul>
    </div>
      
    </div>
<div class="col-md-1"></div>
<div class="col-md-7">
<?php
$uname=$_SESSION["uname"];
$sql3 = "SELECT bud FROM users Where uname='$uname'";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0){
while($row3 = $result3->fetch_assoc()) 
echo "<h2>My Budget:&nbsp;".$row3["bud"]."$&nbsp;&nbsp;";}
?>
<a href="/loanreq.php"><button type = "button" class = "btn btn-success">Request Loan</button></a><br><br></h2>

<h3>Requested for Loan: <br></h3>
<table class="table"style="width:100">
<?php
$sql = "SELECT * FROM loan where lufrom='$uname'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
echo "<tr>
<th><i><u>Request Sent To</u></i></th>
<th><i><u>Amount</u></i></th>
<th><i><u>Date</u></i></th>
<th><i><u>Status</u></i></th>

</tr>";


while($row = $result->fetch_assoc()) {
echo "<tr><th>".$row["luto"]."</th><th>".$row["lamt"]."</th><th>".$row["ldate"]."</th>";


$lstat=$row["lstatus"];
if ($lstat=='Accepted')
echo "<th>Loan was granted to you</th></tr>";
else if ($lstat=='Rejected')
echo "<th>Loan was not granted to you</th></tr>";
else
echo "<th>Awaiting Confirmation</th></tr>";
}}
else
echo "No Records";
?>
</table>


<h3><br>Loan Request From:<br> </h3>
<table class="table"style="width:100">
<?php
$sql2 = "SELECT * FROM loan where luto='$uname'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0){
echo "<tr>
<th><i><u>Request Received from</u></i></th>
<th><i><u>Amount</u></i></th>
<th><i><u>Date</u></i></th>
<th><i><u>Status</u></i></th>

</tr>";


while($row2 = $result2->fetch_assoc()) 
{
echo "<tr><th>".$row2["lufrom"]."</th><th>".$row2["lamt"]."</th><th>".$row2["ldate"]."</th>";
$lstat=$row2["lstatus"];
if ($lstat=='Accepted')
echo "<th>Loan Granted</th></tr>";
else if ($lstat=='Rejected')
echo "<th>You Din't Grant Loan</th></tr>";
else
echo "<th><a href=accept.php?lid=".$row2["lid"].">Accept</a>&nbsp;&nbsp;<a href=reject.php?lid=".$row2["lid"].">Reject</a></th></tr>";
}}
else
echo "No Records";
$conn->close();
?>
</table>
</div>
<div class="col-md-1"></div>

</body>
</html>