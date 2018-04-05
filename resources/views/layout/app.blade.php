<!DOCTYPE html>
<html>
	<head>
		<title>@yield ('Title')</title>
		<link rel="stylesheet" type="text/css" href={{asset('css/style.css')}}>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="{{asset('js/jquery.min.js')}}"></script>
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<header>
				<div class="topnav">
						<a href="/signin">Home</a>
						<a href="/">News</a>
						<a href="#contact">Contact</a>
						<a href="#about">About</a>
						<a href="/">Daftar</a>
				</div>
		</header>
		<div id="images">
			<center style="max-width:100%"> 
				<img src="/js/images/h31.jpg" />
			</center>
		</div>  

		<div>
			@yield ('content')
		</div>

		<footer class="page-footer">
			<center style="margin-top: 20px">
					<a href="#!"><i class="fa fa-twitter fa-lg" style="color:white"></i></a></li>
					<a href="#!"><i class="fa fa-facebook fa-lg" style="color:white"></i></a></li>
					<a href="#!"><i class="fa fa-instagram fa-lg" style="color:white"></i></a></li>
					<a href="#!"><i class="fa fa-pinterest fa-lg" style="color:white"></i></a></li>
					<a href="#!"><i class="fa fa-linkedin fa-lg" style="color:white"></i></a></li>
			</center>
			<div class="footer-copyright">
					<div style="font-size:12px; color:white">
						© 2018 Copyright Teknologi Informasi
					</div>
			</div>
		</footer>
	</body>
</html>