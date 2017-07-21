<?php
session_start();
if(@$_SESSION['auth'] != "yes")
{
header("Location: login.php");
exit();
}
if(!isset($_POST['Upload']))
{
include("profile.php");
}
else
{
if($_FILES['pix']['tmp_name'] == "none")
{echo "<p style='font-weight: bold'>
File did not successfully upload. Check the file size. File must be less than 500K.</p>";
include("profile.php");
exit();
}
if(!preg_match("/(.png|.jpeg|.jpg|.gif)/",$_FILES['pix']['type']))
{
echo "<p style='font-weight: bold'>
File is not a picture. Please try another file.</p>";
include("profile.php");
exit();
}
else
{
$destination='c:\xampp\htdocs\Initio\user_uploads'."\\".$_FILES['pix']['name'];
$temp_file = $_FILES['pix']['tmp_name'];
move_uploaded_file($temp_file,$destination);
	
include("Vars.inc");
$cxn = mysqli_connect($host,$user,$passwd,$database);
if (!$cxn)
  {
  die('Could not connect: ' . mysql_error());
  }
$sql = "UPDATE customer SET pix = '$_POST[pix]' WHERE user_name = '{$_SESSION['fusername']}'";
if(!mysqli_query($cxn,$sql))
{
	die("Error: ".mysqli_error($cxn));
}
echo "<p style='font-weight: bold'>The file has successfully uploaded: {$_FILES['pix']['name']}
({$_FILES['pix']['size']})</p>";
}
}
?>