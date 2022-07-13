<!-- Sidebar -->
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

                <!-- Master Data -->
                <li class="nav-header">MASTER DATA</li>
                <li class="nav-item">
                    <a href="<?= base_url('/DataAdmin') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon text-danger"></i>
                        <p>Data Admin</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/DataInstansi') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon text-warning"></i>
                        <p>Data Instansi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/DataPeserta') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon text-primary"></i>
                        <p>Data Peserta</p>
                    </a>
                </li>

                <!-- Penilaian -->
                <li class="nav-header">PENILAIAN MAGANG</li>
                <li class="nav-item">
                    <a href="iframe.html" class="nav-link">
                        <i class="nav-icon fas fa-list-ol"></i>
                        <p>Nilai Peserta</p>
                    </a>
                </li>

                <!--  -->
                <li class="nav-header">TANDA TANGAN SERTIFIKAT</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-pen-fancy nav-icon"></i>
                        <p>Tanda Tangan</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>