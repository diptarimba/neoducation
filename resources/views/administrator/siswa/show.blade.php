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
				<div class="container">
				<div class="row justify-content-center">
					<a class="btn btn-outline-primary btn-sm col mt-2 " href="/managesiswa">Kembali</a>
				</div>
				</div>
            <div class="card-header">
				<h4>Update Siswa</h4>
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
					
					<x-input field="username" readonly name="Username" value="{{$siswa->username}}" type="text"/>
					<x-input field="name" readonly name="Nama Lengkap" value="{{$siswa->name}}" type="text"/>
					<x-input field="parentName" readonly name="Nama Orang Tua" value="{{$siswa->parent_name}}" type="text"/>
					<x-input field="email" readonly name="Email" value="{{$siswa->email}}" type="text"/>
					<x-input field="address" readonly name="Alamat" value="{{$siswa->address}}" type="text"/>
					<x-input field="package" readonly name="Paket Bimbingan" value="{{$siswa->package}}" type="text"/>
					<x-input field="nohp" readonly name="Nomer HP (Whatsapp)" value="{{$siswa->phone}}" type="text" />
					
					<div class="row justify-content-center">
						<a type="button" href="/managesiswa/{{$siswa->id}}/edit" class="col-2 ms-1 me-1 btn btn-outline-primary">Edit</a>
						<button id="hapusen" type="button" class="col-2 ms-1 me-1 btn btn-outline-danger">Hapus</button>
						<button id="reseten" type="button" class="col-4 ms-1 me-1 btn btn-outline-success">Reset Pass</button>
					</div>
					
					<div class="col-3">
						<form method="POST" action="/managesiswa/{{$siswa->id}}" name="hapus">
							@csrf
							@method('DELETE')
						</form>
					</div>
					
					<div class="col-4">
						<form method="POST" action="/managesiswa/{{$siswa->id}}/respass" name="resetpass">
							@csrf
							@method('PUT')
						</form>
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
	$(document).ready(() => {
		
		
		$('#hapusen').on('click', function(e) {
			document.forms['hapus'].submit();
		})
		
		$('#reseten').on('click', function(e) {
			document.forms['resetpass'].submit();
		})
		
		
	
	})
        // Simple Datatable
        let daftarsiswa = document.querySelector('#daftarsiswa');
        let dataTable = new simpleDatatables.DataTable(daftarsiswa);
    </script>
	@endsection
	