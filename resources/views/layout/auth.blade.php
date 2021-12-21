<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tab-title') | Neoducationz</title>
	
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
	
	<link rel="shortcut icon" href="{{ asset('assets/images/logo/logo_rounded.jpg')}}" type="image/x-jpg">
	<script src="{{ asset('assets/js/extensions/jquery-3.6.0.js') }}"></script>
	
	@yield('header-custom')
</head>

<body>

	@yield('body')
	<script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
</body>
</html>