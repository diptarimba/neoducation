	@extends('layout.page')
	
	@section('tab-title')
		Profil Siswa
	@endsection
	
	@section('sidebar')
		@component('components.userSidebar')
		@endcomponent
	@endsection
	
	@section('page-title')
	<div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Profil Siswa</h3>
                <!-- <p class="text-subtitle text-muted">Halaman Profil Siswa</p> -->
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profil Siswa</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
	@endsection
	
	@section('page-content')
	<section class="section">
        <div class="row">
            <div class="col-md-6 col-12">
			
                <div class="card">
					<div class="card-content d-grid mx-auto" >
                    <div class="card-header">
                        <h5>Data Diri</h5>
                    </div>
                    <div class="card-body" style="width: 100%;">
					<div class="col-8 mx-auto mb-2 mt-2" style="width: 40%;">
					<img src="{{asset('assets/images/siswa/' . $siswa->pict_name )}}" class="card-img-top img-fluid" alt="singleminded">
					</div>
					<table class="table table-borderless">
					<tr>
						<td>Username</td>
						<td>{{ $siswa->username }}</td>
					</tr>
					<tr>
						<td>Nama Siswa</td>
						<td>{{ $siswa->name }}</td>
					</tr>
					<tr>
						<td>Nama Orang Tua</td>
						<td>{{ $siswa->parent_name }}</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>{{ $siswa->address }}</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>{{ $siswa->email }}</td>
					</tr>
					<tr>
						<td>Nama Paket</td>
						<td>{{ $siswa->package }}</td>
					</tr>
					</table>
						<div class="row col-4 mx-auto">
							<a href="/siswa/{{$siswa->id}}/edit" class="btn btn-primary ms-1 btn-sm">Edit</a>
						</div>
                    </div>
					</div>
                </div>
			
			</div>
			<div class="col-md-6 col-12">
				<div class="card">
					<div class="card-header">
						<h5>Daftar Pertemuan</h5>
					</div>
					<div class="card-body">
						
						<table class="table table-borderless">
						<thead>
							<th>Ticket</th>
							<th>Topic</th>
							<th>Mapel</th>
							<th>Action</th>
						</thead>
						<tbody>
						@foreach($datahadir as $each)
						
						<tr>
							<td>{{$each-> hash}}</td>
							<td>{{$each-> topic}}</td>
							<td>{{$each-> mapel}}</td>
							<td><a class="btn btn-primary btn-sm"href="/siswa/invoice">Detail</td>
						</tr>
						
						@endforeach
						</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
    </section>
	@endsection
	
	@section('header-custom')
	
	@endsection
	
	@section('footer-custom')
	@endsection
	