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
	
	<title>Dahlia's Food Blog</title>

	<link rel="shortcut icon" href="assets/images/webicon.png">
	
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="assets/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
    <link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Boogaloo' rel='stylesheet' type='text/css'>
	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/styles.css">

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
<style>
			/* Include the webfont through a @font-face declaration */
			@font-face {
			    font-family: 'Sofia';
			    src: url('assets/fonts/sofia-regular-webfont.woff') format('woff'),
			         url('assets/fonts/sofia-regular-webfont.ttf') format('truetype');
			}

			h1{
				font: normal 36px Sofia, serif;
				color: red;
				font-weight: 900;
			}
			h2{
				font: normal 20px Sofia, serif;
				color: red;
				font-weight: 500;
				margin-top: -10px;
			}
		</style>
</head>
<body class="home">
<div class = "blog">
<div  style="font-family:Alice; height:180px;  background: url(assets/images/health1.jpg); background-repeat:no-repeat; background-size:cover; color:#FFFFCC;">
					<br>
					<div style="background-color:#CCCC99; opacity:0.6; "><h1 align="right">Dahlia's Signature&nbsp;&nbsp;</h1>
					<h2 align="right">Eat Healthy, Live Wealthy&nbsp;</h2>
				<font size="+2" color="#FFFFCC"><p align="right">
				<a href="index.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="create-post.php">Create Post</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="help.html">Help</a>&nbsp;&nbsp;
				</font></div>
				</p>
				</div>
<main id="main">

	<div class="container">
		<div class="row section featured topspace">
			<aside class="col-sm-6 col-md-3">
															
<article class = "post" style="background-color:#FFCC99; ">
<header class="entry-header">
<div class="entry-meta">
 							<span class="posted-on"><time class="entry-date published" date="2013-06-17"><font color = "red">FEATURED</font></time></span>			
 						</div> 
<h1 class = "entry-title"><a href = "">Recipe Of The Day</a></h1>
</header>
					<div class="entry-content"> 
					<h3 align="center"><font color = "red">Kunun Aya "Tigernuts Milk"</font></h3>
						<p><img src="assets/images/tigernuts milk.png"><a href="blog-page3.php" class="more-link">Continue reading&#8230;</a></p>
					</div> 
</article>
<br>
<section class="wrapper">
				<div id="ad-2">
					<h2>Travelling<br />and<br />hungry?</h2>
					<ul id="boat">
						<li>
							<div id="question-mark"></div>
						</li>
					</ul>
					<ul id="water">
						<li id="water-back"></li>
						<li id="water-front"></li>
					</ul>
					<div id="content">
						<h3>Relax<br />Let us secure your meal ahead for you!</h3>
						<br><br><br><br><br><br><a href="#">Place Advanced Order</a>
					</div>
				</div>
            </section>  
           <br>
            <br>
           <a href="blog-page3.php"><img src="assets/images/health tips.png"></a>
</aside>
 				<div class="col-sm-6 col-md-8" style="margin-left:40px;">
 				<article class="post">
					<header class="entry-header">
 						<div class="entry-meta"> 
 							<span class="posted-on"><time class="entry-date published" date="2016-04-17">April 17, 2016</time></span>			
 						</div> 
 						<h1 class="entry-title">Examining Essential Oils</h1>
					</header> 
					<div class="entry-content"> 
						<p>Using essential oils for healing purposes is an age-old practice, but these ancient oils have recently seen a reemergence in many medicine cabinet appearances all over the country. Claiming to fix a wide variety of ailments, these oils are sold in major stores, websites, and even through home shows. How is the average consumer to know if these tiny jars of oil are miracles in a bottle or merely modern day snake oil? Our helpful guidelines will help savvy, health-conscious consumers make informed purchasing decisions.<a href="blog-page3.php" class="more-link">Continue reading&#8230;</a></p>
					</div> 
				</article><!-- #post-## -->
											
				<article class="post">
					<header class="entry-header">
 						<div class="entry-meta"> 
 							<span class="posted-on"><time class="entry-date published" date="2016-04-17">April 17, 2016</time></span>			
 						</div> 
 						<h1 class="entry-title">Five Healthy Nuts</h1>
					</header> 
					<div class="entry-content"> 
						<p>Here is a list of some of the healthiest nuts and some (not all) of the most important vitamins and minerals in each.

