	@extends('layout.page')
	
	@section('tab-title')
		Laporan Presensi
	@endsection
	
	@section('sidebar')
		@component('components.tentorSidebar')
		@endcomponent
	@endsection
	
	@section('page-title')
	<div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Laporan Presensi Tentor</h3>
                <!-- <p class="text-subtitle text-muted">Halaman Profil Siswa</p> -->
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Laporan Presensi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
	@endsection
	
	@section('page-content')
	<section class="section">
        <div class="card">
            <div class="card-header">
                Reports Mengajar
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
                        </tr>
                    </thead>
                    <tbody>
					@foreach($reports as $each)
                        <tr>
                           <td>{{$each -> hash}}</td>
                           <td>{{$each -> topic}}</td>
                           <td>{{$each -> place }}</td>
                           <td>{{$each -> mapel }}</td>
                           <td>{{$each -> students }}</td>
                           <td>{{$each -> tentors}}</td>
                        </tr>
					@endforeach
                    </tbody>
                </table>
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
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
	@endsection
	