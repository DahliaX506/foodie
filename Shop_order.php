<?php
session_start();
if(@$_SESSION['auth'] != "yes")
{
header("Location: login.php");
exit();
}
?>
<?php
/* Program name: Shop_order.php
* Description: Processes order when it's been submitted.
*/
include("Vars.inc");
if(!isset($_SESSION['order_number']))
{
echo "No order number found<br>\n
<a href='index.php'>Continue shopping</a>";
exit();
}
if(@$_GET['from'] == "cart") 
{
include("shop_shipinfo.inc");
exit();
}
elseif(isset($_POST['Summary'])) 
{
	foreach($_POST as $field => $value) 
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
if(isset($blanks))
{
$message = "The following fields are blank. Please enter the required information: ";
foreach($blanks as $value)
{
$message .="$value, ";
}
extract($good_data);
include("shop_shipinfo.inc");
exit();
}
foreach($_POST as $field => $value)
{
if($field != "Summary")
{
if(preg_match("/name/i",$field))
{
if (!preg_match("/^[A-Za-z' -]{1,50}$/",$value))
{
$errors[] = "$value is not a valid name.";
}
}
if(preg_match("/email/i",$field))
{
if(!preg_match("/^.+@.+\\..+$/",$value))
{
$errors[]="$value is not a valid email address.";
}
}
if(preg_match("/phone/i",$field))
{
if(!preg_match("/^[0-9)(xX -]{7,20}$/",$value))
{
$errors[]="$value is not a valid phone number. ";
}
}
$$field = strip_tags(trim($value));
}
}
if(@is_array($errors))
{
$message = "";
foreach($errors as $value)
{
$message .= $value." Please try again<br />";
}
include("shop_shipinfo.inc");
exit();
}
/* Process data when all fields are correct */
$cxn = mysqli_connect($host,$user,$passwd,$database);
foreach($_POST as $field => $value)
{
if(!preg_match("/cc_/",$field) && $field != "Summary" )
{
$value = mysqli_real_escape_string($cxn,$value);
$updates[] = "$field = '$value'";
}
}
$update_string = implode($updates,",");
$sql_ship = "UPDATE CustomerOrder SET $update_string WHERE order_number='{$_SESSION['order_number']}'";
$result = mysqli_query($cxn,$sql_ship)
or die(mysqli_error($cxn));
extract($_POST);
include("shop_page_summary.inc");
}

elseif(isset($_POST['Ship'])) 
{
include("shop_shipinfo.inc");
}
elseif(isset($_POST['Final'])) 
{
switch ($_POST['Final']) 
{
case "Continue Shopping": header("Location: index.php");
break;
case "Cancel Order": 
unset($_SESSION['order_number']);
header("Location: index.php");
break;
case "Pay On-delivery": 
$cxn = mysqli_connect($host,$user,$passwd,$database);
$sql = "UPDATE CustomerOrder SET submitted='yes' WHERE order_number='{$_SESSION['order_number']}'";
$result = mysqli_query($cxn,$sql)
or die("Error: ".mysqli_error($cxn));
#processCCInfo(); 
#sendOrder(); 
include("shop_page_accept.inc");
#email(); 
session_destroy(); 
break;
}
}
?>