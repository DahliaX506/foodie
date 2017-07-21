<?php
ob_start();
session_start();
function isUserLoggedIn()
{
if (isset($_SESSION['fusername']))
{
	return true;
}
else
{
	return false;
}
}
?>
<?php

$n_per_page = 30;
include("Vars.inc");
if(isset($_POST['Products']) && isset($_POST['interest'])) 
{
if($_POST['Products'] == "Add to Cart") 
{
if(!isset($_SESSION['order_number'])) 
{
$cxn=mysqli_connect($host,$user,$passwd,$database);
$today = date("Y-m-d");
$sql_order = "INSERT INTO CustomerOrder (order_date) VALUES ('$today')";
$result = mysqli_query($cxn,$sql_order)
or die("sql_order".mysqli_error($xn));
$order_number = mysqli_insert_id($cxn);
$_SESSION['order_number'] = $order_number;
$n_items = 0;
}
else
{
$order_number = $_SESSION['order_number'];
$n_items = $_SESSION['n_items'];
}
foreach($_POST as $field => $value)
{
if(substr($field,0,4) == "item" && $value > 0)
{
$n_items++;
$catalog_number = substr($field,4,strlen($field)-4);
$cxn = mysqli_connect($host,$user,$passwd,$database);
$sql_price = "SELECT price FROM food WHERE catalog_number='$catalog_number'";
$result = mysqli_query($cxn,$sql_price)
or die("sql_price: ".mysqli_error($cxn));
$row = mysqli_fetch_assoc($result); 
$sql_item = "INSERT INTO OrderItem (order_number,item_number,catalog_number,quantity,price) VALUES ($order_number,$n_items,$catalog_number,
$value,{$row['price']})";
$result = mysqli_query($cxn,$sql_item)
or die("sql_item: ".mysqli_error($cxn));
}
}
$_SESSION['n_items'] = $n_items; 
header("Location:Shop_cart.php");
}
else 
{
if(isset($_POST['n_end']))
{
if($_POST['Products'] == "Previous")
{
$n_start = $_POST['n_end']-($n_per_page);
}
else
{
$n_start = $_POST['n_end'] + 1;
}
}
else
{
$n_start = 1;
}
$n_end = $n_start + $n_per_page -1;
$cxn = mysqli_connect($host,$user,$passwd,$database);
$query_food = "SELECT * FROM food WHERE type= '$_POST[interest]' ORDER BY name";
$result = mysqli_query($cxn,$query_food)
or die ("query_food: ".mysqli_error($cxn));
$n=1;
while($row = mysqli_fetch_assoc($result))
{
foreach($row as $field => $value)
{
$products[$n][$field]=$value;
}
$n++;
}
$n_products = sizeof($products);
if($n_end > $n_products)
{
$n_end = $n_products;
}
include("shop_page_products-Restaurants.inc");
}
}
?>