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
				<div class="container">
				<div class="row justify-content-center">
					<a class="btn btn-outline-primary btn-sm col mt-2 " href="/managetentor">Kembali</a>
				</div>
				</div>
            <div class="card-header">
				<h4>Update Tentor</h4>
            </div>
            <div class="card-body">
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
					
					<x-input field="username" readonly name="Username" value="{{$tentor->username}}" type="text"/>
					<x-input field="password" readonly name="Password" value="{{$tentor->password}}" type="password"/>
					<x-input field="name" readonly name="Nama Lengkap" value="{{$tentor->name}}" type="text"/>
					<x-input field="email" readonly name="Email" value="{{$tentor->email}}" type="text"/>
					<x-input field="address" readonly name="Alamat" value="{{$tentor->address}}" type="text"/>
					<x-input field="mapel" readonly name="Mapel" value="{{$tentor->mapel}}" type="text"/>
					<x-input field="nohp" readonly name="Nomer HP (Whatsapp)" value="{{$tentor->phone}}" type="text" />
					
					<div class="row justify-content-center">
						<a href="/managetentor/{{$tentor->id}}/edit" class="col-3 ms-1 me-1 btn btn-outline-primary">Edit</a>
						<div class="col-3">
							<form method="POST" action="/managetentor/{{$tentor->id}}">
								@csrf
								@method('DELETE')
								<button type="submit" class="ms-1 me-1 btn btn-outline-danger">Hapus</button>
							</form>
						</div>
					</div>
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
	