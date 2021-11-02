	@extends('layout.page')
	
	@section('sidebar')
		@component('components.adminSidebar')
		@endcomponent
	@endsection
	
	@section('page-title')
	<x-title heading="Manage Mapel" subheading="Manage Mapel" url="/admin" />
	@endsection
	
	@section('page-content')
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-12">
					<div class="card">
						<div class="card-header">
							<h4>Daftar Level Tentor</h4>
						</div>
						<div class="card-body">
							<table class="table table-striped" id="daftarlevel">
							<thead>
								<th>No.</th>
								<th>Nama Mapel</th>
								<th>Kode Unik</th>
								<th>Action</th>
							</thead>
							<tbody>
								@foreach($mapels as $each)
								<tr>
									<td>{{$each -> id}}</td>
									<td>{{$each -> name_mapel}}</td>
									<td>{{$each -> uniqueid_mapel}}</td>
									<td>
										<div class="container">
										<form action="/admin/configuration/mapel/{{$each->id}}" method="post">
											@csrf
											@method('delete')
											<button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
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
				<div class="col-md-6 col-12">
					<div class="card">
						<div class="card-header">
							<h4>Tambahkan Mapel</h4>
						</div>
						<div class="card-body">
							<form action="/admin/configuration/mapel" method="post">
								@csrf
								<x-input field="NameMapel" name="Nama Mapel" value="" type="text"/>
								<x-input field="UniqueCode" name="Kode Unik Mapel" value="" type="text"/>
								<button type="submit" class="btn btn-outline-primary">Tambah</button> 
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
        // Simple Datatable
        let table1 = document.querySelector('#siswatable');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
	@endsection
	