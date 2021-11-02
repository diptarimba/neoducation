<?php
	print_r($data);
?>
<div class="form-group">
    <select class="choices form-select multiple-remove" multiple="multiple">
        <optgroup label="Siswa">
			
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($each->id); ?>"><?php echo e($each->name . " - " . $each->package); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			
        </optgroup>
    </select>
</div>
<?php /**PATH D:\Kumpulan Project Dipta\Neoducationz\neoducationz-project\resources\views/components/multiple.blade.php ENDPATH**/ ?>