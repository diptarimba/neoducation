	
	
	<?php $__env->startSection('tab-title'); ?>
		Manajemen Tentor ND
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
	 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.title','data' => ['heading' => 'Manajemen Tentor ND','subheading' => 'Manajemen Tentor ND','url' => '/admin']]); ?>
<?php $component->withName('title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['heading' => 'Manajemen Tentor ND','subheading' => 'Manajemen Tentor ND','url' => '/admin']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('page-content'); ?>
	<section class="section">
	<div class="container">
	<div class="row">
	<div class="col-12">
        <div class="card">
            <div class="card-header">
				<h4 class="text-center">Daftar Tentor ND</h4>
            </div>
            <div class="card-body">
				<div class="container">
				<div class="row justify-content-end">
					<a class="btn btn-outline-primary btn-sm col-md-2 " href="/managetentor/create">Tambah Tentor ND</a>
				</div>
				</div>
				
                <table class="table table-striped" id="daftartentor">
                    <thead>
                        <tr>
							<th>ID</th>
							<th>Unique ID</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Alias</th>
                            <th>No. Hp</th>
                            <th>Mata Pelajaran</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php $__currentLoopData = $tentor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
							<td><?php echo e($each -> id); ?></td>
							<td><?php echo e(($each -> uniqueid) ?? ''); ?></td>
							<td><?php echo e($each -> name); ?></td>
							<td><?php echo e($each -> email); ?></td>
							<td><?php echo e($each -> username); ?></td>
							<td><?php echo e($each -> phone); ?></td>
							<td><?php echo e($each -> mapel); ?></td>
							<td>
								<a href="/managetentor/<?php echo e($each->id); ?>"class="btn btn-outline-success btn-sm">Detail</a>
							</td>
                        </tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
				
            </div>
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
        let daftartentor = document.querySelector('#daftartentor');
        let dataTable = new simpleDatatables.DataTable(daftartentor);
    </script>
	<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kumpulan Project Dipta\Neoducationz\neoducationz-project\resources\views/administrator/tentor/home.blade.php ENDPATH**/ ?>