<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('tab-title'); ?> | Neoducationz</title>
	
	<?php echo $__env->yieldContent('headers'); ?>
</head>

<body>
<div id="app">
	<?php echo $__env->yieldContent('sidebar'); ?>
	<div id="main">
    <?php echo $__env->yieldContent('body'); ?>
	</div>
</div>
	<?php echo $__env->yieldContent('end-script'); ?>
</body>
</html><?php /**PATH D:\Kumpulan Project Dipta\Neoducationz\neoducationz-project\resources\views/layout/master.blade.php ENDPATH**/ ?>