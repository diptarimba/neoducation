	@extends('layout.page')
	
	@section('sidebar')
		@component('components.adminSidebar')
		@endcomponent
	@endsection
	
	@section('tab-title', 'Manage Level')
	
	@section('page-title')
	<x-title heading="Manage Level Tentor" subheading="Manage Level Tentor" url="/admin" />
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
								<th>ID</th>
								<th>Tingkatan</th>
								<th>Salary</th>
								<th>Bonus</th>
								<th>Action</th>
							</thead>
							<tbody>
								@foreach($levels as $each)
								<tr>
									<td>{{$each -> id}}</td>
									<td>{{$each -> tingkatan}}</td>
									<td>{{$each -> salary}}</td>
									<td>{{$each -> bonus}}</td>
									<td>
										<div class="container">
										<form action="/admin/configuration/level/{{$each->id}}" method="post">
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
							<h4>Tambahkan Level</h4>
						</div>
						<div class="card-body">
							<form action="/admin/configuration/level" method="post">
								@csrf
								<x-input field="tingkatan" name="Nama Tingkatan" value="" type="text"/>
								<x-input field="salary" name="Pendapatan" value="" type="text"/>
								<x-input field="bonus" name="Bonus" value="" type="text"/>
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
	<link rel="stylesheet" href="{{ asset('assets/vendors/simple-datatables/style.css') }}" >
	@endsection
	
	@section('footer-custom')
	<script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let leveling = document.querySelector('#daftarlevel');
        let dataTable = new simpleDatatables.DataTable(leveling);
    </script>
	@endsection
	