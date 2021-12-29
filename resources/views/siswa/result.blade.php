	@extends('layout.page')

	@section('sidebar')
		@component('components.userSidebar')
		@endcomponent
	@endsection

	@section('page-title')
	<x-title heading="Perkembangan Siswa" subheading="Perkembangan Siswa" url="/admin" />
	@endsection

	@section('tab-title','Rekapitulasi')

	@section('page-content')
	<section class="section">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-content">
					<!--
                    <div class="card-header">
                        <h5>Data Diri</h5>
                    </div> -->
					<div class="card-body">
					@if(isset($result) )
					@if(count($result) > 0)
					<div class="card collapse-icon accordion-icon-rotate">
							<div class="card-header">
								<h1 class="card-title pl-1">List Tentor</h1>
							</div>
							<div class="card-content">
								<div class="card-body">
									<div class="accordion" id="cardAccordion">

									@php

										$no = 1;

										$parameter = [ ' ','Fokus', 'Mood', 'Materi', 'Suasana Kondusif', 'Tempat Belajar Nyaman', 'Mulai Tepat Waktu', 'Selesai Tepat Waktu', 'Ada Masalah', 'Ada PR Belum Selesai', 'Inspirasi dan Motivasi'];
										$paramsYaTidak = [[],['Tidak', 'Ya'],['Tidak', 'Ya'],['Tidak', 'Ya'],['Tidak', 'Ya'],['Tidak', 'Ya'],['Tidak', 'Ya'],['Tidak', 'Ya'],['Tidak', 'Ya'],['Tidak', 'Ya'],['Tidak', 'Ya']];

									@endphp

										@foreach($result as $each)

										@php
											$each = json_decode(json_encode($each))[0];
											//print_r($each);
											//exit();
											$noavg = 1;
										@endphp

										<div class="card border border-secondary">
											<div class="card-header mb-2" id="heading{{$no}}" data-bs-toggle="collapse"
												data-bs-target="#collapse{{$no}}" aria-expanded="false"
												aria-controls="collapse{{$no}}" role="button">
												<span class="collapsed collapse-title">{{$each->Tentor_name}} - <code>{{$each->Tentor_mapel}}</code><span class="ms-2 badge bg-light-secondary float-end ">Klik Disini</span><span class="badge float-end bg-success image-float">Nilai : {{$each->nilai}}</span></span>
											</div>
											<div id="collapse{{$no}}" class="collapse pt-1" aria-labelledby="heading{{$no}}"
												data-parent="#cardAccordion">
												<div class="card-body">
												<div class="row">
												<div class="col-md-6">

												<div class="mb-3">
													<p><strong>Jumlah pertemuan : </strong>{{$each->sum_meet}}</p>
												</div>

												@foreach($each as $key_each => $value_each)
												@php
												if(substr($key_each,0,3) !== 'avg')
												{
													continue;
												}
												@endphp
													<p>{{$parameter[$noavg]}}</p>
													<div class="mb-3">
													<div class="row">
													<div class="col-2">{{$paramsYaTidak[$noavg][0]}}</div>
													<div class="col progress progress-primary">
													<div class="progress-bar progress-label" role="progressbar" style="width: {{ ($each->{'avg' . $noavg} * 100 ) }}%" aria-valuenow="{{($each->{'avg' . $noavg} * 100 ) }}" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<div class="col-2">{{$paramsYaTidak[$noavg][1]}}</div>
													</div>
													</div>
												@php
													$noavg++;
												@endphp
												@endforeach
												</div>
												<div class="col-md-6">
													<p class="mb-3">Kesimpulan</p>
													<ul>
													<li><p class="text-justify"><strong>Kondisi Siswa</strong><br/>Ananda {{$name}} {{(($each->avg1 *100) > 50) ? "selalu" : ((($each->avg1 *100) > 30) ? "sering" : "jarang")}} fokus dalam pembelajaran. Ini didukung oleh mood siswa yang {{(($each->avg2 *100) > 50) ? "selalu" : ((($each->avg2 *100) > 30) ? "biasanya" : "cenderung kurang")}} baik selama kegiatan tatap muka. Bagi tentor, materi yang tersampaikan pada siswa dirasa {{(($each->avg3 *100) > 50) ? "sudah" : ((($each->avg3 *100) > 30) ? "cukup" : "kurang")}} tuntas  untuk siswa. Dilihat dari penyelenggaraan pembelajaran, suasana belajar siswa saat ini {{(($each->avg4 *100) > 50) ? "sudah" : ((($each->avg4 *100) > 30) ? "cukup" : "kurang")}} kondusif berdasar berbagai faktor, berhubungan dengan kenyamanan tempat belajar yang {{(($each->avg5 *100) > 50) ? "sudah" : ((($each->avg5 *100) > 30) ? "cukup" : "kurang")}} baik.</p></li>

													<li><p><strong>Kedisiplinan</strong><br/>Pembelajaran yang dilakukan {{(($each->avg6 *100) > 50) ? "selalu" : ((($each->avg6 *100) > 30) ? "sering" : "jarang")}} tepat waktu dalam memulainya. Penyelesaian pembelajaran cenderung {{(($each->avg7 *100) > 50) ? "selalu" : ((($each->avg7 *100) > 30) ? "sering" : "jarang")}} tepat waktu sehingga (sesuai/terkadang lebih lama atau lebih singkat/lebih lama atau lebih singkat) {{(($each->avg7 *100) > 50) ? "sesuai" : ((($each->avg7 *100) > 30) ? "terkadang lebih lama atau lebih singkat" : "lebih lama atau lebih singkat")}} dari durasi waktu yang telah ditetapkan. Bagi siswa yang telah sesuai durasi belajarnya, ini dapat dipertahankan. Sedangkan bagi siswa yang durasinya terlalu singkat atau terlalu lama sebaiknya disesuaikan kembali.</p></li>

													<li><p><strong>Kualitas Belajar</strong><br/>Dalam pembelajaran, siswa  {{(($each->avg8 *100) > 50) ? "selalu" : ((($each->avg8 *100) > 30) ? "sering" : "jarang")}} memiliki masalah yang mengganggu bagi tentor maupun siswa. Untuk bagian PR, siswa  {{(($each->avg9 *100) > 50) ? "jarang" : ((($each->avg9 *100) > 30) ? "terkadang" : "selalu")}} menyelesaikan tugas tersebut dengan tuntas. Sebagai pengajar sekaligus pemberi motivasi dan inspirasi, tentor {{(($each->avg10 *100) > 50) ? "sesekali" : ((($each->avg10 *100) > 30) ? "sering" : "selalu")}} memberikan kegiatan inspirasi atau sesi motivasi kepada siswa.</p></li>
													<ul>
												</div>
												</div>
												</div>
											</div>
										</div>

										@php
											$no++;
										@endphp
										@endforeach

									</div>
								</div>
							</div>
						</div>
						@else

						<div class="text-center">Kamu belum punya nilai dari pengajar..!!</div>

						@endif
						@else
						<div class="text-center">Saat ini akses terhadap rapot bulanan siswa masih dikunci :)</div>
						@endif

					</div>
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
