	@extends('layout.page')

	@section('tab-title')
		Manage Siswa
	@endsection
	
	@section('sidebar')
		@component('components.adminSidebar')
		@endcomponent
	@endsection
	
	@section('page-title')
	<x-title heading="Manage Siswa" subheading="Manage Siswa" url="/admin" />
	@endsection
	
	@section('page-content')
	<section class="section">
		<div class="container">
		<div class="row">
			<div class="col">
				<div class="card">
				<div class="card-header">
				<h3 class="text-center">Daftar Siswa</h3>
				</div>
				<div class="card-body">
					<div class="container">
					<div class="row justify-content-end">
						<a class="btn btn-outline-primary btn-sm col-md-2 " href="/managesiswa/create">Tambah siswa</a>
					</div>
					</div>
				
					<table class="table table-striped" id="siswatable">
					<thead>
						<th>ID</th>
						<th>Nama Lengkap</th>
						<th>Nama Orang Tua</th>
						<th>Username</th>
						<th>Address</th>
						<th>Package</th>
						<th>Action</th>
					</thead>
					<tbody>
						@foreach($siswa as $each)
						<tr>
							<td>{{$each -> id}}</td>
							<td>{{$each -> name}}</td>
							<td>{{$each -> parent_name}}</td>
							<td>{{$each -> username}}</td>
							<td>{{$each -> address}}</td>
							<td>{{$each -> package}}</td>
							<td>
								<a href="/managesiswa/{{$each->id}}"class="btn btn-outline-success btn-sm">Detail</a>
								<a href="/admin/siswa/invoice/{{$each->id}}"class="btn btn-outline-warning btn-sm">Invoice</a>
							</td>
						</tr>
						@endforeach
					</tbody>
					</table>
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
        let table1 = document.querySelector('#siswatable');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
	@endsection
	