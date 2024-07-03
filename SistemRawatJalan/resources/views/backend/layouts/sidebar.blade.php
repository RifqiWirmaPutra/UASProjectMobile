<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-center ">
            <img src="{{ asset('assets/images/logos/imagine.png') }}" height="120" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('dashboards') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">MASTER DATA</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('pasiens') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-friends"></i>
                        </span>
                        <span class="hide-menu">Pasien</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('dokters') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-empathize"></i>
                        </span>
                        <span class="hide-menu">Dokter</span>
                    </a>
                </li>
                {{-- <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('pembayarans') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-coin"></i>
                        </span>
                        <span class="hide-menu">Pembayaran</span>
                    </a>
                </li> --}}
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('obats') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-pill"></i>
                        </span>
                        <span class="hide-menu">Obat</span>
                    </a>
                </li>

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">COLLECT DATA </span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('pendaftarans') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-clipboard-data"></i>
                        </span>
                        <span class="hide-menu">Pendaftaran</span>
                    </a>
                </li>
                {{-- <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('antrians') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-friends-off"></i>
                        </span>
                        <span class="hide-menu">Antrian</span>
                    </a>
                </li> --}}
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('jDokters') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-report-search"></i>
                        </span>
                        <span class="hide-menu">Jadwal Dokter</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('kunjungans') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-checkup-list"></i>
                        </span>
                        <span class="hide-menu">Kunjungan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('rekammediss') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-report-medical"></i>
                        </span>
                        <span class="hide-menu">Rekam Medis</span>
                    </a>
                </li>

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">OTENTIKASI</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('users') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-brand-openvpn"></i>
                        </span>
                        <span class="hide-menu">User</span>
                    </a>
                </li>
            </ul>
            <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
                <div class="d-flex"></div>
            </div>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
