	@extends('layout.page')
	
	@section('sidebar')
		@component('components.adminSidebar')
		@endcomponent
	@endsection
	
	@section('page-title')
	<x-title heading="Manage Presensi" subheading="Manage Presensi" url="/admin">
	@endsection
	
	@section('page-content')
	<section class="section">
		
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
	