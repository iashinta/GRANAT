<!DOCTYPE html>
<html>
	<head>
		<title>@yield ('Title')</title>
    <link rel="stylesheet" type="text/css" href={{asset('css/style.css')}}>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/icon.png')}}">
<!-- 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="{{asset('js/jquery.min.js')}}"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- Import BS Loacal Template -->
		<link href="{{ asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" >
		<link href="{{ asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" >
		<link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet" type="text/css" >
		<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Metal+Mania" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Atomic+Age" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Marcellus+SC|Raleway" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"> 

		<!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->

		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<!--==========================
 
  <!--==========================
  Header
  ============================-->
  @if (Auth::guest())
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="/"><img src="{{ asset('js\images\index.png')}}" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
<!--         <h1><a href="#hero">GrAnaT</a></h1> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="{{url('news')}}">News</a></li>
          <li><a href="#facts">Important Date</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="{{url('sejarah')}}"   >History</a></li>
          <li><a href="{{url('register')}}"   >Register</a></li>
          <li><a href="{{url('login')}}">Log in</a></li>
          <li><button class="nav-btn">GET TICKET</button></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->
  @else
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="/"><img src="{{ asset('js\images\index.png')}}" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
<!--         <h1><a href="#hero">GrAnaT</a></h1> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
        <li class="menu"><a href="{{url('home')}}">DashBoard</a></li>
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="{{url('news')}}">News</a></li>
          <li><a href="#facts">Important Date</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="{{url('register')}}">{{ Auth::user()->name }}</a></li>
          <li><a href="{{url('logout')}}">Log Out</a></li>
          <li><button class="nav-btn">GET TICKET</button></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
  @endif
<!-- extedned begin-->
  @section('body')
  @show
<!-- extedned end-->
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
      Copyright  &copy; 1994-2018 <strong>GrAnaT&reg; SMFT</strong>. All Rights Reserved.
      </div>
    </div>
    <div class="container-fluid sponsor">
      <div class="title">
        <h3 class="section-title-inverse"><strong>SPONSORED BY</strong></h3>
          <div class="row sponsor-row">

            <div class="col-lg-3 banner">
              <img class=".img-responsive sponsor-img" src="{{ asset('images\S1.jpg')}}">
            </div>
            <div class="col-lg-3 banner">
              <img class=".img-responsive sponsor-img" src="{{ asset('images\S2.jpg')}}">
            </div>
            <div class="col-lg-3 banner">
              <img class=".img-responsive sponsor-img" src="{{ asset('images\S3.jpg')}}">
            </div>
            <div class="col-lg-3 banner">
              <img class=".img-responsive sponsor-img" src="{{ asset('images\S4.jpg')}}">
            </div>
          </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
	<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
	<script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('lib/easing/easing.min.js')}}"></script>
	<script src="{{asset('lib/wow/wow.min.js')}}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

	<script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
	<script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
	<script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
	<script src="{{asset('lib/superfish/superfish.min.js')}}"></script>


	<script src="{{asset('contactform/contactform.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
	</body>
</html>