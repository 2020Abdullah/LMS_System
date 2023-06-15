<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl" class="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- css stracture -->
	<link rel="stylesheet" href="{{asset('assets/dashboard/vendor/chartist/css/chartist.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/dashboard/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/dashboard/vendor/toastr/css/toastr.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/dashboard/css/style.css')}}">
</head>
<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="color_1" data-headerbg="color_1" data-sidebar-style="full" data-sibebarbg="color_1" data-sidebar-position="fixed" data-header-position="fixed" data-container="wide" direction="rtl" data-primary="color_1">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        @include('dashboard.includes.header')
        @include('dashboard.includes.sidebar')
        @yield('content')
    </div>  

    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
	<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/dashboard/vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('assets/dashboard/vendor/toastr/js/toastr.min.js') }}"></script>
	<script src="{{ asset('assets/dashboard/js/custom.min.js') }}"></script>
	<script src="{{ asset('assets/dashboard/js/deznav-init.js') }}"></script>
	<script src="{{ asset('assets/dashboard/js/demo.js') }}"></script>
	<script src="{{ asset('assets/dashboard/js/styleSwitcher.js') }}"></script>
    @yield('js')

    <!-- sweetalert plugin  -->
    @include('sweetalert::alert')
    
    <!-- toastr plugin  -->
    @include('layouts.messages')
</body>
</html>
