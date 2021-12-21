@extends('layout.auth')

@section('tab-title')
{{$dataPage->title}}
@endsection

@section('header-custom')
<link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
@endsection

@section('id', 'auth')

@section('body')
<div id="auth">
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="index.html"><img src="{{ asset('assets/images/logo/logo.jpeg') }}" alt="Logo"></a>
            </div>
            <h1 class="auth-title">{{$dataPage->name}}</h1>
            <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>
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
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
            <form action="{{$dataPage->link}}" method="post">
			@csrf
                <div class="form-group position-relative has-icon-left mb-4">
                    <input name="username" type="text" class="form-control form-control-xl" placeholder="Username">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input name="password" type="password" class="form-control form-control-xl" placeholder="Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
				<div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" name="remember" value="yes" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
            </form>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>
</div>
@endsection