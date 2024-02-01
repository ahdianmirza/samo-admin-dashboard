<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex flex-column align-items-center justify-content-center my-5" href="/">
        <div class="text-center">
            <img src="{{ asset('img/SAMO.png') }}" alt="..." class="img-thumbnail" width="70">
            <!-- <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="img/SAMO.png" alt="..."> -->
        </div>
        <div class="sidebar-brand-text mt-2">Smart Air Monitoring</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="/prediksi">
            <i class="fas fa-fw fa-regular fa-wind"></i>
            <span>Prediksi Kualitas Udara</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="/data-logger">
            <i class="fas fa-fw fa-regular fa-calendar"></i>
            <span>Data Logger</span></a>
    </li>

    {{-- <li class="nav-item active">
        <a class="nav-link" href="/status">
            <i class="fas fa-fw fa-regular fa-info"></i>
            <span>Status Alat</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

</ul>
