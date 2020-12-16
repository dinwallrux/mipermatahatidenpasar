<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{asset('main/img/favicon/android-icon-48x48.png')}}" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">MI Permata Hati Denpasar</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('beranda')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Beranda</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#manajemenData" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-chart-bar"></i>
            <span>Manajemen Data</span>
        </a>
        <div id="manajemenData" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Guru</a>
                <a class="collapse-item" href="#">Tenaga Kependidikan</a>
                <a class="collapse-item" href="{{route('siswa')}}">Siswa</a>
                <a class="collapse-item" href="cards.html">Sarana & Prasarana</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-book"></i>
            <span>Manajemen Informasi</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-user"></i>
            <span>Profil</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-chalkboard-teacher"></i>
            <span>Data Guru</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-images"></i>
            <span>Galeri</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-user-graduate"></i>
            <span>Data Siswa</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->