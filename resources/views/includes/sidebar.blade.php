<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('beranda')}}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-mosque"></i>
        </div>
        <div class="sidebar-brand-text mx-3">KAS Masjid</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('beranda')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span><b>Dashboard</b></span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    @can('isAdminOrBendahara', App\Transaksi::class)
    <!-- Heading -->
    <div class="sidebar-heading">
        Input Data
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{route('transaksi.pemasukan.create')}}">
            <i class="fas fa-plus"></i>
            <span><b>Pemasukan</b></span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('transaksi.pengeluaran.create')}}">
            <i class="fas fa-minus"></i>
            <span><b>Pengeluaran</b></span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    @endcan

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>


    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('transaksi.pemasukan.index')}}">
            <i class="fas fa-arrow-right"></i>
            <span><b>Pemasukan</b></span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('transaksi.pengeluaran.index')}}">
            <i class="fas fa-arrow-left"></i>
            <span><b>Pengeluaran</b></span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('transaksi.index')}}">
            <i class="fas fa-exchange-alt"></i>
            <span><b>Transaksi</b></span></a>
    </li>
    @can('isAdminOrBendahara', App\Transaksi::class)
    <li class="nav-item">
        <a class="nav-link" href="{{route('transaksi.laporan')}}">
            <i class="fa fa-file"></i>
            <span><b>Laporan</b></span></a>
    </li>
    @endcan




    @can('isAdmin', App\User::class)
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Heading -->
    <div class="sidebar-heading">
        Pengaturan
    </div>
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}">
            <i class="fas fa-users"></i>
            <span><b>User</b></span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('masjid.index')}}">
            <i class="fas fa-mosque"></i>
            <span><b>Masjid</b></span></a>
    </li>
    @endcan

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
