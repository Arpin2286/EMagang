<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="<?= base_url('assets/img/logo_kab.png') ?>" alt="Buleleng" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <b class="brand-text">E-Magang</b>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="/" class="nav-link active">
                        <i class="fas fa-home nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Absensi -->
                <li class="nav-header">ABSENSI</li>
                <li class="nav-item">
                    <a href="/Peserta/Absensi" class="nav-link">
                        <i class="fas fa-book nav-icon"></i>
                        <p>Absensi</p>
                    </a>
                </li>


                <li class="nav-header">KINERJA</li>
                <li class="nav-item">
                    <a href="/Peserta/Kinerja" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Input Kinerja</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="Peserta/Laporan" class="nav-link">
                        <i class="nav-icon fas fa-print"></i>
                        <p>Laporan</p>
                    </a>
                </li>

                <li class="nav-header">CETAK</li>
                <li class="nav-item">
                    <a href="/Peserta" class="nav-link">
                        <i class="fas fa-address-card nav-icon"></i>
                        <p>Nametag</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/Peserta" class="nav-link">
                        <i class="fas fa-certificate nav-icon"></i>
                        <p>Sertifikat</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>