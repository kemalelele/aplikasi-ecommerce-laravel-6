<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta name="description" content="Daengweb - Aplikasi Ecommerce">
	<meta name="author" content="Daengweb">
    <meta name="keyword" content="aplikasi ecommerce laravel, tutorial laravel basic, belajar laravel, panduan belajar laravel">
    
    @yield('title')

	<link href="{{ asset('public/assets/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/css/simple-line-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    @include('layouts.module.header')
    <div class="app-body" id="dw">
        <div class="sidebar">
            @include('layouts.module.sidebar')
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
        @yield('content')
    </div>

    <footer class="app-footer">
        <div>
            <a href="https://coreui.io">CUSOL JAKBAN</a>
            <span>&copy; 2021 PT Indonesia Comnets Plus.</span>
        </div>
        <div class="ml-auto">
            <span>Powered by</span>
            <a href="https://coreui.io">CoreUI</a>
        </div>
    </footer>
    
    <script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/pace.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/coreui.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/custom-tooltips.min.js') }}"></script>
    @yield('js')
</body>
</html>