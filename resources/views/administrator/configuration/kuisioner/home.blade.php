	@extends('layout.page')
	
	@section('sidebar')
		@component('components.adminSidebar')
		@endcomponent
	@endsection
	
	@section('page-title')
	<x-title heading="Manage Kuisioner" subheading="Manage Kuisioner" url="/admin">
	@endsection
	
	@section('page-content')
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-12">
					<div class="card">
						<div class="card-header">
							<h5>Kuisioner</h5>
						</div>
						<div class="card-body">
							<table class="table table-borderless" id="kuisioner">
							</table>
						</div>
					</div>
				</div>
			</div>
		</divv>
	</section>
	@endsection
	
	@section('header-custom')
	<link rel="stylesheet" href="{{ asset('assets/vendors/simple-datatables/style.css') }}">
	@endsection
	
	@section('footer-custom')
	<script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#kuisioner');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
	@endsection
	