	@extends('layout.page')

	@section('tab-title')
		Presensi
	@endsection

	@section('sidebar')
		@component('components.tentorSidebar')
		@endcomponent
	@endsection

	@section('page-title')
	<div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Presensi Tentor</h3>
                <!-- <p class="text-subtitle text-muted">Halaman Profil Siswa</p> -->
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Presensi Tentor</li>
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
                        <h5>Data Diri Tentor</h5>
                    </div>
					<div class="card-body">
					<form action='/tentor' method="POST">

					@csrf
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<x-input field="namaTentor" name="" value="{{$tentor->name}}" readonly="" type="hidden"/>
					<x-input field="unique" name="Kode Unik Tentor" value="{{$tentor->uniqueid}}" readonly="" type="text"/>
					<x-input field="idtentor" name="ID Tentor" value="{{$tentor->id}}" readonly="" type="hidden"/>
					<x-input field="topic" name="Topic" required="" type="text"/>
					<x-input field="tempat" name="Tempat" required="" type="text"/>
					<x-input field="tanggal" name="Tanggal" required="" type="datetime-local"/>
					<!-- <x-input field="waktu" name="Waktu" type="time"/>-->
					<div class="mb-3">
					<label class="form-label" for="mapel">Pilih Mapel</label>
					<!--
					<x-input field="mapel" name="Mapel" value="{{$tentor->mapel}}" readonly type="text"/>
					-->
					<select id="siswapilih" class="form-select choices" name="mapel" aria-label="Default mapel">
						<optgroup label="Mapel">
						@foreach($mapel as $each)
							<option value="{{$each->name_mapel}}">{{$each->name_mapel}}</option>
						@endforeach
						</optgroup>
					</select>
					</div>
					<!-- <x-input field="mapel" name="Mapel" type="text"/> -->
					<div class="mb-3">
						<label class="form-label" for="siswa">Peserta Bimbingan</label>
						<select id="pesertapilih"class="choices form-select multiple-remove" name="peserta[]" multiple="multiple"  aria-label="Default siswa">
							<optgroup label="Siswa">

								@foreach($siswa as $each)
									<option value="{{$each->id}}">{{$each->name . " - " . $each->package }}</option>
								@endforeach

							</optgroup>
						</select>
					</div>

					<!-- Button trigger for basic modal -->

					<div class="row justify-content-center" id="buttonField">



					</div>
					<div id="quizcontainer">

					</div>

					<!--
					<x-input field="NoHP" name="Nomer HP (Whatsapp)" value="" type="text" />
					<x-input field="Address" name="Alamat" value="" type="text" />
					<x-input field="Email" name="Email" value="" type="text" />
					-->
					<div class="mt-2">
						<button type="submit" class="btn btn-outline-success inputpresensi">Input Presensi!</button>
					</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection

	@section('header-custom')
	<!-- Include Choices CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/choices.js/choices.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendors/sweetalert2/sweetalert2.min.css') }}">
	@endsection

	@section('footer-custom')
	<!-- Include Choices JavaScript -->
    <script src="{{ asset('assets/vendors/choices.js/choices.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-element-select.js') }}"></script>

    <script src="{{ asset('assets/vendors/sweetalert2/sweetalert2.all.min.js') }}"></script>

	<!-- adding quiz -->
	<script>
	$(document).ready(() => {


		$('.inputpresensi').on('click', function(e) {
			e.preventDefault();


			var checkeder = $(':radio:checked').length;
			console.log(checkeder)

			var jumlahform = $('.buathitung').length;
			console.log(jumlahform);

			if(jumlahform < 1){
				Swal.fire({
					icon: "error",
					title: "Kamu belum mengisi satupun siswa!"
				})
			}else if(checkeder < 7 * jumlahform){
				Swal.fire({
					icon: "error",
					title: "Kamu belum mengisi semua form siswa, silahkan cek ulang!!"
				})
			}else{

				var form = $('form');
				form.submit();
			}
		})

		var map = $("#pesertapilih").on("change",function(){

			if($("#pesertapilih option:selected").length === 7){
				console.log($("#pesertapilih option:selected").length)
				$(".choices").prop('disabled', true);
				console.log('disabled');
			}else{
				$(".choices").prop('disabled', false);
			}

			var comp = $("#pesertapilih option:selected").map(function() {
					return this.value;
				}).get(),
				set1 = map.filter(function(i) {
					return comp.indexOf(i) < 0;
				}),
				set2 = comp.filter(function(i) {
					return map.indexOf(i) < 0;
				}),
				idsiswa = (set1.length ? set1 : set2)[0];


			map = comp;

			var namasiswa = $("#pesertapilih option[value="+idsiswa+"]:selected").text().split("-")[0].trim();

			if(set1.length){
				$('#btnModal'+ idsiswa ).remove();
				$('#siswa'+ idsiswa ).remove();
				console.log('#siswa'+ idsiswa)
			}else{
				$('#buttonField').append('<button type="button" class="col-2 ms-1 mt-1 btn buathitung btn-outline-primary block" id="btnModal'+ idsiswa +'" data-bs-toggle="modal" data-bs-target="#siswa'+ idsiswa +'"> '+ namasiswa +' </button>')
				$('#quizcontainer').append('<div class="modal fade text-left" id="siswa'+ idsiswa +'" tabindex="-1" role="dialog" aria-labelledby="siswa'+ idsiswa +'" aria-hidden="true"><div class="modal-dialog modal-dialog-scrollable" role="document"><div class="modal-content"><div class="modal-header">'
				+ '<h5 class="modal-title" id="titlesiswa'+ idsiswa +'">'+ namasiswa +'</h5>'
				+'<button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button></div>'
				+'<div class="modal-body"><div class="form-check "><div class="mb-3"><label class="form-label" for="ask">Nama Siswa</label><input required type="text" name="ans['+ idsiswa +'][name]" class="form-control" id="ask" value="'+namasiswa+'"></div></div>'
				+'<div class="form-check ">'
				+'<div class="mb-3"><input required type="hidden" name="ans['+ idsiswa +'][id]" class="form-control" id="ask" value="'+idsiswa+'"></div></div><div class="mb-3 quizsiswa" id="persiswaan"><div id="persiswaan">'
				+'<table class="table table-borderless"><thead><tr><th colspan="3">Kondisi Siswa</th></tr></thead><tbody><ul><tr><td><li>Fokus</li></td><td>'
				+'<div class="form-check"><input required class="form-check-input" type="radio" name="ans['+ idsiswa +'][1]" id="ans1" value="Ya"><label class="form-check-label" for="ans1"> Ya </label></div></td><td>'
				+'<div class="form-check"><input required class="form-check-input" type="radio" name="ans['+ idsiswa +'][1]" id="ans2" value="Tidak"><label class="form-check-label" for="ans2"> Tidak </label></div></td></tr><tr><td><li>Moodnya baik</li></td><td>'
				+'<div class="form-check"><input required class="form-check-input" type="radio" name="ans['+ idsiswa +'][2]" id="ans1" value="Ya"><label class="form-check-label" for="ans1"> Ya </label></div></td><td>'
				+'<div class="form-check"><input required class="form-check-input" type="radio" name="ans['+ idsiswa +'][2]" id="ans2" value="Tidak"><label class="form-check-label" for="ans2"> Tidak </label></div></td></tr><tr><td><li>Materi tuntas tersampaikan</li></td><td>'
				+'<div class="form-check"><input required class="form-check-input" type="radio" name="ans['+ idsiswa +'][3]" id="ans1" value="Ya"><label class="form-check-label" for="ans1"> Ya </label></div></td><td>'
				+'<div class="form-check"><input required class="form-check-input" type="radio" name="ans['+ idsiswa +'][3]" id="ans2" value="Tidak"><label class="form-check-label" for="ans2"> Tidak </label></div></td></tr><tr><td><li>Suasana belajar kondusif</li></td><td>'
				+'<div class="form-check"><input required class="form-check-input" type="radio" name="ans['+ idsiswa +'][4]" id="ans1" value="Ya"><label class="form-check-label" for="ans1"> Ya </label></div></td><td>'
				+'<div class="form-check"><input required class="form-check-input" type="radio" name="ans['+ idsiswa +'][4]" id="ans2" value="Tidak"><label class="form-check-label" for="ans2"> Tidak </label></div></td></tr><tr><td><li>Tempat belajar nyaman</li></td><td>'
				+'<div class="form-check"><input required class="form-check-input" type="radio" name="ans['+ idsiswa +'][5]" id="ans1" value="Ya"><label class="form-check-label" for="ans1"> Ya </label></div></td><td>'
				+'<div class="form-check"><input required class="form-check-input" type="radio" name="ans['+ idsiswa +'][5]" id="ans2" value="Tidak"><label class="form-check-label" for="ans2"> Tidak </label></div></td></tr></ul></tbody></table>'

				+'<table class="table table-borderless"><thead><tr><th colspan="3">Kedisiplinan</th></tr></thead><tbody><ul><tr><td><li>Mulai tepat waktu?</li></td><td>'
				+'<div class="form-check"><input required class="form-check-input" type="radio" name="ans['+ idsiswa +'][6]" id="ans1" value="Ya"><label class="form-check-label" for="ans1"> Ya </label></div></td><td><div class="form-check"><input required class="form-check-input" type="radio" name="ans['+ idsiswa +'][6]" id="ans2" value="Tidak"><label class="form-check-label" for="ans2"> Tidak </label></div></td></tr><tr><td><li>Selesai tepat waktu?</li></td><td>'
				+'<div class="form-check"><input required class="form-check-input" type="radio" name="ans['+ idsiswa +'][7]" id="ans1" value="Ya"><label class="form-check-label" for="ans1"> Ya </label></div></td><td><div class="form-check"><input required class="form-check-input" type="radio" name="ans['+ idsiswa +'][7]" id="ans2" value="Tidak"><label class="form-check-label" for="ans2"> Tidak </label></div></td></tr></ul></tbody></table>'

                +'<table class="table table-borderless"><thead><tr><th colspan="3">Kualitas Belajar </th></tr></thead><tbody><ul>'
				+'<tr><td><li>Ada masalah?</li></td><td><div class="form-check "><div class="mb-3"><input type="text" name="ans['+ idsiswa +'][8]" class="form-control" id="ask"></div></div></td><td><div class="form-check form-switch"></div></td></tr>'
				+'<tr><td><li>Ada PR yang belum selesai?</li></td><td><div class="form-check "><div class="mb-3"><input type="text" name="ans['+ idsiswa +'][9]" class="form-control" id="ask"></div></div></td><td><div class="form-check form-switch"></div></td></tr>'
				+'<tr><td><li>Adakah inspirasi dan motivasi yang diberikan?</li></td><td><div class="form-check "><input type="text" name="ans['+ idsiswa +'][10]" class="form-control" id="ask"></div></div></td><td><div class="form-check form-switch"></div></td></tr>'
				+'<tr><td><li>Berikan Nilai 1-100</li></td><td><div class="form-check "><input type="text" name="ans['+ idsiswa +'][11]" class="form-control" id="ask"></div></div></td><td><div class="form-check form-switch"></div></td></tr>'
                +'</ul></tbody></table></div></div></div><div class="modal-footer"><button type="button" class="btn" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Close</span></button></div></div></div></div>');
			}

		}).find('option:selected').map(function() {return this.value}).get();

	})
	</script>
	@endsection
