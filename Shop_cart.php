<?php
session_start();
if(@$_SESSION['auth'] != "yes")
{
header("Location: login.php");
exit();
}
?>
<?php
/* Program: Shop_cart.php
* Desc: Manages and displays the Shopping Cart.
*/
include("Vars.inc");
if(!isset($_SESSION['order_number'])
or empty($_SESSION['order_number']))
{
echo "Shopping Cart is currently empty<br>\n
<a href='index.php'>Continue Shopping</a>\n";
exit();
}
switch (@$_POST['Cart']) 
{
case "Continue Shopping": header("Location: index.php");
break;
case "Update Cart": $cxn = mysqli_connect($host,$user,$passwd,$database);
$order_number = $_SESSION['order_number'];
$n = 1;
/* Update quantities in database */
foreach($_POST['quantity'] as $field => $value) 
{
$sql_quant = "UPDATE OrderItem SET quantity='$value' WHERE item_number= '$n' AND order_number='$order_number'";
$result = mysqli_query($cxn,$sql_quant)
or die("sql_quant: ".mysqli_error($cxn));
$n++;
}
/* Delete any items with zero quantity */
$sql_del = "DELETE FROM OrderItem WHERE quantity='0' AND order_number='$order_number'";
$result = mysqli_query($cxn,$sql_del)
or die("sql_del: ".mysqli_error($cxn));
/* Renumber items in database. First, put items in an
array. Next, delete all items from the database. Then,
re-insert items with new item numbers. */
$sql_getnew = "SELECT * from OrderItem WHERE order_number='$order_number'";
$result = mysqli_query($cxn,$sql_getnew)
or die("sql_getnew: ".mysqli_error($cxn));
$n_rows = mysqli_num_rows($result);
if($n_rows < 1) 
{
echo "Shopping Cart is currently empty<br>\n
<a href='index.php'>Continue Shopping</a>\n";
exit();
}
while($row = mysqli_fetch_assoc($result)) 
{
$items_new[]=$row;
}
$sql_del2 = "DELETE FROM OrderItem WHERE order_number='$order_number'"; 
$result = mysqli_query($cxn,$sql_del2)
or die("sql_del2: ".mysqli_error($cxn));
for($i=0;$i<sizeof($items_new);$i++) 
{
$sql_ord = "INSERT INTO OrderItem (order_number,item_number,catalog_number, quantity,price) VALUES ($order_number,$i+1, {$items_new[$i]['catalog_number']}, {$items_new[$i]['quantity']}, {$items_new[$i]['price']})";
$result = mysqli_query($cxn,$sql_ord)
or die("sql_ord: ".mysqli_error($cxn));
} 
$_SESSION['n_items'] = $i; 
include("shop_page_cart.inc"); 
break;
case "Pay On-delivery": header("Location: Shop_order.php?from=cart");
exit();
break;
default: include("shop_page_cart.inc");
break;
}
?>