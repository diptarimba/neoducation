	@extends('layout.page')
	
	@section('tab-title')
		Profil Tentor
	@endsection
	
	@section('sidebar')
		@component('components.tentorSidebar')
		@endcomponent
	@endsection
	
	@section('page-title')
	<div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Profil Tentor</h3>
                <!-- <p class="text-subtitle text-muted">Halaman Profil Siswa</p> -->
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profil Tentor</li>
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
					<div class="card-body">
					<div class="card">
                    <div class="card-header">
                        <h5>Data Tentor</h5>
                    </div>
                    <div class="card-body" style="width: 100%">
					<div class="col-8 mx-auto mb-2 mt-2" style="width: 40%;">
					<img src="{{asset('assets/images/tentor/' . $tentor->pict_name) }}" class="card-img-top img-fluid"
                                        alt="singleminded">
					</div>
						<table class="table table-borderless">
						<tr>
							<td>Nama Tentor</td>
							<td>{{ $tentor->name }}</td>
						</tr>
						<tr>
							<td>Username</td>
							<td>{{ $tentor->username }}</td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>{{ $tentor->address }}</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>{{ $tentor->email }}</td>
						</tr>
						<tr>
							<td>Mapel</td>
							<td>{{ $tentor->mapel }}</td>
						</tr>
						</table>
						<div class="row">
							<a href="/tentor/{{$tentor->id}}/edit" class="col-4 mx-auto btn btn-primary ms-1 btn-sm">Edit</a>
						</div>
                    </div>
					
                </div>
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
	