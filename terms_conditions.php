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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Food Order and Delivery System">
	<meta name="author"      content="Akhaine Joy Ese (SU12201001)">
	
	<title>foodie.net - Order by Category</title>

	<link rel="shortcut icon" href="assets/images/webicon.png">
	
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="assets/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/styles.css">
	<script src="assets/js/awesomplete.js" async></script>

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<style type="text/css">
			/* Include the webfont through a @font-face declaration */
@font-face {
			    font-family: 'Alice';
			    src: url('assets/fonts/alice.woff2') format('woff2');
			}
						h1{
				font: normal 45px Alice, serif;
				font-weight: 400;
				color: #FF6633;
			}
</style>
<!-- End WOWSlider.com HEAD section -->
</head>
<body class="home">
		<span style = "float:left"><a href="index.php"><img style="border-radius: 50%; top: -10px; position: relative; display: block;  border: none; width: 80px; height: 60px;" class="img circle" src="assets/images/webicon.png"></a></span>
	<h6>Welcome To Foodie.net</h6>
<br>
<div class="b1">
<header id="header" style = "height: 110px;">
<div id="head1">
	<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/food.jpg" alt="foodie.net" title="foodie.net" id="wows1_0"/></li>
		<li><img src="data1/images/food03.jpg" alt="foodie.net" title="foodie.net" id="wows1_1"/></li>
		<li><img src="data1/images/pic2.jpg" alt="foodie.net" title="foodie.net" id="wows1_2"/></li>
		<li><img src="data1/images/food1.jpg" alt="foodie.net" title="foodie.net" id="wows1_3"/></li>
		<li><img src="data1/images/food2.jpg" alt="foodie.net" title="foodie.net" id="wows1_4"/></li>
		<li><img src="data1/images/food4.jpg" alt="foodie.net" title="foodie.net" id="wows1_5"/></li>
		<li><img src="data1/images/food5.jpg" alt="foodie.net" title="foodie.net" id="wows1_6"/></li>
		<li><img src="data1/images/food7.jpg" alt="image slider" title="foodie.net" id="wows1_7"/></a></li>
		<li><img src="data1/images/fooddelivery1024x683.jpg" alt="foodie.net" title="foodie.net" id="wows1_8"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="foodie.net"><span><img src="data1/tooltips/food.jpg" alt="foodie.net"/>1</span></a>
		<a href="#" title="foodie.net"><span><img src="data1/tooltips/food03.jpg" alt="foodie.net"/>2</span></a>
		<a href="#" title="foodie.net"><span><img src="data1/tooltips/pic2.jpg" alt="foodie.net"/>3</span></a>
		<a href="#" title="foodie.net"><span><img src="data1/tooltips/food1.jpg" alt="foodie.net"/>4</span></a>
		<a href="#" title="foodie.net"><span><img src="data1/tooltips/food2.jpg" alt="foodie.net"/>5</span></a>
		<a href="#" title="foodie.net"><span><img src="data1/tooltips/food4.jpg" alt="foodie.net"/>6</span></a>
		<a href="#" title="foodie.net"><span><img src="data1/tooltips/food5.jpg" alt="foodie.net"/>7</span></a>
		<a href="#" title="foodie.net"><span><img src="data1/tooltips/food7.jpg" alt="foodie.net"/>8</span></a>
		<a href="#" title="foodie.net"><span><img src="data1/tooltips/fooddelivery1024x683.jpg" alt="foodie.net"/></span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"></div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
