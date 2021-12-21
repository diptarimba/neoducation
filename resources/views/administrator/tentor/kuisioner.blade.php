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
	@if(count($data) > 0)
	@foreach($data as $each)
	<a href="/managetentor/{{$each->id}}" class="btn btn-primary col-2 mb-3">Kembali ke profil</a>
	<div class="card">
	<div class="card-body">
		
		<div class="row">
		<div class="col-12">
			<table class="table table-borderless">
				<tbody>
					<tr>	
					<td>Nama</td>
					<td>{{$each->nama_tentor}}</td>
					</tr>
					<tr>	
					<td>Mapel</td>
					<td>{{$each->mapel_tentor}}</td>
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
				// dd($each);
					for($x=1; $x<10; $x++){
				@endphp
					<tr>
					<td>{{$ask[$x]}}</td>
					<td><?= "{$each->{'su' . $x}}" * 100 ?> %</td>
					<td><?= "{$each->{'se' . $x}}" * 100 ?> %</td>
					<td><?= "{$each->{'je' . $x}}" * 100 ?> %</td>
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
	@endforeach
	@else
		<a href="{{str_replace('/result', '', Request::url())}}" class="btn btn-primary col-2 mb-3">Kembali ke profil</a>
		<div class="card">
		<div class="card-content">
			<p class="h5 text-center">Maaf, data belum tersedia untuk tentor ini</p>
		</div>
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
	