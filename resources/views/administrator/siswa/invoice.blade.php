	@extends('layout.page')

	@section('sidebar')
		@component('components.adminSidebar')
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

	@section('tab-title','Invoice Siswa')

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
			<form id="formpost" action="/admin/siswa/invoice/{{$siswa->id}}" method="post">
			@csrf
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
							<th>Pilih</th>
							<th>Ticket</th>
                            <th>Topic</th>
                            <th>Tempat</th>
                            <th>Mapel</th>
                            <th>Peserta</th>
                            <th>Tentor</th>
							<th>Status Bayar</th>
                            <th>Waktu</th>

                            <th>Biaya</th>
                        </tr>
                    </thead>
                    <tbody>
					@foreach($kehadiran as $each)
                        <tr>
							<td><input type="checkbox" name="hash[]" value="{{$each -> hash}}" {{ ($each -> status_bayar == 'paid') ? 'disabled' : ''}}></td>
							<td>{{	$each -> hash	}}</td>
							<td>{{	$each -> topic	}}</td>
							<td>{{	$each -> place }}</td>
							<td>{{	$each -> mapel }}</td>
							<td>{{	$each -> students }}</td>
							<td>{{	$each -> tentors}}</td>
							<td>{{	$each -> status_bayar}}</td>
							<td>{{	$each -> date_exec}}</td>
							<td>Rp. 30.000</td>
                        </tr>
					@endforeach
                    </tbody>
                </table>
				<div class="row justify-content-center mt-1">
				<button type="submit" name="action" value="print" class="col-md-2 mx-1 my-1 btn btn-outline-primary">Print</button>
				<button type="submit" name="action" value="print2nd" class="col-md-2 mx-1 my-1 btn btn-outline-primary">Print2 Template</button>
				<button type="submit" name="action" value="paid" class="col-md-2 mx-1 my-1 btn btn-outline-danger">Sudah Dibayar</button>
				</div>
			</form>
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
	$(document).ready(() =>{

		// Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);

	})
    </script>
	@endsection
