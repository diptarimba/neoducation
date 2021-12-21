	@extends('layout.page')
	
	@section('tab-title')
		Manage Tentor
	@endsection
	
	@section('sidebar')
		@component('components.adminSidebar')
		@endcomponent
	@endsection
	
	@section('page-title')
	<x-title heading="Manage Tentor" subheading="Tambah Tentor" url="/admin" />
	@endsection
	
	@section('page-content')
	<section class="section">
	<div class="row">
	<div class="col-md-6 col-12">
        <div class="card">
            <div class="card-header">
				<h3>Tambah Tentor</h3>
            </div>
            <div class="card-body">
                <form action='/managetentor' method="POST">
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
					
					<x-input field="uniqueid" name="Kode Unik Tentor" value="" type="text"/>
					<x-input field="username" name="Username" value="" type="text"/>
					<x-input field="password" name="Password" value="" type="password"/>
					<x-input field="name" name="Nama Lengkap" value="" type="text"/>
					<x-input field="email" name="Email" value="" type="text"/>
					<x-input field="address" name="Alamat" value="" type="text"/>
					<label class="form-label" for="mapel">Pilih Mapel</label>
					<select id="tentor" class="form-select choices mb-3" name="mapel" aria-label="Default mapel">
						<option selected>Mapel</option>
						@foreach($mapel as $each)
							<option value="{{$each->name_mapel}}">{{$each->name_mapel}}</option>
						@endforeach
					</select>
					<x-input field="nohp" name="Nomer HP (Whatsapp)" value="" type="text" />
					
					<button type="submit" class="btn btn-outline-primary">Tambah</button>
				</form>
            </div>
        </div>
    </div>
    </div>
    </section>
	@endsection
	
	@section('header-custom')
	<link rel="stylesheet" href="{{ asset('assets/vendors/simple-datatables/style.css') }}">
	@endsection
	
	@section('footer-custom')
	<script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let daftartentor = document.querySelector('#daftartentor');
        let dataTable = new simpleDatatables.DataTable(daftartentor);
    </script>
	@endsection
	