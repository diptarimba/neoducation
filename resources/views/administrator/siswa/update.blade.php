	@extends('layout.page')
	
	@section('tab-title')
		Manage Siswa
	@endsection
	
	@section('sidebar')
		@component('components.adminSidebar')
		@endcomponent
	@endsection
	
	@section('page-title')
	<x-title heading="Manage Siswa" subheading="Update Siswa" url="/admin" />
	@endsection
	
	@section('page-content')
	<section class="section">
	<div class="row">
	<div class="col-md-6 col-12">
        <div class="card">
            <div class="card-header">
				<h4>Update Siswa</h4>
            </div>
            <div class="card-body">
                <form action='/managesiswa/{{$siswa->id}}' method="POST">
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
					
					<x-input field="username" name="Username" value="{{$siswa->username}}" type="text"/>
					<x-input field="password" name="Password" value="{{$siswa->password}}" type="password"/>
					<x-input field="name" name="Nama Lengkap" value="{{$siswa->name}}" type="text"/>
					<x-input field="parentName" name="Nama Orang Tua" value="{{$siswa->parent_name}}" type="text"/>
					<x-input field="email" name="Email" value="{{$siswa->email}}" type="text"/>
					<x-input field="address" name="Alamat" value="{{$siswa->address}}" type="text"/>
					<x-input field="package" name="Paket Bimbingan" value="{{$siswa->package}}" type="text"/>
					<x-input field="phone" name="Nomer HP (Whatsapp)" value="{{$siswa->phone}}" type="text" />
					
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
	@endsection
	
	@section('footer-custom')
	<script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let daftarsiswa = document.querySelector('#daftarsiswa');
        let dataTable = new simpleDatatables.DataTable(daftarsiswa);
    </script>
	@endsection
	