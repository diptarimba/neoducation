	@extends('layout.page')
	
	@section('sidebar')
		@component('components.adminSidebar')
		@endcomponent
	@endsection
	
	@section('tab-title', 'Manage Paket')
	
	@section('page-title')
	<x-title heading="Manajemen Paket Siswa ND" subheading="Manajemen Paket Siswa ND" url="/admin" />
	@endsection
	
	@section('page-content')
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-12">
					<div class="card">
						<div class="card-header">
							<h4>Daftar Paket Siswa ND</h4>
						</div>
						<div class="card-body">
							<table class="table table-striped" id="daftarlevel">
							<thead>
								<th>ID</th>
								<th>Paket</th>
								<th>Biaya</th>
								<th>Action</th>
							</thead>
							<tbody>
								@foreach($package as $each)
								<tr>
									<td>{{$each -> id}}</td>
									<td>{{$each -> package_name}}</td>
									<td>Rp. {{ number_format($each -> package_price, 0, ",", ".") }}</td>
									<td>
										<div class="container row col-12">
										<form class="col-6" action="/admin/configuration/package/{{$each->id}}" method="post">
											@csrf
											<x-input field="price" name="Biaya" value="" type="text"/>
											<button type="submit" class="btn btn-outline-success btn-sm">Update Harga</button>
										</form>
										<form class="col-6" action="/admin/configuration/package/{{$each->id}}" method="post">
											@csrf
											@method('delete')
											<button type="submit" class="btn btn-outline-danger">Hapus</button>
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
				<div class="col-md-3 col-12">
					<div class="card">
						<div class="card-header">
							<h4>Tambahkan Paket Siswa ND</h4>
						</div>
						<div class="card-body">
							<form action="/admin/configuration/package" method="post">
								@csrf
								<x-input field="packages" name="Nama Paket" value="" type="text"/>
								<x-input field="price" name="Biaya" value="" type="text"/>
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
	