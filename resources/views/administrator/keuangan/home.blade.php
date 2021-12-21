	@extends('layout.page')
	
	@section('sidebar')
		@component('components.adminSidebar')
		@endcomponent
	@endsection
	
	@section('tab-title', 'View Keuangan')
	
	@section('page-title')
	<x-title heading="View Keuangan" subheading="View Keuangan" url="/admin" />
	@endsection
	
	@section('page-content')
	<section class="section">
		@if(!isset($nothing))
		<div class="row">
		<div class="col-12 row">
		<div class="col-md-6 ">
			<div class="card">
				<div class="card-header">
				<p class="card-title">Pendapatan Kotor (unpaid) bulan ini</p>
				</div>
				<div class="card-body">
				@foreach($unpaidThisMonth as $each)
				
				Rp. {{ number_format($each->tbiaya, 0, ",", ".") }}
				@endforeach
				</div>
			</div>
		</div>
		<div class="col-md-6 ">
			<div class="card">
				<div class="card-header">
				<p class="card-title">Pendapatan Bersih (paid) bulan ini</p>
				</div>
				<div class="card-body">
				@foreach($paidThisMonth as $each)
				Rp. {{number_format($each->tbiaya, 0, ",", ".")}}
				@endforeach
				</div>
			</div>
		</div>
		</div>
		<div class="col-12 row">
		<div class="col-md-6 ">
			<div class="card">
				<div class="card-header">
				<p class="card-title">Pendapatan Kotor (unpaid) All Time</p>
				</div>
				<div class="card-body">
				@foreach($unpaid as $each)
				Rp. {{number_format($each->tbiaya, 0, ",", ".")}}
				@endforeach
				</div>
			</div>
		</div>
		<div class="col-md-6 ">
			<div class="card">
				<div class="card-header">
				<p class="card-title">Pendapatan Bersih (paid) All Time</p>
				</div>
				<div class="card-body">
				@foreach($paid as $each)
				Rp. {{number_format($each->tbiaya, 0, ",", ".")}}
				@endforeach
				</div>
			</div>
		</div>
		</div>
		<div class="col-12 row">
		<div class="col-md-6 ">
			<div class="card">
				<div class="card-header">
				<p class="card-title">Pendapatan Kotor All Time</p>
				</div>
				<div class="card-body">
				@foreach($all as $each)
				Rp. {{ number_format($each->tbiaya, 0, ",", ".") }}
				@endforeach
				</div>
			</div>
		</div>
		</div>
		</div>
		@else
			<div class="col-md-6 ">
				<div class="card">
					<div class="card-content">
						<div class="text-center h1 text-danger">Belum ada bimbingan belajar yang terlaksana</div>
					</div>
				</div>
			</div>
		@endif
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
	