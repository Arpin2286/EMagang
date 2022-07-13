<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">

    <!-- Header Content -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Data Admin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Admin</li>
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
                            <a href="/Create/DataAdmin" class="btn btn-success mb-3"><i class="fas fa-plus-circle"></i>
                                Tambah Data</a>
                            <div class="table-responsive">
                                <table id="example2" class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Instansi</th>
                                            <th>Sebagai</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- Loop Data Tables -->
                                            <td>1</td>
                                            <td>Mr.God</td>
                                            <td>mrgod</td>
                                            <td>Dinas Unnamed</td>
                                            <td>
                                                <p class="btn btn-danger btn-xs">Super admin</p>
                                            </td>
                                            <td>
                                                <a href="/Edit/DataAdmin" class="btn btn-warning"><i
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
                                            <td>Mr.X</td>
                                            <td>mrxxx</td>
                                            <td>Dinas Unnamed</td>
                                            <td>
                                                <p class="btn btn-primary btn-xs">admin</p>
                                            </td>
                                            <td>
                                                <a href="/Edit/DataAdmin" class="btn btn-warning"><i
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
                                            <td>Mr.Z</td>
                                            <td>mrz</td>
                                            <td>Dinas Unnamed</td>
                                            <td>
                                                <p class="btn btn-info btn-xs">Operator</p>
                                            </td>
                                            <td>
                                                <a href="/Edit/DataAdmin" class="btn btn-warning"><i
                                                        class="far fa-edit"></i></a>
                                                <form action="" method="POST" class="d-inline">
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- Loop Data Tables -->
                                            <td>4</td>
                                            <td>Ms.Y</td>
                                            <td>msy</td>
                                            <td>Dinas Unnamed</td>
                                            <td>
                                                <p class="btn btn-warning btn-xs">Kadis</p>
                                            </td>
                                            <td>
                                                <a href="/Edit/DataAdmin" class="btn btn-warning"><i
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