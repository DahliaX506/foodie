<?php
/*File: shop_page_summary.inc
*Desc: page that displays a summary
* of the order.
*/
include("Vars.inc");
$table_headers = array( "Item","Cat No","Food Item", "Price", "Qty", "Total");
$order_number = $_SESSION['order_number'];
$table_name = $order_number; 
$cxn = mysqli_connect($host,$user,$passwd,$database); 
$sql_ord = "SELECT * FROM orderitem WHERE order_number='$order_number'";
$result = mysqli_query($cxn,$sql_ord)
or die("sql_ord: ".mysqli_error($cxn));
$n_row = mysqli_num_rows($result); 
if($n_row < 1) 
{
	echo "Shopping Cart is currently empty<br>\n
<a href='index.php'>Continue Shopping</a>\n";
exit();
}
$n=1; 
while($row = mysqli_fetch_assoc($result)) 
{
foreach($row as $field => $value)
{
if($field != "order_number")
{
$items[$n][$field]=$value;
if($field == "catalog_number")
{
$sql_name = "SELECT name,type FROM food WHERE catalog_number = '$row[catalog_number]'";
$result2 = mysqli_query($cxn,$sql_name)
or die("sql_name: ".mysqli_error($cxn));
$row = mysqli_fetch_row($result2);
$items[$n]["name"]=$row[0]." ".$row[1];
}
}
}
$n++;
}

echo "<html> 
<head><title>Order Summary</title>
<meta charset='utf-8'>
	<meta name='viewport'    content='width=device-width, initial-scale=1.0'>
	<meta name='description' content='Food Order and Delivery System'>
	<meta name='author'      content='Akhaine Joy Ese (SU12201001)'>
	
	<title>foodie.net - Customer Order Summary</title>

	<link rel='shortcut icon' href='assets/images/webicon.png'>
	
	<!-- Bootstrap -->
	<link href='assets/css/bootstrap.no-icons.min.css' rel='stylesheet'>
	<!-- Icons -->
	<link href='assets/css/font-awesome.css' rel='stylesheet'>
	<!-- Fonts -->
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700'>
	<!-- Custom styles -->
	<link rel='stylesheet' href='assets/css/styles.css'>
	<script src='assets/js/awesomplete.js' async></script>

	<!--[if lt IE 9]> <script src='assets/js/html5shiv.js'></script> <![endif]-->

	<link rel='stylesheet' type='text/css' href='engine1/style.css' />
<script type='text/javascript' src='engine1/jquery.js'></script>
<!-- End WOWSlider.com HEAD section -->
</head>\n
<body class='home'>\n
	<div class = 'body1'>
<header id='header' style = 'height: 110px;'>
<div id='head1'>
	<!-- Start WOWSlider.com BODY section -->
<div id='wowslider-container1'>
<div class='ws_images'><ul>
		<li><img src='data1/images/pic2.jpg' alt='foodie.net' title='foodie.net' id='wows1_0'/></li>
		<li><img src='data1/images/food03.jpg' alt='foodie.net' title='foodie.net' id='wows1_1'/></li>
		<li><img src='data1/images/food1.jpg' alt='foodie.net' title='foodie.net' id='wows1_2'/></li>
		<li><img src='data1/images/food2.jpg' alt='foodie.net' title='foodie.net' id='wows1_3'/></li>
		<li><img src='data1/images/food4.jpg' alt='foodie.net' title='foodie.net' id='wows1_4'/></li>
		<li><img src='data1/images/food5.jpg' alt='foodie.net' title='foodie.net' id='wows1_5'/></li>
		<li><img src='data1/images/food7.jpg' alt='foodie.net' title='foodie.net' id='wows1_6'/></li>
		<li><img src='data1/images/food.jpg' alt='image slider' title='foodie.net' id='wows1_7'/></a></li>
		<li><img src='data1/images/fooddelivery1024x683.jpg' alt='foodie.net' title='foodie.net' id='wows1_8'/></li>
	</ul></div>
	<div class='ws_bullets'><div>
		<a href='#' title='foodie.net'><span><img src='data1/tooltips/pic2.jpg' alt='foodie.net'/>1</span></a>
		<a href='#' title='foodie.net'><span><img src='data1/tooltips/food03.jpg' alt='foodie.net'/>2</span></a>
		<a href='#' title='foodie.net'><span><img src='data1/tooltips/food1.jpg' alt='foodie.net'/>3</span></a>
		<a href='#' title='foodie.net'><span><img src='data1/tooltips/food2.jpg' alt='foodie.net'/>4</span></a>
		<a href='#' title='foodie.net'><span><img src='data1/tooltips/food4.jpg' alt='foodie.net'/>5</span></a>
		<a href='#' title='foodie.net'><span><img src='data1/tooltips/food5.jpg' alt='foodie.net'/>6</span></a>
		<a href='#' title='foodie.net'><span><img src='data1/tooltips/food7.jpg' alt='foodie.net'/>7</span></a>
		<a href='#' title='foodie.net'><span><img src='data1/tooltips/food.jpg' alt='foodie.net'/>8</span></a>
		<a href='#' title='foodie.net'><span><img src='data1/tooltips/fooddelivery1024x683.jpg' alt='foodie.net'/></span></a>
	</div></div><div class='ws_script' style='position:absolute;left:-99%'></div>
