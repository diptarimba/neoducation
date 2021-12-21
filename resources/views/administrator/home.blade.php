	@extends('layout.page')
	
	@section('tab-title','Administrator')
	
	@section('sidebar')
		@component('components.adminSidebar')
		@endcomponent
	@endsection
	
	@section('page-title')
	<div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Administrator</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Admin</li>
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
                    <h4>Statistic Page</h4>
                </div>
                <div class="card-body">
					<div class="alert alert-secondary">
						<p>Jumlah Tentor : {{ $tentor }}</p>
					</div>
					<div class="alert alert-secondary">
						<p>Jumlah Siswa : {{ $siswa }}</p>
					</div>
					<div class="alert alert-secondary">
						<p>Jumlah Bimbingan (Siswa) : {{ $sumBimbingan_siswa }}</p>
					</div>
					<div class="alert alert-secondary">
						<p>Jumlah Bimbingan (Tentor) : {{ $sumBimbingan_tentor }}</p>
					</div>
					<div class="alert alert-secondary">
						<p>Jumlah Pendapatan : Rp. {{ number_format($sumBimbingan_siswa * 30000,0,',','.') }}</p>
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
	