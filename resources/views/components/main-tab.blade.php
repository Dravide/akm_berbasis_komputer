<ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
    <li class="menu-label mt-0 text-primary font-12 fw-semibold">D<span>ashboard</span><br><span
            class="font-10 text-secondary fw-normal">Navigasi Menu Utama</span></li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}" role="button"
           aria-expanded="false" aria-controls="sidebarAnalytics">
            <i class="ti ti-stack menu-icon text-blue"></i>
            <span>Beranda</span>
        </a>
    </li><!--end nav-item-->

    <li class="nav-item">
        <a class="nav-link" href="#sidebarCrypto" data-bs-toggle="collapse" role="button"
           aria-expanded="false" aria-controls="sidebarCrypto">
            <i class="ti ti-school menu-icon text-blue"></i>
            <span>Master Data</span>
        </a>
        <div class="collapse " id="sidebarCrypto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('siswa.index') }}">Siswa</a>
                </li><!--end nav-item-->
                <li class="nav-item">
                    <a class="nav-link" href="crypto-exchange.html">Guru</a>
                </li><!--end nav-item-->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kelas.index') }}">Kelas</a>
                </li><!--end nav-item-->
                <li class="nav-item">
                    <a class="nav-link" href="crypto-news.html">Mata Pelajaran</a>
                </li><!--end nav-item-->
            </ul><!--end nav-->
        </div><!--end sidebarCrypto-->
    </li><!--end nav-item-->
</ul>

