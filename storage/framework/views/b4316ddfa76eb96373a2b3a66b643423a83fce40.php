	
	
	<?php $__env->startSection('tab-title'); ?>
		Administrator
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('sidebar'); ?>
		<?php $__env->startComponent('components.adminSidebar'); ?>
		<?php if (isset($__componentOriginal7ab380380899f581ff58adf0d1f49bb9fab50ded)): ?>
<?php $component = $__componentOriginal7ab380380899f581ff58adf0d1f49bb9fab50ded; ?>
<?php unset($__componentOriginal7ab380380899f581ff58adf0d1f49bb9fab50ded); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('page-title'); ?>
	<div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Administrator</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Admin</li>
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
                    <h4>Statistic Page</h4>
                </div>
                <div class="card-body">
					<div class="alert alert-secondary">
						<p>Jumlah Tentor : <?php echo e($tentor); ?></p>
					</div>
					<div class="alert alert-secondary">
						<p>Jumlah Siswa : <?php echo e($siswa); ?></p>
					</div>
					<div class="alert alert-secondary">
						<p>Jumlah Bimbingan (Siswa) : <?php echo e($sumBimbingan_siswa); ?></p>
					</div>
					<div class="alert alert-secondary">
						<p>Jumlah Bimbingan (Tentor) : <?php echo e($sumBimbingan_tentor); ?></p>
					</div>
					<div class="alert alert-secondary">
						<p>Jumlah Pendapatan : Rp. <?php echo e(number_format($sumBimbingan_siswa * 30000,0,',','.')); ?></p>
					</div>
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
	
<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kumpulan Project Dipta\Neoducationz\neoducationz-project\resources\views/administrator/home.blade.php ENDPATH**/ ?>