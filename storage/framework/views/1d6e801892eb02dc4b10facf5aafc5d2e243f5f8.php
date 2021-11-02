<div class="mb-3">
	<label class="form-label" for="<?php echo e($field); ?>"><?php echo e($name); ?></label>
	<input type="<?php echo e($type); ?>"
	<?php if(isset($readonly)): ?>
		readonly
	<?php endif; ?>
	
	<?php if(isset($value)): ?>
		value="<?php echo e($value); ?>"
	<?php endif; ?>
	class="form-control" aria-label="<?php echo e($field); ?>" name="<?php echo e($field); ?>" id="<?php echo e($field); ?>">
</div><?php /**PATH D:\Kumpulan Project Dipta\Neoducationz\neoducationz-project\resources\views/components/input.blade.php ENDPATH**/ ?>