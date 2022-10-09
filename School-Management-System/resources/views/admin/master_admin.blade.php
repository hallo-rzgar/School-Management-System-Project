<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>School Management System</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Backend/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Backend/css/bootstrap_limitless.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Backend/css/bootstrap.css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{asset('global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{asset( 'global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{asset('global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script src="{{asset('global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
    <script src="{{asset('global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script src="{{asset('global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

    <script src="{{asset('Backend/js/app.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_pages/dashboard.js' )}}"></script>
    <script src="{{asset('global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_charts/pages/dashboard/light/sparklines.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_charts/pages/dashboard/light/lines.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_charts/pages/dashboard/light/areas.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_charts/pages/dashboard/light/donuts.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_charts/pages/dashboard/light/bars.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_charts/pages/dashboard/light/progress.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_charts/pages/dashboard/light/pies.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_charts/pages/dashboard/light/bullets.js')}}"></script>
    <!-- /theme JS files -->
    @stack('head-script')

</head>

<body>

<!-- Main navbar -->
@include('dashboard.main-navbar')
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    @include('dashboard.leftSidebar')

    <!-- /main sidebar -->

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Page header -->
            @include('dashboard.Header')
            <!-- /page header -->


            <!-- Content area -->
            @yield('admin')
             <!-- /content area -->


            <!-- Footer -->
            @include('dashboard.Footer')
            <!-- /footer -->

        </div>
        <!-- /inner content -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