Healthy Nuts<br><br>
1) Walnuts<br>
Walnuts are a nutritional powerhouse. They are good for the heart and the brain. They are loaded with the antioxidant “ellagic acid” and other disease fighting polyphenols. Walnuts are also one of the best food sources of Omega-3 fatty Acids. The protein in walnuts contains many essential amino acids.
<br>Here is a look at the nutritional value of walnuts for each 100 grams.

<br>Calories: 654
<br>Carbohydrates: 13.7 g
<br>Fats: 65.2 g (including Omega-3 fatty acids: 9079 mg)
<br>Protein: 15.2 g

<br>Most Important Vitamins and Minerals in Walnuts
<br>Copper: 79% of recommended daily intake (RDI)
<br>Magnesium: 40% of RDI
<br>Manganese: 171% of RDI</p>
					</div> 
				</article><!-- #post-## -->
											
				<article class="post">
					<header class="entry-header"> 
						<div class="entry-meta"> 
							<span class="posted-on"><time class="entry-date published" date="2016-04-04">April 4, 2016</time></span>			
						</div>
						<h1 class="entry-title">Does Reduced Salt Consumption Do More Harm Than Good?</h1>
					</header>
					<div class="entry-content">
						<p>The excellent science writer Gary Taubes wrote a very interesting op-ed piece in the Sunday New York Times (June 3, 2012) about salt. The crux of the discussion is this: The conventional wisdom for decades is that salt is bad and is a cause of high blood pressure, causes hypertension and heart disease, and raises the risk of premature death. However, Taubes points out that the evidence of these negative side effects of salt are significantly overblown and, possibly, just flat out incorrect.
Reduced Salt Consumption Do More Harm Than Good?The eat-less-salt recommendation, he suggests, is based on a suspect interpretation of the science. He indicates these recommendations are "surprisingly controversial — and difficult to defend"…"because the evidence to support it has always been so weak."<a href="blog-page3.php" class="more-link">Continue reading&#8230;</a></p>
					</div>
 				</article><!-- #post-## -->				

				<article class="post">
					<header class="entry-header">
 						<div class="entry-meta"> 
 							<span class="posted-on"><time class="entry-date published" date="2013-03-20">March 20, 2013</time></span>			
 						</div>
						<h1 class="entry-title">Is Coffee Healthy?</h1>
					</header>
					<div class="entry-content">
						<p>There have been conflicting reports over the past few years as to whether drinking coffee is healthy or unhealthy. Here is an overview of recent news on the subject.
The possible increased risk of high blood pressure and heart trouble has been feared as a potential negative side effect of coffee consumption. And there have been studies that indicate a connection between caffeine and higher bold pressure. However, these studies were done with soft drinks containing caffeine and not coffee. Some studies seem to indicate that the healthy benefits of coffee may offset the potential blood pressure raising effects of the caffeine.
In fact, an Iowa Women’s Healthy study demonstrated that 4 to 5 cups of coffee per day actually lowered heart disease deaths by 19 percent. Other studies demonstrated similar conclusions. There have been other studies that suggest coffee may lower the risk of cancer, diabetes and heart disease. And, other studies have shown that coffee may help prevent stroke and Parkinson’s disease.
And the news gets better. Recent studies demonstrate that drinking around 3 cups of coffee per day may help against memory decline by delaying the onset of Alzheimer’s disease, and other forms of dementia.“These intriguing results suggest that older adults with mild memory impairment who drink moderate levels of coffee – about 3 cups a day – will not convert to Alzheimer’s disease or at least will experience a substantial delay before converting to Alzheimer's," said Dr. Chuanhai Cao, a neuroscientist at the University of South Florida Health Byrd Alzheimer's Institute, who was the author of the study. He added… "The results from this study, along with our earlier studies in Alzheimer's mice, are very consistent in indicating that moderate daily caffeine/coffee intake throughout adulthood should appreciably protect against Alzheimer's disease later in life." You can find out more <a href ="http://www.eurekalert.org/pub_releases/2012-06/ip-hbc060412.php">here</a></p>
					</div>
				</article><!-- #post-## --> 
				
			</div> 
		</div>

		<center class="">
			<ul class="pagination">
				<li class="active"><a href="">1</a></li>
				<li><a>2</a></li>
				<li><a>3</a></li>
				<li><a href="blog-page1.php">&raquo;</a></li>
			</ul>
		</center>
	

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
			
			<div class="col-md-2 widget">
				<h3 class="widget-title">INFORMATION</h3>
				<div class="widget-body">
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
