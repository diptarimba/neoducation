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
            <li class="sidebar-title">Admin Menu</li>
            <li class="sidebar-item {{Request::is('admin') ? 'active' : ''}}">
				<a href="{{url('admin')}}" class='sidebar-link'>
				<i class="bi bi-grid-fill"></i>
				<span>Home</span>
				</a>
            </li>
			<li class="sidebar-item has-sub {{Request::is('managesiswa/*') || Request::is('managesiswa') ? 'active' : ''}}">
				<a href="#" class='sidebar-link'>
				<i class="bi bi-grid-fill"></i>
					<span>Kesiswaan</span>
				</a>
				<ul class="submenu ">
					<li class="submenu-item ">
						<a href="{{url('managesiswa')}}">Siswa</a>
					</li>
				</ul>
            </li>
			<li class="sidebar-item has-sub {{Request::is('managetentor/*') || Request::is('managetentor') ? 'active' : ''}}">
				<a href="#" class='sidebar-link'>
				<i class="bi bi-grid-fill"></i>
					<span>Pengajar</span>
				</a>
				<ul class="submenu ">
					<li class="submenu-item ">
						<a href="{{url('managetentor')}}">Tentor</a>
					</li>
				</ul>
            </li>
			<li class="sidebar-item has-sub {{Request::is('admin/configuration/*') || Request::is('admin/configuration') ? 'active' : ''}}">
               <a href="{{url('configuration')}}" class='sidebar-link'>
               <i class="bi bi-grid-fill"></i>
				<span>Konfigurasi</span>
               </a>
			   <ul class="submenu ">
			   <!--
				<li class="submenu-item ">
					<a href="{{url('admin/configuration/level')}}">Level Pengajar</a>
				</li>
				-->
				<li class="submenu-item ">
					<a href="{{url('admin/configuration/mapel')}}">Mata Pelajaran</a>
				</li>
				<li class="submenu-item ">
					<a href="{{url('admin/configuration/package')}}">Paket Siswa</a>
				</li>
				<li class="submenu-item ">
					<a href="{{url('admin/configuration/kuisioner')}}">Kuesioner</a>
				</li>
			   </ul>
            </li>
			<li class="sidebar-item {{Request::is('admin/lapkeu') ? 'active' : ''}}">
               <a href="{{url('admin/lapkeu')}}" class='sidebar-link'>
               <i class="bi bi-grid-fill"></i>
               <span>Laporan Keuangan</span>
               </a>
            </li>
			<li class="sidebar-item {{Request::is('admin/presensi') ? 'active' : ''}}">
               <a href="{{url('admin/presensi')}}" class='sidebar-link'>
               <i class="bi bi-grid-fill"></i>
               <span>Laporan Presensi</span>
               </a>
            </li>
			<li class="sidebar-item {{ Request::is('admin/create') ? 'active' : ''}}">
               <a href="{{url('admin/create')}}" class='sidebar-link'>
               <i class="bi bi-grid-fill"></i>
               <span>Manajemen Admin</span>
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