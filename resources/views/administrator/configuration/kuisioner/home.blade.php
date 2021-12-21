	@extends('layout.page')
	
	@section('sidebar')
		@component('components.adminSidebar')
		@endcomponent
	@endsection
	
	@section('tab-title', 'Manajemen Kuesioner')
	
	@section('page-title')
	<x-title heading="Manajemen Kuesioner" subheading="Manajemen Kuesioner" url="/admin" />
	@endsection
	
	@section('page-content')
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-12">
					<div class="card">
						<div class="card-header">
							<h5>Kuesioner Siswa</h5>
						</div>
						<div class="card-body">
							<form method="post" action="/admin/configuration/kuisioner">
							@csrf
							<table class="table table-borderless">
								<thead>
									<tr>
										<th colspan="2">Parameter</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										@php
											// dd($query);
											// exit();
											foreach($query as $each){
												$var = $each->keyparams;
												${$var} = true;
											}
										
											if(isset($quizsiswa)){
										@endphp
										
										<td colspan="2"><div class="text-secondary">Kuesioner [Oleh Siswa] bulan ini. Status : <span class="badge bg-success">Aktif</span></div></td>
										<input type="hidden" name="param" value="quizsiswa">
										<input type="hidden" name="type" value="0">
										<td><button type="submit" class="btn btn-danger">Nonaktifkan</button></td>
										@php
											} else {
										@endphp
										<td colspan="2"><div class="text-secondary">Kuesioner [Oleh Siswa] bulan ini. Status : <span class="badge bg-danger">Nonaktif</span></div></td>
										<input type="hidden" name="param" value="quizsiswa">
										<input type="hidden" name="type" value="1">
										<td><button type="submit" class="btn btn-danger">Aktifkan</button></td>
										@php
											}
										@endphp
									</tr>
								</tbody>
							</table>
							</form>
						</div>
					</div>
					<div class="card">
						<div class="card-header">
							<h5>Laporan Hasil Bimbingan Siswa ND</h5>
						</div>
						<div class="card-body">
							<form method="post" action="/admin/configuration/kuisioner">
							@csrf
							<table class="table table-borderless">
								<thead>
									<tr>
										<th colspan="2">Parameter</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										@php
											if(isset($rapot)){
										@endphp
										
										<td colspan="2"><div class="text-secondary">Rapot untuk siswa bulan ini. Status : <span class="badge bg-success">Aktif</span></div></td>
										<input type="hidden" name="param" value="rapot">
										<input type="hidden" name="type" value="0">
										<td><button type="submit" class="btn btn-danger">Nonaktifkan</button></td>
										@php
											} else {
										@endphp
										<td colspan="2"><div class="text-secondary">Rapot untuk siswa bulan ini. Status : <span class="badge bg-danger">Nonaktif</span></div></td>
										<input type="hidden" name="param" value="rapot">
										<input type="hidden" name="type" value="1">
										<td><button type="submit" class="btn btn-danger">Aktifkan</button></td>
										@php
											}
										@endphp
									</tr>
								</tbody>
							</table>
							</form>
						</div>
					</div>
				</div>
			</div>
		</divv>
	</section>
	@endsection
	
	@section('header-custom')
	<link rel="stylesheet" href="{{ asset('assets/vendors/simple-datatables/style.css') }}">
	@endsection
	
	@section('footer-custom')
	<script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#kuisioner');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
	@endsection
	