




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<?php

$department=$_SESSION["department"];
$sql = "SELECT * FROM Library Where department='$department'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<table class=table style=width:100>
<tr>
<th><i><u>Book Id</u></i></th>
<th><i><u>Name</u></i></th>
<th><i><u>Author</u></i></th>
<th><i><u>Department</u></i></th>
<th><i><u></u></i></th>
</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><th>".$row["bid"]. "</th><th>".$row["bname"]. "</th><th>".$row["bauth"]. "</th><th>".$row["department"]. "</th><th><a href='order.php?department=".$row["department"]."'>Buy</a></th></tr>";
    }
} else {
    echo "Cart is Empty!";
}

$conn->close();
?>
</table>

</body>
</html>