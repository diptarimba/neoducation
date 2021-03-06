	@extends('layout.page')
	
	@section('tab-title')
		Edit Profile
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
                        <li class="breadcrumb-item active" aria-current="page">Profil Edit Siswa</li>
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
					<div class="card-content">
                    <div class="card-header">
                        <h5>Data Diri</h5>
                    </div>
					<div class="card-body" style="width: 100%;">
					<div class="col-8 mx-auto mt-2 mt-2" style="width: 40%;">
					<img src="{{asset('assets/images/siswa/' . $siswa->pict_name) }}" class="card-img-top img-fluid"
                                        alt="singleminded">
					</div>
					<form action='/siswa/{{ $siswa->id }}' method="POST" enctype="multipart/form-data">
					@csrf
					@method("PUT")
					<x-input field="NamaPaket" name="Nama Paket" value="{{ $siswa->package }}" readonly="" type="text"/>
					<x-input field="Username" name="Username" value="{{ $siswa->username }}" type="text"/>
					<x-input field="NamaSiswa" name="Nama Siswa" value="{{ $siswa->name }}" type="text"/>
					<x-input field="NamaOrtu" name="Nama Orang Tua" value="{{ $siswa->parent_name }}" type="text"/>
					<x-input field="Address" name="Alamat" value="{{ $siswa->address }}" type="text" />
					<x-input field="password" name="Password" value="" type="password"/>
					<x-input field="Email" name="Email" value="{{ $siswa->email }}" type="text" />
					<div class="mb-3">
                        <label for="formFile" class="form-label">Masukan Foto Profilmu Disini!</label>
                        <input name="pictProfile" class="form-control" value="{{asset('assets/images/siswa/' . $siswa->pict_name) }}" type="file" id="formFile">
                    </div>
					<!--
					<x-input field="NoHP" name="Nomer HP (Whatsapp)" type="text" />
					
					-->
					
						<button type="submit" class="btn btn-outline-success">Perbaharui Data!</button>
					</form>
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
	