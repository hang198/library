<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />


    <!-- Styles -->
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
<!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.css') }}">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="{{ asset('css/css/bootstrap-extend.css') }}">

    <!-- theme style -->
    <link rel="stylesheet" href="{{ asset('css/css/master_style.css') }}">

    <!-- Bankio admin skins -->
    <link rel="stylesheet" href="{{ asset('css/css/skins/_all-skins.css') }}">

    <!-- weather weather -->
{{--    <link rel="stylesheet" href="{{ asset('assets/vendor_components/weather-icons/weather-icons.css') }}">--}}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery 3 -->
    <script src="{{ asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>
    <script src="{{asset('js/my.js')}}"></script>
    @toastr_css
</head>
<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">

@include('layouts.cores.header')
<!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar">

            <!-- sidebar menu-->
            <ul class="sidebar-menu" data-widget="tree">

                <li class="treeview">
                    <a href="{{ route('home') }}">
                        <i class="ti-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @can('crud-users')
                    <li class="treeview {{ (request()->is('admin/users*')) ? 'active' : '' }}">
                        <a href="#">
                            <i class="fa fa-user-o"></i> <span>Users</span>
                            <span class="pull-right-container">
                        <i class="fa fa-caret-down pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('users.index')}}"><i class="fa fa-circle-thin"></i>Users list</a></li>
                            <li><a href="{{ route('users.create') }}"><i class="fa fa-circle-thin"></i>Add user</a></li>
                        </ul>
                    </li>
                @endcan

                @can('crud-libraries')
                    <li class="treeview {{ (request()->is('admin/libraries*')) ? 'active' : '' }}">
                        <a href="#">
                            <i class="fa fa-bank"></i> <span>Libraries</span>
                            <span class="pull-right-container">
                        <i class="fa fa-caret-down pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('libraries.index')}}"><i class="fa fa-circle-thin"></i>Libraries
                                    list</a></li>
                            <li><a href="{{ route('libraries.create') }}"><i class="fa fa-circle-thin"></i>Add libraries</a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('crud-categories')
                    <li class="treeview {{ (request()->is('admin/categories*')) ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-bookmark"></i> <span>Categories</span>
                            <span class="pull-right-container">
			             <i class="fa fa-caret-down pull-right"></i>
			            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('categories.index')}}"><i class="fa fa-circle"></i>Categories list</a>
                            </li>
                            <li><a href="{{ route('categories.create') }}"><i class="fa fa-circle"></i>Add
                                    Categories</a></li>
                        </ul>
                    </li>
                @endcan

                @can('crud-books')
                    <li class="treeview">
                        <a href="#"><i class="fa fa-book"></i> <span>Books</span>
                            <span class="pull-right-container">
			  <i class="fa fa-caret-down pull-right"></i>
			</span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('books.index') }}"><i class="fa fa-circle"></i>Books list</a></li>
                        </ul>
                    </li>
                @endcan
                @can('crud-customers')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa  fa-user-circle-o"></i> <span>Customers</span>
                            <span class="pull-right-container">
              <i class="fa fa-caret-down pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('customers.index') }}"><i class="fa fa-circle-thin"></i>Customers List</a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can('manage-borrows')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-address-book-o"></i> <span>Borrows</span>
                            <span class="pull-right-container">
              <i class="fa fa-caret-down pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('borrows.index') }}"><i class="fa fa-circle-thin"></i>List borrows</a>
                            </li>
                            <li><a href="{{ route('borrows.create') }}"><i class="fa fa-circle-thin"></i>Add borrows</a>
                            </li>
                            <li><a href="{{ route('borrows.return') }}"><i class="fa fa-circle-thin"></i>List borrows return</a>
                            </li>
                        </ul>
                    </li>
                @endcan
            </ul>
        </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
    @yield('content')
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@include('layouts.cores.footer')
<!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-light">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab" class="active"><i
                        class="fa fa-home"></i></a></li>
            <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i
                        class="fa fa-cog fa-spin"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-danger"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                                <p>Will be July 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-warning"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                                <p>New Email : jhone_doe@demo.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-info"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                                <p>disha@demo.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-success"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Code Change</h4>

                                <p>Execution time 15 Days</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Web Design
                                <span class="label label-danger pull-right">40%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Data
                                <span class="label label-success pull-right">75%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Order Process
                                <span class="label label-warning pull-right">89%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Development
                                <span class="label label-primary pull-right">72%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <input type="checkbox" id="report_panel" class="chk-col-grey">
                        <label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

                        <p>
                            general settings information
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <input type="checkbox" id="allow_mail" class="chk-col-grey">
                        <label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <input type="checkbox" id="expose_author" class="chk-col-grey">
                        <label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <input type="checkbox" id="show_me_online" class="chk-col-grey">
                        <label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <input type="checkbox" id="off_notifications" class="chk-col-grey">
                        <label for="off_notifications" class="control-sidebar-subheading ">Turn off
                            notifications</label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
                            Delete chat history
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>

<!-- fullscreen -->
<script src="{{ asset('assets/vendor_components/screenfull/screenfull.js') }}"></script>

<!-- jQuery ui -->
<script src="{{asset('assets/vendor_components/jquery-ui/jquery-ui.js')}}"></script>

<!-- popper -->
{{--    <script src="{{asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>--}}

<!-- Bootstrap 4.0-->
<script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.js') }}"></script>

<!-- Slimscroll -->
<script src="{{ asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- FastClick -->
<script src="{{asset('assets/vendor_components/fastclick/lib/fastclick.js')}}"></script>

<!-- peity -->
<script src="{{asset('assets/vendor_components/jquery.peity/jquery.peity.js')}}"></script>

<!-- Sparkline -->
{{--    <script src="{{asset('assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>--}}

<!-- ChartJS -->
{{--    <script src="{{ asset('assets/vendor_components/chart.js-master/Chart.bundle.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/vendor_components/chart.js-master/utils.js') }}"></script>--}}

<!-- apexcharts -->
{{--    <script src="{{ asset('assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>--}}

{{--    <!-- weather for demo purposes -->--}}
{{--    <script src="{{ asset('assets/vendor_plugins/weather-icons/WeatherIcon.js') }}"></script>--}}

<!-- Bankio admin App -->
<script src="{{ asset('js/js/template.js') }}"></script>

<!-- Bankio admin dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('js/js/pages/dashboard.js') }}"></script>
@toastr_js
@toastr_render
</body>
</html>
