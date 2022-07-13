<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">

    <!-- Header Content -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Data Instansi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Instansi</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="/Create/DataInstansi" class="btn btn-success mb-2"><i
                                    class="fas fa-plus-circle"></i>
                                Tambah Data</a>
                            <div class="table-responsive">
                                <table id="example2" class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Instansi</th>
                                            <th>Kode</th>
                                            <th>Koordinat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- Loop Data Tables -->
                                            <td>1</td>
                                            <td>Dinas Komunikasi, Informatika, Persandian, dan Statistik</td>
                                            <td>kominfosanti0362 <i>Example</i></td>
                                            <td>-8.125892141553685, 115.09177660611101</td>
                                            <td>
                                                <a href="/Edit/DataInstansi" class="btn btn-warning"><i
                                                        class="far fa-edit"></i></a>
                                                <form action="" method="POST" class="d-inline">
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- Loop Data Tables -->
                                            <td>2</td>
                                            <td>Dinas PMD Kab. Buleleng</td>
                                            <td>PMD123 <i>Example</i></td>
                                            <td>-8.125892141553685, 115.09177660611101</td>
                                            <td>
                                                <a href="/Edit/DataInstansi" class="btn btn-warning"><i
                                                        class="far fa-edit"></i></a>
                                                <form action="" method="POST" class="d-inline">
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- Loop Data Tables -->
                                            <td>3</td>
                                            <td>Dinas Sosial Kabupaten Buleleng</td>
                                            <td>Dinsos62 <i>Example</i></td>
                                            <td>-8.124274513318912, 115.09498192597438</td>
                                            <td>
                                                <a href="/Edit/DataInstansi" class="btn btn-warning"><i
                                                        class="far fa-edit"></i></a>
                                                <form action="" method="POST" class="d-inline">
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>


</div>
<?= $this->endSection(); ?>