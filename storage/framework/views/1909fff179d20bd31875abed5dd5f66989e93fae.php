	
	
	<?php $__env->startSection('tab-title'); ?>
		Presensi
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('sidebar'); ?>
		<?php $__env->startComponent('components.tentorSidebar'); ?>
		<?php if (isset($__componentOriginal29cd47fce88346324d1035544ec5b543fb29fba8)): ?>
<?php $component = $__componentOriginal29cd47fce88346324d1035544ec5b543fb29fba8; ?>
<?php unset($__componentOriginal29cd47fce88346324d1035544ec5b543fb29fba8); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('page-title'); ?>
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
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('page-content'); ?>
	<section class="section">
		<div class="row">
			<div class="col-md-6 col-12">
				<div class="card">
                    <div class="card-header">
                        <h5>Data Diri Tentor</h5>
                    </div>
					<div class="card-body">
					<form action='/tentor' method="POST">
					
					<?php echo csrf_field(); ?>
					<?php if($errors->any()): ?>
						<div class="alert alert-danger">
							<ul>
								<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li><?php echo e($error); ?></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</div>
					<?php endif; ?>
					 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['field' => 'namaTentor','name' => '','value' => ''.e($tentor->name).'','readonly' => '','type' => 'hidden']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['field' => 'namaTentor','name' => '','value' => ''.e($tentor->name).'','readonly' => '','type' => 'hidden']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
					 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['field' => 'unique','name' => 'Kode Unik Tentor','value' => ''.e($tentor->uniqueid).'','readonly' => '','type' => 'text']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['field' => 'unique','name' => 'Kode Unik Tentor','value' => ''.e($tentor->uniqueid).'','readonly' => '','type' => 'text']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
					 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['field' => 'idtentor','name' => 'ID Tentor','value' => ''.e($tentor->id).'','readonly' => '','type' => 'hidden']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['field' => 'idtentor','name' => 'ID Tentor','value' => ''.e($tentor->id).'','readonly' => '','type' => 'hidden']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
					 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['field' => 'topic','name' => 'Topic','required' => '','type' => 'text']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['field' => 'topic','name' => 'Topic','required' => '','type' => 'text']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
					 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['field' => 'tempat','name' => 'Tempat','required' => '','type' => 'text']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['field' => 'tempat','name' => 'Tempat','required' => '','type' => 'text']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
					 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['field' => 'tanggal','name' => 'Tanggal','required' => '','type' => 'datetime-local']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['field' => 'tanggal','name' => 'Tanggal','required' => '','type' => 'datetime-local']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
					<!--  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['field' => 'waktu','name' => 'Waktu','type' => 'time']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['field' => 'waktu','name' => 'Waktu','type' => 'time']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> -->
					<div class="mb-3">
					<label class="form-label" for="mapel">Pilih Mapel</label>
					<!--
					 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['field' => 'mapel','name' => 'Mapel','value' => ''.e($tentor->mapel).'','readonly' => true,'type' => 'text']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['field' => 'mapel','name' => 'Mapel','value' => ''.e($tentor->mapel).'','readonly' => true,'type' => 'text']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
					-->
					<select id="siswapilih" class="form-select choices" name="mapel" aria-label="Default mapel">
						<optgroup label="Mapel">
						<?php $__currentLoopData = $mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($each->name_mapel); ?>"><?php echo e($each->name_mapel); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</optgroup>
					</select>
					</div>
					<!--  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['field' => 'mapel','name' => 'Mapel','type' => 'text']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['field' => 'mapel','name' => 'Mapel','type' => 'text']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>  -->
					<div class="mb-3">
						<label class="form-label" for="siswa">Peserta Bimbingan</label>
						<select id="pesertapilih"class="choices form-select multiple-remove" name="peserta[]" multiple="multiple"  aria-label="Default siswa">
							<optgroup label="Siswa">
								
								<?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($each->id); ?>"><?php echo e($each->name . " - " . $each->package); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
							</optgroup>
						</select>
					</div>
					
					<!-- Button trigger for basic modal -->
					
					<div class="row justify-content-center" id="buttonField">

					

					</div>
					<div id="quizcontainer">
					
					</div>

					<!--
					 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['field' => 'NoHP','name' => 'Nomer HP (Whatsapp)','value' => '','type' => 'text']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['field' => 'NoHP','name' => 'Nomer HP (Whatsapp)','value' => '','type' => 'text']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
					 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['field' => 'Address','name' => 'Alamat','value' => '','type' => 'text']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['field' => 'Address','name' => 'Alamat','value' => '','type' => 'text']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
					 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['field' => 'Email','name' => 'Email','value' => '','type' => 'text']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['field' => 'Email','name' => 'Email','value' => '','type' => 'text']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
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
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('header-custom'); ?>
	<!-- Include Choices CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/choices.js/choices.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('assets/vendors/sweetalert2/sweetalert2.min.css')); ?>">
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('footer-custom'); ?>
	<!-- Include Choices JavaScript -->
    <script src="<?php echo e(asset('assets/vendors/choices.js/choices.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/pages/form-element-select.js')); ?>"></script>
	
    <script src="<?php echo e(asset('assets/vendors/sweetalert2/sweetalert2.all.min.js')); ?>"></script>
	
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
				+'<div class="form-check"><input required class="form-check-input" type="radio" name="ans['+ idsiswa +'][5]" id="ans1" value="Ya"><label class="form-check-label" for="ans1"> Ya </label></div></td>'
				+'<td><div class="form-check"><input required class="form-check-input" type="radio" name="ans['+ idsiswa +'][5]" id="ans2" value="Tidak"><label class="form-check-label" for="ans2"> Tidak </label></div></td></tr></ul></tbody></table>'
				
				+'<table class="table table-borderless"><thead><tr><th colspan="3">Kedisiplinan</th></tr></thead><tbody><ul><tr><td><li>Mulai tepat waktu?</li></td><td>'
				+'<div class="form-check"><input required class="form-check-input" type="radio" name="ans['+ idsiswa +'][6]" id="ans1" value="Ya"><label class="form-check-label" for="ans1"> Ya </label></div></td><td><div class="form-check"><input required class="form-check-input" type="radio" name="ans['+ idsiswa +'][6]" id="ans2" value="Tidak"><label class="form-check-label" for="ans2"> Tidak </label></div></td></tr><tr><td><li>Selesai tepat waktu?</li></td><td>'
				+'<div class="form-check"><input required class="form-check-input" type="radio" name="ans['+ idsiswa +'][7]" id="ans1" value="Ya"><label class="form-check-label" for="ans1"> Ya </label></div></td><td><div class="form-check"><input required class="form-check-input" type="radio" name="ans['+ idsiswa +'][7]" id="ans2" value="Tidak"><label class="form-check-label" for="ans2"> Tidak </label></div></td></tr></ul></tbody></table>'
				+'<table class="table table-borderless"><thead><tr><th colspan="3">Kualitas Belajar </th></tr></thead><tbody><ul>'
				+'<tr><td><li>Ada masalah?</li></td><td><div class="form-check "><div class="mb-3"><input type="text" name="ans['+ idsiswa +'][8]" class="form-control" id="ask"></div></div></td><td><div class="form-check form-switch"></div></td></tr>'
				+'<tr><td><li>Ada PR yang belum selesai?</li></td><td><div class="form-check "><div class="mb-3"><input type="text" name="ans['+ idsiswa +'][9]" class="form-control" id="ask"></div></div></td><td><div class="form-check form-switch"></div></td></tr>'
				+'<tr><td><li>Adakah inspirasi dan motivasi yang diberikan?</li></td><td><div class="form-check "><input type="text" name="ans['+ idsiswa +'][10]" class="form-control" id="ask"></div></div></td><td><div class="form-check form-switch"></div></td></tr></ul></tbody></table></div></div></div><div class="modal-footer"><button type="button" class="btn" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Close</span></button></div></div></div></div>');
			}
		
		}).find('option:selected').map(function() {return this.value}).get();
		
	})
	</script>
	<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kumpulan Project Dipta\Neoducationz\neoducationz-project\resources\views/tentor/presensi.blade.php ENDPATH**/ ?>