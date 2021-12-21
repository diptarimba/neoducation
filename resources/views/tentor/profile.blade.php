	@extends('layout.page')
	
	@section('tab-title')
		Edit Profile
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
                        <li class="breadcrumb-item active" aria-current="page">Profil Edit Tentor</li>
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
                    <div class="card-header">
                        <h5>Data Diri Tentor</h5>
                    </div>
					<div class="card-body" style="width: 100%">
					<div class="col-8 mx-auto mb-2 mt-2" style="width: 40%;">
					<img src="{{asset('assets/images/tentor/' . $tentor->pict_name) }}" class="card-img-top img-fluid"
                                        alt="singleminded">
					</div>
					<form action='/tentor/{{ $tentor->id }}' method="POST" enctype="multipart/form-data">
					@csrf
					@method("PUT")
					
					<x-input field="uniqueid" name="Kode Unik Tentor" value="{{ $tentor->uniqueid }}" type="text"/>
					<x-input field="username" name="Username" value="{{ $tentor->username }}" type="text"/>
					<x-input field="name" name="Nama Lengkap" value="{{ $tentor->name }}" type="text"/>
					<x-input field="password" name="Password" value="" type="password"/>
					<x-input field="email" name="Email" value="{{ $tentor->email }}" type="text"/>
					<x-input field="address" name="Alamat" value="{{ $tentor->address }}" type="text"/>
					<x-input field="mapel" name="Mapel" value="{{ $tentor->mapel }}" type="text"/>
					
					<div class="mb-3">
                        <label for="formFile" class="form-label">Masukan Foto Profilmu Disini!</label>
                        <input name="pictProfile" class="form-control" value="{{asset('assets/images/tentor/' . $tentor->pict_name) }}" type="file" id="formFile">
                    </div>
					
					<!--
					<x-input field="NoHP" name="Nomer HP (Whatsapp)" value="" type="text" />
					<x-input field="Address" name="Alamat" value="" type="text" />
					<x-input field="Email" name="Email" value="" type="text" />
					-->
					
						<button type="submit" class="btn btn-outline-success">Update!</button>
					</form>
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
	