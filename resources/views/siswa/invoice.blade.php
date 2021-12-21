	@extends('layout.page')
	
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
                        <li class="breadcrumb-item active" aria-current="page">Invoice Siswa</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
	@endsection
	
	@section('tab-title')
		Invoice Siswa
	@endsection
	
	@section('page-content')
	<section class="section">
	<div class="row">
        <div class="col">
        <div class="card">
            <div class="card-header">
			<p>
                Invoice Siswa : <span class="h5"> {{$siswa->name}} </span> 
			</p>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
							<th>Ticket</th>
                            <th>Topic</th>
                            <th>Tempat</th>
                            <th>Mapel</th>
                            <th>Peserta</th>
                            <th>Tentor</th>
                            <th>Waktu</th>
                            <th>Pembayaran</th>
                            <th>Biaya</th>
                        </tr>
                    </thead>
                    <tbody>
					@foreach($datahadir as $each)
                        <tr>
                           <td>{{$each -> hash}}</td>
                           <td>{{$each -> topic}}</td>
                           <td>{{$each -> place }}</td>
                           <td>{{$each -> mapel }}</td>
                           <td>{{$each -> students }}</td>
                           <td>{{$each -> tentors}}</td>
                           <td>{{$each -> date_exec}}</td>
                           <td>{{($each -> status_bayar !== 'unpaid') ? 'Telah Dibayar' : 'Belum Dibayar'}}</td>
                           <td>Rp. {{number_format($each -> biaya, 0, ",", ".")}}</td>
                        </tr>
					@endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
		<div class="col-md-6 col-12">
		<div class="card">
			<div class="card-body">
				<p>Total Biaya : <span class="h5"> Rp. {{number_format($total, 0, ",", ".")}}</span>
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
	