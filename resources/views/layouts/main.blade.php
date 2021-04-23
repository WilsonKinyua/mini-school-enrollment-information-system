<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
       @yield('title') -  {{ trans('panel.site_title') }}
    </title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png')}}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('fonts/flaticon.css')}}">
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <!-- Modernize js -->
    <script src="{{ asset('js/modernizr-3.6.0.min.js')}}"></script>
    @yield('styles')
</head>
<body>
<!-- Preloader Start Here -->
    <div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('partials.header')
    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        @include('partials.sidebar')
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            {{-- <div class="breadcrumbs-area">
                <h3>Dashboard</h3>
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>Student</li>
                </ul>
            </div> --}}

            @yield('breadcubs')

            <!-- Breadcubs Area End Here -->


            @yield('content')


        <!-- Footer Area Start Here -->
        <footer class="footer-wrap-layout1">
            <div class="copyright">© Copyrights <a href="/">{{ trans('panel.site_title') }}</a> 2021. All rights reserved</div>
        </footer>
        <!-- Footer Area End Here -->
        </div>
    </div>
</div>
 <!-- jquery-->
 <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
 <!-- Plugins js -->
 <script src="{{ asset('js/plugins.js')}}"></script>
 <!-- Popper js -->
 <script src="{{ asset('js/popper.min.js')}}"></script>
 <!-- Bootstrap js -->
 <script src="{{ asset('js/bootstrap.min.js')}}"></script>
 <!-- Counterup Js -->
 <script src="{{ asset('js/jquery.counterup.min.js')}}"></script>
 <!-- Moment Js -->
 <script src="{{ asset('js/moment.min.js')}}"></script>
 <!-- Waypoints Js -->
 <script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
 <!-- Scroll Up Js -->
 <script src="{{ asset('js/jquery.scrollUp.min.js')}}"></script>
 <!-- Full Calender Js -->
 <script src="{{ asset('js/fullcalendar.min.js')}}"></script>
 <!-- Chart Js -->
 <script src="{{ asset('js/Chart.min.js')}}"></script>
 <!-- Data Table Js -->
 <script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
 <!-- Custom Js -->
 <script src="{{ asset('main.js')}}"></script>

</body>


</html>