</div>
<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="modal" data-target="#navModal"> 
				<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<div class="navbar-collapse collapse">
				<span style = "float:left">
		<form action="food-search.php" method="POST">
		<input class="awesomplete" type="text" name="food" onchange="this.form.submit()" list = "mylist" placeholder = "Search Food...">
		<datalist id = "mylist" name ="food">
		<option name ="food" value="Semo">Semo</option>
		<option name ="food" value="Amala">Amala</option>
		<option value="Eba">Eba</option>
		<option value="Pounded Yam">Pounded Yam</option>
		<option name ="food" value="Rice & Beans">Rice & Beans</option>
		<option value="Plantain">Plantain</option>
		<option value="Wheat">Wheat</option>
		<option value="Egusi Soup">Egusi Soup</option>
		<option value="Vegetable Soup">Vegetable Soup</option>
		<option value="Edikaikor Soup">Edikaikor Soup</option>
		<option value="Okro soup">Okro Soup</option>
		<option value="Ogbono Soup">Ogbono Soup</option>
		<option value="Ewedu Soup">Ewedu Soup</option>
		<option value="Gbegiri Soup">Gbegiri Soup</option>
		<option value="Jollof Rice">Jollof Rice</option>
		<option value="White Rice">White Rice</option>
		<option value="Fried Rice">Fried Rice</option>
		<option value="Fresh Fish Pepper Soup">Fresh Fish Pepper Soup</option>
		<option value="Goat Meat Pepper Soup">Goat Meat Pepper Soup</option>
		<option value="Bush Meat">Bush Meat</option>
		<option value="Ice Cream">Ice Cream</option>
		<option value="Meat Pie">Meat Pie</option>
		<option value="Sliced Cake">Sliced Cake</option>
		<option value="Cup Cake">Cup Cake</option>
		<option value="Beef Sandwich">Beef Sandwich</option>
		<option value="Waffles">Waffles</option>
		<option value="Donut">Donut</option>
		<option value="Cookies">Cookies</option>
		<option value="Moi-moi">Moi-Moi</option>
		<option value="Chicken">Chicken</option>
		<option value="Turkey">Turkey</option>
		<option value="Beef">Beef</option>
		<option value="Gizzard">Gizzard</option>
		<option value="Fish Pie">Fish Pie</option>
		<option value="Chicken Pie">Chicken Pie</option>
		<option value="Sausage Roll">Sausage Roll</option>
		<option value="Beef Burger">Beef Burger</option>
		<option value="Scotch Egg">Scotch Egg</option>
		<option value="Oha Soup">Oha Soup</option>
		<option value="Spagetti">Spagetti</option>
		<option value="Beans">Beans</option>
		<option value="Yam Porridge">Yam Porridge</option>
		<option value="Irish Porridge">Irish Porridge</option>
		<option value="Fiesta">Fiesta</option>
		<option value="Chicken Burger">Chicken Burger</option>
		<option value="Sponge Cake">Sponge Cake</option>
		<option value="Salad">Salad</option>
		<option value="Pizza">Pizza</option>
		<option value="Dry Fish">Dry Fish</option>
		<option value="Goat Meat">Goat Meat</option>
		<option value="Ofada Rice">Ofada Rice</option>
		<option value="Boiled Yam & Egg Sause">Boiled Yam & Egg Sause</option>
		<option value="Fufu">Fufu</option>
		<option value="Bitter-leaf Soup">Bitter-leaf Soup</option>
		<option value="Chicken & Chips">Chicken & Chips</option>
		</datalist>
<noscript><input type="submit" name="submit"></noscript>
		</form></span>
			<h5 align = "right">
			<?php 
			if(@$_SESSION['auth'] == "yes"){
			echo"Hello, {$_SESSION['logname']}&nbsp;&nbsp;&nbsp;&nbsp;<font size = '+1'><a href='Shop_cart.php'> <span class='glyphicon glyphicon-shopping-cart'></span> </a></font>&nbsp;&nbsp;&nbsp;<a href='logout.php'>Logout</a>";
		}
		else{
			echo "<a href = 'login.php'>Login/Signup</a>";
		}

			?>
			&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">Home</a>		
			</font>
			</h5>
			</div><!--/.nav-collapse -->
		</div>	
	</nav>
</header>

<main id="main">

	<div class="container">
		<div class="row section recentworks topspace">
			
			<h2 class="section-title"><span>TERMS AND CONDITIONS</span></h2>
<h4>About Us</h4>
<p>This web site is owned and operated by Dahlia's Signature who are completely dedicated to your total satisfaction. If you have any suggestions or comments or if you need to contact us, please email us using the link on the store page or use the details below.

