<?php
switch (@$_POST['Button'])
{
case "SUBMIT":
include("Vars.inc");
$cxn = mysqli_connect($host,$user,$passwd,$database) or die("Query died: connect");
$sql = "UPDATE Customer SET password  = md5('$_POST[newpass]') WHERE user_name = '$_POST[user]'";
if(!mysqli_query($cxn,$sql))
{
	die("Error: ".mysqli_error($cxn));
}
$reset_message = "Password changed successfully";
header("Location: Login.php");
break;

default:header("Location: Login.php");
}
?>