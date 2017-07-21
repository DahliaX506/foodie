<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Food Order and Delivery System">
	<meta name="author"      content="Akhaine Joy Ese (SU12201001)">
	
	<title>foodie.net - User Profile</title>

	<link rel="shortcut icon" href="assets/images/webicon.png">
	
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.no-icons.min.css" rel="stylesheet">
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
	<h1 style="background-color: #fff; opacity: 0.7;">&nbsp;&nbsp;&nbsp;&nbsp;foodie.net - User Profile</h1>
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
							echo "<a href = 'login.php'>Login/Signup</a>";}
					?>			
				</h5>
			</div><!--/.nav-collapse -->
		</div>	
	</nav>
</header>

<main id="main">
	<div class="container">
			<div class="col-sm-8 col-sm-offset-2">
			<h1>PROFILE</h1>
			<ol><li>Enter the file name of the product picture you want to upload or use the browse button to navigate to the picture file.</li>
<li>When the path to the picture file shows in the text field, click the Upload Picture button.</li>
</ol>
<div style='text-align: center'><hr />
<form enctype="multipart/form-data" action="profile_process.php" method="POST">
<p><input type="hidden" name="MAX_FILE_SIZE" value="500000" />
<input type="file" name="pix" size="60" /></p>
<p><input type="submit" name="Upload" value="Upload Picture" /></p>
</form></div>
						<form enctype="multipart/form-data" action="blog-process.php" method="POST" id="commentform" class="">
						<?php
						if(isset($message)) 
							{
								echo "<p style=\"font-weight: bold; font-style: italic; font-size: 90%; color: red\"> $message</p>";
							}
						?>
							<div class="form-group">
								<label for="inputName">Name</label>
								<input type="text" name="author" class="form-control" id="inputName" placeholder="Enter your name...">
							</div>
							<div class="form-group">
								<label for="inputEmail">Email address <i class="text-danger">*</i></label>
								<input type="email" name="email" class="form-control" id="inputEmail" placeholder="Enter your email...">
							</div>
							<div class="form-group">
								<label for="inputWeb">Article Title</label>
								<input type="nane" name="title" class="form-control" id="inputWeb" placeholder="Title...">
							</div>
							<div class="form-group">
								<label for="inputComment">Article Body</label>
								<textarea name="article_body" class="form-control" rows="6"></textarea>
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
						Copyright &copy; 2016, &nbsp;&nbsp;&nbsp;Foodie.net.&nbsp;&nbsp;&nbsp;All Rights Reserved<br> 
						Design: Dahlia Designs - <a href="http://www.gettemplate.com" rel="designer">gettemplate.com</a> </p>
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
