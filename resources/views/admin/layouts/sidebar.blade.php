<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Buku -->
    <li class="nav-item {{ Request::is('admin/buku') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/admin/buku') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Buku</span></a>
    </li>

    <!-- Nav Item - Tipe -->
    <li class="nav-item {{ Request::is('admin/tipe') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/admin/tipe') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Tipe</span></a>
    </li>

    <!-- Nav Item - Jenjang -->
    <li class="nav-item {{ Request::is('admin/jenjang') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/admin/jenjang') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Jenjang</span></a>
    </li>

    <!-- Nav Item - Mapel -->
    <li class="nav-item {{ Request::is('admin/mapel') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/admin/mapel') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Mapel</span></a>
    </li>

    <!-- Nav Item - Penerbit -->
    <li class="nav-item {{ Request::is('admin/penerbit') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/admin/penerbit') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Penerbit</span></a>
    </li>

    <!-- Nav Item - Edisi -->
    <li class="nav-item {{ Request::is('admin/edisi') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/admin/edisi') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Edisi</span></a>
    </li>

    <!-- Nav Item - Penulis -->
    <li class="nav-item {{ Request::is('admin/penulis') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/admin/penulis') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Penulis</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
