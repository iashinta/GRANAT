
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
    <title>@yield ('Title')</title>
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
        @if (Auth::guest())
        <nav class="gtco-nav sticky-banner" role="navigation">
            <div class="gtco-container">
                
                <div class="row">
                    <div class="col-xs-12 text-center menu-1">
                        <ul>
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="/login">Masuk</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </nav>
    </div>

    @else
    <nav class="gtco-nav sticky-banner" role="navigation">
        <div class="gtco-container">
            
            <div class="row">
                <div class="col-xs-12 text-center menu-1">
                    <ul>
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="/logout">LogOut</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </nav>
    <!-- Big image -->
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

    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
                
    @endif

<!-- Konten dimulai dari sini -->
    @section('konten')
    @show
<!-- Konten berakhir disini -->

    <footer id="gtco-footer" role="contentinfo">
        <div class="gtco-container">
            <div class="row row-p   b-md">

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

