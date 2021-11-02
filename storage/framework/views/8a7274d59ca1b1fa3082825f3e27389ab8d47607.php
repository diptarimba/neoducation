	
	
	<?php $__env->startSection('tab-title'); ?>
		Profil Siswa
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('sidebar'); ?>
		<?php $__env->startComponent('components.userSidebar'); ?>
		<?php if (isset($__componentOriginal01a967d8dfd92dd742dfc5e5b8e7f6dac8b09493)): ?>
<?php $component = $__componentOriginal01a967d8dfd92dd742dfc5e5b8e7f6dac8b09493; ?>
<?php unset($__componentOriginal01a967d8dfd92dd742dfc5e5b8e7f6dac8b09493); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
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
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
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
			
                <div class="card">
					<div class="card-content d-grid mx-auto" >
                    <div class="card-header">
                        <h5>Data Diri</h5>
                    </div>
                    <div class="card-body">
					<div class="col-8 mx-auto mb-2 mt-2">
					<img src="<?php echo e(asset('assets/images/tentor/photo-1.png')); ?>" class="card-img-top img-fluid"
                                        alt="singleminded">
					</div>
					<table class="table table-borderless">
					<tr>
						<td>Username</td>
						<td><?php echo e($siswa->username); ?></td>
					</tr>
					<tr>
						<td>Nama Siswa</td>
						<td><?php echo e($siswa->name); ?></td>
					</tr>
					<tr>
						<td>Nama Orang Tua</td>
						<td><?php echo e($siswa->parent_name); ?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><?php echo e($siswa->address); ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo e($siswa->email); ?></td>
					</tr>
					<tr>
						<td>Nama Paket</td>
						<td><?php echo e($siswa->package); ?></td>
					</tr>
					</table>
						<div class="row col-4 mx-auto">
							<a href="/siswa/<?php echo e($siswa->id); ?>/edit" class="btn btn-primary ms-1 btn-sm">Edit</a>
						</div>
                    </div>
					</div>
                </div>
			
			</div>
			<div class="col-md-6 col-12">
				<div class="card">
					<div class="card-header">
						<h5>Daftar Pertemuan</h5>
					</div>
					<div class="card-body">
						
						<table class="table table-borderless">
						<thead>
							<th>Ticket</th>
							<th>Topic</th>
							<th>Mapel</th>
							<th>Action</th>
						</thead>
						<tbody>
						<?php $__currentLoopData = $datahadir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						
						<tr>
							<td><?php echo e($each-> hash); ?></td>
							<td><?php echo e($each-> topic); ?></td>
							<td><?php echo e($each-> mapel); ?></td>
							<td><a class="btn btn-primary btn-sm"href="/">Detail</td>
						</tr>
						
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
						</table>
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
	
<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kumpulan Project Dipta\Neoducationz\neoducationz-project\resources\views/siswa/home.blade.php ENDPATH**/ ?>