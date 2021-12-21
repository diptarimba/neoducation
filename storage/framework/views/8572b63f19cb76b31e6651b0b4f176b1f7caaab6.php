	
	
	<?php $__env->startSection('sidebar'); ?>
		<?php $__env->startComponent('components.adminSidebar'); ?>
		<?php if (isset($__componentOriginal7ab380380899f581ff58adf0d1f49bb9fab50ded)): ?>
<?php $component = $__componentOriginal7ab380380899f581ff58adf0d1f49bb9fab50ded; ?>
<?php unset($__componentOriginal7ab380380899f581ff58adf0d1f49bb9fab50ded); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('tab-title', 'Manage Level'); ?>
	
	<?php $__env->startSection('page-title'); ?>
	 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.title','data' => ['heading' => 'Manage Level Tentor','subheading' => 'Manage Level Tentor','url' => '/admin']]); ?>
<?php $component->withName('title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['heading' => 'Manage Level Tentor','subheading' => 'Manage Level Tentor','url' => '/admin']); ?>
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
				<div class="col-md-6 col-12">
					<div class="card">
						<div class="card-header">
							<h4>Daftar Level Tentor</h4>
						</div>
						<div class="card-body">
							<table class="table table-striped" id="daftarlevel">
							<thead>
								<th>ID</th>
								<th>Tingkatan</th>
								<th>Salary</th>
								<th>Bonus</th>
								<th>Action</th>
							</thead>
							<tbody>
								<?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($each -> id); ?></td>
									<td><?php echo e($each -> tingkatan); ?></td>
									<td><?php echo e($each -> salary); ?></td>
									<td><?php echo e($each -> bonus); ?></td>
									<td>
										<div class="container">
										<form action="/admin/configuration/level/<?php echo e($each->id); ?>" method="post">
											<?php echo csrf_field(); ?>
											<?php echo method_field('delete'); ?>
											<button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
										</form>
										</div>
									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="card">
						<div class="card-header">
							<h4>Tambahkan Level</h4>
						</div>
						<div class="card-body">
							<form action="/admin/configuration/level" method="post">
								<?php echo csrf_field(); ?>
								 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['field' => 'tingkatan','name' => 'Nama Tingkatan','value' => '','type' => 'text']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['field' => 'tingkatan','name' => 'Nama Tingkatan','value' => '','type' => 'text']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
								 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['field' => 'salary','name' => 'Pendapatan','value' => '','type' => 'text']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['field' => 'salary','name' => 'Pendapatan','value' => '','type' => 'text']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
								 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['field' => 'bonus','name' => 'Bonus','value' => '','type' => 'text']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['field' => 'bonus','name' => 'Bonus','value' => '','type' => 'text']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
								<button type="submit" class="btn btn-outline-primary">Tambah</button> 
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('header-custom'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('assets/vendors/simple-datatables/style.css')); ?>" >
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('footer-custom'); ?>
	<script src="<?php echo e(asset('assets/vendors/simple-datatables/simple-datatables.js')); ?>"></script>
    <script>
        // Simple Datatable
        let leveling = document.querySelector('#daftarlevel');
        let dataTable = new simpleDatatables.DataTable(leveling);
    </script>
	<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kumpulan Project Dipta\Neoducationz\neoducationz-project\resources\views/administrator/configuration/level/home.blade.php ENDPATH**/ ?>