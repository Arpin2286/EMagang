<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">

    <!-- Header Content -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-3">
                    <h1>Data Peserta Magang</h1>
                </div>
                <div class="col-sm-3">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Peserta Magang</li>
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
                            <a href="/Create/DataPeserta" class="btn btn-success mb-2"><i
                                    class="fas fa-plus-circle"></i>
                                Tambah Data</a>
                            <div class="table-responsive">
                                <table id="example2" class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>NIS/NIM</th>
                                            <th>Telepon</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- Loop Data Tables -->
                                            <td>1</td>
                                            <td><img src="http://cdn.onlinewebfonts.com/svg/img_568656.png" alt="Avatar"
                                                    class="img-fluid rounded-circle" width="50px"></td>
                                            <td>I Gede Anggie Suardika Arpin</td>
                                            <td>1915091008</td>
                                            <td>082237256677</td>
                                            <td>
                                                <p class="btn btn-success btn-xs">Aktif</p>
                                            </td>
                                            <td>
                                                <a href="/Edit/DataPeserta" class="btn btn-warning"><i
                                                        class="far fa-edit"></i></a>
                                                <form action="" method="POST" class="d-inline">
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- Loop Data Tables -->
                                            <td>1</td>
                                            <td><img src="http://cdn.onlinewebfonts.com/svg/img_568656.png" alt="Avatar"
                                                    class="img-fluid rounded-circle" width="50px"></td>
                                            <td>ASU</td>
                                            <td>1915091066</td>
                                            <td>08223677</td>
                                            <td>
                                                <p class="btn btn-danger btn-xs">Non-Aktif</p>
                                            </td>
                                            <td>
                                                <a href="/Edit/DataPeserta" class="btn btn-warning"><i
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