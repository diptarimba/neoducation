<div id="sidebar" class="active">
   <div class="sidebar-wrapper active">
      <div class="sidebar-header">
         <div class="d-flex justify-content-between">
            <div class="logo">
               <a href="{{url('/')}}"><img src="{{ asset('assets/images/logo/logo.jpeg') }}" alt="Logo" srcset=""></a>
            </div>
            <div class="toggler">
               <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
         </div>
      </div>
      <div class="sidebar-menu">
         <ul class="menu">
            <li class="sidebar-title">Tentor Menu</li>
            <li class="sidebar-item {{ Request::is('tentor') ? 'active' : ''}}">
               <a href="{{url('tentor')}}" class='sidebar-link'>
               <i class="bi bi-grid-fill"></i>
               <span>Profil</span>
               </a>
            </li>
			<li class="sidebar-item {{Request::is('tentor/create') ? 'active' : ''}}">
               <a href="{{url('tentor/create')}}" class='sidebar-link'>
               <i class="bi bi-grid-fill"></i>
               <span>Presensi</span>
               </a>
            </li>
			<li class="sidebar-item {{Request::is('tentor/laporan') ? 'active' : ''}}">
               <a href="{{url('tentor/laporan')}}" class='sidebar-link'>
               <i class="bi bi-grid-fill"></i>
               <span>Laporan Presensi</span>
               </a>
            </li>
			<li class="sidebar-item">
               <a href="{{url('logout')}}" class='sidebar-link'>
               <i class="bi bi-grid-fill"></i>
               <span>Logout</span>
               </a>
            </li>
         </ul>
      </div>
      <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
   </div>
</div>