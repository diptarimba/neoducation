	@extends('layout.page')
	
	@section('tab-title','Manajemen Presensi')
	
	@section('sidebar')
		@component('components.adminSidebar')
		@endcomponent
	@endsection
	
	@section('page-title')
	<x-title heading="Manajemen Presensi" subheading="Manajemen Presensi" url="/admin" />
	@endsection
	
	@section('page-content')
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-header">
							<h3 class="text-center">Daftar Presensi</h3>
						</div>
						<div class="card-body">
							<table class="table table-striped" id="report">
							
								<thead>
									<th>No</th>
									<th>Hash Code</th>
									<th>Topik</th>
									<th>Tempat</th>
									<th>Mapel</th>
									<th>Peserta</th>
									<th>Tentor ND</th>
									<th>Waktu Pelaksanaan</th>
									<th>Aksi</th>
								</thead>
								<tbody>
									@foreach($data as $each)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>{{$each->hash}}</td>
										<td>{{$each->topic}}</td>
										<td>{{$each->place}}</td>
										<td>{{$each->mapel}}</td>
										<td>{{$each->students}}</td>
										<td>{{$each->tentor->name}}</td>
										<td>{{ date("d F Y", strtotime($each->date_exec)) }}</td>
										<td>
											<div class="row justify-content-center">
												<form action="" method="POST">
												@csrf
													@method('DELETE')
													<input type="hidden" name="hashCode" value="{{$each->hash}}">
													<button type="submit" class="btn btn-danger">Delete</button>
												</form>
											</div>
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
        let table1 = document.querySelector('#report');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
	@endsection
	