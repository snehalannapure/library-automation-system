<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cart</title>
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
        <li><a href="/librarynew.php">Book Catalog</a></li>
        <li class="active"><a href="/cart.php">Cart</a></li>
         <li><a href="/loan.php">Loan</a></li>
        <li><a href="/about.php">About</a></li><br><br>
      </ul>
    </div>
<div class="col-md-1"></div>
<div class="col-md-7">

<?php
$bid=$_GET['bid'];
$sql = "SELECT * FROM Library Where bid='$bid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<table class=table style=width:100>
<tr>
<th><i><u>Book Id</u></i></th>
<th><i><u>Name</u></i></th>
<th><i><u>Author</u></i></th>
<th><i><u></u></i></th>
</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><th>".$row["bid"]. "</th><th>".$row["bname"]. "</th><th>".$row["bauth"]. "</th><th><a href='/order.php?bid=".$row["bid"]."'>Buy</a></th></tr>";
    }
} else {
    echo "Cart is Empty!";
}

$conn->close();
?>
</table>
</div>
<div class="col-md-1"></div>

</body>
</html>