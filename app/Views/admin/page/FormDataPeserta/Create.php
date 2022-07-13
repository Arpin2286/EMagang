<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Header Content -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Formulir Data Peserta</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Peserta</li>
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
                                    <label for="formGroupExampleInput">Nama</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Nama Peserta" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">NIS/NIM</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="1904xxx">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Email</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="inlineFormInputGroup"
                                            placeholder="example@gmail.com">
                                    </div>
                                    <small class="form-text text-muted">Disarankan menggunakan email
                                        sekolah/universitas</small>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Username</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">@</div>
                                        </div>
                                        <input type="email" class="form-control" id="inlineFormInputGroup"
                                            placeholder="nonamed123">
                                    </div>
                                    <small class="form-text text-muted">Disarankan menggunakan email
                                        sekolah/universitas</small>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="08xxxxxxx">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="Tanggal Masuk">Tanggal Masuk</label>
                                            <input type="date" name="tanggal_masuk" id="tanggal_masuk"
                                                class="form-control">
                                        </div>
                                        <div class="col-6">
                                            <label for="Tanggal Keluar">Tanggal Keluar</label>
                                            <input type="date" name="tanggal_keluar" id="tanggal_masuk"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="/DataPeserta" class="btn btn-secondary">Batal</a>
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