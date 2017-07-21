<?php
session_start();
switch (@$_POST['Button']) 
{
case "REGISTER": 
/* Check for blanks */
foreach($_POST as $field => $value) 
{ 
if ($field != "fax")
{
if ($value == "")
{
$blanks[] = $field;
}
else
{
$good_data[$field] = strip_tags(trim($value));
}
}
} // end foreach POST
if(isset($blanks)) 
{
$message_2 = "The following fields are blank. Please enter the required information: ";
foreach($blanks as $value)
{
$message_2 .="$value, ";
}
extract($good_data);
include("form_reg.inc");
exit();
} // end if blanks found
/* validate data */
foreach($_POST as $field => $value)
{
if(!empty($value))
{
if(preg_match("/name/i",$field) and
!preg_match("/user/i",$field) and
!preg_match("/log/i",$field))
{
if (!preg_match("/^[A-Za-z' -]{1,50}$/",$value))
{
$errors[] = "$value is not a valid name. ";
}
}
if(preg_match("/email/i",$field))
{
if(!preg_match("/^.+@.+\\..+$/",$value))
{
$errors[] = "$value is not a valid email address. ";
}
}
if(preg_match("/phone/i",$field))
{
if(!preg_match("/^[0-9)(xX -]{7,20}$/",$value))
{
$errors[] = "$value is not a valid phone number. ";
}
}
} // end if not empty
} // end foreach POST
foreach($_POST as $field => $value)
{
$$field = strip_tags(trim($value));
}
if(@is_array($errors))
{
$message_2 = "";
foreach($errors as $value)
{
$message_2 .= $value." Please try again<br />";
}
include("form_reg.inc");
exit();
} // end if errors are found 
/* check to see if user name already exists */
include("Vars.inc");
$cxn = mysqli_connect($host,$user,$passwd,$database)
or die("Couldn't connect to server");
$sql = "SELECT user_name FROM Customer WHERE user_name='$user_name'";
$result = mysqli_query($cxn,$sql)
or die("Query died: user_name.");
$num = mysqli_num_rows($result);
if($num > 0) 
{
$message_2 = "$user_name already used. Select another
User Name.";
include("form_reg.inc");
exit();
} // end if user name already exists
else 
{
$today = date("Y-m-d");
$sql = "INSERT INTO Customer (user_name,create_date,password,phone,email) VALUES ('$Username','$today',md5('$password'),'$phone','$email')";
mysqli_query($cxn,$sql);
$_SESSION['auth']="yes";
$_SESSION['logname'] = $Username;
/* send email to new Customer */
header("Location: Shop_cart.php");
} // end else no errors found
break;
default:
include("form_reg.inc");
} // end switch
?>