	@extends('layout.page')
	
	@section('tab-title')
		Presensi
	@endsection
	
	@section('sidebar')
		@component('components.tentorSidebar')
		@endcomponent
	@endsection
	
	@section('page-title')
	<div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Presensi Tentor</h3>
                <!-- <p class="text-subtitle text-muted">Halaman Profil Siswa</p> -->
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Presensi Tentor</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
	@endsection
	
	@section('page-content')
	<section class="section">
		<div class="row">
			<div class="col-md-6 col-12">
				<div class="card">
                    <div class="card-header">
                        <h5>Data Diri Tentor</h5>
                    </div>
					<div class="card-body">
					<form action='/tentor' method="POST">
					
					@csrf
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<x-input field="idtentor" name="ID Tentor" value="{{$tentor->id}}" readonly="" type="text"/>
					<x-input field="topic" name="Topic" type="text"/>
					<x-input field="tempat" name="Tempat" type="text"/>
					<x-input field="tanggal" name="Tanggal" type="datetime-local"/>
					<!-- <x-input field="waktu" name="Waktu" type="time"/>-->
					<x-input field="mapel" name="Mapel" type="text"/>
					<div class="form-group">
						<select class="choices form-select multiple-remove" name="peserta[]" multiple="multiple">
							<optgroup label="Siswa">
								
								@foreach($siswa as $each)
									<option value="{{$each->id}}">{{$each->name . " - " . $each->package }}</option>
								@endforeach
								
							</optgroup>
						</select>
					</div>
					<!--
					<x-input field="NoHP" name="Nomer HP (Whatsapp)" value="" type="text" />
					<x-input field="Address" name="Alamat" value="" type="text" />
					<x-input field="Email" name="Email" value="" type="text" />
					-->
					
						<button type="submit" class="btn btn-outline-success">Update!</button>
					</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection
	
	@section('header-custom')
	<!-- Include Choices CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/choices.js/choices.min.css') }}" />
	@endsection
	
	@section('footer-custom')
	<!-- Include Choices JavaScript -->
    <script src="{{ asset('assets/vendors/choices.js/choices.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-element-select.js') }}"></script>
	@endsection
	