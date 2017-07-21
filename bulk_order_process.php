<?php

if(isset($_POST['sent']) && $_POST['sent'] == "yes")
{
/* check each field except middle name for blank fields */
foreach($_POST as $field => $value)
{
if($value == "")
{
$blank_array[] = $field;
} // endif field is blank
else
{
$good_data[$field] = strip_tags(trim($value));
}
} // end of foreach loop for $_POST
/* if any fields were blank, create error message and
redisplay form */
if(@sizeof($blank_array) > 0)
{
$message = "You didn't fill in one or more required fields.
You must enter: ";
/* display list of missing information */
foreach($blank_array as $value)
{
$message .= "$value, ";
}
/* redisplay form */
extract($good_data);
include("bulk_order.php");
exit();
} // endif blanks
} // endif submitted
else
{
include("bulk_order.php");
}

//validate data
foreach($_POST as $field => $value)
{
if(!empty($value))
{
if(preg_match("/customer_name/i",$field))
{
if (!preg_match("/^[A-Za-z' -]{1,50}$/",$value))
{
$errors[] = "$value is not a valid name. ";
}
}
if(preg_match("/customer_email/i",$field))
{
if(!preg_match("/^.+@.+\\..+$/",$value))
{
$errors[] = "$value is not a valid email address. ";
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
include("bulk_order.php");
exit();
} // end if errors are found 

include("Vars.inc");
$cxn = mysqli_connect($host,$user,$passwd,$database);
if (!$cxn)
  {
  die('Could not connect: ' . mysql_error());
  }
$create_date = date("Y-m-d");
$sql = "INSERT INTO bulk_order (create_date, customer_name, customer_email, customer_phone, deliver_day, deliver_time, deliver_location, comments) VALUES ('$create_date', '$_POST[customer_name]', '$_POST[customer_email]', '$_POST[customer_phone]', '$_POST[deliver_day]', '$_POST[deliver_time]', '$_POST[deliver_location]', '$_POST[comments]')";
if(!mysqli_query($cxn,$sql))
{
	die("Error: ".mysqli_error($cxn));
}
header("Location: bulk_order.php");

?>