Our Contact details:
Dahlia's Signaure
No.3 Dawaki Extension Abuja
+234 70 51365997 Nigeria
Phone: 01 455778
esejoyakhainegmail.com
Nigeria Payable Tax 3%

Company number: 0816779708</p>

<h4>Placing An Order</h4>
<p>Making a purchase could not be easier. Just browse our store, and add any items that you wish to buy into the shopping cart. After you have finished your selection, click on 'Checkout' and you will be asked for a few details that we need to be able to complete the order.

We accept card payments.  If you are shopping from North America or anywhere else, place your order and your card company will convert the transaction to US Dollars or your own currency.

We accept Visa and MasterCard. We do not charge for any item until it is ready to ship. Backordered items are not charged until they are shipped. If you do not wish to pay online, you may send your card information via phone, fax or by post.

If you have made a mistake in your order and cannot correct it in the shopping cart, contact us and we will correct the mistake.

When confirmation of your order is received, this is to indicate that we have received your order. It does not indicate that a contract exists between us. We will indicate acceptance of your order, and hence a contract between us, when we send you an invoice. We have included this term to protect us in the case that a mistake has been made in pricing, we have inadvertently under-priced goods, or we are no longer able to supply a particular product for some reason. In the case of a change of price, we will always contact you first to ensure that the price is acceptable.</p>

<h4>Delivery Schedule</h4>
<p>We deliver your order right away. We will normally send your order to you in <days> business days. International orders are generally received in under <days> days.

You must inform us within two working days if the goods are lost or damaged in transit so that we can make a prompt claim against the delivery company and correct the problem. Please quote your order number in all correspondence.

You agree that proof of delivery supplied by our delivery company is sufficient evidence to establish that goods have been received.</p>

<h4>Credit Card Security</h4>
<p>When the order is placed at our website, credit card numbers are encrypted using 128 bit encryption.  They are only decrypted after they reach our computer.  They are not held in clear text on any web site.</p>

<h4>Guarantee</h4>
<p>We guarantee your satisfaction. All of our products come with a 30 day no quibble guarantee.</p>

<h4>Returns Policy</h4>
<p></p>

<h4>Refund Policy</h4>
<p></p>
		</div> <!-- /section -->
	</div>	<!-- /container -->

</main>
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 widget">
				<h3 class="widget-title">Contact</h3>
				<div class="widget-body">
					<p>+234 23 9873237<br>
						<a href="mailto:#">esejoyakhaine@gmail.com</a><br>
						<br>
						56 km, Lokoja-Ajaokuta Road, Kogi State
					</p>	
				</div>
				<h3 class="widget-title">Follow Us</h3>
				<div class="widget-body">
						<a href="www.facebook.com/foodie"><img src="assets/images/fb.png" style="height:30px; width=30px;"></a>
						<a href="www.twitter.com/foodie"><img src="assets/images/tt.png" style="height:30px; width=30px;"></a>
						<a href="www.googleplus.com/foodie"><img src="assets/images/gg.png" style="height:30px; width=30px;"></a>
						</div>
			</div>

			<div class="col-md-5 widget">
				<h3 class="widget-title">An Optimized Standard</h3>
				<div class="widget-body">
					<p>The vast increasing awareness of the internet, the World Wide Web (www) and all the technologies associated with it has brought about several new ventures especially in the field of e-business. Industries and Businesses can no longer subject themselves to the archaic method of physical contact for every service or business process. As the world is becoming a global village, telecommunication acts as the key development to ensure that time is maximally prioritized and optimized.</p>
				</div>
			</div>
			
		</div> <!-- /row of widgets -->
	</div>
</footer>

<footer id="underfooter">
	<div class="container">
		<div class="row">
			<p align="center">
						Copyright &copy; 2016, &nbsp;&nbsp;&nbsp;Foodie.net.&nbsp;&nbsp;&nbsp;All Rights Reserved</p>
			</div>
	</div>
</footer>
</div>
<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="assets/css/jquery.min.js"></script>
<script src="assets/css/bootstrap.min.js"></script>
<script src="assets/js/template.js"></script>
</body>
</html>
