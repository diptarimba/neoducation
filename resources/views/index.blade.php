	@extends('layout.auth')
	
	
	
	@section('tab-title','Login Manager')
	
	@section('body')
	
	<div class="container">
		<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card mt-5">
				<div class="card-body col-4">
					<div class="row justify-content-center">
					<div class="col">
						<img src="{{ asset('assets/images/logo/logo.jpeg')}}" type="image/x-jpg" class="img-fluid">
					</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card mt-1">
				<div class="card-header">
					<div class="h1 text-center">Login sebagai</div>
				</div>
				<div class="card-body">
				<div class="container">
					<div class="row justify-content-center">
					<a href="{{ route('login.tentor') }}"class="col-4 btn btn-outline-secondary">Tentor</a>
					<a href="{{ route('login.siswa') }}"class="ms-3 col-4 btn btn-outline-secondary">Siswa</a>
				</div>
				</div>
				</div>
			</div>
		</div>
		</div>
	</div>


	@endsection

	