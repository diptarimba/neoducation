	@extends('layout.master')

	@section('headers')
		
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendors/iconly/bold.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
		<link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">
		<script src="{{ asset('assets/js/extensions/jquery-3.6.0.js') }}"></script>
		@yield('header-custom')
	@endsection

	@section('end-script')
		@yield('footer-custom')
	
		<script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('assets/vendors/apexcharts/apexcharts.js') }}"></script>
		<!-- <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script> -->
		<script src="{{ asset('assets/js/mazer.js') }}"></script>
		
	@endsection
	
	
	
	@section('body')
		
		<header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
		
		
		<div class="page-heading">
           @yield('page-title')
        </div>
		
		<div class="page-content">
			
			{{-- Success Alert --}}
			@if(session('status'))
				<div class="alert alert-success alert-dismissible fade show">
					{{session('status')}}
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				
			@endif
		
			{{-- Error Alert --}}
			@if(session('error'))
				<div class="alert alert-danger alert-dismissible show fade">
                    {{session('error')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
			@endif
			
			@if ($errors->any())
				<div class="alert alert-danger alert-dismissible show fade">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			
			@yield('page-content')
		</div>
		
		<footer>
		<div class="footer clearfix mb-0 text-muted">
			<div class="float-start">
				<p>2021 &copy; Mazer</p>
			</div>
			<div class="float-end">
				<p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
					href="http://ahmadsaugi.com">A. Saugi</a></p>
			</div>
		</div>
		</footer>
	@endsection