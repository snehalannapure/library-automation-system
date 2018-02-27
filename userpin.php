<!DOCTYPE html>
<html lang="en">
<head>
  <title>Library</title>
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
Shreya Sawant!
</div></div>
<div class="col-md-6"></div>
<div class="col-md-3"><div style="text-align:right;font-size: 20px;"><br><a href="/logout.php"><button type="button" class="btn btn-default">Logout</button></a>
</div>
</div>
</div>
</div><br><br><br>
    <div class="col-md-3">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="/home.php">My Account</a></li>
        <li><a href="/librarynew.php">Book Catalog</a></li>
        <li><a href="/cart.php">Cart</a></li>
        <li><a href="about.html">About</a></li><br><br>
      </ul>
    </div>


<div class="col-md-1"></div>
<div class="col-md-7">

 <ul class="nav nav-pills">
        <li><a href="/home.php">Review</a></li>
        <li><a href="/myacc.php">Account Balance</a></li>
        <li class="active"><a href="/userpin.php">User pin change</a></li>
        <li><a href="/renew.php">Renew my materials</a></li><br>

      </ul>

<br><br><br>

<form>
<div class="container">

Enter user name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"><br>
<br>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password"><br>
<br><br>

Enter new password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password"><br>
<div style="text-align:left;font-size: 20px;"><br><a href="/logout.php"><input type="submit" value="Change pin">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset">

</div></div>
</form>
<div class="col-md-1"></div>

</body>
</html>