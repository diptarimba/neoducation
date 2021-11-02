	@extends('layout.page')
	
	@section('sidebar')
		@component('components.adminSidebar')
		@endcomponent
	@endsection
	
	@section('page-title')
	<x-title heading="Manage Level Tentor" subheading="Manage Level Tentor" url="/admin">
	@endsection
	
	@section('page-content')
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-12">
					<div class="card">
					<div class="card-header">
						<h3>Tambah Level</h3>
					</div>
					<div class="card-body">
						<form action='/managesiswa' method="POST">
							@csrf
							@if ($errors->any())
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
							
							<x-input field="username" name="Username" value="" type="text"/>
							<x-input field="password" name="Password" value="" type="password"/>
							<x-input field="name" name="Nama Lengkap" value="" type="text"/>
							<x-input field="parentName" name="Nama Orang Tua" value="" type="text"/>
							<x-input field="email" name="Email" value="" type="text"/>
							<x-input field="address" name="Alamat" value="" type="text"/>
							<x-input field="package" name="Paket Bimbingan" value="" type="text"/>
							<x-input field="phone" name="Nomer HP (Whatsapp)" value="" type="text" />
							
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
	