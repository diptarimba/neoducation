	
	
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
		<div class="card">
			<div class="card-header">
				<h4 class="text-center">Print Invoice Ananda <?php echo e($siswa->name); ?></h4>
			</div>
			<div class="card-body">
				<table class="table table-borderless">
				<tbody class="siapprint">
					<tr>
						<td class="text-center" colspan="4">Neoducationz</td>
					</tr>
					<tr>
						<td class="text-center" colspan="4">Living for Learning</td>
					</tr>
				<tbody>
				</table>
			</div>
		</div>
        <div class="card">
            <div class="card-header">
				
            </div>
            <div class="card-body">
				<table class="table table-striped " >
					
					<thead>
						<th>No</th>
						<th>Keterangan</th>
						<th>Waktu</th>
						<th>Biaya</th>
					</thead>
					
					<tbody class="siapprint"><!--
					<tr>
						<td><b>No</b></td>
						<td><b>Keterangan</b></td>
						<td><b>Waktu</b></td>
						<td><b>Biaya</b></td>
					</tr> -->
						<?php
							$no = 0;
						?>
						<?php $__currentLoopData = $dataInvoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eachs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php
							$no++;
						?>
							<?php $__currentLoopData = $eachs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($no); ?></td>
								<td>Topik : <?php echo e($each->topic); ?><br/>Mata Pelajaran : <?php echo e($each->mapel); ?><br/></td>
								<td><?php echo e($each->date_exec); ?><br/></td>
							<td>Rp. 30.000</td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="text-center" colspan="3">Total</td>
							<td>Rp. <?php echo e(number_format(30000*$no,"0",",",".")); ?>

						</tr>
						
					</tbody>
				</table>
            </div>
        </div>
		<div class="container col-3 ">
		<div class="row justify-content-end">
		<div class="card ">
			
				<button class="btn btn-primary btnprint col-md">Print Invoice</button>
		</div>
		</div>
		</div>
    </div>
    </section>
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('header-custom'); ?>
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('footer-custom'); ?>
		<script>
			$(document).ready(() => {
				console.log($('.siapprint'));
				$('.btnprint').on('click', function(){
					
					
					
					var sTable = $('.siapprint')[0].innerHTML;
					console.log(sTable);
					var rTable = $('.siapprint')[1].innerHTML;
					console.log(rTable);

					var style = "<style>";
					style = style + "table {width: 100%;font: 17px Calibri;}";
					style = style + "table, th, td {border: solid 1px #fff; border-collapse: collapse;";
					style = style + "padding: 2px 3px;text-align: center;}";
					style = style + "</style>";
					
					var win = window.open('', '', 'height=700,width=700');

					win.document.write('<html><head>');
					win.document.write('<title>Profile</title>');   // <title> FOR PDF HEADER.
					win.document.write(style);  
					win.document.write('</head>');
					win.document.write('<body><table><thead>');
					win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
					win.document.write('</thead><tbody>')
					win.document.write(rTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
					win.document.write('</tbody></table></body></html>');
				
					win.document.close(); 	// CLOSE THE CURRENT WINDOW.
				
					win.print();    // PRINT THE CONTENTS.
				})
			})
		</script>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kumpulan Project Dipta\Neoducationz\neoducationz-project\resources\views/administrator/siswa/printinvoice.blade.php ENDPATH**/ ?>