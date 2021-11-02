	

	<?php $__env->startSection('headers'); ?>
		<?php echo $__env->yieldContent('header-custom'); ?>
		<link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('assets/vendors/iconly/bold.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('assets/css/app.css')); ?>">
		<link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.svg')); ?>" type="image/x-icon">
		<script src="<?php echo e(asset('assets/js/extensions/jquery-3.6.0.slim.js')); ?>"></script>
	<?php $__env->stopSection(); ?>

	<?php $__env->startSection('end-script'); ?>
		<?php echo $__env->yieldContent('footer-custom'); ?>
	
		<script src="<?php echo e(asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/vendors/apexcharts/apexcharts.js')); ?>"></script>
		<!-- <script src="<?php echo e(asset('assets/js/pages/dashboard.js')); ?>"></script> -->
		<script src="<?php echo e(asset('assets/js/mazer.js')); ?>"></script>
		
	<?php $__env->stopSection(); ?>
	
	
	
	<?php $__env->startSection('body'); ?>
	
		
		
		<div class="page-heading">
           <?php echo $__env->yieldContent('page-title'); ?>
        </div>
		
		<div class="page-content">
			<?php echo $__env->yieldContent('page-content'); ?>
		</div>
		
		<footer>
		<div class="footer clearfix mb-0 text-muted">
			<div class="float-start">
				<p>2021 &copy; Mazer</p>
			</div>
			<div class="float-end">
				<p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
					href="http://ahmadsaugi.com">A. Saugi</a></p>
			</div>
		</div>
		</footer>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kumpulan Project Dipta\Neoducationz\neoducationz-project\resources\views/layout/page.blade.php ENDPATH**/ ?>