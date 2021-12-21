	
	
	<?php $__env->startSection('tab-title'); ?>
		Profil Tentor
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
                <h3>Profil Tentor</h3>
                <!-- <p class="text-subtitle text-muted">Halaman Profil Siswa</p> -->
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profil Tentor</li>
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
					<div class="card-body">
					<div class="card">
                    <div class="card-header">
                        <h5>Data Tentor</h5>
                    </div>
                    <div class="card-body" style="width: 100%">
					<div class="col-8 mx-auto mb-2 mt-2" style="width: 40%;">
					<img src="<?php echo e(asset('assets/images/tentor/' . $tentor->pict_name)); ?>" class="card-img-top img-fluid"
                                        alt="singleminded">
					</div>
						<table class="table table-borderless">
						<tr>
							<td>Nama Tentor</td>
							<td><?php echo e($tentor->name); ?></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><?php echo e($tentor->username); ?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><?php echo e($tentor->address); ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?php echo e($tentor->email); ?></td>
						</tr>
						<tr>
							<td>Mapel</td>
							<td><?php echo e($tentor->mapel); ?></td>
						</tr>
						</table>
						<div class="row">
							<a href="/tentor/<?php echo e($tentor->id); ?>/edit" class="col-4 mx-auto btn btn-primary ms-1 btn-sm">Edit</a>
						</div>
                    </div>
					
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
	
<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kumpulan Project Dipta\Neoducationz\neoducationz-project\resources\views/tentor/home.blade.php ENDPATH**/ ?>