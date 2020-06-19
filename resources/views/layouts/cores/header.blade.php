<header class="main-header">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Logo -->
    <a href="{{ route('home') }}" class="logo">
        <span class="logo-lg">
	  	  <img src="{{asset('templates/images/logo-dark-text.png')}}" alt="logo" class="light-logo" style="width: 130px">
	  </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <div class="ml-10 app-menu">
            <ul class="header-megamenu nav">
                <li class="btn-group nav-item">
                    <a href="#" class="nav-link rounded" data-provide="fullscreen" title="Full Screen">
                        <i class="mdi mdi-crop-free"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li class="search-box">
                    <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="ti-search"></i></a>
                    <form class="app-search" style="display: none;">
                        <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                    </form>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a class="control-btn" href="#" data-toggle="control-sidebar"><i class="ti-settings"></i></a>
                </li>
                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('templates/images/user5-128x128.jpg') }}" class="user-image rounded-circle b-2" alt="User Image">
                    </a>
                    <ul class="dropdown-menu scale-up">
                        <!-- Menu Body -->
                        <li class="user-body bt-0">
                            <div class="row no-gutters">
                                <div class="col-12 text-left">
                                    <a href="#"><i class="ion ion-person"></i> My Profile</a>
                                </div>
                                <div class="col-12 text-left">
                                    <a href="#"><i class="ion ion-email-unread"></i> Inbox</a>
                                </div>
                                <div class="col-12 text-left">
                                    <a href="#"><i class="ion ion-settings"></i> Setting</a>
                                </div>
                                <div role="separator" class="divider col-12"></div>
                                <div class="col-12 text-left">
                                    <a href="#"><i class="ti-settings"></i> Account</a>
                                </div>
                                <div role="separator" class="divider col-12"></div>
                                <div class="col-12 text-left">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
