	@extends('layout.page')
	
	@section('tab-title')
		Manajemen Tentor ND
	@endsection
	
	@section('sidebar')
		@component('components.adminSidebar')
		@endcomponent
	@endsection
	
	@section('page-title')
	<x-title heading="Manajemen Tentor ND" subheading="Manajemen Tentor ND" url="/admin" />
	@endsection
	
	@section('page-content')
	<section class="section">
	<div class="container">
	<div class="row">
	<div class="col-12">
        <div class="card">
            <div class="card-header">
				<h4 class="text-center">Daftar Tentor ND</h4>
            </div>
            <div class="card-body">
				<div class="container">
				<div class="row justify-content-end">
					<a class="btn btn-outline-primary btn-sm col-md-2 " href="/managetentor/create">Tambah Tentor ND</a>
				</div>
				</div>
				
                <table class="table table-striped" id="daftartentor">
                    <thead>
                        <tr>
							<th>ID</th>
							<th>Unique ID</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Alias</th>
                            <th>No. Hp</th>
                            <th>Mata Pelajaran</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
					@foreach($tentor as $each)
                        <tr>
							<td>{{$each -> id}}</td>
							<td>{{($each -> uniqueid) ?? ''}}</td>
							<td>{{$each -> name}}</td>
							<td>{{$each -> email }}</td>
							<td>{{$each -> username }}</td>
							<td>{{$each -> phone }}</td>
							<td>{{$each -> mapel}}</td>
							<td>
								<a href="/managetentor/{{$each->id}}"class="btn btn-outline-success btn-sm">Detail</a>
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
        let daftartentor = document.querySelector('#daftartentor');
        let dataTable = new simpleDatatables.DataTable(daftartentor);
    </script>
	@endsection
	