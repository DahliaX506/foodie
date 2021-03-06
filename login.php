<?php
/* Program: Login_reg.php
* Desc: Main application script for the User Login
* application. It provides two options: (1) login
* using an existing User Name and (2) register
* a new user name. User Names and passwords are
* stored in a MySQL database.
*/
session_start();
switch (@$_POST['Button']) 
{
case "LOGIN": 
include("Vars.inc");
$cxn = mysqli_connect($host,$user,$passwd,$database) or die("Query died: connect");
$sql = "SELECT user_name FROM Customer WHERE user_name='$_POST[fusername]'";
$result = mysqli_query($cxn,$sql)
or die("Query died: fuser_name");
$num = mysqli_num_rows($result); 
if($num > 0)
{
$sql = "SELECT user_name FROM Customer WHERE user_name='$_POST[fusername]' AND password=md5('$_POST[fpassword]')";
$result2 = mysqli_query($cxn,$sql)
or die("Query died: fpassword"); 
$num2 = mysqli_num_rows($result2);
if($num2 > 0) //password matches 
{
$_SESSION['auth']="yes"; 
$_SESSION['logname'] = $_POST['fusername'];
header("Location: Shop_cart.php");
}
else // password does not match
{
$message_1="The Login Name, '$_POST[fusername]' exists, but you have not entered the correct password! Please try again.";
$fusername = strip_tags(trim($_POST['fusername']));
include("form_login.inc");
}
} // end if $num > 0 
elseif($num == 0) // login name not found
{
$message_1 = "The User Name you entered does not exist! Please try again.";
include("form_login.inc");
}
break;

default:
include("form_login.inc");
} // end switch
?>