<div class='ws_shadow'></div>
</div>	
<script type='text/javascript' src='engine1/wowslider.js'></script>
<script type='text/javascript' src='engine1/script.js'></script>
<!-- End WOWSlider.com BODY section -->
</div>

<nav class='navbar navbar-default navbar-sticky'>
		<div class='container-fluid'>
			
			<div class='navbar-header'>
				<button type='button' class='navbar-toggle' data-toggle='modal' data-target='#navModal'> 
				<span class='sr-only'>Toggle navigation</span> <span class='icon-bar'></span> <span class='icon-bar'></span> <span class='icon-bar'></span> </button>
			</div>
			
			<div class='navbar-collapse collapse'>
				<span style = 'float:left'>
		<form action='food-search.php' method='POST'>
		<input class='awesomplete' type='text' name='food' onchange='this.form.submit()' list = 'mylist' placeholder = 'Search Food...'>
		<datalist id = 'mylist' name ='food'>
		<option name ='food' value='Semo'>Semo</option>
		<option name ='food' value='Amala'>Amala</option>
		<option value='Eba'>Eba</option>
		<option value='Pounded Yam'>Pounded Yam</option>
		<option name ='food' value='Rice & Beans'>Rice & Beans</option>
		<option value='Plantain'>Plantain</option>
		<option value='Wheat'>Wheat</option>
		<option value='Egusi Soup'>Egusi Soup</option>
		<option value='Vegetable Soup'>Vegetable Soup</option>
		<option value='Edikaikor Soup'>Edikaikor Soup</option>
		<option value='Okro soup'>Okro Soup</option>
		<option value='Ogbono Soup'>Ogbono Soup</option>
		<option value='Ewedu Soup'>Ewedu Soup</option>
		<option value='Gbegiri Soup'>Gbegiri Soup</option>
		<option value='Jollof Rice'>Jollof Rice</option>
		<option value='White Rice'>White Rice</option>
		<option value='Fried Rice'>Fried Rice</option>
		<option value='Fresh Fish Pepper Soup'>Fresh Fish Pepper Soup</option>
		<option value='Goat Meat Pepper Soup'>Goat Meat Pepper Soup</option>
		<option value='Bush Meat'>Bush Meat</option>
		<option value='Ice Cream'>Ice Cream</option>
		<option value='Meat Pie'>Meat Pie</option>
		<option value='Sliced Cake'>Sliced Cake</option>
		<option value='Cup Cake'>Cup Cake</option>
		<option value='Beef Sandwich'>Beef Sandwich</option>
		<option value='Waffles'>Waffles</option>
		<option value='Donut'>Donut</option>
		<option value='Cookies'>Cookies</option>
		<option value='Moi-moi'>Moi-Moi</option>
		<option value='Chicken'>Chicken</option>
		<option value='Turkey'>Turkey</option>
		<option value='Beef'>Beef</option>
		<option value='Gizzard'>Gizzard</option>
		<option value='Fish Pie'>Fish Pie</option>
		<option value='Chicken Pie'>Chicken Pie</option>
		<option value='Sausage Roll'>Sausage Roll</option>
		<option value='Beef Burger'>Beef Burger</option>
		<option value='Scotch Egg'>Scotch Egg</option>
		<option value='Oha Soup'>Oha Soup</option>
		<option value='Spagetti'>Spagetti</option>
		<option value='Beans'>Beans</option>
		<option value='Yam Porridge'>Yam Porridge</option>
		<option value='Irish Porridge'>Irish Porridge</option>
		<option value='Fiesta'>Fiesta</option>
		<option value='Chicken Burger'>Chicken Burger</option>
		<option value='Sponge Cake'>Sponge Cake</option>
		<option value='Salad'>Salad</option>
		<option value='Pizza'>Pizza</option>
		<option value='Dry Fish'>Dry Fish</option>
		<option value='Goat Meat'>Goat Meat</option>
		<option value='Ofada Rice'>Ofada Rice</option>
		<option value='Boiled Yam & Egg Sause'>Boiled Yam & Egg Sause</option>
		<option value='Fufu'>Fufu</option>
		<option value='Bitter-leaf Soup'>Bitter-leaf Soup</option>
		<option value='Chicken & Chips'>Chicken & Chips</option>
		</datalist>
