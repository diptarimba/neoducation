	@extends('layout.page')
	
	@section('tab-title')
		Profil Siswa
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
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
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
			@foreach($siswa as $a)
                <div class="card">
                    <div class="card-header">
                        <h5>Data Diri</h5>
                    </div>
                    <div class="card-body">
                        <p><span> Username : {{ $a->username }}</span><br/>
                        <span> Nama siswa : {{ $a->name_siswa }}</span><br/>
                        <span> Nama orangtua : {{ $a->name_orangtua }}</span><br/>
                        <span> Kode Siswa : {{ $a->code_siswa }}</span><br/>
                        <span> Kode Paket : {{ $a->code_packet }}</span><br/>
                        <span> Nama Paket : {{ $a->name_packet }}</span></p>
						<div class="row">
							<button type="button" class="col-4 mx-auto btn btn-primary ms-1 btn-sm">Edit</button>
							<button type="button" class="col-4 mx-auto btn btn-danger me-1 btn-sm">Hapus</button>
						</div>
                    </div>
					
                </div>
			@endforeach
			</div>
			<div class="col-md-6 col-12">
				<div class="card">
					<div class="card-header">
						<h5>Invoice</h5>
					</div>
					<div class="card-body">
						
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
	