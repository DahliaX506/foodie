<?php
/* File: shop_page_products.inc
* Desc: Displays the products in the catalog for the
* selected category.
*/
$table_heads = array("prod_number" => "Prod. No.", "name" => "Item", "description" => "Description", "price" => "Price", "quantity" => "Quantity");
?>
<?php
echo "<html><head><meta charset='utf-8'>
	<meta name='viewport'    content='width=device-width, initial-scale=1.0'>
	<meta name='description' content='Food Order and Delivery System'>
	<meta name='author'      content='Akhaine Joy Ese (SU12201001)'>
	
	<title>foodie.net - Food Order and Delivery In Lokoja</title>

	<link rel='shortcut icon' href='assets/images/webicon.png'>
	
	<!-- Bootstrap -->
	<link href='assets/css/bootstrap.min.css' rel='stylesheet'>
	<link href='assets/css/bootstrap.min.js' rel='stylesheet'>
	<script src='assets/css/modernizr.js'></script>
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
</style>

		<script type='text/javascript'>
	//javascript function to insert rating plugin
		(function(d, t, e, m){
    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){
                
        RW.init({
            huid: '299990',
            uid: 'a5948f15445a4575a52bfe16c49f5637',
            source: 'website',
            options: {
                'advanced': {
                    'layout': {
                        'align': {
                            'hor': 'center',
                            'ver': 'top'
                        }
                    },
                    'font': {
                        'hover': {
                            'color': '#E17000'
                        },
                        'bold': true,
                        'color': '#E17000'
                    }
                },
                'label': {
                    'background': '#FACDAA'
                },
                'style': 'oxygen',
                'isDummy': false
            } 
        });
        RW.render();
    };
        // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = 'rw-js',
        l = d.location, ck = 'Y' + t.getFullYear() + 
        'M' + t.getMonth() + 'D' + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf('DBG=') > -1) ? '' : '.min'),
        a = ('https:' == p ? 'secure.' + m + 'js/' : 'js.' + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = 'text/javascript';
    rw.src = p + '//' + a + 'external' + f + '.js?ck=' + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), 'script', 'rating-widget.com/'));
</script>

	</head>
	<body class='home'>\n
	<div class = 'body1'>
<header id='header' style = 'height: 110px;'>
<div id='head1'>
	<!-- Start WOWSlider.com BODY section -->
<div id='wowslider-container1'>
<div class='ws_images'><ul>
		<li><img src='data1/images/food4.jpg' alt='foodie.net' title='foodie.net' id='wows1_0'/></li>
		<li><img src='data1/images/food2.jpg' alt='foodie.net' title='foodie.net' id='wows1_1'/></li>
		<li><img src='data1/images/pic2.jpg' alt='foodie.net' title='foodie.net' id='wows1_2'/></li>
		<li><img src='data1/images/food1.jpg' alt='foodie.net' title='foodie.net' id='wows1_3'/></li>
		<li><img src='data1/images/food03.jpg' alt='foodie.net' title='foodie.net' id='wows1_4'/></li>
		<li><img src='data1/images/food.jpg' alt='foodie.net' title='foodie.net' id='wows1_5'/></li>
		<li><img src='data1/images/food5.jpg' alt='foodie.net' title='foodie.net' id='wows1_6'/></li>
		<li><img src='data1/images/food7.jpg' alt='image slider' title='foodie.net' id='wows1_7'/></a></li>
		<li><img src='data1/images/fooddelivery1024x683.jpg' alt='foodie.net' title='foodie.net' id='wows1_8'/></li>
	</ul></div>
	<div class='ws_bullets'><div>
		<a href='#' title='foodie.net'><span><img src='data1/tooltips/food4.jpg' alt='foodie.net'/>1</span></a>
		<a href='#' title='foodie.net'><span><img src='data1/tooltips/food2.jpg' alt='foodie.net'/>2</span></a>
		<a href='#' title='foodie.net'><span><img src='data1/tooltips/pic2.jpg' alt='foodie.net'/>3</span></a>
		<a href='#' title='foodie.net'><span><img src='data1/tooltips/food1.jpg' alt='foodie.net'/>4</span></a>
		<a href='#' title='foodie.net'><span><img src='data1/tooltips/food03.jpg' alt='foodie.net'/>5</span></a>
		<a href='#' title='foodie.net'><span><img src='data1/tooltips/food.jpg' alt='foodie.net'/>6</span></a>
		<a href='#' title='foodie.net'><span><img src='data1/tooltips/food5.jpg' alt='foodie.net'/>7</span></a>
		<a href='#' title='foodie.net'><span><img src='data1/tooltips/food7.jpg' alt='foodie.net'/>8</span></a>
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
			echo"Hello, <a href ='profile.php'>{$_SESSION['logname']}</a>&nbsp;&nbsp;&nbsp;&nbsp;<font size = '+1'><a href='Shop_cart.php'> 
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
</header>\n";
echo"	<main id='main'>

	<div class='container'>
		<div class='row section recentworks topspace'>\n";
echo "<h2 class='section-title'><font color = '#CC6633;'><span>{$_POST['interest']}</span></h2>\n";
echo "<p style='text-align: right'>($n_products products found)\n</font>\n<a href='#0' class='cd-cart'><span></span></a>\n";
echo "<div class = 'table-responsive'><table class = 'table' style = 'color:#781800;'>\n";
echo "<thead>\n<tr>\n";
foreach($table_heads as $heading)
{
echo "<th>$heading</th>";
}
echo "</tr>\n</thead";
echo "<tbody><form action='$_SERVER[PHP_SELF]' method='POST'>\n";
for($i=$n_start;$i<=$n_end;$i++)
{
	echo "<tr>";
echo "<td style='padding-right: .5in;'> {$products[$i]['catalog_number']}</td>\n";
echo "<td>{$products[$i]['name']}<br><div class='rw-ui-container'></div></td>\n";
echo "<td>{$products[$i]['description']}</td>\n";
echo "<td style='text-align: center'> N{$products[$i]['price']}</td>\n";
echo "<td style='text-align: center'><input type='text' name='item{$products[$i]['catalog_number']}' value='0' size='4'></td>\n";
echo "</tr>";
}
echo "<tr><input type='hidden' name='n_end' value='$n_end'>\n";
echo "<input type='hidden' name='interest' value='$_POST[interest]'>\n";
echo "
<td colspan='2' style='padding: 5'> <input class = 'btn btn-default' type='submit' value='Select another Restaurant'></td>\n";
echo "<td><input class = 'btn btn-default' type='submit' name='Products' value='Add To Cart'>";
echo "<td colspan='3' style='text-align: right'>\n";

if($n_end > $n_per_page)
{
echo "<input class = 'btn btn-default' type='submit' name='Products' value='Previous'>\n";
}
if($n_end < $n_products)
{
echo "<input class = 'btn btn-default' type='submit' name='Products' value='Next'>\n";
}
echo "</td></form></tr></tbody></table></div></div></main>\n	
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
			
			<div class='col-md-2 widget'>
				<h3 class='widget-title'>INFORMATION</h3>
				<div class='widget-body'>
						<li>About </li>
						<li>Terms of Use</li>
						<li>FAQ</li>
						<li>Privacy Policy</li>
						<li>Feedback</li>
						<li>Help</li>
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
<script src='js/jquery-2.1.4.js'></script>
<script src='assets/js/template.js'></script>
<script src='assets/css/main.js'></script> <!-- Resource jQuery -->
</body>
</html>\n";
?>