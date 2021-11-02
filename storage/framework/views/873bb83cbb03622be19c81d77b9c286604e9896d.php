	
	
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
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('tab-title'); ?>
		Invoice Siswa
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('page-content'); ?>
	<section class="section">
	<div class="row">
        <div class="col">
        <div class="card">
            <div class="card-header">
			<p>

                Invoice Siswa : <span class="h5"> <?php echo e($siswa->name); ?> </span>
			</p>
            </div>
            <div class="card-body">
			<form action="/admin/siswa/invoice/<?php echo e($siswa->id); ?>" method="post">
			<?php echo csrf_field(); ?>
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
							<th>Pilih</th>
							<th>Ticket</th>
                            <th>Topic</th>
                            <th>Tempat</th>
                            <th>Mapel</th>
                            <th>Peserta</th>
                            <th>Tentor</th>
                            <th>Waktu</th>
							<th>Status Bayar</th>
                            <th>Biaya</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php $__currentLoopData = $kehadiran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
							<td><input type="checkbox" name="hash[]" value="<?php echo e($each -> hash); ?>"></td>
							<td><?php echo e($each -> hash); ?></td>
							<td><?php echo e($each -> topic); ?></td>
							<td><?php echo e($each -> place); ?></td>
							<td><?php echo e($each -> mapel); ?></td>
							<td><?php echo e($each -> students); ?></td>
							<td><?php echo e($each -> tentors); ?></td>
							<td><?php echo e($each -> status_bayar); ?></td>
							<td><?php echo e($each -> date_exec); ?></td>
							<td>Rp. 30.000</td>
                        </tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
				<button type="submit" class="btn btn-primary">Print</button>
			</form>
            </div>
        </div>
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
<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kumpulan Project Dipta\Neoducationz\neoducationz-project\resources\views/administrator/siswa/invoice.blade.php ENDPATH**/ ?>