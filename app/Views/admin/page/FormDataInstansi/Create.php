<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Header Content -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Formulir Data Instansi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Dashboard</a></li>
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
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Nama Instansi</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Nama Instansi" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Kode Instansi</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Kode Instansi">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Koordinat Latitude</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-globe"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup"
                                            placeholder="-8.12433824027323">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Koordinat Longitude</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-globe"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup"
                                            placeholder="115.09501411248277">
                                    </div>
                                    <small class="form-text text-danger">Koordinat dapat diambil dari Google
                                        Maps</small>
                                </div>
                                <div class="form-group">
                                    <a href="/DataInstansi" class="btn btn-secondary">Batal</a>
                                    <input type="submit" value="Simpan" class="btn btn-success">
                                </div>
                            </form>
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