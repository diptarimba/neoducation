	@extends('layout.page')
	
	@section('tab-title')
		Quiz Tentor
	@endsection
	
	@section('sidebar')
		@component('components.userSidebar')
		@endcomponent
	@endsection
	
	@section('page-title')
	<x-title heading="Quiz Tentor" subheading="Quiz Tentor" url="/admin" />
	@endsection
	
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
					@if(isset($listtentor))
					@if(count($listtentor) > 0)
					<div class="card collapse-icon accordion-icon-rotate">
							<div class="card-header">
								<h1 class="card-title pl-1">List Tentor</h1>
							</div>
							<div class="card-content">
								<div class="card-body">
									<div class="accordion" id="cardAccordion">
									
									@php
									
										$no = 1;
									
									@endphp
									
										@foreach($listtentor as $each)
										<div class="card border border-secondary">
											<div class="card-header mb-2" id="heading{{$no}}" data-bs-toggle="collapse"
												data-bs-target="#collapse{{$no}}" aria-expanded="false"
												aria-controls="collapse{{$no}}" role="button">
												<span class="collapsed collapse-title">{{$each->name}} <span class="badge bg-light-secondary">Klik Disini</span></span>
											</div>
											<div id="collapse{{$no}}" class="collapse pt-1" aria-labelledby="heading{{$no}}"
												data-parent="#cardAccordion">
												<div class="card-body">
													<form  action="/siswa/quiz" method="post">
													<input type="hidden" name="ans[user]"value="{{ Auth::id() }}">
													<input type="hidden" name="ans[tentor]"value="{{ $each->tentors }}">
													@csrf
													<table class="table table-borderless">
													<thead>
															<tr>
																<th colspan="1">Kedisiplinan dan performa Tentor</th>
																<th colspan="3"><div class="text-center">Pilihan</div></th>
															</tr>
													</thead>
													<tbody>
														<ul>
															<tr>
																<td>
																	<li>Tentor hadir sesuai kesepakatan</li>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[1]" id="{{$no}}ans1" value="Selalu">
																		<label class="form-check-label" for="{{$no}}ans1">Selalu</label>
																	</div>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[1]" id="{{$no}}ans28" value="Sering">
																		<label class="form-check-label" for="{{$no}}ans28">Sering</label>
																	</div>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[1]" id="{{$no}}ans3" value="Jarang">
																		<label class="form-check-label" for="{{$no}}ans3">Jarang</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<li>Tentor komunikatif</li>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[2]" id="{{$no}}ans4" value="Selalu">
																		<label class="form-check-label" for="{{$no}}ans4">Selalu</label>
																	</div>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[2]" id="{{$no}}ans5" value="Sering">
																		<label class="form-check-label" for="{{$no}}ans5">Sering</label>
																	</div>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[2]" id="{{$no}}ans6" value="Jarang">
																		<label class="form-check-label" for="{{$no}}ans6">Jarang</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<li>Tentor berpenampilan rapi</li>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[3]" id="{{$no}}ans7" value="Selalu">
																		<label class="form-check-label" for="{{$no}}ans7">Selalu</label>
																	</div>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[3]" id="{{$no}}ans8" value="Sering">
																		<label class="form-check-label" for="{{$no}}ans8">Sering</label>
																	</div>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[3]" id="{{$no}}ans9" value="Jarang">
																		<label class="form-check-label" for="{{$no}}ans9">Jarang</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<li>Penjelasan Tentor mudah dipahami</li>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[4]" id="{{$no}}ans10" value="Selalu">
																		<label class="form-check-label" for="{{$no}}ans10">Selalu</label>
																	</div>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[4]" id="{{$no}}ans11" value="Sering">
																		<label class="form-check-label" for="{{$no}}ans11">Sering</label>
																	</div>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[4]" id="{{$no}}ans12" value="Jarang">
																		<label class="form-check-label" for="{{$no}}ans12">Jarang</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<li>Tentor bisa menjadi teladan bagi siswa</li>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[5]" id="{{$no}}ans15" value="Selalu">
																		<label class="form-check-label" for="{{$no}}ans15">Selalu</label>
																	</div>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[5]" id="{{$no}}ans13" value="Sering">
																		<label class="form-check-label" for="{{$no}}ans13">Sering</label>
																	</div>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[5]" id="{{$no}}ans14" value="Jarang">
																		<label class="form-check-label" for="{{$no}}ans14">Jarang</label>
																	</div>
																</td>
															</tr>
														</ul>
													</tbody>
													</table>
													<table class="table table-borderless">
													<thead>
															<tr>
																<th colspan="1">Keahlian dan keterampilan mengajar</th>
																<th colspan="3"><div class="text-center">Pilihan</div></th>
															</tr>
													</thead>
													<tbody>
														<ul>
															<tr>
																<td>
																	<li>Tentor bisa menjelaskan materi</li>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[6]" id="{{$no}}ans16" value="Selalu">
																		<label class="form-check-label" for="{{$no}}ans16">Selalu</label>
																	</div>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[6]" id="{{$no}}ans20" value="Sering">
																		<label class="form-check-label" for="{{$no}}ans20">Sering</label>
																	</div>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[6]" id="{{$no}}ans21" value="Jarang">
																		<label class="form-check-label" for="{{$no}}ans21">Jarang</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<li>Tentor bisa membantu menyelesaikan PR</li>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[7]" id="{{$no}}ans17" value="Selalu">
																		<label class="form-check-label" for="{{$no}}ans17">Selalu</label>
																	</div>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[7]" id="{{$no}}ans22" value="Sering">
																		<label class="form-check-label" for="{{$no}}ans22">Sering</label>
																	</div>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[7]" id="{{$no}}ans23" value="Jarang">
																		<label class="form-check-label" for="{{$no}}ans23">Jarang</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<li>Tentor mampu memotivasi siswa</li>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[8]" id="{{$no}}ans18" value="Selalu">
																		<label class="form-check-label" for="{{$no}}ans18">Selalu</label>
																	</div>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[8]" id="{{$no}}ans24" value="Sering">
																		<label class="form-check-label" for="{{$no}}ans24">Sering</label>
																	</div>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[8]" id="{{$no}}ans25" value="Jarang">
																		<label class="form-check-label" for="{{$no}}ans25">Jarang</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<li>Tentor mampu mendukung prestasi siswa</li>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[9]" id="{{$no}}ans19" value="Selalu">
																		<label class="form-check-label" for="{{$no}}ans19">Selalu</label>
																	</div>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[9]" id="{{$no}}ans26" value="Sering">
																		<label class="form-check-label" for="{{$no}}ans26">Sering</label>
																	</div>
																</td>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="ans[9]" id="{{$no}}ans27" value="Jarang">
																		<label class="form-check-label" for="{{$no}}ans27">Jarang</label>
																	</div>
																</td>
															</tr>
														</ul>
													</tbody>
													</table>
													<div class="row justify-content-center">
														<button type="submit" class="col-2 btn btn-danger">Kirim Quiz</button>
													</div>
												</form>
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
						
						<div class="text-center">Kamu telah mengisi seluruh kuesioner</div>
						
						@endif
						@else
						<div class="text-center">Tidak ada kuesioner yang tersedia</div>
								
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
	