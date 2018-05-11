<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
 
                 <li> 
                    <a aria-expanded="false">
                    <span class="hide-menu"><b>Welcome, {{ Auth::user()->name }}!</b></span></a>
                </li>               
                <li> 
                    <a href="https://granatsmft.com" aria-expanded="false">
                    <i class="fa fa-home"></i>
                    <span class="hide-menu">Home</span></a>
                </li>
                <li> 
                    <a href="{{url('home')}}" aria-expanded="false">
                        <i class="fa fa-dashboard"></i>
                        <span class="hide-menu">Dashboard</span></a>
                </li>

                <li> 
                    <a href="{{url('profile')}}" aria-expanded="false">
                        <i class="fa fa-user"></i>
                        <span class="hide-menu">Profile</span>
                    </a>
                </li>

                <li> 
                    <a href="{{url('upload-berkas')}}" aria-expanded="false">
                        <i class="fa fa-folder-open"></i>
                        <span class="hide-menu">Upload Berkas</span>
                    </a>
                </li>

                <li> 
                    <a href="https://granatsmft.com/#contact" aria-expanded="false">
                        <i class="fa fa-info-circle"></i>
                        <span class="hide-menu">Contact</span>
                    </a>
                </li>
                <li> 
                    <a href="{{url('logout')}}" aria-expanded="false">
                        <i class="fa fa-sign-out"></i>
                        <span class="hide-menu">Logout</span>
                    </a>
                </li>
                
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>