<noscript><input type='submit' name='submit'></noscript>
		</form></span>
			<h5 align = 'right'>";
			if(@$_SESSION['auth'] == "yes"){
			echo"Hello, {$_SESSION['logname']}&nbsp;&nbsp;&nbsp;&nbsp;<font size = '+1'><a href='Shop_cart.php'> 
			<span class='glyphicon glyphicon-shopping-cart'></span> </a></font>&nbsp;&nbsp;&nbsp;<a href='logout.php'>Logout</a>";
		}
		else{
			echo "<a href = 'login.php'>Login/Signup</a>";
		}
		echo"&nbsp;&nbsp;&nbsp;&nbsp;<a href='index.php'>Home</a>		
			</font>
			</h5>
			</div><!--/.nav-collapse -->
		</div>	
	</nav>
</header>
	\n
	<main id='main'>
	<div class='container'>
		<div class='row section recentworks topspace' style='margin-top:-20px;'>
	\n";
echo "<h2 class='section-title'><span><font color = '#CC6633;'>Order Summary</font></span></h2>\n";
echo "<font color = 'red'>";
echo "<p style='font-weight: bold'>Order Number: FD16-{$_SESSION['order_number']}</p>";
echo "<strong>Deliver to:&nbsp;</strong>";
echo "&nbsp;&nbsp;$customer_name<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $customer_address - $state<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $phone - $email<br>"; 
	$time = "";
	if ($state == "Ajaokuta"){
		$time = "1 hour";
	}
	if ($state == "G.R.A"){
		$time = "1 hour";
	}
	if ($state == "Old G.R.A"){
		$time = "2 hours";
	}
	if ($state == "Cantonment"){
		$time = "2 hours";
	}
	if ($state == "Housing Estate"){
		$time = "2 hours";
	}
	if ($state == "Kpata"){
		$time = "2 hours";
	}
	if ($state == "Lokongoma"){
		$time = "2 hours";
	}
	if ($state == "Phase 1"){
		$time = "2 hours";
	}
	if ($state == "Barracks"){
		$time = "2 hours";
	}
	if ($state == "Natako"){
		$time = "1 hour";
	}
	if ($state == "Felele"){
		$time = "1 hour";
	}
	if ($state == "IBB Way"){
		$time = "2 hours";
	}
	if ($state == "ALiyu Attah Road"){
		$time = "2 hours";
	}
	if ($state == "Zone 8"){
		$time = "2 hours";
	}
	if ($state == "Gadumo"){
		$time = "30 minutes";
	}
	if ($state == "Lokoja Town Club"){
		$time = "1 hour";
	}
	if ($state == "Adankolo"){
		$time = "40 minutes";
	}
	if ($state == "Govt House Road"){
		$time = "40 minutes";
	}
	if ($state == "Gannaja"){
		$time = "30 minutes";
	}
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Approx. Time of Order: $time";
echo "</font><br><br>";
echo "<div class = 'table-responsive'><table border = '0' style='width: 100%; color:#781800;'>\n";
echo "<form action='$_SERVER[PHP_SELF]' method='POST'>";
echo "<tr>";
foreach($table_headers as $header)
{
echo "<th>$header</th>\n";
}
echo "</tr>";
for($i=1;$i <=sizeof($items);$i++) 
{
	echo "<tr>";
echo "<td width='5%'>$i</td>";
echo "<td width='5%'>{$items[$i]['catalog_number']}</td>";
echo "<td width='60%'>{$items[$i]['name']}</td>";
$f_price = number_format($items[$i]['price'],2);
echo "<td width='5%'>N$f_price</td>\n";
echo "<td width='15%'>{$items[$i]['quantity']}</td>";
$total = $items[$i]['quantity'] * $items[$i]['price'];
$f_total = number_format($total,2);
echo "<td width='10%'>N$f_total</td>\n";
echo "</tr>";
@$order_subtotal = $order_subtotal + $total;
}
$f_order_subtotal = number_format($order_subtotal,2); 
$service_charge = 500.0;
$order_total = $order_subtotal + $service_charge; 
$f_order_total = number_format($order_total,2);
echo "<tr><td colspan='6' style='text-align: right; font-weight: bold'>Subtotal: N$f_order_subtotal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>\n";

