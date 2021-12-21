	@extends('layout.page')
	
	@section('sidebar')
		@component('components.adminSidebar')
		@endcomponent
	@endsection
	
	@section('tab-title', 'Manajemen Admin')
	
	@section('page-title')
	<x-title heading="Manajemen Admin" subheading="Manajemen Admin" url="/admin" />
	@endsection
	
	@section('page-content')
	<section class="section">
		<div class="container">
			<div class="row">
			
			@if(Session::has('message'))
				<div class="col-12">
					<div class="alert alert-danger alert-dismissible show fade">
                        {{ Session::get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
				</div>
			@endif
			
				<div class="col-md-6 col-12">
					<div class="card">
						<div class="card-header">
							<h4>Daftar Admin</h4>
						</div>
						<div class="card-body">
							<table class="table table-striped" id="daftarlevel">
							<thead>
								<th>No.</th>
								<th>Nama Pengguna</th>
								<th>Alias</th>
								<th>Action</th>
							</thead>
							<tbody>
								@foreach($admin as $each)
								<tr>
									<td>{{$each -> id}}</td>
									<td>{{$each -> name}}</td>
									<td>{{$each -> username}}</td>
									<td>
										<div class="container">
										<form action="/admin/{{$each->id}}" method="post">
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
							<form action="/admin" method="post">
								@csrf
								<x-input field="name" name="Nama Lengkap" placeholder="Mugiwara D Luffy" type="text" minlength="5"/>
								<x-input field="username" name="Username" placeholder="Luffy" type="text" minlength="5"/>
								<x-input field="password" name="Password" value="" type="password" minlength="8"/>
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
	