	

	<?php $__env->startSection('tab-title'); ?>
		Manage Siswa
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
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.title','data' => ['heading' => 'Manage Siswa','subheading' => 'Manage Siswa','url' => '/admin']]); ?>
<?php $component->withName('title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['heading' => 'Manage Siswa','subheading' => 'Manage Siswa','url' => '/admin']); ?>
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
			<div class="col">
				<div class="card">
				<div class="card-header">
				<h3 class="text-center">Daftar Siswa</h3>
				</div>
				<div class="card-body">
					<div class="container">
					<div class="row justify-content-end">
						<a class="btn btn-outline-primary btn-sm col-md-2 " href="/managesiswa/create">Tambah siswa</a>
					</div>
					</div>
				
					<table class="table table-striped" id="siswatable">
					<thead>
						<th>ID</th>
						<th>Nama Lengkap</th>
						<th>Nama Orang Tua</th>
						<th>Username</th>
						<th>Address</th>
						<th>Package</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($each -> id); ?></td>
							<td><?php echo e($each -> name); ?></td>
							<td><?php echo e($each -> parent_name); ?></td>
							<td><?php echo e($each -> username); ?></td>
							<td><?php echo e($each -> address); ?></td>
							<td><?php echo e($each -> package); ?></td>
							<td>
								<a href="/managesiswa/<?php echo e($each->id); ?>"class="btn btn-outline-success btn-sm">Detail</a>
								<a href="/admin/siswa/invoice/<?php echo e($each->id); ?>"class="btn btn-outline-warning btn-sm">Invoice</a>
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
        let table1 = document.querySelector('#siswatable');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
	<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kumpulan Project Dipta\Neoducationz\neoducationz-project\resources\views/administrator/siswa/home.blade.php ENDPATH**/ ?>