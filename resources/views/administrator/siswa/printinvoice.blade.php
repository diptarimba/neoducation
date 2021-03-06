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

	@section('tab-title')
		Invoice Siswa
	@endsection

	@section('page-content')
	<section class="section" id="invoiceses">
	<div class="row">
		<div class="card mb-3">
		<div class="row g-0">
			<div class="col-4 mt-3 mb-3 ms-4" style="max-width: 125px;">
			<img src="{{ asset('assets/images/logo/logo_rounded.jpg')}}" class="img-fluid rounded-start" alt="...">
			</div>
			<div class="col-8">
			<div class="card-body me-5">
				<h3 class="text-center text-black me-1">Neoducationz</h3>
				<p class="card-text text-center me-1"><strong>Jl. Kutoarjo No.78, Kuwarisan, RT 1 RW 11, <br/>Panjer, Kebumen<br/>Email: neoducationz@gmail.com, Telepon (0822)20682472</strong></p>
			</div>
			</div>
		</div>
		</div>
		<div class="card">
			<div class="card-header">
				<p class="text-center h4 text-black">Invoice Pembayaran</p>
			</div>
			<div class="card-body">
				<p class="card-text">Siswa : {{$siswa->name}}<br/>Paket : {{ucwords($siswa->package)}}</p>
			</div>
		</div>
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
				<table class="table table-striped " >

					<thead>
						<th>No</th>
						<th>Keterangan</th>
						<th>Waktu</th>
						<th>Biaya</th>
					</thead>

					<tbody class="siapprint"><!--
					<tr>
						<td><b>No</b></td>
						<td><b>Keterangan</b></td>
						<td><b>Waktu</b></td>
						<td><b>Biaya</b></td>
					</tr> -->
						@foreach($dataInvoice as $each)
						<tr>
                            <td>{{$loop->iteration}}</td>
                            <td>Topik : {{$each->topic}}<br/>Mata Pelajaran : {{$each->mapel}}<br/>Nama Tentor : {{$each->name_tentors}}</td>
                            <td>{{$each->date_exec}}<br/></td>
                        <td>Rp. {{number_format($each->biaya,"0",",",".")}}</td>
                        </tr>
						@endforeach
						<tr>
							<td class="text-center" colspan="3">Total</td>
							<td>Rp. {{number_format($total,"0",",",".")}}
						</tr>

					</tbody>
				</table>
            </div>
        </div>
		<div class="container col-3 containerbutton">
		<div class="row justify-content-end">
		<div class="card ">
				<button class="btn btn-primary btnprint col-md">Print Invoice</button>
		</div>
		</div>
		</div>
    </div>
    </section>
	@endsection

	@section('header-custom')

	@endsection

	@section('footer-custom')
		<script src="{{ asset('assets/js/extensions/jQuery.print.min.js') }}"></script>
		<script>
			$(document).ready(() => {
				console.log($('.siapprint'));
				$('.btnprint').on('click', function(){

					$('.containerbutton').hide();

					$("#invoiceses").print({

					// Use Global styles
					globalStyles : false,

					// Add link with attrbute media=print
					mediaPrint : false,

					//Custom stylesheet
					stylesheet : "{{ asset('assets/css/bootstrap.css') }}",

					//Print in a hidden iframe
					iframe : false,

					// Don't print this
					noPrintSelector : ".avoid-this",

					// Add this on top
					//append : "Free jQuery Plugins<br/>",

					// Add this at bottom
					//prepend : "<br/>jQueryScript.net",

					// Manually add form values
					manuallyCopyFormValues: true,

					// resolves after print and restructure the code for better maintainability
					deferred: $.Deferred(),

					// timeout
					timeout: 250,

					// Custom title
					title: "Invoice {{$siswa->name}}",

					// Custom document type
					doctype: '<!doctype html>'

					});
				})
			})
		</script>
	@endsection
