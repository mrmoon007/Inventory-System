<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{ asset('moon/images/favicon_1.ico') }}">

    <title>Moltran - Responsive Admin Dashboard Template</title>


    {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css"> --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">


    <!-- Base Css Files -->
    <link href="{{ asset('moon/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Font Icons -->
    <link href="{{ asset('moon/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('moon/assets/ionicon/css/ionicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('moon/css/material-design-iconic-font.min.css') }}" rel="stylesheet">

    <!-- animate css -->
    <link href="{{ asset('moon/css/animate.css') }}" rel="stylesheet" />

    <!-- Waves-effect -->
    <link href="{{ asset('moon/css/waves-effect.css') }}" rel="stylesheet">

    <!-- sweet alerts -->
    <link href="{{ asset('moon/assets/sweet-alert/sweet-alert.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Custom Files -->
    <link href="{{ asset('moon/css/helper.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('moon/css/style.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous" />

    <script src="{{ asset('moon/js/modernizr.min.js') }}"></script>

</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="index.html" class="logo"><i class="md md-terrain"></i> <span>Moltran </span></a>
                </div>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <div class="pull-left">
                            <button class="button-menu-mobile open-left">
                                <i class="fa fa-bars"></i>
                            </button>
                            <span class="clearfix"></span>
                        </div>
                        <form class="navbar-form pull-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control search-bar"
                                    placeholder="Type here for search...">
                            </div>
                            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                        </form>

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="dropdown hidden-xs">
                                <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light"
                                    data-toggle="dropdown" aria-expanded="true">
                                    <i class="md md-notifications"></i> <span
                                        class="badge badge-xs badge-danger">3</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg">
                                    <li class="text-center notifi-title">Notification</li>
                                    <li class="list-group">
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                </div>
                                                <div class="media-body clearfix">
                                                    <div class="media-heading">New user registered</div>
                                                    <p class="m-0">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                </div>
                                                <div class="media-body clearfix">
                                                    <div class="media-heading">New settings</div>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                </div>
                                                <div class="media-body clearfix">
                                                    <div class="media-heading">Updates</div>
                                                    <p class="m-0">
                                                        <small>There are
                                                            <span class="text-primary">2</span> new updates
                                                            available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- last list item -->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <small>See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="hidden-xs">
                                <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i
                                        class="md md-crop-free"></i></a>
                            </li>
                            <li class="hidden-xs">
                                <a href="#" class="right-bar-toggle waves-effect waves-light"><i
                                        class="md md-chat"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle profile" data-toggle="dropdown"
                                    aria-expanded="true"><img src="{{ asset('moon/images/avatar-1.jpg') }}" alt="user-img"
                                        class="img-circle"> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="md md-settings-power"></i> Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                        <li>
                            <a href="index.html" class="waves-effect"><i class="md md-home"></i><span> Dashboard
                                </span></a>
                        </li>

                        <li class="has_sub">
                            <a href="#" class="waves-effect"><i class="fas fa-users"></i><span> Employee </span><span
                                    class="pull-right"><i class="md md-add"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('add.employee') }}">Add Employee</a></li>
                                <li><a href="{{ route('all.employee') }}">All Employee</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Customers </span> <span
                                    class="pull-right"><i class="md md-add"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('add.customer') }}">Add Customer</a></li>
                                <li><a href="{{ route('all.customer') }}">All Customers</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="#" class="waves-effect"><i class="md md-invert-colors-on"></i><span>
                                Salary ( Employees)
                                </span><span class="pull-right"><i class="md md-add"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('add.salary') }}">Add Salary</a></li>
                                <li><a href="{{ route('all.salary') }}">All Salary</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="#" class="waves-effect"><i class="md md-now-widgets"></i><span> Attendance </span><span
                                    class="pull-right"><i class="md md-add"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('take.attendance') }}">Take Attendance</a></li>
                                <li><a href="{{ route('all.attendance') }}">All Attendance</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="#" class="waves-effect"><i class="md md-view-list"></i><span> Data Tables
                                </span><span class="pull-right"><i class="md md-add"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="tables.html">Basic Tables</a></li>
                                <li><a href="table-datatable.html">Data Table</a></li>
                                <li><a href="tables-editable.html">Editable Table</a></li>
                                <li><a href="responsive-table.html">Responsive Table</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="#" class="waves-effect"><i class="md md-place"></i><span> Maps </span><span
                                    class="pull-right"><i class="md md-add"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="gmap.html"> Google Map</a></li>
                                <li><a href="vector-map.html"> Vector Map</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="md md-share"></i><span>Multi
                                    Level </span><span class="pull-right"><i class="md md-add"></i></span></a>
                            <ul>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span> <span
                                            class="pull-right"><i class="md md-add"></i></span></a>
                                    <ul style="">
                                        <li><a href="javascript:void(0);"><span>Menu Level 2.1</span></a></li>
                                        <li><a href="javascript:void(0);"><span>Menu Level 2.2</span></a></li>
                                        <li><a href="javascript:void(0);"><span>Menu Level 2.3</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><span>Menu Level 1.2</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <!-- Page-Title -->
                    {{-- <div class="row">
                        <div class="col-sm-12">
                            <h4 class="pull-left page-title">Blank Page</h4>
                            <ol class="breadcrumb pull-right">
                                <li><a href="#">Moltran</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">Blank Page</li>
                            </ol>
                        </div>
                    </div> --}}

                    <!-- Pls Remove -->
                    <div class="row">
                        @yield('content')
                    </div>


                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer text-right">
                2015 © Moltran.
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


        <!-- Right Sidebar -->
        <div class="side-bar right-bar nicescroll">
            <h4 class="text-center">Chat</h4>
            <div class="contact-list nicescroll">
                <ul class="list-group contacts-list">
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="images/users/avatar-1.jpg" alt="">
                            </div>
                            <span class="name">Chadengle</span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="images/users/avatar-2.jpg" alt="">
                            </div>
                            <span class="name">Tomaslau</span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="images/users/avatar-3.jpg" alt="">
                            </div>
                            <span class="name">Stillnotdavid</span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="images/users/avatar-4.jpg" alt="">
                            </div>
                            <span class="name">Kurafire</span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="images/users/avatar-5.jpg" alt="">
                            </div>
                            <span class="name">Shahedk</span>
                            <i class="fa fa-circle away"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="images/users/avatar-6.jpg" alt="">
                            </div>
                            <span class="name">Adhamdannaway</span>
                            <i class="fa fa-circle away"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="images/users/avatar-7.jpg" alt="">
                            </div>
                            <span class="name">Ok</span>
                            <i class="fa fa-circle away"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="images/users/avatar-8.jpg" alt="">
                            </div>
                            <span class="name">Arashasghari</span>
                            <i class="fa fa-circle offline"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="images/users/avatar-9.jpg" alt="">
                            </div>
                            <span class="name">Joshaustin</span>
                            <i class="fa fa-circle offline"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="images/users/avatar-10.jpg" alt="">
                            </div>
                            <span class="name">Sortino</span>
                            <i class="fa fa-circle offline"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /Right-bar -->


    </div>
    <!-- END wrapper -->

    {{-- @if(Session::has('message'))
        <script>
            var type = "{{ Session::get('alert-type', 'info') }}";

            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");

                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }

        </script>
    @endif --}}



    <script>
        var resizefunc = [];

    </script>

    <!-- jQuery  -->
    <script src="{{ asset('moon/js/jquery.min.js') }}"></script>
    <script src="{{ asset('moon/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('moon/js/waves.js') }}"></script>
    <script src="{{ asset('moon/js/wow.min.js') }}"></script>
    <script src="{{ asset('moon/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('moon/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('moon/assets/chat/moment-2.2.1.js') }}"></script>
    <script src="{{ asset('moon/assets/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('moon/assets/jquery-detectmobile/detect.js') }}"></script>
    <script src="{{ asset('moon/assets/fastclick/fastclick.js') }}"></script>
    <script src="{{ asset('moon/assets/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('moon/assets/jquery-blockui/jquery.blockUI.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- sweet alerts -->
    <script src="{{ asset('moon/assets/sweet-alert/sweet-alert.min.js') }}"></script>
    <script src="{{ asset('moon/assets/sweet-alert/sweet-alert.init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script> --}}


    <!-- flot Chart -->
    <script src="{{ asset('moon/assets/flot-chart/jquery.flot.js') }}"></script>
    <script src="{{ asset('moon/assets/flot-chart/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('moon/assets/flot-chart/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('moon/assets/flot-chart/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('moon/assets/flot-chart/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('moon/assets/flot-chart/jquery.flot.selection.js') }}"></script>
    <script src="{{ asset('moon/assets/flot-chart/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('moon/assets/flot-chart/jquery.flot.crosshair.js') }}"></script>

    <!-- Counter-up -->
    <script src="{{ asset('moon/assets/counterup/waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('moon/assets/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('moon/js/jquery.app.js') }}"></script>

    <!-- Dashboard -->
    <script src="{{ asset('moon/js/jquery.dashboard.js') }}"></script>

    <!-- Chat -->
    <script src="{{ asset('moon/js/jquery.chat.js') }}"></script>

    <!-- Todo -->
    <script src="{{ asset('moon/js/jquery.todo.js') }}"></script>


    <script type="text/javascript">
        /* ==============================================
            Counter Up
            =============================================== */
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 100,
                time: 1200
            });
        });
    </script>

<script>
    @if(Session::has('message'))
      var type = "{{ Session::get('alert-type', 'info') }}";
      switch(type){
          case 'info':
              toastr.info("{{ Session::get('message') }}");
              break;

          case 'warning':
              toastr.warning("{{ Session::get('message') }}");
              break;

          case 'success':
              toastr.success("{{!! Session::get('message') !!}}");
              break;

          case 'error':
              toastr.error("{{!! Session::get('message') !!}}");
              break;
      }
    @endif
  </script>

</body>

</html>
