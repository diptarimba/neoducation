	@extends('layout.page')
	
	@section('tab-title')
		Manage Tentor
	@endsection
	
	@section('sidebar')
		@component('components.adminSidebar')
		@endcomponent
	@endsection
	
	@section('page-title')
	<x-title heading="Manage Tentor" subheading="Update Tentor" url="/admin" />
	@endsection
	
	@section('page-content')
	<section class="section">
	<div class="row">
	<div class="col-md-6 col-12">
        <div class="card">
            <div class="card-header">
				<h4>Update Tentor</h4>
            </div>
            <div class="card-body">
                <form action='/managetentor/{{$tentor->id}}' method="POST">
					@csrf
					@method('PUT')
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					
					<x-input field="uniqueid" name="Kode Unik Tentor" value="{{$tentor->uniqueid}}" type="text"/>
					<x-input field="username" name="Username" value="{{$tentor->username}}" type="text"/>
					<x-input field="name" name="Nama Lengkap" value="{{$tentor->name}}" type="text"/>
					<x-input field="parentName" name="Nama Orang Tua" value="{{$tentor->name}}" type="text"/>
					<x-input field="email" name="Email" value="{{$tentor->email}}" type="text"/>
					<x-input field="address" name="Alamat" value="{{$tentor->address}}" type="text"/>
					<!--
					<x-input field="package" name="Paket Bimbingan" value="{{$tentor->mapel}}" type="text"/>
					-->
					<select id="tentor" class="form-select choices mb-3" name="mapel" aria-label="Default mapel">
						@foreach($mapel as $each)
							<option value="{{$each->name_mapel}}" {{($tentor->mapel !== '') ? '' : (($tentor->mapel == $each->name_mapel) ? 'selected' : '')}}>{{$each->name_mapel}}</option>
						@endforeach
					</select>
					<x-input field="phone" name="Nomer HP (Whatsapp)" value="{{$tentor->phone}}" type="text" />
					
					<div class="row">
						<button type="submit" class="col-md ms-1 me-1 btn btn-outline-primary">Perbarui</button>
					</div>
				</form>
            </div>
        </div>
    </div>
    </div>
    </section>
	@endsection
	
	@section('header-custom')
	<link rel="stylesheet" href="{{ asset('assets/vendors/simple-datatables/style.css') }}">
	<!-- Include Choices CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/choices.js/choices.min.css') }}" />
	@endsection
	
	@section('footer-custom')
	<!-- Include Choices JavaScript -->
    <script src="{{ asset('assets/vendors/choices.js/choices.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-element-select.js') }}"></script>
	<script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let daftartentor = document.querySelector('#daftartentor');
        let dataTable = new simpleDatatables.DataTable(daftartentor);
    </script>
	@endsection
	