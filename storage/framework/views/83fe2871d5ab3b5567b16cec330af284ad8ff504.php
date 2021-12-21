<div id="sidebar" class="active">
   <div class="sidebar-wrapper active">
      <div class="sidebar-header">
         <div class="d-flex justify-content-between">
            <div class="logo">
               <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('assets/images/logo/logo.jpeg')); ?>" alt="Logo" srcset=""></a>
            </div>
            <div class="toggler">
               <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
         </div>
      </div>
      <div class="sidebar-menu">
         <ul class="menu">
            <li class="sidebar-title">Menu Siswa</li>
            <li class="sidebar-item <?php echo e(Request::is('siswa/*/edit') || Request::is('siswa') ? 'active' : ''); ?>">
               <a href="<?php echo e(url('siswa')); ?>" class='sidebar-link'>
               <i class="bi bi-grid-fill"></i>
               <span>Profil</span>
               </a>
            </li>
			<li class="sidebar-item <?php echo e(Request::is('siswa/invoice') ? 'active' : ''); ?>">
               <a href="<?php echo e(url('siswa/invoice')); ?>" class='sidebar-link'>
               <i class="bi bi-grid-fill"></i>
               <span>Tagihan</span>
               </a>
            </li>
			<li class="sidebar-item <?php echo e(Request::is('siswa/quizresult') ? 'active' : ''); ?>">
               <a href="<?php echo e(url('siswa/quizresult')); ?>" class='sidebar-link'>
               <i class="bi bi-grid-fill"></i>
               <span>Hasil Kuesioner</span>
               </a>
            </li>
			<li class="sidebar-item <?php echo e(Request::is('siswa/quiz') ? 'active' : ''); ?>">
               <a href="<?php echo e(url('siswa/quiz')); ?>" class='sidebar-link'>
               <i class="bi bi-grid-fill"></i>
               <span>Quiz</span>
               </a>
            </li>
			<li class="sidebar-item">
               <a href="<?php echo e(url('logout')); ?>" class='sidebar-link'>
               <i class="bi bi-grid-fill"></i>
               <span>Logout</span>
               </a>
            </li>
         </ul>
      </div>
      <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
   </div>
</div><?php /**PATH D:\Kumpulan Project Dipta\Neoducationz\neoducationz-project\resources\views/components/userSidebar.blade.php ENDPATH**/ ?>