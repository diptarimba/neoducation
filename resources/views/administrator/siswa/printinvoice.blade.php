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
	<section class="section">
	<div class="row">
		<div class="card">
			<div class="card-header">
				<h4 class="text-center">Print Invoice Ananda {{$siswa->name}}</h4>
			</div>
			<div class="card-body">
				<table class="table table-borderless">
				<tbody class="siapprint">
					<tr>
						<td class="text-center" colspan="4">Neoducationz</td>
					</tr>
					<tr>
						<td class="text-center" colspan="4">Living for Learning</td>
					</tr>
				<tbody>
				</table>
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
						@php
							$no = 0;
						@endphp
						@foreach($dataInvoice as $eachs)
						@php
							$no++;
						@endphp
							@foreach($eachs as $each)
							<tr>
								<td>{{$no}}</td>
								<td>Topik : {{$each->topic}}<br/>Mata Pelajaran : {{$each->mapel}}<br/></td>
								<td>{{$each->date_exec}}<br/></td>
							<td>Rp. 30.000</td>
							</tr>
							@endforeach
						@endforeach
						<tr>
							<td class="text-center" colspan="3">Total</td>
							<td>Rp. {{number_format(30000*$no,"0",",",".")}}
						</tr>
						
					</tbody>
				</table>
            </div>
        </div>
		<div class="container col-3 ">
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
		<script>
			$(document).ready(() => {
				console.log($('.siapprint'));
				$('.btnprint').on('click', function(){
					
					
					
					var sTable = $('.siapprint')[0].innerHTML;
					console.log(sTable);
					var rTable = $('.siapprint')[1].innerHTML;
					console.log(rTable);

					var style = "<style>";
					style = style + "table {width: 100%;font: 17px Calibri;}";
					style = style + "table, th, td {border: solid 1px #fff; border-collapse: collapse;";
					style = style + "padding: 2px 3px;text-align: center;}";
					style = style + "</style>";
					
					var win = window.open('', '', 'height=700,width=700');

					win.document.write('<html><head>');
					win.document.write('<title>Profile</title>');   // <title> FOR PDF HEADER.
					win.document.write(style);  
					win.document.write('</head>');
					win.document.write('<body><table><thead>');
					win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
					win.document.write('</thead><tbody>')
					win.document.write(rTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
					win.document.write('</tbody></table></body></html>');
				
					win.document.close(); 	// CLOSE THE CURRENT WINDOW.
				
					win.print();    // PRINT THE CONTENTS.
				})
			})
		</script>
	@endsection