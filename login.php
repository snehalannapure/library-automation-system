<?php
session_start();
$name=strtolower($_POST['uname']);
$_SESSION["uname"]="shreyasa_".$name;
$_SESSION["pwd"]=$_POST['pwd'];
header('Location: http://onlinelibraryportal.shreyasawant.com/home.php');
exit;
?>