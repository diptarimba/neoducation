	
	
	<?php $__env->startSection('tab-title'); ?>
		Laporan Presensi
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
                <h3>Laporan Presensi Tentor</h3>
                <!-- <p class="text-subtitle text-muted">Halaman Profil Siswa</p> -->
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Laporan Presensi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('page-content'); ?>
	<section class="section">
        <div class="card">
            <div class="card-header">
                Reports Mengajar
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
							<th>Ticket</th>
                            <th>Topic</th>
                            <th>Tempat</th>
                            <th>Mapel</th>
                            <th>Peserta</th>
                            <th>Tentor</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td><?php echo e($each -> hash); ?></td>
                           <td><?php echo e($each -> topic); ?></td>
                           <td><?php echo e($each -> place); ?></td>
                           <td><?php echo e($each -> mapel); ?></td>
                           <td><?php echo e($each -> students); ?></td>
                           <td><?php echo e($each -> tentors); ?></td>
                        </tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('header-custom'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('assets/vendors/simple-datatables/style.css')); ?>">
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('footer-custom'); ?>
	<script src="<?php echo e(asset('assets/vendors/simple-datatables/simple-datatables.js')); ?>"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
	<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kumpulan Project Dipta\Neoducationz\neoducationz-project\resources\views/tentor/laporan.blade.php ENDPATH**/ ?>