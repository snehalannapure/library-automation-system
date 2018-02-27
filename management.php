<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>
<?php
$dept=$_GET['dept'];
if($dept==1)
echo "Accounting";
if($dept==2)
echo "Computer Science";
if($dept==3)
echo "Management";
?>

</title>
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
?></div></div>
<div class="col-md-6"></div>
<div class="col-md-3"><div style="text-align:right;font-size: 20px;"><br><a href="/logout.php"><button type="button" class="btn btn-default">Logout</button></a>
</div>
</div>
</div>
</div><br><br><br>
    <div class="col-md-3">
      <ul class="nav nav-pills nav-stacked">
        <li><a href="/home.php">My Account</a></li>
        <li  class="active"><a href="/librarynew.php">Book Catalog</a></li>
        <li><a href="/cart.php">Cart</a></li>
         <li><a href="/loan.php">Loan</a></li>
        <li><a href="about.html">About</a></li><br><br>
      </ul>
    </div>
<div class="col-md-1"></div>
<div class="col-md-7">
<div>
    Search By Department:
    <form>
<a href="librarynew.php">All Books |</a>
  <a href="management.php?dept=1">Accounting |</a>
  <a href="management.php?dept=2">Computer Science|</a>
  <a href="management.php?dept=3">Management</a>

<br><br>
<br></div>






<?php
$dept=$_GET['dept'];
if($dept==1){
$sql = "SELECT * FROM Library Where department='Accounting'";
$result = $conn->query($sql);
echo "<h2>Accounting Books</h2>";

if ($result->num_rows > 0) {
echo "<table class=table style=width:100>
<tr>
<th><i><u>Book Id</u></i></th>
<th><i><u>Name</u></i></th>
<th><i><u>Author</u></i></th>
<th><i><u></u></i></th>
</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><th>".$row["bid"]. "</th><th>".$row["bname"]. "</th><th>".$row["bauth"]. "</th><th><a href='/cart.php?bid=".$row["bid"]."'>Issue now</a></th></tr>";
    }
} else {
    echo "No Record";
}
}


if($dept==2){
$sql = "SELECT * FROM Library Where department LIKE 'computer%'";
$result = $conn->query($sql);
echo "<h2>Computer Science Books</h2>";
if ($result->num_rows > 0) {
echo "<table class=table style=width:100>
<tr>
<th><i><u>Book Id</u></i></th>
<th><i><u>Name</u></i></th>
<th><i><u>Author</u></i></th>
<th><i><u></u></i></th>
</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><th>".$row["bid"]. "</th><th>".$row["bname"]. "</th><th>".$row["bauth"]. "</th><th><a href='/cart.php?bid=".$row["bid"]."'>Issue now</a></th></tr>";
    }
} else {
    echo "No Record";
}
}

if($dept==3){
$sql = "SELECT * FROM Library Where department='Management'";
$result = $conn->query($sql);
echo "<h2>Management</h2>";
if ($result->num_rows > 0) {
echo "<table class=table style=width:100>
<tr>
<th><i><u>Book Id</u></i></th>
<th><i><u>Name</u></i></th>
<th><i><u>Author</u></i></th>
<th><i><u></u></i></th>
</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><th>".$row["bid"]. "</th><th>".$row["bname"]. "</th><th>".$row["bauth"]. "</th><th><a href='/cart.php?bid=".$row["bid"]."'>Issue now</a></th></tr>";
    }
} else {
    echo "No Record";
}
}

$conn->close();
header('Location:http://onlinelibraryportal.shreyasawant.com/home.php');
?>
</table>
</div>
<div class="col-md-1"></div>

</body>
</html>