
<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GrAnaT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<div class="page-inner">

	<div id="head-top" style="position: absolute; width: 100%; top: 0; ">
		<div class="gtco-top">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-xs-6">
						<div id="gtco-logo"><a href="index.html">GrAnaT <em>.</em></a></div>
					</div>
					<div class="col-md-6 col-xs-6 social-icons">
						<ul class="gtco-social-top">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>	
		</div>
		@guest
		<nav class="gtco-nav sticky-banner" role="navigation">
			<div class="gtco-container">
				
				<div class="row">
					<div class="col-xs-12 text-center menu-1">
						<ul>
							<li class="active"><a href="/">Home</a></li>
							<li class="has-dropdown">
								<a href="services.html">Services</a>
								<ul class="dropdown">
									<li><a href="#">Branding</a></li>
									<li><a href="#">Development</a></li>
									<li><a href="#">Web Design</a></li>
									<li><a href="#">Marketing</a></li>
								</ul>
							</li>
							<li><a href="portfolio.html">Portfolio</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="/signin">Log In</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</nav>
	</div>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/h31.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-mt-15em">
				<div class="col-md-12 mt-text text-center animate-box" data-animate-effect="fadeInUp">
					<h1>SIGN YOUR<strong> BAND IN</strong></h1>	
					<h2>Show Your Talent</h2>
					<div class="text-center"><a href="/register" class="btn btn-primary">Daftar</a></div>
				</div>
			</div>
		</div>
	</header>

	@else
	<nav class="gtco-nav sticky-banner" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-xs-12 text-center menu-1">
					<ul>
						<li class="active"><a href="/home">Home</a></li>
						<li class="has-dropdown">
							<a href="services.html">Services</a>
							<ul class="dropdown">
								<li><a href="#">Branding</a></li>
								<li><a href="#">Development</a></li>
								<li><a href="#">Web Design</a></li>
								<li><a href="#">Marketing</a></li>
							</ul>
						</li>
						<li><a href="portfolio.html">Portfolio</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="/logout">LogOut</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/h31.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-mt-15em">
				<div class="col-md-12 mt-text text-center animate-box" data-animate-effect="fadeInUp">
					<h1>WELCOME<strong> {{ Auth::user()->name }}</strong></h1>	
					<h2>Show Your Talent</h2>
				</div>
			</div>
		</div>
	</header>
	@endguest

	<div class="flex-section gtco-gray-bg">
		<div class="col-1">
			<div class="text">

				<div class="row row-pb-sm">
					<div class="col-md-12">
					<h2>Creative Minds</h2>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae accusamus, fugiat ut! Ducimus accusamus, quos. Esse ea iste, expedita atque quod quo maxime, saepe! Architecto unde aliquid atque excepturi dolores dolore fugit rem recusandae amet a, molestiae et! Dolore, laborum?</p>
					<p>Quaerat quisquam quasi minima at molestias porro accusantium qui atque doloremque ab, odio tempora obcaecati cumque veritatis quo, assumenda nihil dolor optio enim fugit accusamus laborum. Autem neque dignissimos, corrupti, fugiat labore nisi illo, delectus, alias natus optio distinctio culpa!</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<ul class="check-li">
							<li>Quaerat quisquam quasi</li>
							<li>Accusantium qui atque doloremque</li>
							<li>Expedita atque quod</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="check-li">
							<li>Quaerat quisquam quasi</li>
							<li>Accusantium qui atque doloremque</li>
							<li>Expedita atque quod</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-2 flex-img" style="background-image: url(images/img_1.jpg);"></div>
	</div>
	
	<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_2.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1 class="animate-box">Never Stop Learning</h1>
				</div>	
			</div>
		</div>
	</div>

	<div class="flex-section reverse">
		<div class="col-1">
			<div class="text">

				<div class="row row-pb-sm">
					<div class="col-md-12">
						<h2>Expertise &amp; Beliefs</h2>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae accusamus, fugiat ut! Ducimus accusamus, quos. Esse ea iste, expedita atque quod quo maxime, saepe! Architecto unde aliquid atque excepturi dolores dolore fugit rem recusandae amet a, molestiae et! Dolore, laborum?</p>
						<p>Quaerat quisquam quasi minima at molestias porro accusantium qui atque doloremque ab, odio tempora obcaecati cumque veritatis quo, assumenda nihil dolor optio enim fugit accusamus laborum. Autem neque dignissimos, corrupti, fugiat labore nisi illo, delectus, alias natus optio distinctio culpa!</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<ul class="check-li">
							<li>Quaerat quisquam quasi</li>
							<li>Accusantium qui atque doloremque</li>
							<li>Expedita atque quod</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="check-li">
							<li>Quaerat quisquam quasi</li>
							<li>Accusantium qui atque doloremque</li>
							<li>Expedita atque quod</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
		<div class="col-2 flex-img" style="background-image: url(images/img_bg_2.jpg);"></div>
	</div>

	<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_3.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1 class="animate-box">Quality Over Quantity</h1>
				</div>	
			</div>
		</div>
	</div>
	
	<div class="overflow-hid"> 
		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2>Services</h2>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="row">

					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="#" class="gtco-card-item">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="images/img_1.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="gtco-text">
								<h2>Data Analytics</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
								<p><span class="btn btn-primary">Learn more</span></p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="#" class="gtco-card-item">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="images/img_2.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="gtco-text">
								<h2>Web Development</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
								<p><span class="btn btn-primary">Learn more</span></p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="#" class="gtco-card-item">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="images/img_3.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="gtco-text">
								<h2>Branding</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
								<p><span class="btn btn-primary">Learn more</span></p>
							</div>
						</a>
					</div>


					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="#" class="gtco-card-item">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="images/img_1.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="gtco-text">
								<h2>eCommerce Development</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
								<p><span class="btn btn-primary">Learn more</span></p>
							</div>
						</a>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="#" class="gtco-card-item">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="images/img_2.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="gtco-text">
								<h2>Design &amp; UX</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
								<p><span class="btn btn-primary">Learn more</span></p>
							</div>
						</a>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="#" class="gtco-card-item">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="images/img_3.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="gtco-text">
								<h2>Strategy</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
								<p><span class="btn btn-primary">Learn more</span></p>
							</div>
						</a>
					</div>

				</div>
			</div>
		</div>
		
		<div id="gtco-features">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
						<h2>How We Work</h2>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i>1</i>
							</span>
							<h3>Design</h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i>2</i>
							</span>
							<h3>Develop</h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i>3</i>
							</span>
							<h3>Launch</h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident.</p>
						</div>
					</div>
					

				</div>
			</div>
		</div>
	</div>


	<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>We have high quality services that you will surely love!</h1>
				</div>	
			</div>
		</div>
	</div>

	<div id="gtco-counter" class="gtco-section">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Facts</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>

			<div class="row">
				
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="196" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Clients</span>

					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Projects</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="12402" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Coffee</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="12202" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Line of codes</span>

					</div>
				</div>
					
			</div>
		</div>
	</div>

	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Subscribe</h2>
					<p>Be the first to know about the new templates.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Your Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About Us</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos molestias quod sint ipsum possimus temporibus officia iste perspiciatis consectetur in fugiat.</p>
						<p><a href="#">Learn more...</a></p>
					</div>
				</div>

				<div class="col-md-4 col-md-push-1">
					<div class="gtco-widget">
						<h3>Services</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Data Analytics</a></li>
							<li><a href="#">Web Development</a></li>
							<li><a href="#">Branding &amp; Identity</a></li>
							<li><a href="#">eCommerce Development</a></li>
							<li><a href="#">Design &amp; UX</a></li>
							<li><a href="#">Strategt</a></li>
						</ul>
					</div>
				</div>

				

				<div class="col-md-3 col-md-push-1">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@GetTemplates.co</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://GetTemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

