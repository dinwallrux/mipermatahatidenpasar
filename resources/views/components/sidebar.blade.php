<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('profil') }}">
        <div class="sidebar-brand-icon">
            <img src="{{asset('main/img/favicon/android-icon-48x48.png')}}" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">MI Permata Hati Denpasar</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ str_contains(Route::currentRouteName(), 'profil') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('profil') }}">
            <i class="fas fa-school"></i>
            <span>Profil</span>
        </a>
    </li>
    <li class="nav-item {{ str_contains(Route::currentRouteName(), 'info') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('info') }}">
            <i class="fas fa-book"></i>
            @if (auth()->user()->status == 'operator')
            <span>Manajemen Informasi</span>
            @else
            <span>Informasi</span>
            @endif
        </a>
    </li>
    @if (auth()->user()->status == 'operator' || auth()->user()->status == 'pegawai' || auth()->user()->status == 'kepsek')
    <li class="nav-item {{ str_contains(Route::currentRouteName(), 'tenagaPendidik') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tenaga-pendidik" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-chalkboard-teacher"></i>
            <span>Tenaga Pendidik</span>
        </a>
        <div id="tenaga-pendidik" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('tenagaPendidik', 'gtk') }}">Guru</a>
                <a class="collapse-item" href="{{ route('tenagaPendidik', 'ptk') }}">Pegawai</a>
            </div>
        </div>
    </li>
    <li class="nav-item {{ str_contains(Route::currentRouteName(), 'siswa') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('siswa')}}">
            <i class="fas fa-user-graduate"></i>
            <span>Siswa</span>
        </a>
    </li>
    <li class="nav-item {{ str_contains(Route::currentRouteName(), 'rombel') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('rombel')}}">
            <i class="fas fa-binoculars"></i>
            <span>Kelas</span>
        </a>
    </li>
    <li class="nav-item {{ str_contains(Route::currentRouteName(), 'sarpras.ruang') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('sarpras.ruang') }}">
            <i class="fas fa-archway"></i>
            <span>Prasarana</span>
        </a>
    </li>
    @endif
    <li class="nav-item {{ str_contains(Route::currentRouteName(), 'galeri') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#galeri" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-images"></i>
            <span>Galeri</span>
        </a>
        <div id="galeri" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('galeri') }}">Semua Galeri</a>
                @if (auth()->user()->status == 'operator' || auth()->user()->status == 'pegawai' || auth()->user()->status == 'kepsek')
                <a class="collapse-item" href="{{ route('kategori') }}">Kategori</a>
                @endif
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->