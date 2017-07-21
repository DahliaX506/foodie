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
	
	<title>foodie.net - Place Advanced Order</title>

	<link rel="shortcut icon" href="assets/images/webicon.png">
	
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.no-icons.min.css" rel="stylesheet">
  <script src="assets/css/jquery.min.js"></script>
  	<script src="assets/js/awesomplete.js" async></script>
<script src="assets/js/jquery.chained.min.js"></script>
	<!-- Icons -->
	<link href="assets/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/styles.css">

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

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body class="home">
<div class="b1">
<header id="header">
	<div id="head" style="height: 200px;" class="parallax" parallax-speed="1">
	<h1 style="background-color: #fff; opacity: 0.7;">&nbsp;&nbsp;&nbsp;&nbsp;foodie.net - Advanced Order Placement</h1>
	</div>
	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="modal" data-target="#navModal"> 
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
							</div>	
		<div class="navbar-collapse collapse">
			<span style = "float:left">
				<form action="food-search.php" method="POST">
				<input class="awesomplete" type="text" name="food" onchange="this.form.submit()" list = "mylist" placeholder = "Search Food...">
					
					<datalist id = "mylist" name ="food">
					<option name ="food" value="Semo">Semo</option>
					<option name ="food" value="Amala">Amala</option>
					<option name ="food" value="Eba">Eba</option>
					<option name ="food" value="Pounded Yam">Pounded Yam</option>
					<option name ="food" value="Rice & Beans">Rice & Beans</option>
					<option name ="food" value="Plantain">Plantain</option>
					<option name ="food" value="Wheat">Wheat</option>
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
					<option value="Moi-Moi">Moi-Moi</option>
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
					<option value="Yam Pottage">Yam Pottage</option>
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
					<noscript><input type="submit" name="food"></noscript>
				</form>
				</span>
				<h5 align = "right"><a href = "index.php">Home</a>&nbsp;&nbsp;
					<?php 
							if(@$_SESSION['auth'] == "yes"){
							echo"Hello, {$_SESSION['logname']}&nbsp;&nbsp;&nbsp;&nbsp;<font size = '+1'><a href='Shop_cart.php'><span class='glyphicon glyphicon-shopping-cart'></span></a></font>&nbsp;&nbsp;&nbsp;<a href='logout.php'>Logout</a>";
						}
						else{
							echo "<a href = 'Login.php'>Login/Signup</a>";}
					?>			
				</h5>
			</div><!--/.nav-collapse -->
		</div>	
	</nav>
</header>

<main id="main">
	<div class="container">
			<div class="col-sm-8 col-sm-offset-2" align="center">
						<form enctype="multipart/form-data" action="blog-process.php" method="POST" id="commentform" class="">
						<?php
						if(isset($message)) 
							{
								echo "<p style=\'font-weight: bold; font-style: italic; font-size: 90%; color: red\'> $message</p>";
							}
						?>
							<div class="form-group">
								<label for="inputName">Full Name</label>
								<input type="text" name="customer_name" class="form-control" id="inputName" placeholder="Enter your name...">
							</div>
							<div class="form-group">
								<label for="inputEmail">Email address <i class="text-danger">*</i></label>
								<input type="email" name="customer_email" class="form-control" id="inputEmail" placeholder="Enter your email...">
							</div>
							<div class="form-group">
								<label for="inputPhone">Phone Number</label>
								<input type="nane" name="customer_phone" class="form-control" id="inputPhone" placeholder="Phone...">
							</div>

						<div class="form-group">
								<label for="inputTime">Select Restaurant and Order Item</label>
<select id="restaurant" name="restaurant" class="combobox form-control">
  <option value="">Select Restaurant--</option>
    <option value="Any">Any</option>
  <option value="ABC Restaurant">ABC Restaurant</option>
  <option value="Angies Place">Angies Place</option>
    <option value="Favor Restaurant">Favor Restaurant</option>
     <option value="Ti Oluwa Ni Le Restaurant">Ti Oluwa Ni Le Restaurant</option>  
     </select>
<br>