echo "<tr><td colspan='6' style='text-align: right; font-weight: bold'>Service Charge: N$service_charge&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>\n";

echo "<tr><td colspan='6' style='text-align: right; font-weight: bold'><br>Total: N$f_order_total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>\n";

echo "<tr><td colspan='2' style='text-align: left'>
<input type='submit' class = 'btn btn-default' name='Final' value='Continue Shopping'></td>\n";
echo " <td colspan='1' style='text-align: center'>
<input type='submit' class = 'btn btn-default' name='Ship' value='Edit Information'></td>\n";
echo " <td colspan='1' style='text-align: right'>
<input type='submit' class = 'btn btn-default' name='Final' value='Cancel Order'></td>\n";
echo " <td colspan='2' style='text-align: right'>
<input type='submit' class = 'btn btn-default' name='Final' value='Pay On-delivery'></td>\n";
echo "</tr></form></table>\n
</div>
</div>
</div>
</main>
\n
<footer id='footer'>
	<div class='container'>
		<div class='row'>
			<div class='col-md-3 widget'>
				<h3 class='widget-title'>Contact</h3>
				<div class='widget-body'>
					<p>+234 23 9873237<br>
						<a href='mailto:#'>esejoyakhaine@gmail.com</a><br>
						<br>
						56 km, Lokoja-Ajaokuta Road, Kogi State
					</p>	
				</div>
				<h3 class='widget-title'>Follow Us</h3>
				<div class='widget-body'>
						<a href='www.facebook.com/foodie'><img src='assets/images/fb.png' style='height:30px; width=30px;''></a>
						<a href='www.twitter.com/foodie'><img src='assets/images/tt.png' style='height:30px; width=30px;'></a>
						<a href='www.googleplus.com/foodie'><img src='assets/images/gg.png' style='height:30px; width=30px;'></a>
						</div>
			</div>

			<div class='col-md-5 widget'>
				<h3 class='widget-title'>An Optimized Standard</h3>
				<div class='widget-body'>
					<p>The vast increasing awareness of the internet, the World Wide Web (www) and all the technologies associated with it has brought about several new ventures especially in the field of e-business. Industries and Businesses can no longer subject themselves to the archaic method of physical contact for every service or business process. As the world is becoming a global village, telecommunication acts as the key development to ensure that time is maximally prioritized and optimized.</p>
				</div>
			</div>
			
		</div> <!-- /row of widgets -->
	</div>
</footer>

<footer id='underfooter'>
	<div class='container'>
		<div class='row'>
			<p align='center'>
						Copyright &copy; 2016, &nbsp;&nbsp;&nbsp;Foodie.net.&nbsp;&nbsp;&nbsp;All Rights Reserved<br> 
						Design: Dahlia Designs - <a href='http://www.gettemplate.com' rel='designer'>gettemplate.com</a> </p>
			</div>
	</div>
</footer>
</div>
<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src='assets/css/jquery.min.js'></script>
<script src='assets/css/bootstrap.min.js'></script>
<script src='assets/js/template.js'></script>
</body>
</html>\n";
?>