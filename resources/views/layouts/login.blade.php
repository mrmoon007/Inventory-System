<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{ asset('moon/images/favicon_1.ico') }}">

    <title>Moltran - Responsive Admin Dashboard Template</title>

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

    <!-- Custom Files -->
    <link href="{{ asset('moon/css/helper.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('moon/css/style.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous" />

    <script src="{{ asset('moon/js/modernizr.min.js') }}"></script>

</head>


<body class="fixed-left">

    <div>
        @yield('content')
    </div>





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

    <!-- sweet alerts -->
    <script src="{{ asset('moon/assets/sweet-alert/sweet-alert.min.js') }}"></script>
    <script src="{{ asset('moon/assets/sweet-alert/sweet-alert.init.js') }}"></script>

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

</body>

</html>
