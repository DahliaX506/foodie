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
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Food Order and Delivery System">
	<meta name="author"      content="Akhaine Joy Ese (SU12201001)">
	
	<title>Food Order and Delivery In Lokoja</title>

	<link rel="shortcut icon" href="assets/images/webicon.png">
	
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<script src="assets/js/awesomplete.js" async></script>

	<!-- Icons -->
	<link href="assets/css/font-awesome.css" rel="stylesheet">
	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/animate.css">
    <link href="assets/css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/styles.css">
	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->

		<style>

			/* Include the webfont through a @font-face declaration */
			@font-face {
			    font-family: 'Alice';
			    src: url('assets/fonts/alice.woff2') format('woff2');
			}

			h1{
				font: normal 36px Alice, serif;
				color: #990000;
				font-weight: 900;
				text-align:center;
				padding:20px 0;
			}
			@font-face {
			    font-family: 'Sofia';
			    src: url('assets/fonts/sofia-regular-webfont.ttf') format('truetype');
			}

			h2{
				font: normal 36px Sofia, serif;
				text-align:center;
				padding:20px 0;
				color:#CC6633
			}

		</style>

	<script type="text/javascript">
	//javascript function to insert rating plugin
		(function(d, t, e, m){
    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){
                
        RW.init({
            huid: "299990",
            uid: "a5948f15445a4575a52bfe16c49f5637",
            source: "website",
            options: {
                "advanced": {
                    "layout": {
                        "align": {
                            "hor": "center",
                            "ver": "top"
                        }
                    },
                    "font": {
                        "hover": {
                            "color": "#E17000"
                        },
                        "bold": true,
                        "color": "#E17000"
                    }
                },
                "label": {
                    "background": "#FACDAA"
                },
                "style": "oxygen",
                "isDummy": false
            } 
        });
        RW.render();
    };
        // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() + 
        "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));
	</script>
</head>

<body class="home">
	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">foodie.net</a>
    </div>
    <div>
      <div class="navbar-collapse collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#services">Services</a></li>
          <li><a href="#specialties">Featured</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#contact">Contact</a></li>
			</ul>
        <span style="float:right;">
        <form action="food-search.php" method="POST">
				<input class="awesomplete" type="text" name="food" onchange="this.form.submit()" list = "mylist" placeholder = "    Search Food...">
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
   </div>   </div>
  </div>
</nav>    

<div class="b1">
<header id="header">
	<div id="head" class="parallax" parallax-speed="1">
				<div class="text-center">	
					<img class="intro wow zoomIn" wow-data-delay="0.4s" wow-data-duration="0.9s" style="background-color: #FFFFCC; opacity: 0.9; border-radius: 15px;" src="assets/images/logo1.png"><br><br>
					<a class="btn btn-default" role="button" href="orderCategory.php"><font size="+1" face="Alice">ORDER BY<br> CATEGORY</font></a>
			&nbsp;<a class="btn btn-default" role="button" href="orderRestaurants.php"><font size="+1" face="Alice">ORDER BY<br> RESTAURANT</font></a>
				</div>
	</div>
<div class="wrapper"></div>
</header>

<br>
<main id="main">
<h5 align = "right"><?php 
			if(@$_SESSION['auth'] == "yes"){
			echo"Hello, <a href ='profile.php'>{$_SESSION['logname']}</a>&nbsp;<font size = '+1'><a href='Shop_cart.php'> <span class='glyphicon glyphicon-shopping-cart'></span> </a></font>&nbsp;&nbsp;&nbsp;<a href='logout.php'>Logout</a>";
		}
		else{
			echo "<a href = 'login.php'>Login/Signup&nbsp;&nbsp;&nbsp;</a>";
		}
			?>			
			</font>
			</h5>
<div class="container">
<font face="Alice">
		<div class="row section featured topspace">
		<h2 class="section-title wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms"><span><font  color = "#CC6633">WITH FOUR EASY WORKING STEPS</font></span></h2>
			<div class="row">
				<div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="1000ms">
					<h3 class="text-center"><font color="blue">Select Order Type</font></h3>
					<span style = "float:left">
						<img src="assets/images/start.png" style="position:relative; top:-20px;">
					</span>
					<p align="left"><font color="blue">Choose to Order By Category/ By Restaurant</font></p>
				</div>
				<div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="1500ms">
					<h3 class="text-center"><font color="green">Place Order On Food Item</font></h3>
					<span style = "float:left">
						<img src = "assets/images/order.png" style="position:relative; top:-10px;">
					</span>
					<p align="left"><font color="green">Select your Order Item and place Order</font></p>
				</div>
				<div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="2000ms">
					<h3 class="text-center"><font color="#CCCC00;">We Deliver to Your Location</font></h3>
					<span style = "float:left">
						<img src="assets/images/deliver.png" style="position:relative; top:-15px;">
					</span>
					<p align="left"><font color="#CCCC00;">We deliver your Order to Your Registered location</font></p>
				</div>
				<div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="2500ms">
					<h3 class="text-center"><font color="#CC3300;">Pay On-Delivery and Enjoy!</font></h3>
					<span style = "float:left">
						<img src="assets/images/paycash.png" style="position:relative; top:-15px;">
					</span>
					<p align="left"><font color="#CC3300;">Pay on-delivery of food items, sit back and enjoy!</font></p>
				</div>
			</div>
		</div><!-- / section -->

	<!--about us-->
	<div  id="services" class="container-fluid">
	<section class="aboutus">
		<div class="heading text-center wow fadeInUp" data-wow-duration="1000ms">
			<img src="assets/images/sep.png" alt="">
			<h2>Our Services</h2>
			<font size = "+1">Have you ever been so busy that you didnt have spare time to take breakfast in the morning or prepare lunch or dinner? Do you crave for spontaneous fast food delicacies at your busiest hours? Foodie.net is your key to a door of opportunities allowing you to pick from our different menus as many food items as you desire saving you that well deserved time and energy. Order Your Favorite Meals At Original Prices...Delivered Directly To You! </font>
		</div>			
		<div class="row">
			<div class="col-md-6">
				<div class="papers text-center wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
				<a href="advanced_order.php"><h1 style="font-variant:small-caps;">Advanced Order</h1></a><br>
						<section class="wrapper">
			<div id="ad-1">
			<div id="content">
			<h2>Travelling and Hungry?</h2>
			<h3>Relax - Let us secure your meal ahead for you!</h3>
			</div>
			<div id="clouds">
			<ul id="cloud-group-1">
			<li class="cloud-1"></li>
			<li class="cloud-2"></li>
			<li class="cloud-3"></li>
			</ul>
			<ul id="cloud-group-2">
			<li class="cloud-1"></li>
			<li class="cloud-2"></li>
			<li class="cloud-3"></li>
			</ul>
			</div>
			<ul id="boat">
			<li>
			<div id="question-mark"></div>
			</li>
			</ul>
			<ul id="water">
			<li id="water-back"></li>
			<li id="water-front"></li>
			</ul>
			</div>
        </section>
        	<p>
				The Advanced Order Service is for our travelling customer who wish to purchase any food items from our featured restaurants. We Provide Order placement, pickup and drop-off to any of our Transit locations. Place Your Advanced Order <a href = "advanced_order.php">Here</a>
				</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="papers text-center wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
					<a href="bulk_order.php"><h1 style="font-variant:small-caps;">Other Orders</h1></a><br>
					<img src="assets/images/bulk order.jpg" style="height: 218px;">
					<p>
						The Bulk Order Service provides a flexible and easier way to order food items in bulk for small to medium range events. <br> Is your desired combination of food items not on our menu? Do you wish to mash up a special combination of your choice. Place your special order as a bulk order. Visit our Bulk order page <a href = "bulk_order.php">Here</a>.
					</p>
				</div>
			</div>
		</div>
	</section>
	</div>
<br><br>
	<!--specialties-->
	<div  id="specialties" class="container-fluid">
	<section class="specialties">
		<div class="heading text-center wow fadeInUp" data-wow-duration="1000ms">
			<img class="dividerline" src="assets/images/sep.png" alt="">
			<h2>Featured Dishes</h2>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="restmenuwrap">
					<h3 class="maincat notopmarg text-center">NIGERIAN</h3>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(assets/images/img1.png)">
						</div>
						<h5>Moi-moi</h5>
						<p>
							A protien filled meal consume either as lunch or dinner. <br>
							Treasures - Glad Tidings - Nnaemeka - Chicken Supreme
						</p>
					</div>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(assets/images/6.jpg)">
						</div>
						<h5>Ogbono Soup</h5>
						<p>
							A variety of Nigerian traditional soups ranging from Vegetable to Ogbono to Oha to Edikaikor. Soups are consumed with Swallows such as Amala, eba, etc.<br>
							Misi T - Promise - Ti Oluwa Ni le - Four Seasons
						</p>
					</div>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(assets/images/5.JPG)">
						</div>
						<h5>Peppersoup</h5>
						<p>
							For a spicy yet delicious treat, Order the Cat fish/ Goat meat Pepper soup meals.<br>
							Moremi - Rakiya Ogbeha - Ti Oulwa Ni Le
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="restmenuwrap">
					<h3 class="maincat notopmarg text-center">FAST FOOD</h3>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(assets/images/chicken-and-chips.jpg)">
						</div>
						<h5>Chicken & Chips</h5>
						<p>
							A delicacy of Fried irish potatoes combbine with Fried chicken.<br>
							Rakiya Ogbeha - Glad Tidings - Misi T
						</p>
					</div>
					<br>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(assets/images/sharwama.jpg)">
						</div>
						<h5>Sharwama</h5>
						<p>
							Chicken, mayonaise, cabbage, sausage, and much more all heated up in one spicy mix and wrapped in unleavened bread.<br>
							Treasures - Misi T
						</p>
					</div>
					<br>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(assets/images/img3.png)">
						</div>
						<h5>Samosa</h5>
						<p>
							Little chunks of assorted meat, garlic, onions, cabbage and more wrapped in dough to make the perfect snack
							Rakiya Ogbeha - Glad Tidings
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="restmenuwrap">
					<h3 class="maincat notopmarg text-center">FOREIGN</h3>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(assets/images/1.Jpeg)">
						</div>
						<p>
							Continental Meal - Serving of Grilled fish in lemon butter sause<br>
							Rakiya Ogbeha
						</p>
					</div>
					<br><br><br><br>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(assets/images/noodles.jpg)">
						</div>
						<p>Chinese Meal - Stir fry Noodles with shredded chicken/ beed with vegetables<br>
						Rakiya Ogbeha
						</p>
					</div>
					<br><br><br><br>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(assets/images/chinese1.jpg)">
						</div>
						<p>
							Chinese Meal - Chicken sweet & sour sause<br>
							Rakiya Ogbeha
						</p>
					</div>
					<br><br><br>
				</div>
			</div>
		</div>
		</section>
	</div>

<section class="specialties">
		<div class="heading text-center wow fadeInUp" data-wow-duration="1000ms">
			<img class="dividerline" src="assets/images/sep.png" alt="">
			<h2>Popular Restaurants</h2>
			<h3>The most popular restaurants based on anonymous Customer Ratings.</h3>
			</div>
			<br>
		<div class="row section featured topspace">
			<div class="row">
				<div class="col-sm-6 col-md-3 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="600ms">
						<center>
						<div class="view view-second" style="margin:0">
						<h4 class="text-center">TREASURES</h4>
					<img align="center" src="assets/images/treasures.jpg" style="width:300px; height:100px;"><br><br>
                <div class="rw-ui-container"><br></div>
                </div>
                </center>
				</div>

				<div class="col-sm-6 col-md-3 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="1000ms">
					<center>
					<div class="view view-second" style="margin:0">
					<h4 class="text-center">MISI T</h4>
					<img src = "assets/images/misiT.png" style="width:300px; height:100px; "><br><br>
                <div class="rw-ui-container"><br></div>
                </div>
						</center>
				</div>

				<div class="col-sm-6 col-md-3 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="1500ms">
						<center>
						<div class="view view-second" style="margin:0">
					<h4 class="text-center">MOREMI</h4>
					<img align="center" src="assets/images/moremi.jpg" style="width:300px; height:100px;"><br><br>
                <div class="rw-ui-container"><br></div>
                </div>
						</center>
				</div>

				<div class="col-sm-6 col-md-3 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="2000ms">
					<center>
					<div class="view view-second" style="margin:0">
					<h4 class="text-center">OSTRICH</h4>
					<img align="center" src="assets/images/ostrich-bakery.jpg" style="width:230px; height:100px;"><br><br>
                <div class="rw-ui-container"><br></div>
						</div>
						</center>
				</div>
			</div>
			</div>
		</section><!-- / section -->
		<br>
		<br>
 		    <section id="faq">
 		    <div class="heading text-center wow fadeInUp" data-wow-duration="1000ms">
			<img class="dividerline" src="assets/images/sep.png" alt="">
			<h2>Frequently Asked Questions</h2>
			</div>
			<br>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 wow fadeInDown">
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Do you accept credit card payments?</a></li>
                                    <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">What happens if order isn't delivered?</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Can I alter order after it has been placed</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">How do I ensure quality of my order?</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">How can I Partner?</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="tab1">
                                        <div class="media">
                                            <div class="media-body">
                                                 <p>Yes, there is an lonine payment option for our customers who wish to make payments online. Simply select Pay Online at order checkout.</p>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane fade active in" id="tab2">
                                        <div class="media">
                                            <div class="media-body">
                                                 <p>We offer 99% assurance that all orders properly placed will be delivered at the appointed time. Despite time and distance constraints, we try to reach your location as soon as possible.
                                                 </p>
                                            </div>
                                        </div>
                                     </div>

                                     <div class="tab-pane fade" id="tab3">
                                        <p>Once order has been submitted and a confirmation messasge has been sent to you, it isnt possible to update once order, except through a direct phone call made to our service center within 10 minutes of order placement! This however attracts an additional charge.</p>
                                     </div>
                                     
                                     <div class="tab-pane fade" id="tab4">
                                        <p>We are aware of possible but less likely lapses on the restaurants part, although we at foodie.net ensure our experts handle your order with utmost care and reliability until it is safely delivered to you.</p>
                                     </div>

                                     <div class="tab-pane fade" id="tab5">
                                        <p>Investors, partners and contributors are always welcome. Please see out Contact center to get in touch. Also email <a href = "mailto:contact.foodie@gmail.com">contact.foodie@gmail.com</a></p>
                                     </div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->

                <div class="col-xs-12 col-sm-4 wow fadeInDown">
                    For further questions, please visit our contact section . Also see Our
                    <ul>
                    	<li>Terms Of Use</li>
                    	<li><a href = "terms_conditions.php">Terms and Conditions</a></li>
                    	<li>Privacy Policy</li>
                    </ul>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->
    <br>
		<br>
		<div aria-busy="true" aria-label="Loading" role="progressbar" class="container-swing">
  		<div class="swing">
    	<div class="swing-l"></div>
    	<div></div>
    	<div></div>
    	<div></div>
    	<div></div>
    	<div></div>
    	<div class="swing-r"></div>
  		</div>
  		<div class="shadow">
    	<div class="shadow-l"></div>
    	<div></div>
    	<div></div>
    	<div></div>
    	<div></div>
    	<div></div>
    	<div class="shadow-r"></div>
  		</div>
 		</div> 
 		<br><br><br>
 		<div id="blog" class="container-fluid">
		<div class="row section featured topspace"><br>
			<h2 class="section-title"><span><font  color = "#CC6633"><a href = "blog.php">From Our Blog</a></font></span></h2>
			<div class="row">
				<div class="col-sm-6 col-md-5">
					<h4 class="text-center" style="font-family: Alice"><strong>Increased Blood Sugar Linked To Cancer in Women</strong></h4>
						<font size="+1" color="#CC6633;">Many highly regarded experts and science writers have increasingly cautioned about the health risks associated with sugar and other fast digesting carbohydrates. Now, the results of a new study have been announced. Read Full Article in <a href = "blog.html">Blog</a></font>
				<br></div>
				<div class="col-sm-6 col-md-3">
						<center><a href="Shop_products_Fastfood.php"><img align="center" src="assets/images/health tips.png" style="width:170px; height:150px;"></a></center>
				<br></div>
				<div class="col-sm-6 col-md-4">
					<h4 class="text-center" style="font-family: Alice"><strong>Is Coffee Healthy?</strong></h4>
					<br>
						<font size="+1" color="#CC6633;">There have been conflicting reports over the past few years as to whether drinking coffee is healthy or unhealthy. Here is an overview of recent news on the subject. Read Full Article in <a href = "blog.html">Blog</a></font>
				<br></div>
		</div>
		</div>
		</div>
		<br>

	<div aria-busy="true" aria-label="Loading" role="progressbar" class="container-swing">
  		<div class="swing">
    	<div class="swing-l"></div>
    	<div></div>
    	<div></div>
    	<div></div>
    	<div></div>
    	<div></div>
    	<div class="swing-r"></div>
  		</div>
  		<div class="shadow">
    	<div class="shadow-l"></div>
    	<div></div>
    	<div></div>
    	<div></div>
    	<div></div>
    	<div></div>
    	<div class="shadow-r"></div>
  		</div>
 		</div> 
<br>
<br>
<br>	
<div id="contact" class="container-fluid">
<section class="contact">
 		<div class="row section featured topspace"><br>
			<h2 class="section-title"><span><font  color = "#CC6633"><a href = "blog.php">Contact Us</a></font></span></h2>
	 <div class="container w960">
      <div class="row">
		<div class="done">
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">×</button>
				Your message has been sent. Thank you!
			</div>
		</div>
       <form method="post" action="" id="contactform">
          <input name="name" type="text" class="contact col-md-6" placeholder="Your Name *" >
          <input name="email" type="email" class="contact noMarr col-md-6" placeholder="E-mail address *" >
          <textarea name="comment" class="contact col-md-12" placeholder="Message *"></textarea>
          <input type="submit" id="submit" class="contact submit" value="Send message">
          <br><a><i class="fa fa-phone"></i> +234 70 52 36 5997</a><br>
          <a><i class="fa fa-phone"></i> +234 81 67 79 7028</a>
        </form>
      </div>
    </div>
    </div>
    </section>
    </div>
		</font>
  			</div>	<!-- /container -->
	</main>

<footer id="footer">
	<div class="container">
	<br>
		<div class="row">
			<div class="col-md-3 widget">
				<h3 class="widget-title">Contact</h3>
				<div class="widget-body">
					<p>+234 23 9873237<br>
						<a href="mailto:contact.foodie@gmail.com">esejoyakhaine@gmail.com</a><br><br>
						56 km, Lokoja-Ajaokuta Road, Kogi State
					</p>	
				</div>
				<h3 class="widget-title">Follow Us</h3>
			<div class="widget-body">
			<a href="#"><i class="fa fa-twitter"></i></a>&nbsp;
			<a href="#"><i class="fa fa-facebook"></i></a>&nbsp;
			<a href="#"><i class="fa fa-linkedin"></i></a>&nbsp;
			<a href="#"><i class="fa fa-pinterest"></i></a>&nbsp;
			<a href="#"><i class="fa fa-flickr"></i></a>&nbsp;
			</div>
			</div>

			<div class="col-md-5 widget">
				<h3 class="widget-title">RESTAURANTS</h3>
				<div class="widget-body">
					<li>Ti Oluwa Ni Le</li>
        			<li>Misi T Restaurant</li>
        			<li>Angies Place</li>
        			<li>Chicken Supreme Restaurant & Confectionery</li>
         			<li>Treasures Restaurant & Confectionery</li>
        			<li>Glad Tidings Restaurant</li>
        			<li>ABC Restaurant</li>
        			<li>Moremi Restaurant</li>
         			<li>Ostrich Bakery</li>
        			<li>Delight Nnaemeka Restaurant</li>
        			<li>Rakiya Ogbehas Place</li>
        			<li>Promise Restaurant</li>
        			<li>Home Cooking Restaurant</li>
         			<li>Confluence Motel & Gardens</li>
        			<li>Four Seasons Restaurant</li>
        			<li>Princess Decent Restaurant</li>
        			<li>Ikechukwu Restaurant</li>  
				</div>
			</div>

			<div class="col-md-2 widget">
				<h3 class="widget-title">INFORMATION</h3>
				<div class="widget-body">
					<li>Terms of Use</li>
					<li>Privacy Policy</li>
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
				Design: Dahlia Designs
			</p>
		</div>
	</div>
</footer>
<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="assets/js/template.js"></script>
<script src="assets/css/jquery.min.js"></script>
<script src="assets/css/bootstrap.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/common.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>
</div>
</body>
</html>