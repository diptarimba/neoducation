	@extends('layout.page')

	@section('tab-title','Tentor Quiz')

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
	@if($data->jumlahquiz !== 0)
	<a href="/managetentor/{{$data->id}}" class="btn btn-primary col-2 mb-3">Kembali ke profil</a>
	<div class="card">
	<div class="card-body">

		<div class="row">
		<div class="col-12">
			<table class="table table-borderless">
				<tbody>
					<tr>
					<td>Nama</td>
					<td>{{$data->nama_tentor}}</td>
					</tr>
					<tr>
					<td>Mapel</td>
					<td>{{$data->mapel_tentor}}</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-12">
		<table class="table table-striped">
			<thead>
				<th>Parameter</th>
				<th>Selalu</th>
				<th>Sering</th>
				<th>Jarang</th>
			</thead>
			<tbody>

				@php
				// dd($data);
					for($x=1; $x<10; $x++){
				@endphp
					<tr>
					<td>{{$ask[$x]}}</td>
					<td><?= "{$data->{'su' . $x}}" * 100 ?> %</td>
					<td><?= "{$data->{'se' . $x}}" * 100 ?> %</td>
					<td><?= "{$data->{'je' . $x}}" * 100 ?> %</td>
					</tr>
				@php
					}
				@endphp
			</tbody>

		</table>
		</div>
		</div>

	</div>
	</div>
	@else
		<a href="{{str_replace('/result', '', Request::url())}}" class="btn btn-primary shadow col-2 mb-3">Kembali ke profil</a>
		<div class="alert alert-danger alert-dismissible show fade">
            Data Tidak Ditemukan
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
	@endif
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
