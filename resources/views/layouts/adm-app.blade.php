
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/icon.png')}}">
    <title>@yield ('Title')</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('css/admin/bootstrap.css') }}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('css/admin/font-awesome.css') }}" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- CUSTOM STYLES-->
    <link href="{{ asset('css/admin/custom.css') }}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                        <!-- Logo -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">
                    <!-- Logo icon -->
                {{-- <b><img src="{{asset('images/icon.png')}}" width="30px" alt="homepage" class="dark-logo" /></b> --}}
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span><img src="{{asset('js/images/index2.png')}}" alt="homepage" class="dark-logo" /></span>
                </a>
            </div>
            <!-- End Logo -->
    <div style="color: white;
                padding: 15px 50px 5px 50px;
                float: right;
                font-size: 16px;">
        <a href="{{ route('admin.logout') }}" class="btn btn-danger square-btn-adjust">Logout</a>
    </div>
        </nav>   
        
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="{{ asset('images/pig.png') }}" class="user-image img-responsive"/>
				    <a>
				         Welcome, {{Auth::guard('admin')->user()->username}}!
				    </a>
				</li>

                    <li>
                        <a  href="https://granatsmft.com"><i class="fa fa-home fa-2x"></i> Home</a>
                    </li>
                    
                    <li>
                        <a  href="/admin/dashboard"><i class="fa fa-dashboard fa-2x"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a  href="/admin/peserta"><i class="fa fa-desktop fa-2x"></i> Data Band</a>
                    </li>

                    <li  >
                        <a  href="form.html"><i class="fa fa-edit fa-2x"></i> Forms </a>
                    </li>
                    
                    <li  >
                        <a  href="https://cpanel.granatsmft.com"><i class="fa fa-cog fa-2x"></i> cPanel </a>
                    </li>
	                <li>
                        <a  href="{{ route('admin.logout') }}"><i class="fa fa-sign-out fa-2x"></i> Logout</a>
                    </li>
                  	
                </ul>
               
            </div>
            
        </nav>
        
        @yield ('content')
         <!-- /. PAGE WRAPPER  -->
    </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{ asset('js/admin/jquery-1.10.2.js') }}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{ asset('js/admin/jquery.metisMenu.js') }}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('js/admin/custom.js') }}"></script>
    
   
</body>
</html>