<select id="item" name="item" class="combo form-control">
  <option value="">Select Order Item--</option>
  <option value="White Rice - NGN500" class="ABC Restaurant">White Rice - NGN500</option>
  <option value="Jollof Rice - NGN500" class="ABC Restaurant">Jollof Rice - NGN500</option>
  <option value="Fried Rice - NGN500" class="ABC Restaurant">Fried Rice - NGN500</option>
  <option value="Plantain Pottage - NGN500" class="ABC Restaurant">Plantain Pottage - NGN500</option>
  <option value="Yam Pottage - NGN500" class="ABC Restaurant">Yam Pottage - NGN500</option>
  <option value="Moi-moi -300NGN" class="ABC Restaurant">Moi-moi -300NGN</option>
  <option value="Macaroni - NGN400" class="ABC Restaurant">Macaroni - NGN400</option>
  <option value="Spagetti - NGN400" class="ABC Restaurant">Spagetti - NGN400</option>
  <option value="Plantain - NGN100" class="ABC Restaurant">Plantain - NGN100</option>
  <option value="Beans - NGN200" class="ABC Restaurant">Beans - NGN200</option>
  <option value="Beef Bread - NGN250" class="ABC Restaurant">Beef Bread - NGN250</option>
  <option value="Super Roll - NGN300" class="ABC Restaurant">Super Roll - NGN300</option>
  <option value="Sausage Roll - NGN150" class="ABC Restaurant">Sausage Roll - NGN150</option>
  <option value="Beef Roll - NGN250" class="ABC Restaurant">Beef Roll - NGN250</option>
  <option value="Egg Roll - 200" class="ABC Restaurant">Egg Roll - 200</option>
  <option value="Lacmont Roll - NGN200" class="ABC Restaurant">Lacmont Roll - NGN200</option>
  <option value="Donut - NGN150" class="ABC Restaurant">Donut - NGN150</option>
  <option value="Meat Pie - NGN200" class="ABC Restaurant">Meat Pie - NGN200</option>
  <option value="Fish Roll - NGN250" class="ABC Restaurant">Fish Roll - NGN250</option>
  <option value="Burger - NGN300" class="ABC Restaurant">Burger - NGN300</option>
  <option value="Chicken Pie - NGN200" class="ABC Restaurant">Chicken Pie - NGN200</option>
  <option value="Meat Pie - NGN250" class="Angies Place">Meat Pie - NGN250</option>
  <option value="Sliced Cake - NGN150" class="Angies Place">Sliced Cake - NGN150</option>
  <option value="Cupcake - NGN200" class="Angies Place">Cupcake - NGN200</option>
  <option value="Beef Sandwich - NGN550" class="Angies Place">Beef Sandwich - NGN550</option>
  <option value="Donut - NGN70" class="Angies Place">Donut - NGN70</option>
  <option value="Cookies - NGN150" class="Angies Place">Cookies - NGN150</option>
  <option value="Semo - NGN100" class="Favor Restaurant">Semo - NGN100</option>
  <option value="Wheat - NGN100" class="Favor Restaurant">Wheat - NGN100</option>
  <option value="Akpu - NGN100" class="Favor Restaurant">Akpu - NGN100</option>
  <option value="Eba - NGN100" class="Favor Restaurant">Eba - NGN100</option>
  <option value="Egusi Soup - NGN200 (Plus beef)" class="Favor Restaurant">Egusi Soup - NGN200 (Plus beef)</option>
  <option value="Bitter leaf Soup - NGN200 (Plus beef)" class="Favor Restaurant">Bitter leaf Soup - NGN200 (Plus beef)</option>
  <option value="Okro Soup - NGN200 (Plus beef)" class="Favor Restaurant">Okro Soup - NGN200 (Plus beef)</option>

  <option value="Pounded Yam - NGN350 (Plus beef)" class="Ti Oluwa Ni Le Restaurant">Pounded Yam - NGN350 (Plus beef)</option>
    <option value="Wheat - NGN350 (Plus beef)" class="Ti Oluwa Ni Le Restaurant">Wheat - NGN350 (Plus beef)</option>
 <option value="Amala - NGN350 (Plus beef)" class="Ti Oluwa Ni Le Restaurant">Amala - NGN350 (Plus beef)</option>
   <option value="Semo - NGN350 (Plus beef)" class="Ti Oluwa Ni Le Restaurant">Semo - NGN350 (Plus beef)</option>
     <option value="Fresh fish Pepper soup - NGN1000" class="Ti Oluwa Ni Le Restaurant">Fresh fish Pepper soup - NGN1000</option>
     <option value="Vegetable Soup - NGN200" class="Ti Oluwa Ni Le Restaurant">Vegetable Soup - NGN200</option>
     <option value="Egusi Soup - NGN200" class="Ti Oluwa Ni Le Restaurant">Egusi Soup - NGN200</option>
     <option value="Okro Soup - NGN200" class="Ti Oluwa Ni Le Restaurant">Okro Soup - NGN200</option>
     <option value="Ewedu Soup - NGN200" class="Ti Oluwa Ni Le Restaurant">Ewedu Soup - NGN200</option>
     <option value="Beans - NGN200" class="Ti Oluwa Ni Le Restaurant">Beans - NGN200</option>
     <option value="Jollof Rice - NGN450 (Plus beef)" class="Ti Oluwa Ni Le Restaurant">Jollof Rice - NGN450 (Plus beef)</option>
     <option value="White Rice - NGN400 (Plus beef)" class="Ti Oluwa Ni Le Restaurant">White Rice - NGN400 (Plus beef)</option>
     <option value="Pepsi - NGN150" class="Ti Oluwa Ni Le Restaurant">Pepsi - NGN150</option>
     <option value="Mirinda - NGN150" class="Ti Oluwa Ni Le Restaurant">Mirinda - NGN150</option>
     <option value="Fayrouz - NGN150" class="Ti Oluwa Ni Le Restaurant">Fayrouz - NGN150</option>
     <option value="Climax - NGN250" class="Ti Oluwa Ni Le Restaurant">Climax - NGN250</option>
     <option value="Fab Drink - NGN600" class="Ti Oluwa Ni Le Restaurant">Fab Drink - NGN600</option>
     <option value="Maltina - NGN150" class="Ti Oluwa Ni Le Restaurant">Maltina - NGN150</option>
     <option value="Locozade boost - NGN250" class="Ti Oluwa Ni Le Restaurant">Locozade boost - NGN250</option>
     <option value="YO Yogurt - NGN200" class="Ti Oluwa Ni Le Restaurant">YO Yogurt - NGN200</option>
     <option value="Ribena - NGN150" class="Ti Oluwa Ni Le Restaurant">Ribena - NGN150</option>
