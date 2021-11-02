	
	
	<?php $__env->startSection('tab-title'); ?>
		Profil Siswa
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('page-title'); ?>
	<div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Profil Siswa</h3>
                <!-- <p class="text-subtitle text-muted">Halaman Profil Siswa</p> -->
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profil Siswa</li>
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
			<?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <div class="card-header">
                        <h5>Data Diri</h5>
                    </div>
                    <div class="card-body">
                        <p><span> Username : <?php echo e($a->username); ?></span><br/>
                        <span> Nama siswa : <?php echo e($a->name_siswa); ?></span><br/>
                        <span> Nama orangtua : <?php echo e($a->name_orangtua); ?></span><br/>
                        <span> Kode Siswa : <?php echo e($a->code_siswa); ?></span><br/>
                        <span> Kode Paket : <?php echo e($a->code_packet); ?></span><br/>
                        <span> Nama Paket : <?php echo e($a->name_packet); ?></span></p>
						<div class="row">
							<button type="button" class="col-4 mx-auto btn btn-primary ms-1 btn-sm">Edit</button>
							<button type="button" class="col-4 mx-auto btn btn-danger me-1 btn-sm">Hapus</button>
						</div>
                    </div>
					
                </div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
			<div class="col-md-6 col-12">
				<div class="card">
					<div class="card-header">
						<h5>Invoice</h5>
					</div>
					<div class="card-body">
						
					</div>
				</div>
			</div>
		</div>
    </section>
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('header-custom'); ?>
	
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('footer-custom'); ?>
	<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kumpulan Project Dipta\Neoducationz\neoducationz-project\resources\views/dipta.blade.php ENDPATH**/ ?>