</select>
<script type="text/javascript">
	
  $("#item").chained("#restaurant");

</script>
							<div class="form-group">
								<label for="inputTime">Select Time Range</label>
								<select class="combobox input-large form-control" name="time" id="inputTime" placeholder="Time...">
                    <option value="AL">9.00am-10.00am</option>
                    <option value="AK">10.00am-11.00am</option>
                    <option value="AZ">11.00am-12.00am</option>
                    <option value="AR">12.00pm-1.00pm</option>
                    </select>
							</div>

						<div class="form-group">
								<label for="inputLocation">Select Pick-Up Location</label>
								<select class="combobox input-large form-control" name="location" id="inputLocation" placeholder="Location...">
                    <option value="AL">Natako Park</option>
                    <option value="AK">Glad Tidings Restaurant</option>
                    <option value="AZ">T-square</option>
                    <option value="AR">Arkansas</option>
                    </select>
							</div>

							<div class="form-group">
								<label for="inputComment">Any Additional Specifications</label>
								<textarea name="comments" class="form-control" rows="6"></textarea>
							</div>

							<div class="row"> 
								<div class="col-md-4 text-right">
								<input type="hidden" name="sent" value="yes" />
  									<input type="submit" class="btn btn-action" name="Submit" value="Submit">
						<br>
						<br>
								</div>
								</div>
						</form>
</div>
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
						Copyright &copy; 2016, &nbsp;&nbsp;&nbsp;Foodie.net.&nbsp;&nbsp;&nbsp;All Rights Reserved </p>
			</div>
	</div>
</footer>
</div>
<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="assets/css/bootstrap.min.js"></script>
<script src="assets/js/template.js"></script>
</body>
</html>